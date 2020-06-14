<?php
 namespace App\Models;
 use Exception;
 use VatGia\Helpers\Collection;
 use VatGia\Model\Model;

 class Categories extends Model {
     public  $table = 'categories';
     public $prefix = 'cat';
 }