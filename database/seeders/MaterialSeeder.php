<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materials = [
            [
                'number' => '10000966',
                'description' => 'AMPERE METER,PZ72-AI,ACREL',
                'type' => 'V1',
                'price' => 5000000,
                'qty' => 10,
                'location' => 'LEMARI 1 SLOT A',
                'attachment' => null,
                'user' => 'elc357@fajarpaper.com',
            ],
            [
                'number' => '10004326',
                'description' => 'DIODE,DD175N34K,80384969A,EUPEC',
                'type' => 'ND',
                'price' => null,
                'qty' => null,
                'location' => 'LEMARI 1 SLOT B',
                'attachment' => null,
                'user' => 'elc357@fajarpaper.com',
            ],
            [
                'number' => '10004917',
                'description' => 'OUTPUT ANALOG,GDA 664-S,TOSHIBA',
                'type' => 'ND',
                'price' => null,
                'qty' => 2,
                'location' => 'LEMARI 7 SLOT B',
                'attachment' => null,
                'user' => 'elc357@fajarpaper.com',
            ],
        ];

        Material::insert($materials);
    }
}
