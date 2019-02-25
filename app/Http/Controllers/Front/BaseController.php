<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Slider;
use App\Models\Background;
use App\Models\Customer;
use App\Models\Logo;

class BaseController extends Controller
{
    public function __construct()
    {
        
        // banner
        $slider = Slider::select('title','images','name')->orderBy('id','DESC')->skip(0)->take(3)->get();
        // logo
        $logo = Logo::select('images')->orderBy('id','DESC')->get();
        // tin tuc va su kien
        $news = Product::select('name','images','title','created_at')->where('category_id',13)->orderBy('id','DESC')->skip(0)->take(8)->get();
        // gia dinh cordy
        $cordies = Product::select('name','images','title','created_at')->where('category_id',12)->orderBy('id','DESC')->skip(0)->take(8)->get();
        
        // cau hoi thuong gap
        $faq = Faq::select('name','images','title','comment','content')->where('category_id',11)->orderBy('id','DESC')->skip(0)->take(4)->get();
        // menu
        $category = Category::select('id','name','slug')->orderBy('id','DESC')->skip(0)->take(4)->get();
        // lien he
        $contact = Contact::select('name','address','phone','email')->orderBy('id','DESC')->skip(0)->take(1)->get();
        // background
        $background = Background::select('images','title','content')->orderBy('id','DESC')->get();
         // Customer
        $customer = Customer::select('images','name','content','email')->orderBy('id','DESC')->get();

        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
