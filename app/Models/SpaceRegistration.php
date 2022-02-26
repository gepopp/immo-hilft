<?php

namespace App\Models;

use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaceRegistration extends Model
{
    use HasFactory, Notifiable, MustVerifyEmail;



    protected $guarded = [];



}
