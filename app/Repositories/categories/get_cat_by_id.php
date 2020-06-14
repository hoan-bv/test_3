<?php
use App\Models\Categories;

$cat = new Categories();

$data_cat = Categories::all();

return [
    'vars' => $data_cat
];