<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model Customer 
 */

 class Customer extends Model 
 {
    /**
     * Table database
     */
    protected $table = 'customer';

    /**
     * The attributes that are mass asignable
     * 
     * @var array
     */
    protected $fillable = [
        'kode_customer', 'nama_customer', 'nama_pimpinan', 'alamat', 'kode_propinsi', 'kode_kabupaten',' sales_group', 'no_telepon', 'npwp','email','active',
    ];

    
 }