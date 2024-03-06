<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * To View all the products
     */
    public function index()
    {
        $products = Product::all();
        return view('index', ['products' => $products]);
    }

    /**
     * To View the particular product before check out
     */
    public function checkout($id)
    {
        $product = Product::findOrFail($id);
        return view('checkout', ['product' => $product]);
    }

    /**
     * Payment Response handling function
     */
    public function paymentResponse(Request $request)
    {
        Stripe::setApiKey(config('stripekey.STRIPE_SECRET'));

        try {
            session(['paymentStatus' => 'Success']);
        } catch (\Exception $e) {
            session(['paymentStatus' => 'Fail']);
        }

        return redirect()->route('products');
    }
}
