<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model Material 
 */

 class Material extends Model 
 {
    /**
     * Table database
     */
    protected $table = 'material';

    /**
     * The attributes that are mass asignable
     * 
     * @var array
     */
    protected $fillable = [
        'produk_desc','material_code', 'code_jenis_produk', 'nama_jenis_produk', 'group_produk', 'group_produk_desc', 'active'
    ];

    
 }