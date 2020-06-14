<?php


namespace AppView\Controllers;
use VatGia\ControllerBase;

class LoansController extends ControllerBase
{
    function render() {
        // Lấy ra tất cả thành phố
        $cities = model('cities/index')->load()['vars'];
        //Lấy ra tất cả các quận, huyện
        $district = model('cities/index')->load([
            'parent_id' => 1
        ])['vars'];

        $dataShow = view('wepay/goi-vay')->render([
            'cities' => $cities,
            'district' => $district,
        ]);
        return view('wepay/master/master')->render([
            'dataShow' => $dataShow

        ]);
    }
}