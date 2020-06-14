<?php
use App\Models\Users;
//dd('model');
$users = new Users();
$id = input('id') ?? 0;
$user = $users->findById($id);
$data_users = Users::all();

return [
    'vars' => $data_users
    // $users ? $users->toArray() : [],
];
