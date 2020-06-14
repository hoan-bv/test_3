<?php

use App\Models\Orders;

$orders = new Orders();

$city_id = input('city_id') ?? 0;
$district_id = input('district_id') ?? 0;
$borrow = input('borrow_id') ?? 0;



if ($city_id ==0 && $borrow ==0) {
    $orders = Orders::all();
    //dd($orders);
} else {
    if ($city_id) {

        if ($district_id) {


            $orders = Orders::where('ord_distric', $district_id)->all();
            //dd($orders);
        }else {
            $orders = Orders::where('ord_city_id', $city_id)->all();
//            dd($orders->toArray());
        }

    }else {
        $orders = Orders::where('ord_bor_id', $borrow)->all();
        //dd($orders);
    }




}

//dd($orders->toArray());




return [
    'vars' => $orders
];



