<?php 
namespace App\Http\Controllers;
use App\Product;

class HomeController extends Controller{
    
    
    public function getHome(){
        
        return view('welcome');
    }
    public function getAdminPage(){
        $products=Product::all();
        return view('admin.admin',['products'=>$products]);
    }
    public function getAddProduct(){
        
        return view('admin.add-product');
    }
    
}



?>