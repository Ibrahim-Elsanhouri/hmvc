<?php

namespace Customers\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class Customer extends Controller
{
public function index(){
    return view ('customers::backend.index'); 
}
}
