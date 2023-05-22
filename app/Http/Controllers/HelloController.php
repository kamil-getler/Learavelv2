<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HelloController extends Controller
{
 public function show(): View|\Illuminate\Foundation\Application|Factory|Application
 {
     return view(view :'hello');
 }
}
