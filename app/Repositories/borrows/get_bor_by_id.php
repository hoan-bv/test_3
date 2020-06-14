<?php
use App\Models\Borrows;

$borrows = Borrows::all();
//dd($borrows);
return [
    'vars' => $borrows
];
