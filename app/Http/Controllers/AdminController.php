<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return Factory|View
     */
    public function home()
    {
        $countUsers = count(User::all());
        $countCategory = count(Category::all());
        $countProduct = count(Product::all());
        return view('admin.home', compact('countUsers','countCategory', 'countProduct'));

    }
}
