<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;
    protected $fillable = [
        '_dbTime',
        '_terminalTime',
        '_groupName',
        'tank',
        'heightOfCPO',
        'tStorageWhen0M',
        'tStorageWhen1M',
        'tStorageWhen2M',
        'tStorageWhen3M',
        'tStorageWhen4M',
        'tStorageWhen5M',
        'tStorageWhen6M',
        'tStorageWhen7M',
        'factorKoreksi',
        'density',
        'EstimasiStok',
    ];
}
