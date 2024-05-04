<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\banners;
use App\Models\groupProduct;
use Illuminate\Support\Facades\Cache;
use App\Models\deal;
use App\Models\product;
use Carbon\Carbon;
use Session;

use Auth;
use DB;



class indexController extends Controller
{
    public function index()
    {
       
        $banners =  Cache::get('baners');

        $now  = Carbon::now();

        

        // if(!Cache::has('deals')){
        //     $deal = deal::get();

        //     Cache::forever('deals',$deal);

        // }

        

        $deal_check = Cache::get('deals')->sortByDesc('end');

        $group = Cache::rememberForever('group_index', function(){

            return groupProduct::select('id','name', 'link')->where('parent_id', 0)->get();
        });     

        
        $product_sale = Cache::rememberForever('product_sale', function(){

            $product_sales = DB::table('products')->join('sale_product', 'products.id', '=', 'sale_product.product_id')->join('makers', 'products.Maker', '=', 'makers.id')->Orderby('products.sale_order','desc')->take(20)->get();

            return $product_sales;
        });

         $timeDeal_star = Cache::get('deal_start'); 


        if(!Cache::has('groups')||empty($product_sale) ){

            $this->cache();

            $deal = deal::get();

            $group = Cache::get('groups');

            $timeDeal_star = Cache::get('deal_start'); 

            $product_sale = Cache::get('product_sale');

        }
        $deal = deal::get();

        if(!Cache::has('baners')){

            $banners =  Cache::rememberForever('baners', function() {

                return banners::where('option','=',0)->take(6)->OrderBy('stt', 'asc')->where('active','=',1)->select('title', 'image', 'title', 'link')->get();
            });
        }    

        if(!Cache::has('bannersRights')){
            $bannersRight = Cache::rememberForever('bannersRights', function() {
                return banners::where('option', 2)->OrderBy('stt', 'asc')->where('active', 1)->get();
            });
        }
        else{
            $bannersRight = Cache::get('bannersRights');
        }

        if(!Cache::has('bannerUnderSlider')){
            $bannerUnderSlider = Cache::rememberForever('bannerUnderSlider', function() {
                return banners::where('option', 3)->OrderBy('stt', 'asc')->where('active', 1)->orderBy('id', 'desc')->first();
            });

        }
        else{
            $bannerUnderSlider = Cache::get('bannerUnderSlider');
        }

        if(!Cache::has('bannerUnderSale')){

            $bannerUnderSale = Cache::rememberForever('bannerUnderSale', function() {
                return banners::where('option', 5)->OrderBy('stt', 'asc')->take(1)->get()->toArray();
            });
        }  
        else{
            $bannerUnderSale = Cache::get('bannerUnderSale');
        }

        $bannerscrollRight = Cache::rememberForever('bannerscrollRight', function() {
            return banners::where('option', 12)->OrderBy('stt', 'asc')->where('active', 1)->first()??'';
        });

        $bannerscrollLeft = Cache::rememberForever('bannerscrollleft', function() {
            return banners::where('option', 13)->OrderBy('stt', 'asc')->where('active', 1)->first()??'';
        });

        $useragent=$_SERVER['HTTP_USER_AGENT']??'';

        $smart_phone = false;

      


        return view('frontend.index', compact('banners', 'bannersRight', 'bannerUnderSlider', 'bannerUnderSale','deal','product_sale', 'group','timeDeal_star', 'deal_check', 'now','bannerscrollRight', 'bannerscrollLeft'));

    }


    public function testHome()
    {
        $banners =  Cache::get('baners');

        $now  = Carbon::now();

        if(!Cache::has('deals')){
            $deal = deal::get();

            Cache::forever('deals',$deal);

        }

        $deal = Cache::get('deals')->sortByDesc('order');

        $deal_check = Cache::get('deals')->sortByDesc('end');

        $group = Cache::rememberForever('group_index', function(){

            return groupProduct::select('id','name', 'link')->where('parent_id', 0)->get();
        });     

        
        $product_sale = Cache::rememberForever('product_sale', function(){

              $product_sale = DB::table('products')->join('sale_product', 'products.id', '=', 'sale_product.product_id')->join('makers', 'products.Maker', '=', 'makers.id')->Orderby('products.sale_order','desc')->take(5)->get();

            return $product_sale??'';
        });

         $timeDeal_star = Cache::get('deal_start'); 


        if(!Cache::has('groups')||empty($product_sale) ){

            $this->cache();

            $deal = Cache::get('deals');

            $group = Cache::get('groups');

            $timeDeal_star = Cache::get('deal_start'); 

            $product_sale = Cache::get('product_sale');

        }

        if(!Cache::has('baners')){

            $banners =  Cache::rememberForever('baners', function() {

                return banners::where('option','=',0)->take(6)->OrderBy('stt', 'asc')->where('active','=',1)->select('title', 'image', 'title', 'link')->get();
            });
        }    

        if(!Cache::has('bannersRights')){
            $bannersRight = Cache::rememberForever('bannersRights', function() {
                return banners::where('option', 2)->OrderBy('stt', 'asc')->where('active', 1)->get();
            });
        }
        else{
            $bannersRight = Cache::get('bannersRights');
        }

        if(!Cache::has('bannerUnderSlider')){
            $bannerUnderSlider = Cache::rememberForever('bannerUnderSlider', function() {
                return banners::where('option', 3)->OrderBy('stt', 'asc')->where('active', 1)->get();
            });

        }
        else{
            $bannerUnderSlider = Cache::get('bannerUnderSlider');
        }

        if(!Cache::has('bannerUnderSale')){

            $bannerUnderSale = Cache::rememberForever('bannerUnderSale', function() {
                return banners::where('option', 5)->OrderBy('stt', 'asc')->take(1)->get()->toArray();
            });
        }  
        else{
            $bannerUnderSale = Cache::get('bannerUnderSale');
        }

        $bannerscrollRight = Cache::rememberForever('bannerscrollRight', function() {
            return banners::where('option', 12)->OrderBy('stt', 'asc')->where('active', 1)->first()??'';
        });

        $bannerscrollLeft = Cache::rememberForever('bannerscrollleft', function() {
            return banners::where('option', 13)->OrderBy('stt', 'asc')->where('active', 1)->first()??'';
        });


        $view = Cache::rememberForever('view-homes',  function() use($banners, $bannersRight, $bannerUnderSlider,$bannerUnderSale, $deal, $product_sale, $group, $timeDeal_star, $deal_check, $now, $bannerscrollRight, $bannerscrollLeft){

            $view = view('frontend.index', compact('banners', 'bannersRight', 'bannerUnderSlider', 'bannerUnderSale','deal','product_sale', 'group','timeDeal_star', 'deal_check', 'now','bannerscrollRight', 'bannerscrollLeft'));

             return  html_entity_decode($view);
        });

        echo $view;
       
    }

    public function viewLogin(Request $request)
    {

        $ip = $request->ip();

        if($ip ==='118.70.129.255'){
            return view('auth.login');
        }
        else{
            abort(404);
        }
        
    }


    public function cache()
    {
       
        $deal = deal::OrderBy('order', 'desc')->get();

        $groups = groupProduct::select('id','name', 'link', 'active', 'parent_id')->where('parent_id', 0)->get();

        if($deal->count()>0){

            $deal_start = $deal->first()->start;

            cache::put('deal_start', $deal_start,10000);

        }
        Cache::put('groups', $groups,10000);

    }

    public function cache1()
    {
        
        cache::forget('deal_start');

    
        Cache::forget('groups');

        Cache::forget('product_sale');
        
        Cache::forget('baners');

        $banners = banners::where('option','=',0)->take(6)->OrderBy('stt', 'asc')->where('active','=',1)->select('title', 'image', 'title', 'link')->get();

        $product_sale = DB::table('products')->join('sale_product', 'products.id', '=', 'sale_product.product_id')->join('makers', 'products.Maker', '=', 'makers.id')->get();

        $groups = groupProduct::select('id','name', 'link')->where('parent_id', 0)->get();

        Cache::put('groups', $groups,10000);

        Cache::put('product_sale', $product_sale,10000);
        
        Cache::put('baners',$banners,10000);

        
    }

    public function deleteCache()
    {
        Cache::flush();
        echo "thanh cong";
    }

    public function addClick(Request $request)
    {
        $link = $request->link;

        $sessionKey = 'banner_click_'.$link;

        $sessionView = Session::get($sessionKey);

        $count = Cache::get('visited_banner_'.$link)??0;

        if (!$sessionView) { //nếu chưa có session

            Session::put($sessionKey, 1); //set giá trị cho session

            $count = Cache::increment('visited_banner_'.$link);   

        }

    }

    public function cacheClear()
    {
        Cache::flush();
        file_get_contents('https://dienmaynguoiviet.vn');
        file_get_contents(Route('redirect-update-cache'));
        echo "thanh cong";
    }

    public function removePromotion()
    {
        $data = Product::where('promotion', '<p><span style="color:#000000"><strong><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif">Tặng C&ocirc;ng Lắp Đặt</span></span></strong></span></p>')->get();

        if(!empty($data) && $data->count()>0){

            foreach ($data as  $value) {

                $product = product::find($value->id);

                $product->promotion = '';

                $product->save();
              
            }

            echo "xóa khuyến mãi của". $data->count().'sản phẩm';
        }
        else{
            echo "không xóa khuyến mãi của sản phẩm nào";
        }
    }



     
}