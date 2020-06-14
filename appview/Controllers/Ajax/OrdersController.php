<?php
namespace AppView\Controllers\Ajax;

use VatGia\ControllerBase;

class OrdersController extends ControllerBase
{
    public function getFilterOrders()
    {
        $this->disableDebugBar();
        $city_id = getValue('city', 'int', 'get', 0);
        $district_id = getValue('district', 'int', 'get');
        $borrow_id = getValue('borrow', 'int', 'get', 0);

        $data_filter_order = model('orders/get_orders_by_id')->load([
            'city_id' => $city_id,
            'district_id' => $district_id,
            'borrow_id' => $borrow_id
        ]);
        $dataShow =  view('ajax/ajax.index')->render([
            'orders' => $data_filter_order['vars']
        ]);
//        $orders_view = view('gergr5gr')->render(compact('data_filter_order', 'city_id'));
        //dd($dataShow);
        return  $dataShow ;
    }

}