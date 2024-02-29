<?php

namespace Tests\Feature;

use App\Models\Material;
use App\Models\User;
use Database\Seeders\MaterialSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function testLogin()
    {
        $this->seed(UserSeeder::class);

        Auth::attempt([
            'email' => 'elc357@fajarpaper.com',
            'password' => 'rahasia',
        ]);

        $user = Auth::user();
        self::assertNotNull($user);
        self::assertEquals($user->name, 'ELC 357');
        self::assertEquals($user->department, 'EI2');

        Auth::logout($user);
        $user = Auth::user();
        self::assertNull($user);
    }

    public function testDepartments()
    {
        $departments = User::$departments;
        self::assertEquals($departments, [
            'EI1',
            'EI2',
            'EI3',
            'EI4',
            'EI5',
            'EI6',
            'EI7',
        ]);
    }

    public function testMaterialRelations()
    {
        $this->seed([UserSeeder::class, MaterialSeeder::class]);

        $user = User::query()->with(['materials'])->where('email', 'elc357@fajarpaper.com')->firstOrFail();
        self::assertNotNull($user);
        self::assertNotEmpty($user);

        $materials = $user->materials;
        self::assertNotNull($materials);
        self::assertNotEmpty($materials);
    }
}
