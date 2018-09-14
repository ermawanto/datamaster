<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model Wilayah
 */

 class Wilayah extends Model 
 {
    /**
     * Table database
     */
    protected $table = 'wilayah';

    /**
     * The attributes that are mass asignable
     * 
     * @var array
     */
    protected $fillable = [
        'sales_office', 'sales_office_desc', 'code_kabupaten', 'kabupaten', 'sales_group', 'code_kecamatan',' kecamatan',
    ];

    
 }