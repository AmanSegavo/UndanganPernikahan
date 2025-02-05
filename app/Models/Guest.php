<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    // Jika nama tabel berbeda, tentukan di sini
    // protected $table = 'nama_tabel';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'invitation_link',
    ];
}