<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\CertificateExpired;

class Certificate extends Model
{
    use HasFactory;
    protected $fillable = [
        'no',
        'title',
        'start_date',
        'end_date',
        'document'
    ];
    public function sendExpirationNotification()
    {
        $this->notify(new CertificateExpired());
    }
}
