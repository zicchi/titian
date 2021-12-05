<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'header_subtitle',
        'foto_header',
        'judul',
        'subjudul',
        'jargon',
        'description',
    ];
}
