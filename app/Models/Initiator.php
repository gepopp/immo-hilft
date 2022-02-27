<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Initiator extends Model
{
    use HasFactory;


    protected $guarded = [];


    protected static function booted()
    {
        static::addGlobalScope('alpha', function (Builder $builder) {
            $builder->orderBy('name', 'DESC');
        });
    }

 }
