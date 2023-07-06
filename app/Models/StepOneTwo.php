<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StepOneTwo extends Model
{
    use HasFactory;


    protected $fillable = [
        'project_name',
        'project_description',
        'client',
        'contractor',
        'max_x',
        'min_x',
        'max_y',
        'min_y',
        'max_z',
        'min_z'
    ];
}
