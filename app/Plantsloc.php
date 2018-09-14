<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model Plantsloc
 */

 class Plantsloc extends Model 
 {
    /**
     * Table database
     */
    protected $table = 'plantsloc';

    /**
     * The attributes that are mass asignable
     * 
     * @var array
     */
    protected $fillable = [
        'code_plant', 'nama_plant', 'code_storage_location', 'nama_storage_location', 'code_shipping_point', 'nama_shipping_point',' code_propinsi',
    ];

    
 }