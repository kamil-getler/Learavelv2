<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ValueObjects\Cart;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view("orders.index", [
            'orders' => Order::where('user_id', Auth::id())->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function store(Request $request)
    {
        //
    }


}
