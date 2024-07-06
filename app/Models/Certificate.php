<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use App\Notifications\CertificateExpired;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function getDaysUntilExpiryAttribute()
    {
        $expiryDate = Carbon::parse($this->end_date)->startOfDay();
        $currentDate = Carbon::now()->startOfDay();

        $daysUntilExpiry = $expiryDate->diffInDays($currentDate, false);
        return $daysUntilExpiry;
    }

    public function getIsExpiringDayAttribute()
    {
        return $this->days_until_expiry == -1;

    }
    public function getIsExpiringMonthAttribute()
    {
        return $this->days_until_expiry == -30;
    }
    public function getIsExpiringThreeMonthAttribute()
    {
        return $this->days_until_expiry == -90;
    }

}
