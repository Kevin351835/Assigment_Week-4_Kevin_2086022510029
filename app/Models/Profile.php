<?php

namespace App\Models;

class Profile
{
    public static function data(): array
    {
        return [
            'nama' => 'Kevin',
            'domisili' => 'Makassar',
            'SMP' => 'Smp negeri 1 Towuti',
            'SMA' => 'Sma katolik makale',
            'angkatan' => '2025',
            'jurusan' => 'Informatika-AI',
        ];
    }
}