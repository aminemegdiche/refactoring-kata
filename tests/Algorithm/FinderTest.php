<?php

declare(strict_types = 1);

namespace CodelyTV\FinderKataTest\Algorithm;

use CodelyTV\FinderKata\Algorithm\Finder;
use CodelyTV\FinderKata\Algorithm\FightType;
use CodelyTV\FinderKata\Algorithm\Player;
use PHPUnit\Framework\TestCase;

final class FinderTest extends TestCase {
  /** @var Player */
  private $sue;

  /** @var Player */
  private $greg;

  /** @var Player */
  private $sarah;

  /** @var Player */
  private $mike;

  protected function setUp() {
    $this->sue = new Player();
    $this->sue->name = "Sue";
    $this->sue->birthDate = new \DateTime( "1950-01-01" );

    $this->greg = new Player();
    $this->greg->name = "Greg";
    $this->greg->birthDate = new \DateTime( "1952-05-01" );

    $this->sarah = new Player();
    $this->sarah->name = "Sarah";
    $this->sarah->birthDate = new \DateTime( "1982-01-01" );

    $this->mike = new Player();
    $this->mike->name = "Mike";
    $this->mike->birthDate = new \DateTime( "1979-01-01" );
  }

  /** @test */
  public function should_return_empty_when_given_empty_list() {
    $list = [];
    $finder = new Finder( $list );

    $result = $finder->find( FightType::MIN_AGE_DIFF );

    $this->assertEquals( NULL, $result->player1 );
    $this->assertEquals( NULL, $result->player2 );
  }

  /** @test */
  public function should_return_empty_when_given_one_person() {
    $list = [];
    $list[] = $this->sue;
    $finder = new Finder( $list );

    $result = $finder->find( FightType::MIN_AGE_DIFF );

    $this->assertEquals( NULL, $result->player1 );
    $this->assertEquals( NULL, $result->player2 );
  }

  /** @test */
  public function should_return_closest_two_for_two_people() {
    $list = [];
    $list[] = $this->sue;
    $list[] = $this->greg;
    $finder = new Finder( $list );

    $result = $finder->find( FightType::MIN_AGE_DIFF );

    $this->assertEquals( $this->sue, $result->player1 );
    $this->assertEquals( $this->greg, $result->player2 );
  }

  /** @test */
  public function should_return_oldest_two_for_two_people() {
    $list = [];
    $list[] = $this->mike;
    $list[] = $this->greg;
    $finder = new Finder( $list );

    $result = $finder->find( FightType::MAX_AGE_DIFF );

    $this->assertEquals( $this->greg, $result->player1 );
    $this->assertEquals( $this->mike, $result->player2 );
  }

  /** @test */
  public function should_return_oldest_two_for_four_people() {
    $list = [];
    $list[] = $this->sue;
    $list[] = $this->sarah;
    $list[] = $this->mike;
    $list[] = $this->greg;
    $finder = new Finder( $list );

    $result = $finder->find( FightType::MAX_AGE_DIFF );

    $this->assertEquals( $this->sue, $result->player1 );
    $this->assertEquals( $this->sarah, $result->player2 );
  }

  /**
   * @test
   */
  public function should_return_closest_two_for_four_people() {
    $list = [];
    $list[] = $this->sue;
    $list[] = $this->sarah;
    $list[] = $this->mike;
    $list[] = $this->greg;
    $finder = new Finder( $list );

    $result = $finder->find( FightType::MIN_AGE_DIFF );

    $this->assertEquals( $this->sue, $result->player1 );
    $this->assertEquals( $this->greg, $result->player2 );
  }
}
