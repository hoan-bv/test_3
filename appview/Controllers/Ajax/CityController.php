<?php
namespace AppView\Controllers\Ajax;

use VatGia\ControllerBase;

class CityController extends ControllerBase
{
    public function __construct()
    {
        $this->disableDebugBar();
    }

    public function district()
    {
        $parent_id = getValue('city_id', 'int', 'GET', 0);
        $district = model('cities/index')->load([
            'parent_id' => (int)$parent_id
        ])['vars'];

//        return json_encode([
//            'data' => $district->toArray()
//        ]);

        return json_encode([
            'data' => $district->toArray()
        ]);
    }
}