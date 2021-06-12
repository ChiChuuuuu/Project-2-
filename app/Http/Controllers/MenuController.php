<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menu = [
            "trang-chu" => "Trang chu",
            "trang-ca-nhan" => "Trang ca nhan",
            "thong-tin" => "Thong tin"
        ];
        return view("menu",[
            "menu" => $menu
        ]);
    }
}
