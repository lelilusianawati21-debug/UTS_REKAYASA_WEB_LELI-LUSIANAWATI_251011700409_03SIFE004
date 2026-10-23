<?php
namespace App\Http\Controllers;

use App\Models\TechProduct;
use Illuminate\Http\Request;

class TechProductController extends Controller
{
    public function home()
    {
        $featuredProducts = TechProduct::take(4)->get(); 
        return view('home', compact('featuredProducts'));
    }

    public function index()
    {
        $products = TechProduct::all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = TechProduct::findOrFail($id);
        return view('products.show', compact('product'));
    }
}
?>