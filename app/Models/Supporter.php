<?php

namespace App\Models;

use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Supporter extends Model {





    use HasFactory, HasProfilePhoto;



    protected $guarded = [];





    protected static function booted() {

        static::addGlobalScope( 'alpha', function ( Builder $builder ) {

            $builder->orderBy( 'name', 'ASC' );
        } );
    }


}
