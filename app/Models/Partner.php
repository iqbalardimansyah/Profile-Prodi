<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'company_name',
        'level',
        'partner_type',
        'benefits',
        'duration_time',
        'partner_proven',
        'end_year',
        'link_drive',
    ];
}
