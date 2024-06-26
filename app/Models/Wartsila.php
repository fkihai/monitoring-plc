<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wartsila extends Model
{
    use HasFactory;
    protected $fillable = [
        '_dbTime',
        '_terminalTime',
        '_groupName',
        'turboRPM',
        'airChargePress',
        'airChargeTemp',
        'speedRPM',
        'speedRefRPM',
        'loadRPM',
        'fuelOilPress',
        'fuelOilTemp',
        'ltWaterPress',
        'ltWaterTemp',
        'htWaterPress',
        'htWaterTemp',
        'crankcasePress',
        'airStartPress',
        'lubeOilPress',
        'lubeOilTemp',
    ];

}
