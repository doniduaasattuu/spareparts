<?php

namespace Tests\Feature;

use App\Models\Material;
use App\Models\User;
use Database\Seeders\MaterialSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Tests\TestCase;

class MaterialPolicyTest extends TestCase
{
    public function testMaterialPolicy()
    {
        $this->seed([UserSeeder::class, MaterialSeeder::class]);

        $inst = User::query()->with(['materials'])->where('email', 'inst357@fajarpaper.com')->firstOrFail();
        $elc = User::query()->with(['materials'])->where('email', 'elc357@fajarpaper.com')->firstOrFail();

        $inst_mat = $inst->materials;
        $elc_mat = $elc->materials;
        self::assertEmpty($inst_mat);
        self::assertNotEmpty($elc_mat);

        self::assertTrue(Gate::forUser($elc)->allows('viewAny', Material::class));
        self::assertTrue(Gate::forUser($elc)->allows('view', $elc_mat->first()));
        self::assertTrue(Gate::forUser($elc)->allows('create', Material::class));
        self::assertTrue(Gate::forUser($elc)->allows('update', $elc_mat->first()));
        self::assertTrue(Gate::forUser($elc)->allows('delete', $elc_mat->first()));

        self::assertTrue(Gate::forUser($inst)->allows('viewAny', Material::class));
        self::assertFalse(Gate::forUser($inst)->allows('view', $elc_mat->first()));
        self::assertTrue(Gate::forUser($inst)->allows('create', Material::class));
        self::assertFalse(Gate::forUser($inst)->allows('update', $elc_mat->first()));
        self::assertFalse(Gate::forUser($inst)->allows('delete', $elc_mat->first()));
    }
}
