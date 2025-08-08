<?php

namespace Merveyilmaz\BirthdayCalculation\Console;

use Illuminate\Console\Command;
use Merveyilmaz\BirthdayCalculation\Enums\ZodiacEnum;
use Merveyilmaz\BirthdayCalculation\Services\ZodiacService;

class ZodiacCommand extends Command
{
    protected $signature = 'zodiac:calculate';

    protected $description = 'Calculate zodiac sign based on birth date input';

    public function handle()
    {
        // Konsoldan doğum tarihi istendi
        $birthdayInput = $this->ask('Please enter your birth date (YYYY-MM-DD)');

        // DateTime nesnesi oluşturuldu
        try {
            $date = new \DateTime($birthdayInput);
        } catch (\Exception $e) {
            $this->error('Invalid date format!');
            return 1; // Hata kodu
        }

        // Burcu bul enumdan
        $zodiac = ZodiacEnum::fromDate($date);

        // sonuç gösterildi
        $this->info('Your Zodiac sign is: ' . $zodiac->label());

        return 0; // Başarılı
    }
}

