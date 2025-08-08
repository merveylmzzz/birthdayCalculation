<?php

namespace Merveyilmaz\BirthdayCalculation;

use Merveyilmaz\BirthdayCalculation\Enums\ZodiacEnum;

class Birthday 
{
  protected $birthDate;

  public function __construct(string $date)
  {
      $this->birthDate = new \DateTime($date);
  }

  //yıl farkı
  public function getAge(): int
  {
      $today = new \DateTime();
      $diff = $today->diff($this->birthDate);
      return $diff->y;
  }

  //gün farkı
  public function getDays(): int
  {
      $today = new \DateTime();
      return $this->birthDate->diff($today)->days;
  }

  public function getZodiac(): ZodiacEnum
  {
      return ZodiacEnum::fromDate($this->birthDate);
  }
}