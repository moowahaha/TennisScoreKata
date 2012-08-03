<?php
require_once 'Loader.php';
require_once dirname(__FILE__) . '/../lib/TennisGame.php';

class TennisGameTest extends PHPUnit_Framework_TestCase
{
    public function testShouldStartAtLoveAll()
    {
        $game = new TennisGame();
        $this->assertEquals($game->score(), array(0 , 0));
    }

    public function testPlayer1Scores() {
        $game = new TennisGame();
        $game->player1Scores();
        $this->assertEquals($game->score(), array(15 , 0));
    }

    public function testPlayer2Scores() {
        $game = new TennisGame();
        $game->player2Scores();
        $this->assertEquals($game->score(), array(0 , 15));
    }

    public function testPlayer1Wins() {
        $game = new TennisGame();
        $game->player1Scores();
        $game->player1Scores();
        $game->player1Scores();
        $game->player1Scores();
        $this->assertEquals($game->score(), array('X', 0));
    }

    public function testPlayer2Wins() {
        $game = new TennisGame();
        $game->player2Scores();
        $game->player2Scores();
        $game->player2Scores();
        $game->player2Scores();
        $this->assertEquals($game->score(), array(0, 'X'));
    }

    public function testDeuce() {
        $game = new TennisGame();
        $game->player1Scores();
        $game->player2Scores();
        $game->player1Scores();
        $game->player2Scores();
        $game->player1Scores();
        $game->player2Scores();

        $this->assertEquals($game->score(), array('Deuce', 'Deuce'));
    }

    public function testAdvantagePlayer1() {
        $game = new TennisGame();
        $game->player1Scores();
        $game->player2Scores();
        $game->player1Scores();
        $game->player2Scores();
        $game->player1Scores();
        $game->player2Scores();
        $game->player1Scores();

        $this->assertEquals($game->score(), array('Adv', 40));
    }

    public function testAdvantagePlayer2() {
        $game = new TennisGame();
        $game->player1Scores();
        $game->player2Scores();
        $game->player1Scores();
        $game->player2Scores();
        $game->player1Scores();
        $game->player2Scores();
        $game->player2Scores();

        $this->assertEquals($game->score(), array(40, 'Adv'));
    }

    public function testPlayer2WinsAfterAdvantage() {
        $game = new TennisGame();
        $game->player1Scores();
        $game->player2Scores();
        $game->player1Scores();
        $game->player2Scores();
        $game->player1Scores();
        $game->player2Scores();
        $game->player2Scores();
        $game->player2Scores();

        $this->assertEquals($game->score(), array(40, 'X'));
    }
}

?>
