<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function backoffice_index()
    {
        return view('backoffice');
    }
}
