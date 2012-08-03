<?php
/**
 * Created by IntelliJ IDEA.
 * User: shardisty
 * Date: May 25, 2010
 * Time: 11:04:02 AM
 * To change this template use File | Settings | File Templates.
 */

class TennisGame {
    public $score_array = array(
        "00" => array(0, 0),
        "10" => array(15, 0),
        "01" => array(0, 15),
        "40" => array('X', 0),
        "04" => array(0, 'X'),
        "33" => array('Deuce', 'Deuce'),
        "34" => array(40, 'Adv'),
        "43" => array('Adv', 40),
        "35" => array(40, 'X'),
    );

    private $player_1 = 0;
    private $player_2 = 0;
    private $player_1_array = array(1,2,3,4);
    private $player_2_array = array(1,2,3,4);
    public $scores_array;

    public function score() {
        return $this->score_array[$this->player_1 . $this->player_2];
    }

    public function player1Scores() {
        $this->player_1++;
    }

    public function player2Scores() {
        $this->player_2++;
    }
}

?>

