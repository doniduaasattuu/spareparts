<?php

namespace Tests\Feature;

use App\Models\Material;
use Database\Seeders\MaterialSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MaterialTest extends TestCase
{
    public function testMaterial()
    {
        $this->seed([UserSeeder::class, MaterialSeeder::class]);

        $materials = Material::all();
        self::assertNotNull($materials);
    }

    public function testUserRelation()
    {
        $this->seed([UserSeeder::class, MaterialSeeder::class]);

        $material = Material::query()->with(['user'])->where('number', '10000966')->firstOrFail();
        $user = $material->user;
        self::assertNotNull($material);
        self::assertNotNull($user);
    }

    public function testTypes()
    {
        $types = [
            'M0',
            'M1',
            'M2',
            'M3',
            'M4',
            'ND',
            'P1',
            'P2',
            'P3',
            'P4',
            'PD',
            'R1',
            'R2',
            'RE',
            'RF',
            'RP',
            'RR',
            'RS',
            'V1',
            'V2',
            'VB',
            'VI',
            'VM',
            'VS',
            'VV',
            'X0',
        ];

        self::assertEquals($types, array_keys(Material::$types));

        $types = [
            'M0' => 'MPS, fixing type -0-',
            'M1' => 'MPS, fixing type -1-',
            'M2' => 'MPS, fixing type -2-',
            'M3' => 'MPS, fixing type -3-',
            'M4' => 'MPS, fixing type -4-',
            'ND' => 'No planning',
            'P1' => 'MRP, fixing type -1-',
            'P2' => 'MRP, fixing type -2-',
            'P3' => 'MRP, fixing type -3-',
            'P4' => 'MRP, fixing type -4-',
            'PD' => 'MRP',
            'R1' => 'Time-phased planning',
            'R2' => 'Time-phased w.auto.reord.point',
            'RE' => 'Replenishment plnd externally',
            'RF' => 'Replenish with dyn. TargetStock',
            'RP' => 'Replenishment',
            'RR' => 'Tmphsd. repl. w. dyn.trgt.stck',
            'RS' => 'Time-phased replenishment plng',
            'V1' => 'Manual reord.point w. ext.reqs',
            'V2' => 'Autom. reord.point w. ext.reqs',
            'VB' => 'Manual reord point planning',
            'VI' => 'Vendor Managed Inventory',
            'VM' => 'Automatic reorder point plng',
            'VS' => 'Seasonal MRP',
            'VV' => 'Forecast-based planning',
            'X0' => 'W/O MRP, with BOM Explosion',
        ];

        self::assertEquals($types, Material::$types);
    }
}
