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
use App\Models\Cart;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use DB;
use App\Models\Message;

class PagesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $param = $request->all();
        $id = null;
        foreach($param as $key=> $value){
            $id = $key;break;
        }
        // banner
        $slider = Slider::select('title','images','name')->orderBy('id','DESC')->skip(0)->take(3)->get();
        // logo
        $logo = Logo::select('images')->orderBy('id','DESC')->skip(0)->take(1)->get();
        // tin tuc va su kien
        $news = Product::select('id','name','images','title','created_at')->where('category_id',13)->orderBy('id','DESC')->skip(0)->take(8)->get();
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
        //bai viet
        $product = Product::select('id','name','images','created_at')->orderBy('id','DESC')->skip(0)->take(2)->get();
        $products = Product::select('id','name','images','created_at')->orderBy('id','DESC')->skip(0)->take(2)->get();

        return view('front.pages.index', compact('products','product','logo','slider','news','cordies','category','contact','faq','background','customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getContact()
    {
        // logo
        $logo = Logo::select('images')->orderBy('id','DESC')->skip(0)->take(1)->get();

        $faq = Faq::select('name','images','title','comment','content')->orderBy('id','DESC')->skip(0)->take(4)->get();
        // menu
        $category = Category::select('name')->orderBy('id','DESC')->skip(0)->take(4)->get();
        // lien he
        $contact = Contact::select('name','address','phone','email')->orderBy('id','DESC')->skip(0)->take(1)->get();

        $product = Product::select('id','name','images','created_at')->orderBy('id','DESC')->skip(0)->take(2)->get();

        $products = Product::select('id','name','images','created_at')->orderBy('id','DESC')->skip(0)->take(2)->get();
        return view('front.pages.contact', compact('products','product','logo','category','contact','faq'));
    }

    public function postContact(Request $request){
        // print_r($request->all());die;
        $rules = [
            'name' => 'required',
            'feedback' => 'required',
            'email' => 'required|email'
              ];
              $messages = [
            'name.required' => 'Vui lòng nhập họ tên',
            'feedback.required' => 'Vui lòng gửi thông báo',
            'emai.required' => 'Vui lòng nhập email',
                  'emai.email' => 'Vui lòng nhập đúng định dạng email',
              ];
              $validator = Validator::make($request->all(), $rules,$messages);
              if ($validator->fails()) {
                  return redirect()->back()->withErrors($validator)->withInput();
              }else {
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->feedback = $request->feedback;
        $message->save();
        }
        return back()->with('success','Cảm ơn quý khách đã liên hệ đến MHD PHARMA. Chúng tôi sẽ phản hồi đến quý khách trong thời gian sớm nhất.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getFaq()
    {
        // logo
        $logo = Logo::select('images')->orderBy('id','DESC')->skip(0)->take(1)->get();
        //cau hoi
        $faq = Faq::select('name','images','title','comment','content')->orderBy('id','DESC')->skip(0)->take(4)->get();
        // menu
        $category = Category::select('name')->orderBy('id','DESC')->skip(0)->take(4)->get();
        // lien he
        $contact = Contact::select('name','address','phone','email')->orderBy('id','DESC')->skip(0)->take(1)->get();

        $product = Product::select('id','name','images','created_at')->orderBy('id','DESC')->skip(0)->take(8)->get();

       return view('front.faq.faq', compact('logo','category','contact','faq','product'));
    }

    public function getSearch(Request $request){
        // print_r($request->all());die;

        // logo
        $logo = Logo::select('images')->orderBy('id','DESC')->skip(0)->take(1)->get();
        //cau hoi
        $faq = Faq::select('name','images','title','comment','content')->orderBy('id','DESC')->skip(0)->take(4)->get();
        // menu
        $category = Category::select('name')->orderBy('id','DESC')->skip(0)->take(4)->get();
        // lien he
        $contact = Contact::select('name','address','phone','email')->orderBy('id','DESC')->skip(0)->take(1)->get();

        $product = Product::select('id','name','images','created_at')->orderBy('id','DESC')->skip(0)->take(2)->get();
        
        $search = DB::table('products')
        // ->where([
        //     ['name','like','%' . $request->content . '%'],
        //     ['title','like','%' . $request->content . '%']
        //   ])
        ->orWhere('name', 'like', '%' . $request->name . '%')
        ->orderBy('id','desc')->paginate(16);
        return view('front.pages.search',compact('search','logo','category','contact','faq','product'));
      }
}