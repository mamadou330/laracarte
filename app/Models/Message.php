<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
class Message extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'email', 'message'];

    public function scopeTwoMonthsOld(Builder $query)
    {
        $query->where('created_at', '<=', Carbon::parse('2 months ago'));
    }
}
