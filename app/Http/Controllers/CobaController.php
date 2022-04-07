<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        return "Percobaan Berhasil!";
    }
    public function urutan($ke)
    {
        return view("urutan", ["ke" => $ke]);
    }
}
