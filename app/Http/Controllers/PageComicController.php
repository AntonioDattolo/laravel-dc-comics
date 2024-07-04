<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class PageComicController extends Controller
{
    public function home(){
        $data =[
            "comics" => Comic::all()
        ];
        return view("home",$data);
    }
}
