<?php
namespace App\Models;


use VatGia\Model\Model;
use  App\Models\Users;

class Orders extends Model
{
    public $table = 'orders';
    public $prefix = 'ord';

    public function user() {
        return $this->hasOne(
            __FUNCTION__,
            Users::class,
            'use_id',
            'ord_user_id'
        );
    }

    public function city()
    {
        return $this->hasOne(
            __FUNCTION__,
            Cities::class,
            'cit_id',
            'ord_city_id'
        );
    }

    public function borrow() {
        return $this->hasOne(
            __FUNCTION__,
            Borrows::class,
            'bor_id',
            'ord_bor_id'
        );

    }

}







