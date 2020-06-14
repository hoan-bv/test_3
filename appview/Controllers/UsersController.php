<?php

namespace AppView\Controllers;
use VatGia\ControllerBase;

class UsersController extends ControllerBase {


    public function render()
    {
        return view('wepay/index')->render();
    }
}
