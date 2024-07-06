<?php

use App\Models\User;
use App\Models\Certificate;
use App\Mail\ExpiryCertificatMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('expiredNotification',function(){
    $data = Certificate::all();
    $allExpiredCertif = [];

    foreach ($data as $item){
        if($item -> is_expiring_day || $item -> is_expiring_month || $item -> is_expiring_three_month){
            array_push($allExpiredCertif,$item);
        }
    }

    if(!empty($allExpiredCertif)){
        $users = User::all();
        foreach($users as $user){
            Mail::to($user->email)->send(
                new ExpiryCertificatMail($allExpiredCertif));
        }
    }
});


/* SCHEDULE TASK */
Schedule::command('expiredNotification')->everyTenMinutes();
