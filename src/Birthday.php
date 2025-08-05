<?php

namespace Merveyilmaz\BirthdayCalculation;

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

  public function getZodiacSign(): string
  {
      $day = (int)$this->birthDate->format('d');
      $month = (int)$this->birthDate->format('m');

      $zodiac = [
          [20, 'Oğlak'], [19, 'Kova'], [20, 'Balık'], [20, 'Koç'],
          [21, 'Boğa'], [21, 'İkizler'], [23, 'Yengeç'], [23, 'Aslan'],
          [23, 'Başak'], [23, 'Terazi'], [22, 'Akrep'], [22, 'Yay'], [22, 'Oğlak']
      ];

    return ($day < $zodiac[$month - 1][0]) ? $zodiac[$month - 1][1] : $zodiac[$month][1];
  }
}
