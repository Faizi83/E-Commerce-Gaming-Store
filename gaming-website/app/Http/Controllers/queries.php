<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\game_cart;
use App\Models\favourite;
use Cart;





class queries extends Controller
{

    public function home()
    {
        $prod = \DB::table('products')->get(); 
    
        return view('index', compact('prod'));
      
    }
    public function more(){
        return view('more');
    }
    public function games(){
        return view('games');
    }
       
    public function favourite(){
        return view('favourite');
    }
    
    public function productpage(){
        return view('games-page');
    }

    public function cart()
    {
       
        
        // Echo the value for debugging
       
        $cart = game_cart::all();



    
        return view('cart', compact('cart'));
    }
    



    public function store(Request $request){
        // Validate the request data if needed
        $validatedData = $request->validate([
            'productName' => 'required|string',
            'productPrice' => 'required|numeric',
            'productdelPrice' => 'required|numeric',
            'productRating' => 'required|numeric',
            'productDesc' => 'required|string',
            'productImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required|string',
        ]);
    
        // Upload the product image and get the path
    
        $imagePath = $request->file('productImage')->store('public/product_images');
    
        // Insert data into the 'products' table using the query builder
        \DB::table('products')->insert([
            'product_name' => $validatedData['productName'],
            'product_price' => $validatedData['productPrice'],
            'product_del_price' => $validatedData['productdelPrice'],
            'product_rating' => $validatedData['productRating'],
            'product_desc' => $validatedData['productDesc'],
            'product_image' => $imagePath,
            'category' => $validatedData['category'],
        ]);
    
        
    }


    // public function showProducts()  {
    // $products = \DB::table('products')->get(); 
    // return view('games', compact('products'));
  
    //  }
    
    public function singleProducts($id) {
    $games = \DB::table('products')->find($id); 

    return view('games-page', compact('games'));
  


     }


    public function addTocart(Request $req) {
        $game_id = $req->get('game_id');

        $game_name = $req->get('game_name');
        $game_image = $req->get('game_image');
   
        $game_price = (float) str_replace('$', '', $req->get('game_price'));
        $game_qty = $req->get('game_qty');
        $game_desc = $req->get('game_desc');
    
        $prod_check = \DB::table('products')->where('id', $game_id)->exists();
    
        if ($prod_check) {
            if (game_cart::where('game_id', $game_id)->exists()) {
                return response()->json(['status' => $game_name . " already added to cart"]);
            } else {
                $cartItem = new game_cart();
                $cartItem->game_id = $game_id;
                $cartItem->game_name = $game_name;
                $cartItem->game_image = $game_image;
                $cartItem->game_price = $game_price;
                $cartItem->game_qty = $game_qty;
                $cartItem->game_desc = $game_desc;
                $cartItem->save();
                return response()->json(['status' => $game_name . " added to cart"]);
            }
        } else {
            return response()->json(['status' => "Product with ID " . $game_id . " not found"]);
        }
    }
    
    public function removeItem($id)
    {
        $item = game_cart::where('game_id', $id)->first();
    
        if ($item) {
            $item->delete();
            return response()->json(['message' => 'Item removed successfully']);
        }
    
        return response()->json(['message' => 'Item not found'], 404);
    }








    public function search(Request $request)
    {
        $query = $request->input('search');
        $category = $request->input('category');
    
        $products = \DB::table('products')
            ->when($query, function ($queryBuilder) use ($query) {
                $queryBuilder->where('product_name', 'like', "%$query%");
            })
            ->when($category, function ($queryBuilder) use ($category) {
                $queryBuilder->where('category', $category);
            })
            ->get();
            
            $allProducts = \DB::table('products')->get();
    
            return view('games', compact('products', 'allProducts','query'));
    }
    
    

    public function CartCount()
    {
        $cartCount = game_cart::count(); // Adjust this according to your actual logic for counting items in the cart

        return response()->json(['cartCount' => $cartCount]);
    }
    
    public function PriceCount()
{
  
    $cartItems = game_cart::all();
    $totalPrice = 0;

    foreach ($cartItems as $item) {
        $totalPrice += $item->game_price * $item->game_qty;
    }

    return response()->json(['totalPrice' => $totalPrice]);
}
    


public function addTofvrt(Request $req) {
    $fav_id = $req->get('fav_id');

    $fav_name = $req->get('fav_name');
    $fav_image = $req->get('fav_image');
    $fav_price = (float) str_replace('$', '', $req->get('fav_price'));
    $fav_del_price = (float) str_replace('$','',  $req->get('fav_del_price'));
    $fav_rating = $req->get('fav_rating');


    $prod_check = \DB::table('products')->where('id', $fav_id)->exists();

    if ($prod_check) {
        if (favourite::where('fav_id', $fav_id)->exists()) {
            return response()->json(['status' => $fav_name . " already added to favourite"]);
        } else {
            $fvrtItem = new favourite();
            $fvrtItem->fav_id = $fav_id;
            $fvrtItem->fav_name = $fav_name;
            $fvrtItem->fav_image = $fav_image;
            $fvrtItem->fav_price = $fav_price;
            $fvrtItem->fav_del_price = $fav_del_price;
            $fvrtItem->fav_rating = $fav_rating;
          
            $fvrtItem->save();
            return response()->json(['status' => $fav_name . " added to favourite"]);
        }
    } else {
        return response()->json(['status' => "Product with ID " . $fav_id . " not found"]);
    }
}









};





