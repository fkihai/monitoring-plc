<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engine extends Model
{
    use HasFactory;
    protected $fillable = [
        '_dbTime',
        '_terminalTime',
        '_groupName',
        'ea1',
        'ea2',
        'ea3',
        'ea4',
        'ea5',
        'ea6',
        'la1',
        'la2',
        'la3',
        'la4',
        'la5',
        'la6',
        'ba1',
        'ba2',
        'ba3',
        'ba4',
        'ba5',
        'ba6',
        'engineSpeed',
        'crankcase',
    ];
}
