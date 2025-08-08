<?php

namespace Merveyilmaz\BirthdayCalculation\Enums;

enum ZodiacEnum: int
{
    case ARIES = 1;       // Koç
    case TAURUS = 2;      // Boğa
    case GEMINI = 3;      // İkizler
    case CANCER = 4;      // Yengeç
    case LEO = 5;         // Aslan
    case VIRGO = 6;       // Başak
    case LIBRA = 7;       // Terazi
    case SCORPIO = 8;     // Akrep
    case SAGITTARIUS = 9; // Yay
    case CAPRICORN = 10;  // Oğlak
    case AQUARIUS = 11;   // Kova
    case PISCES = 12;     // Balık

    public function label(): string
    {
        return match($this) {
            self::ARIES => 'Aries',
            self::TAURUS => 'Taurus',
            self::GEMINI => 'Gemini',
            self::CANCER => 'Cancer',
            self::LEO => 'Leo',
            self::VIRGO => 'Virgo',
            self::LIBRA => 'Libra',
            self::SCORPIO => 'Scorpio',
            self::SAGITTARIUS => 'Sagittarius',
            self::CAPRICORN => 'Capricorn',
            self::AQUARIUS => 'Aquarius',
            self::PISCES => 'Pisces',
        };
    }

    public static function fromDate(\DateTimeInterface $date): self
    {
        $day = (int) $date->format('d');
        $month = (int) $date->format('m');

        return match (true) {
            ($month === 3 && $day >= 21) || ($month === 4 && $day <= 20) => self::ARIES,
            ($month === 4 && $day >= 21) || ($month === 5 && $day <= 21) => self::TAURUS,
            ($month === 5 && $day >= 22) || ($month === 6 && $day <= 22) => self::GEMINI,
            ($month === 6 && $day >= 23) || ($month === 7 && $day <= 22) => self::CANCER,
            ($month === 7 && $day >= 23) || ($month === 8 && $day <= 22) => self::LEO,
            ($month === 8 && $day >= 23) || ($month === 9 && $day <= 22) => self::VIRGO,
            ($month === 9 && $day >= 23) || ($month === 10 && $day <= 22) => self::LIBRA,
            ($month === 10 && $day >= 23) || ($month === 11 && $day <= 21) => self::SCORPIO,
            ($month === 11 && $day >= 22) || ($month === 12 && $day <= 21) => self::SAGITTARIUS,
            ($month === 12 && $day >= 22) || ($month === 1 && $day <= 21) => self::CAPRICORN,
            ($month === 1 && $day >= 22) || ($month === 2 && $day <= 19) => self::AQUARIUS,
            ($month === 2 && $day >= 20) || ($month === 3 && $day <= 20) => self::PISCES,
        };
    }
}
