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
use App\Models\Donhang;
use App\Models\Chitietdh;
use Mail;
use DB;
use Validator;
use App\Models\Message;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ProductListOrder()
    {
         // logo
        $logo = Logo::select('images')->orderBy('id','DESC')->get();

        $category = Category::select('id','name','slug')->orderBy('id','DESC')->skip(0)->take(4)->get();

        $faq = Faq::select('name','images','title','comment','content')->orderBy('id','DESC')->skip(0)->take(4)->get();
        $contact = Contact::select('name','address','phone','email')->orderBy('id','DESC')->skip(0)->take(1)->get();
        // background
        $background = Background::select('images','title','content')->orderBy('id','DESC')->get();
         // Customer
         $customer = Customer::select('images','name','content','email')->orderBy('id','DESC')->get();
         // gia dinh cordy
         $cordies = Product::select('id','name','images','price','title','created_at')->where('category_id',12)->orderBy('id','DESC')->skip(0)->take(8)->get();

         $product = Product::select('id','name','images','created_at')->orderBy('id','DESC')->skip(0)->take(3)->get();
        return view('front.product.product-list-order',compact('product','logo','category','faq','contact','background','customer','cordies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * 
     * form lay so luong va tinh tong so tien tung san pham
     */
    public function getProduct(Request $request,$idsp,$qty=0)
    {
         // banner
         $slider = Slider::select('title','images','name')->orderBy('id','DESC')->skip(0)->take(3)->get();
         // logo
         $logo = Logo::select('images')->orderBy('id','DESC')->skip(0)->take(1)->get();
         // tin tuc va su kien
         $news = Product::select('name','images','title','created_at')->where('category_id',13)->orderBy('id','DESC')->skip(0)->take(8)->get();
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
          $product = Product::select('name','images','created_at')->orderBy('id','DESC')->skip(0)->take(2)->get();
        $data = session()->get('cart');
        $total=0;
        $ids = [];
        $cordies = [];
        $cart_detail=[];
        if($qty>0){
            $data[$id]=$qty;
          }
        //   print_r($data);die;
        if(count($data)>0){
            foreach($data as $key => $value){
            
                $cordie = Product::select('id','name','images','price')
                        ->where('id',$key)
                        ->first();
                $total += $value; 
                @$cart_detail['weight'] += $value*$cordie->price;
                $cordie['qty'] = $value;
                array_push($cordies, $cordie);
            }
        }else{
            @$cart_detail['weight'] = 0;
        }
       
        return view('front.product.product', compact('product','data','cart_detail','total','logo','slider','news','cordies','category','contact','faq','background','customer'));
    }

    public function handlePostCart(Request $request){
        $data = session()->get('cart');
        $cart_detail=[];
        return redirect()->route('product_info');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function IndexProductInfo()
    {
         // banner
         $slider = Slider::select('title','images','name')->orderBy('id','DESC')->skip(0)->take(3)->get();
         // logo
         $logo = Logo::select('images')->orderBy('id','DESC')->skip(0)->take(1)->get();
         // tin tuc va su kien
         $news = Product::select('name','images','title','created_at')->where('category_id',13)->orderBy('id','DESC')->skip(0)->take(8)->get();
         
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

          $product = Product::select('id','name','images','created_at')->orderBy('id','DESC')->skip(0)->take(2)->get();

          $data = session()->get('cart');
                $total=0;
                $ids = [];
                $cordies = [];
                $cart_detail=[];
                // foreach($data as $key => $value){
                //     $cordie = Product::select('id','name','images','price')
                //             ->where('id',$key)
                //             ->first();
                //     array_push($ids, $key);
                //     $total += $value;
                //     @$cart_detail['weight'] += $value*$cordie->price;
                // }
                // $cordies = Product::whereIn('id', $ids)
                //             ->select('id','name','images','price')
                //             ->get();


                            if(count($data)>0){
                                foreach($data as $key => $value){
                                
                                    $cordie = Product::select('id','name','images','price')
                                            ->where('id',$key)
                                            ->first();
                                    $total += $value; 
                                    @$cart_detail['weight'] += $value*$cordie->price;
                                    $cordie['qty'] = $value;
                                    array_push($cordies, $cordie);
                                }
                            }else{
                                @$cart_detail['weight'] = 0;
                            }
                            $cordies = Product::whereIn('id', $ids)
                            ->select('id','name','images','price')
                            ->get();

        return view('front.product.product-info', compact('product','data','cart_detail','total','logo','slider','news','cordies','category','contact','faq','background','customer'));
    }

    public function postCheckoutIndexProductInfo(Request $request){
        // dd($request->all());
        $rules = [
            'name' => 'required',
            'city' => 'required',
            'district' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
              ];
              $messages = [
            'name.required' => 'Vui lòng nhập họ tên',
            'city.required' => 'Vui lòng chọn Tỉnh/TP',
            'address.required' => 'Vui lòng chọn địa chỉ   ',
            'district.required' => 'Vui lòng chọn Quận/huyện',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'emai.required' => 'Vui lòng nhập email',
                  'emai.email' => 'Vui lòng nhập đúng định dạng email',
              ];
              $validator = Validator::make($request->all(), $rules,$messages);
              if ($validator->fails()) {
                  return redirect()->back()->withErrors($validator)->withInput();
              }else {
        $data_dh = new Donhang();
        $data_dh->name = $request->name;
        $data_dh->phone = $request->phone;
        $data_dh->email = trim($request->email);
        $data_dh->city = $request->city;
        $data_dh->district = $request->district;
        $data_dh->area = $request->area;
        $data_dh->note = $request->note;
        $data_dh->address = $request->address;
              }
        if($data_dh->save()){
            $data = session()->get('cart');
            foreach($data as $key => $value){
              $cordie = Product::select('id','name','images','price')
                      ->where('id',$key)
                      ->first();
              $ctdonhang = new Chitietdh();
              $ctdonhang->amount = $value;
              $ctdonhang->price = $cordie->price;
              $ctdonhang->id_products = $cordie->id;
              $ctdonhang->id_donhangs = $data_dh->id;
              $ctdonhang->save();
          }
        }
        $cart_detail = session()->get('cart_detail');
        $area['city'] = trim($request->city_name);
        $area['district'] = trim($request->district_name);
        $area['payment_label'] = trim($request->payment_label);
        Mail::send('front.email.email', ['data_dh'=>$data_dh,'area'=>$area,'cart_detail'=>$cart_detail], function ($message) use ($data_dh){
          $message->from('websitedfm@gmail.com', 'greenliving.vip');
          $message->subject('Đơn hàng #');
          $message->to('websitedfm@gmail.com');
      });
      foreach ($cart_detail as $k => $v) {
            if(is_numeric($k)){
                $bill['id'] = $k;
                $bill['amount'] = $v->qty;
                $bill['price'] = ($v->price);
            DB::table('chitietdhs')->insert($bill);
            }
            


        }
        $request->session()->forget('cart');
        $request->session()->forget('cart_detail');
        return redirect()->route('order_success');
      }
     
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DetailsProductOrder(Request $request)
    {
      $param = $request->all();
        $id = null;
        foreach($param as $key => $value){
            $id = $key;break;
        }
      // banner
      $slider = Slider::select('title','images','name')->orderBy('id','DESC')->skip(0)->take(3)->get();
      // logo
      $logo = Logo::select('images')->orderBy('id','DESC')->skip(0)->take(1)->get();
      // tin tuc va su kien
      $news = Product::select('name','images','title','created_at')->where('category_id',13)->orderBy('id','DESC')->skip(0)->take(8)->get();
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
      // gia dinh cordy
     
      $cordies = Product::select('id','name','title','price','content','images','title','created_at')->where('id', $id)->first();
      // dd($cordies);die;
      $product = Product::select('name','images','created_at')->orderBy('id','DESC')->skip(0)->take(2)->get();
      
      return view('front.product.product-order', compact('product','logo','slider','news','cordies','category','contact','faq','background','customer'));
    }

    public function postDetailsProductOrder(Request $request){
        // print_r($request->all());die;   
        $message = new Message();
        // $message->name = $request->name;
        $message->email = $request->email;
        $message->feedback = $request->feedback;
        $message->save();
        return back()->with('success','Cảm ơn quý khách đã liên hệ đến MHD PHARMA. Chúng tôi sẽ phản hồi đến quý khách trong thời gian sớm nhất.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function IndexProductsuccess(Request $request)
    {
      // banner
      $slider = Slider::select('title','images','name')->orderBy('id','DESC')->skip(0)->take(3)->get();
      // logo
      $logo = Logo::select('images')->orderBy('id','DESC')->skip(0)->take(1)->get();
      // tin tuc va su kien
      $news = Product::select('name','images','title','created_at')->where('category_id',13)->orderBy('id','DESC')->skip(0)->take(8)->get();
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
       $product = Product::select('id','name','images','created_at')->orderBy('id','DESC')->skip(0)->take(2)->get();

      return view('front.product.order_success', compact('product','logo','slider','news','cordies','category','contact','faq','background','customer'));
    }
   
}
