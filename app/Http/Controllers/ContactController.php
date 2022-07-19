<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductService;
class ContactController extends Controller
{
    public function index()
    {
        return view('contact', [
            'title' => 'Contact',
        ]);
    }
}
