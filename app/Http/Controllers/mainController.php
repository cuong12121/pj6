<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;

use App\Models\css;

use Illuminate\Support\Facades\Storage;


class mainController extends Controller
{
    public function findProductByNameOrModel($data)
    {
        $clearData = trim($data);

        $data      = $clearData;

       $resultProduct = product::select('id', 'Name', 'Price', 'Link', 'Image')->where('Name','LIKE', '%'. $data .'%')->OrWhere('ProductSku', 'LIKE', '%' . $data . '%')->get();

        return $resultProduct;

    }
    public function ckfinder()
    {
        return view('frontend.ckfinder');
    }

    public function landingpage()
    {
        return view('frontend.landingpage');
    }

    public function sale()
    {
        return view('frontend.sale');
    }

    public function deal()
    {
        return view('frontend.deallist');
    }

    public function lienhe()
    {
        return view('frontend.lienhe');
    }

    public function resultAlepay()
    {
        return view('resultAlepay.result');
    }
    public function filterAdd()
    {
        return view('filter.add-property');
    }

    public function footerpost()
    {
        return view('footerpost.index');
    }

    public function changepass()
    {
        return view('user.changePass');
    }
    public function rate()
    {
        return view('rate.rate');
    }

    public function newBanner()
    {
        return view('newbanner.banner');
    }

    public function funcmorePopup()
    {
        return view('funcmore.popup');
    }

    public function landingBe()
    {
        return view('landing.landing');
    }

    public function addCss()
    {
       
        return view('css.index');
    }
    public function readFileCss($id)
    {

        $page = ['homecs.css', 'categorycs.css', 'detailscs.css'];

        // $exists = Storage::disk('public')->exists('css/'.$page[$id]);

        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  

        $url = 'https://dienmayhg.vn/css/'.$page[$id]; // Replace with the actual URL

        // Check if allow_url_fopen is enabled (required for remote URLs)
        if (!ini_get('allow_url_fopen')) {
          echo 'Error: allow_url_fopen is not enabled in php.ini';
          exit;
        }

        $url = 'https://dienmayhg.vn/css/home.css';
        // Get the content of the URL
        $contents = file_get_contents($url, false, stream_context_create($arrContextOptions));

        echo nl2br($contents);

        die;

        $page_no_jquery = 1;

        // Check if content was retrieved successfully
        if ($contents !== false) {

            return view('css.fileCss', compact('contents','id','page_no_jquery'));
       
          // echo nl2br($content);

        } 
        else{
            return abort('404');
        }

    }

    public function saveCss(Request $request)
    {
        $content = $request->css;
        $file    = $request->file;

        $css     = new css();

        $css->file = $file;
        $css->content =  $content;
        $css->save();

        Storage::disk('public')->put('css/'.$file, $content);

        return redirect()->back();
    }
}
