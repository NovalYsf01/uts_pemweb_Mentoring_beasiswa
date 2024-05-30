<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nim', 'nomer_telpon', 'jenis_beasiswa', 'mentor'];

    public const JENIS_BEASISWA = [
        'beasiswa_a' => 'Beasiswa A',
        'beasiswa_b' => 'Beasiswa B',
        'beasiswa_c' => 'Beasiswa C',
    ];

    public const MENTORS = [
        'fathan' => 'Fathan',
        'rafi' => 'Rafi',
        'noval' => 'Noval',
    ];
}

