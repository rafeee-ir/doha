<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function homepage(){
//        $set = $this->setting();
        $posts = Post::latest()->take(3)->get();
        $brands = Supplier::latest()->take(4)->get();
//        $products = Product::where('published',true)->latest()->take(4)->get();
//        $products_count = Product::all()->where('published',true)->count();
//        $categoriesInMenus = $this->categoriesInMenus();
        return view('index', compact('posts','brands'));
//            compact('posts',
//                'products_count','products','set','categoriesInMenus'));
    }

    public function about(){
        $categoriesInMenus = $this->categoriesInMenus();

        return view('about',compact('categoriesInMenus'));
    }
    public function visitQatar(){
        $categoriesInMenus = $this->categoriesInMenus();

        return view('visit-qatar',compact('categoriesInMenus'));
    }

    Public function search(){
        // Check for search input
        if (request('s')) {
            $products = Product::where('title', 'like', '%' . request('s') . '%')->get();
        } else {
            $products = Product::all();
        }
        $categoriesInMenus = $this->categoriesInMenus();

        return view('search',compact('products','categoriesInMenus'));
    }
    public function aboutExpo(){
        return view('about-expo');
    }
    public function conditionsPavilion(){
        $categories = Category::all();
        return view('conditions.pavilion',compact('categories'));
    }
    public function conditionsShop(){
        $categories = Category::all();

        return view('conditions.shop',compact('categories'));
    }
    public function conditionsVisitor(){
        $categories = Category::all();

        return view('conditions.visitor',compact('categories'));
    }

}
