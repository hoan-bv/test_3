<?php
namespace App\Models;

use VatGia\Model\Model;
use App\Models\Orders;


Class Users extends Model {

    public $table = 'users';
    public $prefix = 'use';

   /* function orders() {
        return $this->hasMany(
            __FUNCTION__,
            Orders::class,
            'ord_id',
            'ord_user_id'
        );
    }*/
}



