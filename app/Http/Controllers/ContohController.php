<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function TampilContoh()
    {
     $data = [
        'totalProducts' => 310,
        'salesToday' => 100,
        'totalRevenue' => 'Rp 70,000,000',
        'registedUsers' => 356

     ];
     return view('contoh' , $data);





    }
}
