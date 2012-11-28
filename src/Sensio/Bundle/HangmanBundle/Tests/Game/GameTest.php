<?php

namespace Sensio\Bundle\HangmanBundle\Tests\Game;

use Sensio\Bundle\HangmanBundle\Game\Game;

class GameTest extends \PHPUnit_Framework_TestCase
{
    public function testPlayCorrectWord()
    {
        /*$crawler = $this->client->request('GET', '/game');

        $form = $crawler->selectButton('Let me guess...')->form();
        $crawler = $this->client->submit($form, array('word' =>'php'));
    
        $this->assertSame(
            'Congrulations!',
            $crawler->filter('#content > h2')->text()
        );*/
    }


    public function testReset()
    {
        $game = new Game('php');
        $this->assertTrue($game->tryLetter("P"));
        $this->assertSame(0, $game->getAttempts());
        $game->reset();
        $this->assertSame(0, $game->getAttempts());
    }

    public function testTryInvalidLetter()
    {
        $game = new Game('php');
        $this->setExpectedException('InvalidArgumentException');
        $this->assertFalse($game->tryLetter("1"));
        $this->assertSame(0, $game->getAttempts());
        $this->assertFalse($game->isOver());
    }

    public function testTryInvalidLetterTwice()
    {
        $game = new Game('php');

        $this->assertTrue($game->tryLetter("P"));
        $this->assertFalse($game->tryLetter("P"));
        $this->assertSame(1, $game->getAttempts());
    }

    public function testTryWrongWord()
    {
        $game = new Game('php');

        $this->assertFalse($game->tryWord('foo'));
        $this->assertTrue($game->isOver());
        $this->assertTrue($game->isHanged());
        $this->assertFalse($game->isWon());
        $this->assertSame(0, $game->getRemainingAttempts());
    }

    public function testTryCorrectWord()
    {
        $game = new Game('php');

        $this->assertTrue($game->tryWord('php'));
        $this->assertTrue($game->isWon());
        $this->assertFalse($game->isHanged());
        $this->assertTrue($game->isOver());
        $this->assertSame(0, $game->getAttempts());
        $this->assertSame(array('p','h'), $game->getFoundLetters());
    }
}
