<?php

declare(strict_types = 1);

namespace CodelyTV\FinderKata\Algorithm;

final class Finder {
  /** @var Player[] */
  private $playerList;

  public function __construct(array $list) {
    $this->playerList = $list;
  }

  public function find(int $fightType): Fight {
    if ( count( $this->playerList ) < 2 ) {
      return new Fight();
    }

    $fightList = $this->createAllFightsCombinations();

    return $this->renderFightByType( $fightType, $fightList );
  }

  /**
   * @return Fight[]
   */
  private function createAllFightsCombinations() {
    /** @var Fight[] $fightList */
    $fightList = [];

    for ( $i = 0; $i < count( $this->playerList ); $i ++ ) {
      for ( $j = $i + 1; $j < count( $this->playerList ); $j ++ ) {
        $fight = new Fight();

        if ( $this->playerList[$i]->birthDate < $this->playerList[$j]->birthDate ) {
          $fight->player1 = $this->playerList[$i];
          $fight->player2 = $this->playerList[$j];
        }
        else {
          $fight->player1 = $this->playerList[$j];
          $fight->player2 = $this->playerList[$i];
        }

        $fight->ageDifference = $fight->player2->birthDate->getTimestamp() - $fight->player1->birthDate->getTimestamp();

        $fightList[] = $fight;
      }
    }
    return $fightList;
  }

  /**
   * @param int $fightType
   * @param $fightList
   * @return mixed
   */
  private function renderFightByType(int $fightType, $fightList) {
    $selectedFight = $fightList[0];

    foreach ( $fightList as $currentFight ) {
      switch ( $fightType ) {
        case FightType::MIN_AGE_DIFF:
          if ( $currentFight->ageDifference < $selectedFight->ageDifference ) {
            $selectedFight = $currentFight;
          }
          break;

        case FightType::MAX_AGE_DIFF:
          if ( $currentFight->ageDifference > $selectedFight->ageDifference ) {
            $selectedFight = $currentFight;
          }
          break;
      }
    }

    return $selectedFight;
  }
}
