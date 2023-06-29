<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable=[
        'Question',
        'Options 1',
        'Options 2',
        'Options 3',
        'Options 4',
        'Answer',
    ];
}
