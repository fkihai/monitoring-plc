<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;
    protected $fillable = [
        '_dbTime',
        '_terminalTime',
        '_groupName',

        'ullageTkP',
        'avgTmpTkP',

        'ullageCot6P',
        'avgTmpCot6P',

        'ullageCot5P',
        'avgTmpCot5P',

        'ullageCot4P',
        'avgTmpCot4P',

        'ullageCot3P',
        'avgTmpCot3P',

        'ullageCot2P',
        'avgTmpCot2P',

        'ullageCot1P',
        'avgTmpCot1P',

        'ullageTkS',
        'avgTmpTkS',

        'ullageCot6S',
        'avgTmpCot6S',

        'ullageCot5S',
        'avgTmpCot5S',

        'ullageCot4S',
        'avgTmpCot4S',

        'ullageCot3S',
        'avgTmpCot3S',

        'ullageCot2S',
        'avgTmpCot2S',

        'ullageCot1S',
        'avgTmpCot1S',
    ];
}
