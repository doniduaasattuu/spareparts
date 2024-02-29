<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Material extends Model
{
    protected $table = 'materials';

    public static $types = [
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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user', 'email');
    }
}
