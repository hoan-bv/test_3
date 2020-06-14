<?php

namespace AppView\Controllers;

use App\Models\Orders;
use App\Models\Users;
use function DI\value;

class HomeController extends FrontEndController
{

    public function render()
    {

//        $data = model('news/get_news_id')->load([
//            'id' => 1
//        ]);
//        dd($data);


        $data_cities = model('cities/get_by_id')->load();
        $data['cities'] =$data_cities['vars'];
//        dd($data['cities'] );
        $data_users = model('users/get_user_by_id')->load();
        $data['users'] = $data_users['vars'];

        $data_orders = model('orders/get_orders_by_id')->load();
        $data['orders'] = $data_orders['vars'];

//        $ord = Orders::with(['user'])->findById(1);
//        $ord = Orders::with(['city', 'user'])->findById(1);
//        dd($ord->user->name);
        $data_key_words = model('key_words/get_key_words_by_id')->load(
            ['id' => 1]
        );
        $data['key_words'] = $data_key_words['vars'];
//        dd($data['key_words'][1]['key_name']);
//        dd($data['orders'][1]->user['use_name']);
        $data_borrows = model('borrows/get_bor_by_id')->load();
        $data['borrows'] = $data_borrows['vars'];

        $dataShow['view'] = view('wepay/index')->render([
            'data' => $data,
        ]);

        return view('wepay/master/master')->render([
            'dataShow' =>  $dataShow['view'],
        ]);
    }


}