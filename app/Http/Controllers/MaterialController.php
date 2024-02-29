<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::all();

        return response()->view('sparepart.index', [
            'materials' => $materials,
            'skipped' => ['id', 'user', 'attachment', 'deleted_at', 'created_at', 'updated_at'],
        ]);
    }
}
