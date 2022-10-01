<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoneeRequest extends Model
{
    use HasFactory;
    public function donor(){
        return $this->belongsTo(\App\Models\User::class,'donor_id');
    }
}
