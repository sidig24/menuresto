<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class BuyerController extends Controller
{
    // Halaman menus menampilkan konten buyer/menu
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    // Halaman lain untuk menampilkan daftar menu lengkap
    public function menuList()
    {
        $menus = Menu::all();
        return view('buyer.menuList', compact('menus'));
    }
}
