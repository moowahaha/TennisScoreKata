<?php
require_once 'PHPUnit/Framework.php';
require_once dirname(__FILE__) . '/../lib/TennisGame.php';

class TennisGameTest extends PHPUnit_Framework_TestCase
{
    public function testShouldStartAtLoveAll()
    {
        $game = new TennisGame();
        $this->assertEquals($game->score(), array('PlayerOne' => 0 , 'PlayerTwo' => 0));
    }
}

?>