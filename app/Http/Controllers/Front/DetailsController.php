<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Contact;
use App\Models\Background;
use App\Models\Customer;
use App\Models\Logo;
use App\Models\Slider;
use App\Models\Product;
class DetailsController extends Controller
{
    public function News()
    {
        $slider = Slider::select('title','images','name')->orderBy('id','DESC')->skip(0)->take(3)->get();
        // logo
        $logo = Logo::select('images')->orderBy('id','DESC')->skip(0)->take(1)->get();
        // tin tuc va su kien
        $news = Product::select('id','name','images','title','created_at')->where('category_id',13)->orderBy('id','DESC')->skip(0)->take(8)->get();
        // gia dinh cordy
        $cordies = Product::select('name','images','title','created_at')->where('category_id',12)->orderBy('id','DESC')->skip(0)->take(8)->get();
        
        // cau hoi thuong gap
        $faq = Faq::select('name','images','title','comment','content')->orderBy('id','DESC')->skip(0)->take(4)->get();
        // menu
        $category = Category::select('id','name','slug')->orderBy('id','DESC')->skip(0)->take(4)->get();
        // lien he
        $contact = Contact::select('name','address','phone','email')->orderBy('id','DESC')->skip(0)->take(1)->get();
        // background
        $background = Background::select('images','title','content')->orderBy('id','DESC')->get();
         // Customer
         $customer = Customer::select('images','name','content','email')->orderBy('id','DESC')->get();
        //tieu diem
         $product = Product::select('id','name','images','created_at')->orderBy('id','DESC')->skip(0)->take(2)->get();
         $products = Product::select('id','name','images','created_at')->orderBy('id','DESC')->skip(0)->take(8)->get();

       return view('front.news.new', compact('products','product','logo','slider','news','cordies','category','contact','faq','background','customer'));
   
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detailsNews(Request $request)
    {

        $param = $request->all();
        $id = null;
        foreach($param as $key=> $value){
            $id = $key;break;
        }
        // print_r($param);die;

        
        //print_r($param);die;
        // echo $id;die;
        // banner
        $slider = Slider::select('title','images','name')->orderBy('id','DESC')->skip(0)->take(3)->get();
        // logo
        $logo = Logo::select('images')->orderBy('id','DESC')->skip(0)->take(1)->get();
       
        // gia dinh cordy
        $cordies = Product::select('id','name','images','title','created_at')->where('category_id',12)->orderBy('id','DESC')->skip(0)->take(8)->get();
        
        // cau hoi thuong gap
        $faq = Faq::select('name','images','title','comment','content')->orderBy('id','DESC')->skip(0)->take(4)->get();
        // menu
        $category = Category::select('id','name','slug')->orderBy('id','DESC')->skip(0)->take(4)->get();
        // lien he
        $contact = Contact::select('name','address','phone','email')->orderBy('id','DESC')->skip(0)->take(1)->get();
        // background
        $background = Background::select('images','title','content')->orderBy('id','DESC')->get();
         // Customer
         $customer = Customer::select('images','name','content','email')->orderBy('id','DESC')->get();

        // tin tuc va su kien
        $news = Product::select('id','name','images','title','content','created_at')->where('id', $id)->first();

        //tieu diem
        $product = Product::select('id','name','images','created_at')->orderBy('id','DESC')->skip(0)->take(2)->get();
        $products = Product::select('id','name','images','created_at')->orderBy('id','DESC')->skip(0)->take(8)->get();
       return view('front.news.details', compact('products','product','logo','slider','news','cordies','category','contact','faq','background','customer'));
    }
}
