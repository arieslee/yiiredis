<?php

namespace sunmoon\redis\tests;

use sunmoon\redis\Connection;
use Yii;

class SessionTest extends TestCase
{
    public function testSession()
    {
        $params = self::getParam();
        $params['class'] = Connection::className();
        $this->mockApplication([
            'components' => [
                'redis' => $params,
                'session' => 'sunmoon\\redis\\Session',
            ]
        ]);

        $sessionId = 'sessionId';
        $session = Yii::$app->session;
        $session->setTimeout(1);
        $sessionData = json_encode([
            'sessionId' => $sessionId,
            'username' => 'bob',
        ]);
        $session->writeSession($sessionId, $sessionData);
        $this->assertEquals($sessionData, $session->readSession($sessionId));
        $this->assertTrue($session->destroySession($sessionId));
        $this->assertEquals('', $session->readSession($sessionId));
    }
}
