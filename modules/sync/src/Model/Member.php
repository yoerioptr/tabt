<?php

namespace Drupal\tabt_sync\Model;

final class Member extends SyncableItemBase {

  private int $position;

  private int $uniqueIndex;

  private string $firstName;

  private string $lastName;

  private string $ranking;

  private int $rankingIndex;

  private array $rawData;

  public function __construct(
    int $position,
    int $uniqueIndex,
    string $firstName,
    string $lastName,
    string $ranking,
    int $rankingIndex,
    array $rawData
  ) {
    $this->position = $position;
    $this->uniqueIndex = $uniqueIndex;
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->ranking = $ranking;
    $this->rankingIndex = $rankingIndex;
    $this->rawData = $rawData;
  }

  public function getPosition(): int {
    return $this->position;
  }

  public function getFirstName(): string {
    return $this->firstName;
  }

  public function getLastName(): string {
    return $this->lastName;
  }

  public function getRanking(): string {
    return $this->ranking;
  }

  public function getRankingIndex(): int {
    return $this->rankingIndex;
  }

  public function getUniqueIndex(): int {
    return $this->uniqueIndex;
  }

  public function getRawData(): array {
    return $this->rawData;
  }

}
