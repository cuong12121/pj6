

<!DOCTYPE html>
<html lang="vi-VN">
    <head>
         <?php  

            $requestcheck = \Request::route();

            if(!empty($requestcheck)){
                 $nameRoute = \Request::route()->getName();
            }
            else{
                 $nameRoute = '';
            }
           

          ?>
        <meta charset="utf-8" />

        <meta name="robots" content="{{ (isset($actives_pages_blog) && $actives_pages_blog ==0)?'noindex':'index' }},follow" />
        @if(!empty($meta))
        <title>{{ $meta->meta_title }}</title>
        <meta name="description" content="{{ $meta->meta_content }}"/>
        <meta property="og:title" content="{{ $meta->meta_title }}" />
        @if(!empty($data) && !empty($data->Image))
        <meta property="og:image" content="{{ asset($data->Image) }}"/>
        @endif
        <meta property="og:description" content="{{ $meta->meta_content }}" /> 
        <meta name="keywords" content="{{ $meta->meta_key_words??'sieu thi dien may, siêu thị điện máy, mua điện máy giá rẻ, siêu thị điện máy uy tín, siêu thị điện máy trực tuyến' }}"/>
        @else
            @if($nameRoute =='sale-home'||$nameRoute =='dealFe')
            <title>Khuyến mại lớn, giảm giá mạnh tại Điện Máy Người Việt</title>
            <meta name="description" content="Hàng ngàn khuyến mại hấp dẫn và giảm giá tại Siêu Thị Điện Máy Người Việt. Liên hệ hotline 0247.303.6336 để biết thêm thông tin chi tiết"/>
            <meta property="og:title" content="Khuyến mại lớn, giảm giá mạnh tại Điện Máy Người Việt" />
            <meta property="og:description" content="Hàng ngàn khuyến mại hấp dẫn và giảm giá tại Siêu Thị Điện Máy Người Việt. Liên hệ hotline 0247.303.6336 để biết thêm thông tin chi tiết" /> 
            <meta name="keywords" content="Khuyến mại lớn, giảm giá mạnh,"/>
            @else

             <?php 

                if(!Cache::has('meta5959')){

                    $metas = App\Models\metaSeo::find(5959); 

                    Cache::put('meta5959', $metas, 100000);

                }
                
                $meta = Cache::get('meta5959');
             ?>

            <title>{{  !empty($name_cates_cate)?$name_cates_cate:$meta->meta_title }}</title>
            <meta name="description" content="{{ $meta->meta_content }}"/>
            <meta property="og:title" content="{{ $meta->meta_title }}" />
            <meta property="og:description" content="{{ $meta->meta_content }}" /> 
            <meta name="keywords" content="{{ $meta->meta_key_words??'sieu thi dien may, siêu thị điện máy, mua điện máy giá rẻ, siêu thị điện máy uy tín, siêu thị điện máy trực tuyến' }}"/>
            @endif
        @endif
        <link rel="shortcut icon" href="{{ asset('uploads/icon/favicon.ico') }}"/>
        <meta name = "google-site-verify" content = "1AH1fN3G7ygWRcOlEQWJyhginaxmT67zTMPP8wnfFD0" />
        <meta name="google-site-verification" content="P-EnxCkmnXXEDeC0FWq-rSxjbSSyy9HeimO6f2Evtyc" />
        <meta property="zalo-platform-site-verification" content="UTYP5VFbJZ8Yz-G8uFTfDZxws27IX0fyDZK" />
      
        <meta http-equiv="Cache-control" content="public">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}?ver=2 ">

         <style type="text/css">
            .nk-nav-right ul{
                display: flex;
            }

            .flexthis .row-fluid{
                display: flex;
            }

            .nk-header #nk-search{
                width: 27% !important;
            }

            .header-menu__navs .navs-item-link {
                font-size: 13px !important;
            }    

            .nk-menu #nk-danh-muc-san-pham-left>h3{
                font-weight: inherit !important;
            }
         </style>
        <?php 
            $show_meta = $_GET['show']??'';
        ?>
        @if($show_meta ==''||$show_meta=='tragop-online')
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        @endif
        @if(!empty($pageCheck))
            <!-- Google Code dành cho Thẻ tiếp thị lại -->
            <!--------------------------------------------------
            Không thể liên kết thẻ tiếp thị lại với thông tin nhận dạng cá nhân hay đặt thẻ tiếp thị lại trên các trang có liên quan đến danh mục nhạy cảm. Xem thêm thông tin và hướng dẫn về cách thiết lập thẻ trên: http://google.com/ads/remarketingsetup
            --------------------------------------------------->
            <script type="text/javascript">// <![CDATA[
            var google_tag_params = {
            ecomm_prodid: '{{ @$data->id }}',
            ecomm_pagetype: 'home',
            ecomm_totalvalue: '{{ @$data->Price }}',
            dynx_itemid: '{{ @$data->ProducSku }}',
            dynx_itemid2: '{{ @$data->ProducSku }}',
            dynx_pagetype: 'home',
            dynx_totalvalue: '{{ @$data->Price }}',
            };
            // ]]></script>
            <script type="text/javascript">// <![CDATA[
            var google_conversion_id = 971664599;
            var google_custom_params = window.google_tag_params;
            var google_remarketing_only = true;
            // ]]></script>
            <script src="//www.googleadservices.com/pagead/conversion.js" type="text/javascript">// <![CDATA[

            // ]]></script>
            <noscript>
            <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/971664599/?value=0&guid=ON&script=0"/>
            </div>
            </noscript>
            <script type="application/ld+json">
              {
                "@context": "http://schema.org",
                "@type": "Product",
                "headline": "{{ @$data->Name }}",
                "datePublished": "{{ $data->created_at->format('Y-m-d') }}",
                "name": "{{ @$data->Name }}",
                "image": [
                  "{{ asset($data->Image) }}"
                ],
                "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": "4.8",
                    "reviewCount": "10"
                  }
              }
            </script>

        @endif
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "url": "https://dienmaynguoiviet.vn",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://dienmaynguoiviet.vn/tim?key={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
        </script>
        <link rel="alternate" type="application/rss+xml" title="RSS Feed for https://dienmaynguoiviet.vn" href="/product.rss" />
        <meta property="og:image" content="{{ asset('images/template/logo.png') }}" />
        <!-- Global site tag (gtag.js) - Google Ads: 971664599 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-971664599"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'AW-971664599');
        </script>
          <!-- Event snippet for Thêm vào giỏ hàng conversion page
        In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
        <script>
        function gtag_report_conversion(url) {
          var callback = function () {
            if (typeof(url) != 'undefined') {
              window.location = url;
            }
          };
          gtag('event', 'conversion', {
              'send_to': 'AW-971664599/xg4KCICo_MYCENfZqc8D',
              'event_callback': callback
          });
          return false;
        }
        </script>
          <!-- Event snippet for Lượt mua hàng conversion page
        In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
        <script>
        function gtag_report_conversion(url) {
          var callback = function () {
            if (typeof(url) != 'undefined') {
              window.location = url;
            }
          };
          gtag('event', 'conversion', {
              'send_to': 'AW-971664599/ggYyCLij_cYCENfZqc8D',
              'transaction_id': '',
              'event_callback': callback
          });
          return false;
        }
        </script>
          <!-- Event snippet for Click đt mobile conversion page
        In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
        <script>
        function gtag_report_conversion(url) {
          var callback = function () {
            if (typeof(url) != 'undefined') {
              window.location = url;
            }
          };
          gtag('event', 'conversion', {
              'send_to': 'AW-971664599/BsqZCL6p_cYCENfZqc8D',
              'event_callback': callback
          });
          return false;
        }
        </script>

        <script>
         gtag('event', 'page_view', {
           'send_to': 'AW-971664599',
           'dynx_itemid':'',
           'dynx_pagetype':'home',
           'dynx_totalvalue':0
         });
        </script>

       
       <!--  <noscript><img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id=481349662401312&ev=PageView&noscript=1"
        /></noscript> -->
        <!-- End Facebook Pixel Code -->
          
         
          
          <!-- Google Tag Manager --> 
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': 
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], 
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); 
        })(window,document,'script','dataLayer','GTM-WB77XQL');</script> 
        <!-- End Google Tag Manager --> 
          
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="//www.googletagmanager.com/gtag/js?id=UA-106951419-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments)};
          gtag('js', new Date());

          gtag('config', 'UA-106951419-1');
        </script>


        <link rel="stylesheet" href="{{ asset('css/lib/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}?ver=1"> 
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/apps.css') }}?ver=18">
        <link rel="stylesheet" type="text/css" href="{{asset('css/dienmay.css')}}?ver=104">
        <link rel="stylesheet" type="text/css" href="{{asset('css/detailsfe.css')}}?ver=7"> 
        <meta name="csrf-token" content="{{ csrf_token() }}">

    
        <style type="text/css">
            /*body.theme-lunar-new-year{
                overflow-x: hidden;
            }*/



            .category__all{
                padding: 0 !important;
                width: 100% !important;
            }

            .category{
                box-shadow: none !important;
            }

            .main-menu{
                width: 240px;
            }

            .bar-top-left {
                position: absolute !important;
                background-color: #fff;
            }
            
            .listcompare-click{
                display: none;
            }

            .category__all{
                color: #fff !important;
               
            }

            .event-dt, .event{
                display:block;
            } 

            .event{
                width: 70px;
                height: 70px;
                
                position: absolute;
                top: 0;
                left: 10px;
                z-index: 999;
            
            }

            .list-menu .category{
                width: 11%;
            }

            .compare-pro-holder a {
                display: block;
                width: 100%;
                margin-right: 35px;
                /*float: left;*/
            }

            .sub-cate h3, .compare-show, .gift-text span{
                font-size: 14px;
            }
            .compare-pro-holder img{
                width: 100%;
            }

            #suggesstion-box img{
                width: 29%;
            }

            .global-compare-group{
                display: none;
            }

            .js-compare-item{
                padding: 0 10px;
            }
            #js-compare-holder img{
                margin-bottom: 10px;

            }
            .icImageCompareNew{
                background: url("{{ asset('images/background-image/icon_add_desktop.png')  }}") no-repeat top center;
                background-size: 45px 45px;
                width: 69%;
                height: 45px;
                display: block;   
                margin-bottom: 10px;

            }

            .img-compare{
                height: 140px;
                width: 140px;
                position: relative;
            }

            .add-compare-a{
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
            }

            #js-compare-holder{
                display: flex;
            }


            /*item footer*/

            .max-width {
                max-width: 1200px;
                width: 100%;
                margin: 0 auto;
                position: relative;
            }
            .phone_hotline {
                width: 100%;
                background: #f5f5f5;
                display: flex;
                justify-content: space-between;
            }
            .p_hotline_item {
                width: 33.34%;
                text-align: center;
                position: relative;
            }

            .p_hotline_item .icon_purchase, .p_hotline_item .icon_security {
                width: 70px;
                height: 70px;
                display: inline-block;
                vertical-align: middle;
                background-image: url('{{ asset('media/category/icon.png')  }}');
            }

            .p_hotline_item span {
                width: 45%;
                display: inline-block;
                vertical-align: middle;
                font-family: Arial,Tahoma,sans-serif;
                font-size: 14px;
                color: #333;
                text-align: left;
            }

            .p_hotline_item span strong {
                display: block;
                font-weight: 700;
            }

            .p_hotline_item .icon_complain {
                width: 70px;
                height: 70px;
                display: inline-block;
                vertical-align: middle;
                background-image: url('{{ asset('media/category/icon.png')  }}');
                background-position: 95.5% 14.5%;
            }

            .p_hotline_item  .icon_purchase {
                width: 70px;
                height: 70px;
                display: inline-block;
                vertical-align: middle;
                background-image: url('{{ asset('media/category/icon.png')  }}');
                background-position: 81.5% 14.5%;
            }

            .p_hotline_item .icon_security {
                width: 70px;
                height: 70px;
                display: inline-block;
                vertical-align: middle;
                background-image: url('{{ asset('media/category/icon.png')  }}');
                background-position: 99% .5%
            }
            .iconss-sp{
                width: 20px;
            }

            .header__top {
                background-color: #fe6400e8 !important;
            }

            #ui-id-2{
                background: #fff;
                z-index: 99999;
            }


            #ui-id-1{
                z-index: 99999;
                background: #fff;
                width: 29vmax !important;
            }

            .listproduct .item-img, .listproduct .item .item-img img{
                margin-top: 0;
            }

            
        </style>

        <?php 
            $active_snow = 0
        ?>

        @if($active_snow = 1)

        <!-- hiệu ứng tuyết rơi -->

        <style>
            #snowflakeContainer{position:absolute;left:0px;top:0px;}
            .snowflake{padding-left:15px;font-size:14px;line-height:24px;position:fixed;color:#ebebeb;user-select:none;z-index:1000;-moz-user-select:none;-ms-user-select:none;-khtml-user-select:none;-webkit-user-select:none;-webkit-touch-callout:none;}
            .snowflake:hover {cursor:default}
        </style>
        <div id='snowflakeContainer'>
        <p class='snowflake'>❄</p>
        </div>
        <script style='text/javascript'>
            //<![CDATA[
            var requestAnimationFrame=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||window.msRequestAnimationFrame;var transforms=["transform","msTransform","webkitTransform","mozTransform","oTransform"];var transformProperty=getSupportedPropertyName(transforms);var snowflakes=[];var browserWidth;var browserHeight;var numberOfSnowflakes=30;var resetPosition=false;function setup(){window.addEventListener("DOMContentLoaded",generateSnowflakes,false);window.addEventListener("resize",setResetFlag,false)}setup();function getSupportedPropertyName(b){for(var a=0;a<b.length;a++){if(typeof document.body.style[b[a]]!="undefined"){return b[a]}}return null}function Snowflake(b,a,d,e,c){this.element=b;this.radius=a;this.speed=d;this.xPos=e;this.yPos=c;this.counter=0;this.sign=Math.random()<0.5?1:-1;this.element.style.opacity=0.5+Math.random();this.element.style.fontSize=4+Math.random()*30+"px"}Snowflake.prototype.update=function(){this.counter+=this.speed/5000;this.xPos+=this.sign*this.speed*Math.cos(this.counter)/40;this.yPos+=Math.sin(this.counter)/40+this.speed/30;setTranslate3DTransform(this.element,Math.round(this.xPos),Math.round(this.yPos));if(this.yPos>browserHeight){this.yPos=-50}};function setTranslate3DTransform(a,c,b){var d="translate3d("+c+"px, "+b+"px, 0)";a.style[transformProperty]=d}function generateSnowflakes(){var b=document.querySelector(".snowflake");var h=b.parentNode;browserWidth=document.documentElement.clientWidth;browserHeight=document.documentElement.clientHeight;for(var d=0;d<numberOfSnowflakes;d++){var j=b.cloneNode(true);h.appendChild(j);var e=getPosition(50,browserWidth);var a=getPosition(50,browserHeight);var c=5+Math.random()*40;var g=4+Math.random()*10;var f=new Snowflake(j,g,c,e,a);snowflakes.push(f)}h.removeChild(b);moveSnowflakes()}function moveSnowflakes(){for(var b=0;b<snowflakes.length;b++){var a=snowflakes[b];a.update()}if(resetPosition){browserWidth=document.documentElement.clientWidth;browserHeight=document.documentElement.clientHeight;for(var b=0;b<snowflakes.length;b++){var a=snowflakes[b];a.xPos=getPosition(50,browserWidth);a.yPos=getPosition(50,browserHeight)}resetPosition=false}requestAnimationFrame(moveSnowflakes)}function getPosition(b,a){return Math.round(-1*b+Math.random()*(a+2*b))}function setResetFlag(a){resetPosition=true};
            //]]>
        </script>
 
        <!-- end hiệu ứng -->

        @endif

        <?php  
            
            if(!Cache::has('backgrounds1')) {

                $backgrounds = App\Models\background::find(1); 

                Cache::put('backgrounds1',$backgrounds,10000);

            }

            $background = Cache::get('backgrounds1');
        ?> 
        @if(!empty($background->background_image))
        <style type="text/css">
            

             body.theme-lunar-new-year {
                background-image: url('{{ asset($background->background_image)  }}');
            }    
             
        </style>
        @else

        <style type="text/css">
            

             body.theme-lunar-new-year {
                background:'#'{{ asset($background->background_image)  }};
            }  
            .danh-muc1, .danh-muc2{
                left: 0px !important;
            } 

            .hotlines{
                position:fixed; 
                z-index:9999
            }   

            #ui-id-1{
                font-size: 14px;
            }

            .submenu strong{
                font-size: 14px;
            } 

            .submenu h3{
                font-size: 14px;
            } 

             @media only screen and (min-width: 768px) {
                .hotlines{
                   
                    bottom:93px; 
                    right:8px; 
                    display: none;   
                }

                .theme-xmas.header:after {
                content: '';
                background-size: 90%;
                width: 12%;
                height: 18%;
                position: absolute;
                z-index: 2;
                background-image:  url('{{ asset("images/template/header-rope-right-23.png")  }}');
                top: 0;
                right: 0;
                background-repeat: no-repeat;
            }

            .theme-xmas.header:before {
                content: '';
                background-size: 90%;
                width: 12%;
                height: 18%;
                position: absolute;
                z-index: 2;
                background-image: url('{{ asset("images/template/header-rope-left-23.png")  }}');
                left: 0;
                top: 0;
                background-repeat: no-repeat;
            }   
            .header-pc{
                height: 80px;
            } 


                .zalo-chat-widget{  
                    bottom: 28% !important;  
                    right: 1%!important;  
                }  

                .hotline{
                    width: 237px;
                }

                .hotline p{

                    margin-bottom: 1em;
                }
                .global-compare-group{
                    height: 300px;
                }
                .list-menu{
                    margin-bottom: 0;
                }

                .submenu {

                    left:240px !important;

               }

               .hotline{
                    position: absolute;
                    
               }

                a.hotline-fix {
                    background: #FCEF41;
                    border-radius: 7px 0px 0px 0px;
                    margin-bottom: 5px;
                    font-size: 15px;
                }

                .hotline.position-fixed {
                    bottom: 21%;
                    right: 0;
                    padding: 0.5rem 0.3rem 0.5rem 0.8rem;
                    border-radius: 13px 0px 0px 13px;
                    background-color: transparent;
                    z-index: 99;
                    transition: 0.3s;
                }

                .hotline.position-fixed a i {
                    width: 35px;
                    height: 35px;
                    border: 1px solid #002069;
                    border-radius: 50%;
                    text-align: center;
                    line-height: 35px;
                    margin-right: 10px;
                    color: #002069;
                }

                .text-white {
                    color: #fff!important;
                }

               /* .zalo-mobile{
                    display: none;
                }*/

              /*  .zalo-icon{
                    left: 73%;
                }*/
            }

            @media only screen and (max-width: 768px) {
                  .menus-banner .strongtitle {
                    font-size: 12px !important;
                    -webkit-line-clamp: 1;
                      -webkit-box-orient: vertical;
                      overflow: hidden;
                      display: -webkit-box;
                  }  

                .ui-widget-content p{

                    font-size: 15px;
                }

                .zalo-chat-widget{  
                    bottom: 10% !important;  
                    left: 10px!important;  
                }  




                .suggest_link{
                    font-size: 14px;
                }  

                .p_hotline_item span {
                    width: 100%;
                    text-align: center;
                }
                .hotlines{
                    bottom:100px; 
                    right:0; 
                }  
                #myBtn-top {
                   /* bottom: 28px;
                    right: 100px*/
                    display: none !important;
                }  
                  #skw{
                    border: 1px solid #D92548;
                  }

                .btn-remove-all-compare{
                    display: none !important;

                }
                .btn-compare{
                    top: 0px !important;
                    left: 112px !important;
                    line-height: 28px !important;
                }
                .compare-add-mobile{
                    width: 100% !important;
                }

            }
        </style>
        @endif

        <style type="text/css">
            
            .loader {
              height: 5rem;
              width: 5rem;
              border-radius: 50%;
              border: 10px solid orange;
              border-top-color: #002147;
              box-sizing: border-box;
              background: transparent;
              animation: loading 1s linear infinite;
              position: absolute;
                top: 50%;
                left: 50%;
                z-index: 999;

            }

            .tin-km{
                padding: 5px 8px;
            }

            .deal-icon{
                color: #fe0000 !important;
            }

            #ui-id-2{
                width: 100%!important;
                left: 0 !important;
                padding: 5px;
            }

            .global-compare-group {
                background: #fff;
                position: fixed;
                bottom: 0;
                left: 30%;
                width: 800px;
                -webkit-box-shadow: 3px -2px 11px 1px rgb(0 0 0 / 25%);
                box-shadow: 3px -2px 11px 1px rgb(0 0 0 / 25%);
                z-index: 9999;
                display: none;
            }

            .global-compare-group .pro-compare-holder {
                padding-right: 15px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
            }

            .global-compare-group .title {
                background: #546ce8;
                padding: 8px 12px;
            }

            .global-compare-group .compare-pro-holder {
                width: calc(100% - 200px);
            }

            .global-compare-group .btn-compare {
                width: 145px;
                line-height: 40px;
                margin-left: 55px;
                background: #546ce8;
                color: #fff;
                font-weight: 600;
                font-size: 18px;
                border-radius: 4px;
                text-align: center;
                display: block;
            }
            .text-22 p{
                margin-bottom: 0;
            }
            .submenu strong{
                margin-bottom: 5px;
            }

        </style>

        <style type="text/css">
            

            .border-rd{
                border-radius: 4px;
                border: 1px solid #fff;
                padding: 9px;
            }

            .pine-tree img {
                width: 10%;
                position: fixed;
            }

            .pine-tree-right {
                left: 90vw;
/*                transform: rotate(335deg);*/
            }

            .pine-tree-left, .pine-tree-right {
                bottom: 0;
                cursor: pointer;
                z-index: 1;
/*                animation: lighting 1s infinite;*/
            }

            .pine-tree-left, .pine-tree-right {
                bottom: 0px;
                cursor: pointer;
                z-index: 1;
/*                animation: 1s ease 0s infinite normal none running lighting;*/
            }

            @keyframes lighting {
              0% {
                content: url({{ asset('public/background/Asset3@3x.png')  }}));
              }
              to {
                content: url({{ asset('public/background/Asset5@3x.png')  }});
              }
            }

            .pine-tree .tuyet-left {
                bottom: 0;
                left: 1vw;
                cursor: pointer;
                z-index: 999;
                width: 9vw;
            }

            .pine-tree img {
                width: 10%;
                position: fixed;
            }

            .pine-tree .santa-left {
                bottom: 0;
                left: 0;
                cursor: pointer;
                z-index: 2;
                width: 3vw;
            }

            .pine-tree .santa-right {
                bottom: 0;
                right: 0;
                cursor: pointer;
                z-index: 2;
/*                width: 3vw;*/
            }

            @if(!empty(Auth::user()->id) && Auth::user()->id==1)

                .phpdebugbar{
                    display:block;
                }
            @else 
            
               .phpdebugbar{
                    display:none;
                }
            @endif

        </style>
        @stack('style')


        
    </head>
    <body class="theme-lunar-new-year">
        <div class="banner-media desktop">
            <div class="" data-size="1">
                <div class="item" data-background-color="#CF1F2F" data-order="1">

                    <?php 

                        if(!Cache::has('banners12')) {

                            $banners = App\Models\banners::where('option', 1)->get()->last();

                            Cache::put('banners12',$banners,10000);
                        }


                        $banner = Cache::get('banners12');
                    ?>

                    @if(!empty($banner)&& $banner->active ==1)
                    <a aria-label="slide" data-cate="0" data-place="1295" href="#"><img  src="{{ asset($banner->image) }}" alt="BF"  ></a>
                    @endif
                </div>
            </div>
            
        </div>

       
        <?php  


            $userClient = session()->get('status-login');

            if(!Cache::has('popup1') ){

                $popups = App\Models\popup::find(4);

                Cache::put('popup1', $popups,10000);
            }


            $popup = Cache::get('popup1');
            
        ?>
        <!-- popup quảng cáo  -->

        @if($popup->active==1)

        @if($popup->option ==0)

        <div id="box-promotion" class="box-promotion box-promotion-active">
            <div class="box-promotion-item" style="width: 500px;height: 500px;left: 34%;top: 23%;">
                <div class="box-banner">
                    <a href="{{ $popup->link }}" target="_blank" rel="nofollow"><img src="{{ asset( $popup->image) }}" alt="pop-up"></a>
                </div>
                <a class="box-promotion-close" href="javascript:void(0)" title="Đóng lại">x</a>
            </div>
        </div>
        @else

        @if(!empty($requestcheck)&& \Request::route()->getName() =="homeFe")
        <div id="box-promotion" class="box-promotion box-promotion-active">
            <div class="box-promotion-item" style="width: 500px;height: 500px;left: 34%;top: 23%;">
                <div class="box-banner">
                    <a href="{{ $popup->link }}" target="_blank" rel="nofollow"><img src="{{ asset( $popup->image) }}" alt="pop-up"></a>
                </div>
                <a class="box-promotion-close" href="javascript:void(0)" title="Đóng lại">[x]</a>
            </div>
        </div>

        @endif

        @endif
        
        @endif

       <!--  <header class="header   theme-xmas" data-sub="0">

            <div class="header__top desktop header-pc">
                <section>
                    <a href="{{route('homeFe')}}" class="header__logo">
                        <img src="{{ asset('images/template/logo.png') }}">   
                   
                    </a>
                   
                    <a href="tel: 02473036336" class="header__cart fas-phones">
                         <i class="fa fa-phone phones-customn" aria-hidden="true"></i>
                         <div class="div-text">
                            <span class="tel-head">0247.303.6336</span>
                            <span class="tvbhclient">Tư vấn bán hàng</span>

                            
                        </div>
                    </a>

                    <a href="https://goo.gl/maps/TozxKHRZeHfrafMt9" class="header__cart fas-phones" target="_blank">
                         <i class="fa fa-map-marker" aria-hidden="true"></i>
                         <div class="div-text">
                            <span class="tel-head">Xem kho hàng</span>
                            <span class="tvbhclient">Mở cửa 8h-17h</span>

                        </div>
                    </a>

                    <form  class="header__search" method="get" action="{{ route('search-product-frontend') }}">
                        <input  type="text" class="input-search" id="tags" placeholder="Bạn muốn tìm gì..." name="key" autocomplete="off" maxlength="100" required>
                        <button type="submit">
                        <i class="icon-search"></i>
                        </button>
                        <div id="search-result"></div>
                    </form>


                    <?php
                        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();

                 

                        $number_cart = count($cart);
                       
                     ?>   
                    <a href="javascript:void(0)" class="header__cart " onclick="showToCart()" style="margin-right: -58px;">

                        <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:22px"></i>
                        <b id="count_shopping_cart_store"><span class="number-cart">{{ $number_cart }}</span></b>
                    </a>

                    

                    <div class="fas-phones">          
                        <a href="https://tracking.dienmaynguoiviet.vn/" class="header__history tin-km">Tra cứu đơn hàng</a>
                       
                    </div>

                

                    @if( !empty($userClient) && !empty($userClient['status']) && $userClient['status']==='Đăng nhập thành công')

                        <div class="border-rd">
                        
                            <a rel="nofollow"  href="{{ route('logout-Fe') }}">
                                <span style="color:#fff; font-size: 12px;">Đăng xuất</span>
                            </a>
                        </div>
                       
                    
                    @else


                    <div  class="header__cart fas-phones">
                         <i class="fa fa-user phones-customn" aria-hidden="true"></i>
                         <div class="div-text">
                            <span class="tel-head logins-modal">Đăng nhập</span>
                            <span class="tvbhclient register-form">Đăng ký</span>
                        </div>
                    </div>

                    @endif

                    <div class="fas-phones">          
                        <a href="{{ route('tins') }}" class="header__history tin-km">Tin tức, khuyến mãi </a>
                       
                    </div>

                   
                </section>
            </div>

            

            <div class="header__top header__top-mobile mobiles">
                <section>
                    <div class="col-xs-12" style="display: flex; height: 63px;">
                        <div class="col-6">
                            <a href="/" class="header__logo">
                                <img src="{{ asset('images/template/logo.png') }}">   
                           
                            </a>
                        </div>
                     
                       
                        <div class="col-6" style="display:flex">
                           

                            <div class="col-4 icons-heads icons-2">
                                

                               <a href="tel: 02473036336" class="header__cart ">
                                     <i class="fa fa-phone phones-customn" aria-hidden="true" style="font-size:22px"></i>
                                </a>
                            </div>

                            <div class="col-4 icons-heads icons-1">
                            
                                <a href="javascript:void(0)" class="header__cart" onclick="showToCart()" style="width: auto;">
                                    <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:22px"></i>
                                    <b id="count_shopping_cart_store"><span class="number-cart">{{ $number_cart }}</span></b>
                                </a>
                                 
                            </div>

                            <div class="col-4 icons-heads icons-3">
                                
                                <a href="{{ route('tin') }}" class="header__cart ">
                                    <i class="fa fa-newspaper" aria-hidden="true" style="font-size:22px"></i>
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-xs-12" style="padding: 15px 10px;">
                        <form  class="header__search" method="get" action="{{ route('search-product-frontend') }}">
                            <input id="skw" type="text" class="input-search" placeholder="Bạn muốn tìm gì..." name="key" autocomplete="off" maxlength="100">
                            <button type="submit">
                            <i class="icon-search"></i>
                            </button>
                            <div id="search-result"></div>
                        </form>
                    </div>    
                </section>
            </div>


            <div class="header__top desktop menu-pc">
                <div class="menu-section">
                   

                    <ul class="list-menu">

                      

                        <li class="category">
    

                        <a href="#" class="category__all"><i class="fa fa-bars" aria-hidden="true"></i> Tất cả danh mục</a>

                            @if(!empty($requestcheck)&& \Request::route()->getName() =="homeFe")
                            <div class="bar-top-lefts" style="display: block;">
                            @else
                            <div class="bar-top-left" style="display: none;">
                            @endif

                                
                                <ul class="main-menu">

                                    <li data-submenu-id="submenu-0">
                                        <div class="dropdown">
                                            <i class="fa-solid fa-tags deal-icon"></i>
                                            <a href="/deal"><b>GIẢM GIÁ ĐẶC BIỆT</b></a>
                                        </div>
                                    </li>    

                                    <li data-submenu-id="submenu-1">
                                        <div class="dropdown">
                                          
                                            <img src="{{ asset('media/category/cat_4d485476e07e02638e8e2133cdf8f56d.png') }}" class="iconss-sp">
                                            <a href="{{route('details','ti-vi')}}">Tivi</a>
                                        </div>
                                        <div id="submenu-1" class="submenu" style="display: none;">
                                            <aside>
                                                <a href="{{ route('details', 'thuong-hieu-tivi') }}"><strong>Thương hiệu</strong></a>
                                                <hr>
                                                <a href="{{route('details','tivi-samsung')}}">
                                                    <h3>Tivi Samsung</h3>
                                                </a>
                                                <a href="{{route('details','tivi-lg')}}">
                                                    <h3>Tivi LG</h3>
                                                </a>
                                                <a href="{{route('details','tivi-sony')}}">
                                                    <h3>Tivi Sony</h3>
                                                </a>
                                                <a href="{{route('details','tivi-tcl')}}">
                                                    <h3>Tivi TCL</h3>
                                                </a>
                                                <a href="{{route('details','tivi-philips')}}">
                                                    <h3>Tivi Philips</h3>
                                                </a>
                                                <a href="{{route('details','tivi-sharp')}}">
                                                    <h3>Tivi Sharp</h3>
                                                </a>
                                            </aside>
                                            <aside>
                                                <a href="{{ route('details', 'loai-tivi') }}"><strong>Loại tivi</strong></a>
                                                <hr>
                                                <a href="{{route('details','8k')}}">
                                                    <h3>8K</h3>
                                                </a>
                                                <a href="{{route('details','tivi-4k')}}">
                                                    <h3>4K</h3>
                                                </a>
                                                <a href="{{route('details','smart-tivi')}}">
                                                    <h3>Smart tivi</h3>
                                                </a>
                                                <a href="{{route('details','tivi-led')}}">
                                                    <h3>Tivi Led</h3>
                                                </a>
                                                <a href="{{route('details','tivi-oled')}}">
                                                    <h3>Tivi OLED</h3>
                                                </a>
                                                <a href="{{route('details','tivi-qled')}}">
                                                    <h3>Tivi QLED</h3>
                                                </a>
                                                <a href="{{route('details','tivi-frame')}}">
                                                    <h3>Tivi Frame</h3>
                                                </a>
                                                <a href="{{route('details','tivi-neo-qled')}}">
                                                    <h3>Tivi Neo QLED</h3>
                                                </a>
                                            </aside>
                                            <aside>
                                                <a href="{{route('details','kich-co-tivi')}}"><strong>Kích cỡ tivi</strong></a>
                                                <hr>
                                                <a href="{{route('details','tivi-32-inches')}}">
                                                    <h3>Tivi 32 inches</h3>
                                                </a>
                                                <a href="{{route('details','tivi-43-inches')}}">
                                                    <h3>Tivi 43 inches</h3>
                                                </a>
                                                <a href="{{route('details','tivi-48-inches')}}">
                                                    <h3>Tivi 48 inches</h3>
                                                </a>
                                                <a href="{{route('details','tivi-49-inches')}}">
                                                    <h3>Tivi 49 inches</h3>
                                                </a>
                                                <a href="{{route('details','tivi-50-inches')}}">
                                                    <h3>Tivi 50 inches</h3>
                                                </a>
                                                <a href="{{route('details','tivi-55-inches')}}">
                                                    <h3>Tivi 55 inches</h3>
                                                </a>
                                                <a href="{{route('details','tivi-tu-65-inches-tro-len')}}">
                                                    <h3>Tivi từ 65 inches trở lên</h3>
                                                </a>
                                            </aside>
                                        </div>
                                    </li>
                                    <li data-submenu-id="submenu-2" class="">
                                        <div class="dropdown">
                                            <span>
                                                <img src="{{ asset('media/category/cat_16d7d1935af1373f80a43ad4bd87c845.png') }}" class="iconss-sp">
                                            </span>
                                            <a href="{{route('details','tu-lanh')}}" class="">Tủ lạnh</a>
                                        </div>

                                        <div id="submenu-2" class="submenu" style="display: none;">
                                            <aside>
                                                
                                                <a href="{{route('details','thuong-hieu-tu-lanh')}}"><strong>Thương hiệu</strong></a>
                                                <hr>

                                                <a href="{{route('details','tu-lanh-hitachi')}}">
                                                    <h3>Tủ lạnh Hitachi</h3>
                                                </a>
                                                 <a href="{{route('details','tu-lanh-panasonic')}}">
                                                    <h3>Tủ lạnh Panasonic</h3>
                                                </a>
                                                <a href="{{route('details','tu-lanh-samsung')}}">
                                                    <h3>Tủ lạnh Samsung</h3>
                                                </a>
                                                <a href="{{route('details','tu-lanh-sharp')}}">
                                                    <h3>Tủ lạnh Sharp</h3>
                                                </a>
                                                <a href="{{route('details','tu-lanh-lg')}}">
                                                    <h3>Tủ lạnh LG</h3>
                                                </a>
                                                <a href="{{route('details','tu-lanh-funiki')}}">
                                                    <h3>Tủ lạnh Funiki</h3>
                                                </a>
                                                <a href="{{route('details','tu-lanh-mitsubishi')}}">
                                                    <h3>Tủ lạnh Mitsubishi </h3>
                                                </a>

                                                <a href="{{route('details','tu-lanh-hitachi')}}">
                                                    <h3>Tủ lạnh Hitachi</h3>
                                                </a>
                                            </aside>
                                            <aside>

                                                <a href="{{route('details','dung-tich-tu-lanh')}}"><strong>Dung tích</strong></a>  
                                                <hr>
                                                <a href="{{route('details','duoi-150-lit')}}">
                                                    <h3>Dưới 150 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-150-200-lit')}}">
                                                    <h3>Từ 150-200 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-200-300-lit')}}">
                                                    <h3>Từ 200-300 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-300-400-lit')}}">
                                                    <h3>Từ 300-400 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-400-500-lit')}}">
                                                    <h3>Từ 400-500 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-400-500-lit')}}">
                                                    <h3>Từ 400-500 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-500-600-lit')}}">
                                                    <h3>Từ 500-600 lít</h3>
                                                </a>
                                                <a href="{{route('details','tren-600-lit')}}">
                                                    <h3>Trên 600 lít</h3>
                                                </a>
                                            </aside>

                                            <aside>
                                                <a href="{{route('details','loai-tu-lanh')}}"><strong>Loại tủ</strong></a>
                                                <hr>
                                                <a href="{{route('details','tu-lanh-mini')}}">
                                                    <h3>Tủ lạnh mini</h3>
                                                </a>
                                                <a href="{{route('details','tu-lanh-ngan-da-tren')}}">
                                                    <h3>Tủ lạnh ngăn đá trên</h3>
                                                </a>
                                                <a href="{{route('details','tu-lanh-ngan-da-duoi')}}">
                                                    <h3>tủ lạnh ngăn đá dưới</h3>
                                                </a>
                                                <a href="{{route('details','tu-lanh-side-by-side')}}">
                                                    <h3>Tủ lạnh Side By Side</h3>
                                                </a>
                                            </aside>
                                        </div>
                                    </li>

                                    <li data-submenu-id="submenu-3" class="">
                                        <div class="dropdown">
                                            <span>
                                                <img src="{{ asset('media/category/cat_22b19c0055ddb1f48a2a6bf7b652c01f.png') }}" class="iconss-sp">
                                            </span>
                                            <a href="{{ route('details', 'may-giat') }}">Máy giặt</a>
                                        </div>

                                        <div id="submenu-3" class="submenu" style="display: none;">
                                            <aside>
                                                <a href="{{route('details','kieu-giat')}}"><strong>Kiểu giặt</strong></a>
                                                <hr>
                                                <a href="{{route('details','may-giat-long-ngang')}}">
                                                    <h3>Máy giặt lồng ngang</h3>
                                                </a>
                                                <a href="{{route('details','may-giat-long-dung')}}">
                                                    <h3>Máy giặt lồng đứng</h3>
                                                </a>
                                            </aside>
                                            <aside>
                                                <a href="{{ route('details', 'thuong-hieu-may-giat') }}"><strong>Thương hiệu</strong></a>
                                                <hr>
                                                <a href="{{route('details','may-giat-electrolux')}}">
                                                    <h3>Máy giặt Electrolux</h3>
                                                </a>
                                                <a href="{{route('details','may-giat-lg')}}">
                                                    <h3>Máy giặt LG</h3>
                                                </a>
                                                <a href="{{route('details','may-giat-panasonic')}}">
                                                    <h3>Máy giặt Panasonic</h3>
                                                </a>
                                                <a href="{{route('details','may-giat-samsung')}}">
                                                    <h3>Máy giặt Samsung</h3>
                                                </a>
                                                <a href="{{route('details','may-giat-sharp')}}">
                                                    <h3>Máy giặt Sharp</h3>
                                                </a>

                                            </aside>
                                        </div>
                                    </li>

                                    <li data-submenu-id="submenu-4" class="">
                                        <div class="dropdown">
                                            <span>
                                                <img src="{{ asset('media/category/cat_f6c8dd5cf8f95e19e99ef874e3edc242.png') }}" class="iconss-sp">
                                            </span>
                                            <a href="{{ route('details', 'dieu-hoa') }}" class="">Điều hòa</a>
                                        </div>

                                        <div id="submenu-4" class="submenu" style="display: none;">
                                            <aside>
                                                <a href="{{ route('details', 'thuong-hieu-dieu-hoa') }}"><strong>Thương hiệu</strong></a>  
                                                <hr>
                                                <a href="{{route('details','dieu-hoa-daikin')}}">
                                                    <h3>Điều hòa Daikin</h3>
                                                </a>
                                                <a href="{{route('details','dieu-hoa-panasonic')}}">
                                                    <h3>Điều hòa Panasonic</h3>
                                                </a>
                                                <a href="{{route('details','dieu-hoa-mitsubishi')}}">
                                                    <h3>Điều hòa Mitsubishi</h3>
                                                </a>
                                                <a href="{{route('details','dieu-hoa-lg')}}">
                                                    <h3>Điều hòa LG</h3>
                                                </a>
                                                <a href="{{route('details','dieu-hoa-sharp')}}">
                                                    <h3>Điều hòa Sharp</h3>
                                                </a>
                                               
                                                <a href="{{route('details','dieu-hoa-samsung')}}">
                                                    <h3>Điều hòa Samsung</h3>
                                                </a>
                                                <a href="{{route('details','dieu-hoa-nagakawa')}}">
                                                    <h3>Điều hòa Nagakawa</h3>
                                                </a>
                                                <a href="{{route('details','dieu-hoa-midea')}}">
                                                    <h3>Điều hòa Midea</h3>
                                                </a>
                                            </aside>

                                            <aside>
                                                <a href="{{ route('details', 'tiet-kiem-dien') }}"><strong>Tiết kiệm điện</strong></a>  
                                                <hr>
                                               
                                                <a href="{{route('details','co-inverter')}}">
                                                    <h3>Có inverter</h3>
                                                </a>
                                                <a href="{{route('details','khong-inverter')}}">
                                                    <h3>Không inverter</h3>
                                                </a>

                                            </aside>

                                        </div>
                                    </li>

                                    <li data-submenu-id="submenu-5" class="">
                                        <div class="dropdown">
                                            <span>
                                                <img src="{{ asset('media/category/cat_22b19c0055ddb1f48a2a6bf7b652c01f.png') }}" class="iconss-sp">
                                            </span>
                                            <a href="{{ route('details', 'may-say-quan-ao') }}" class="">Máy sấy quần áo</a>
                                        </div>

                                        <div id="submenu-5" class="submenu" style="display: none;">
                                            <aside>
                                                <a href="{{ route('details', 'may-say-quan-ao-panasonic') }}"><strong>Máy sấy quần áo panasonic</strong></a>
                                                
                                            </aside>

                                            <aside>
                                                <a href="{{ route('details', 'may-say-quan-ao-lg') }}"><strong>Máy sấy quần áo LG</strong></a>
                                            </aside>

                                            <aside>
                                                <a href="{{ route('details', 'may-say-quan-ao-electrolux') }}"><strong>Máy sấy quần áo Electrolux</strong></a>
                                            </aside>

                                            <aside>
                                                <a href="{{ route('details', 'may-say-quan-ao-samsung') }}"><strong>Máy sấy quần áo Samsung</strong></a>
                                            </aside>
                                        </div>
                                    </li>

                                    <li data-submenu-id="submenu-6" class="">
                                        <div class="dropdown">
                                            <span>
                                                <img src="{{ asset('media/category/cat_d8bc7e22dcd3dcc525a4f3e9c7b433bc.png') }}" class="iconss-sp">
                                            </span>
                                            <a href="{{ route('details', 'may-loc-nuoc') }}" class=""> A.O.Smith</a>
                                        </div>

                                        <div id="submenu-6" class="submenu" style="display: none;">
                                            <aside>
                                                <a href="{{ route('details', 'may-loc-nuoc') }}"><strong>Máy Lọc Nước RO-Side Stream</strong></a>
                                                
                                            </aside>

                                            <aside>
                                                <a href="{{ route('details', 'may-loc-nuoc-dau-nguon') }}"><strong>Máy Lọc Nước Đầu Nguồn</strong></a>
                                            </aside>

                                            <aside>
                                                <a href="{{ route('details', 'may-loc-khong-khi-ao-smith') }}"><strong>Máy Lọc Không Khí AO Smith</strong></a>
                                            </aside>

                                        </div>
                                    </li>

                                    <li data-submenu-id="submenu-7" class="">
                                        <div class="dropdown">
                                             <span>
                                                <img src="{{ asset('media/category/cat_a22746738a475a75211f96a98549a811.png') }}" class="iconss-sp">
                                            </span>
                                            <a href="{{ route('details', 'gia-dung') }}" class=""> Gia dụng</a>
                                        </div>

                                        <div id="submenu-7" class="submenu" style="display: none;">
                                            <aside>
                                                <strong>Sản phẩm gia dụng</strong>
                                                <hr>
                                                <a href="{{route('details','may-hut-bui')}}">
                                                    <h3>Máy hút bụi</h3>
                                                </a>
                                                <a href="{{route('details','binh-nong-lanh')}}">
                                                    <h3>Bình nước nóng</h3>
                                                </a>
                                                <a href="{{route('details','ban-la')}}">
                                                    <h3>Bàn là</h3>
                                                </a>
                                                <a href="{{route('details','may-say-toc')}}">
                                                    <h3>Máy sấy tóc</h3>
                                                </a>
                                                <a href="{{route('details','may-loc-khong-khi-samsung')}}">
                                                    <h3>Máy lọc không khí Samsung</h3>
                                                </a>
                                                <a href="{{route('details','may-loc-khong-khi-sharp')}}">
                                                    <h3>Máy lọc không khí Sharp</h3>
                                                </a>


                                                <a href="{{route('details','quat')}}">
                                                    <h3>Quạt</h3>
                                                </a>
                                            </aside>

                                            <aside>
                                                <a href="{{ route('details', 'san-pham-nha-bep') }}"><strong>Sản phẩm nhà bếp</strong></a>
                                                
                                                <hr>
                                                <a href="{{route('details','noi-com-dien')}}">
                                                    <h3>Nồi cơm điện</h3>
                                                </a>
                                                <a href="{{route('details','lo-vi-song')}}">
                                                    <h3>Lò vi sóng</h3>
                                                </a>
                                                <a href="{{route('details','binh-thuy-dien')}}">
                                                    <h3>Bình thủy điện</h3>
                                                </a>
                                                <a href="{{route('details','am-sieu-toc')}}">
                                                    <h3>Ấm siêu tốc</h3>
                                                </a>
                                                <a href="{{route('details','may-xay-sinh-to')}}">
                                                    <h3>Máy xay sinh tố</h3>
                                                </a>
                                                <a href="{{route('details','may-ep-hoa-qua')}}">
                                                    <h3>Máy ép hoa quả</h3>
                                                </a>
                                                <a href="{{route('details','may-xay-da-nang')}}">
                                                    <h3>Máy xay đa năng</h3>
                                                </a>
                                                <a href="{{route('details','noi-chien-khong-dau')}}">
                                                    <h3>Nồi chiên không dầu</h3>
                                                </a>

                                                <a href="{{route('details','lo-nuong')}}">
                                                    <h3>Lò nướng</h3>
                                                </a>

                                                <a href="{{route('details','bep-tu')}}">
                                                    <h3>Bếp từ</h3>
                                                </a>

                                                <a href="{{route('details','may-rua-bat')}}">
                                                    <h3>Máy rửa bát</h3>
                                                </a>

                                                 
                                            </aside>
                                        </div>

                                    </li>


                                    <li data-submenu-id="submenu-8" class="">
                                        <div class="dropdown">
                                            <span>
                                                <img src="{{ asset('media/category/cat_f64d8213e904929e9114d7eb68ffe7e5.png') }}" class="iconss-sp">
                                            </span>
                                            <a href="{{ route('details', 'tu-dong') }}" class=""> Tủ đông</a>
                                        </div>

                                        <div id="submenu-8" class="submenu" style="display: none;">
                                            <aside>
                                               <strong>Thương hiệu</strong>
                                               <hr>
                                                <a href="{{route('details','tu-dong-sanaky')}}">
                                                    <h3>Sanaky</h3>
                                                </a>
                                            </aside>

                                            <aside>
                                                <strong>Dung tích</strong>
                                                <hr>
                                                <a href="{{route('details','tu-100-200-lit')}}">
                                                    <h3>Từ 100-200 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-200-300-lit')}}">
                                                    <h3>Từ 200-300 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-300-400-lit')}}">
                                                    <h3>Từ 300-400 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-400-500-lit')}}">
                                                    <h3>Từ 400-500 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-500-600-lit')}}">
                                                    <h3>Từ 500-600 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-600-700-lit')}}">
                                                    <h3>Từ 600-700 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-700-800-lit')}}">
                                                    <h3>Từ 700-800 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-800-900-lit')}}">
                                                    <h3>Từ 800-900 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-900-1000-lit')}}">
                                                    <h3>Từ 900-1000 lít</h3>
                                                </a>
                                                <a href="{{route('details','tren-1000-lit')}}">
                                                    <h3>Trên 1000 lít</h3>
                                                </a>
                                            </aside>
                                        </div>

                                    </li>

                                    <li data-submenu-id="submenu-9" class="">
                                        <div class="dropdown">
                                            <span>
                                                <img src="{{ asset('media/category/cat_16d7d1935af1373f80a43ad4bd87c845.png') }}" class="iconss-sp">
                                            </span>
                                            <a href="{{ route('details', 'tu-mat') }}" class=""> Tủ mát</a>
                                        </div>

                                        <div id="submenu-9" class="submenu" style="display: none;">
                                            <aside>
                                                <a href=""><strong>Thương hiệu</strong></a>
                                               
                                               <hr>
                                                <a href="{{route('details','tu-mat-sanaky')}}">
                                                    <h3>Sanaky</h3>
                                                </a>
                                            </aside>

                                            <aside>
                                                <strong>Dung tích</strong>
                                                <hr>
                                                <a href="{{route('details','tu-100-200-lit')}}">
                                                    <h3>Từ 100-200 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-200-300-lit')}}">
                                                    <h3>Từ 200-300 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-300-400-lit')}}">
                                                    <h3>Từ 300-400 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-400-500-lit')}}">
                                                    <h3>Từ 400-500 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-500-600-lit')}}">
                                                    <h3>Từ 500-600 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-600-700-lit')}}">
                                                    <h3>Từ 600-700 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-700-800-lit')}}">
                                                    <h3>Từ 700-800 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-800-900-lit')}}">
                                                    <h3>Từ 800-900 lít</h3>
                                                </a>
                                                <a href="{{route('details','tu-900-1000-lit')}}">
                                                    <h3>Từ 900-1000 lít</h3>
                                                </a>
                                                <a href="{{route('details','tren-1000-lit')}}">
                                                    <h3>Trên 1000 lít</h3>
                                                </a>
                                            </aside>
                                        </div>

                                    </li>

                                    
                                </ul>

                                
                            </div>
                        </li>

                        @if(Cache::has('groups'))


                            <?php 

                                $menu =  Cache::get('groups');
                            ?>
                        @endif  

                        @if(!empty($menu)  && $menu->count()>0)

                            @include('frontend/menu1')

                        @endif
                       
                        
                    </ul>
                </div>
                

            </div>

            
            <div class="header__main">
                <section>

                    <div class="category mobile">
                        <p class="category__txts" style="display:none">
                        <span class="menu-list">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span></p>
                       
                        <nav class="nav-list">
                            <a href="{{ route('details','ti-vi') }}">Tivi</a>
                            <a href="{{ route('details','may-giat') }}">Máy giặt</a>
                            <a href="{{ route('details','tu-lanh') }}">Tủ lạnh</a>
                            <a href="{{ route('details','dieu-hoa') }}">Điều hòa</a>
                            <a href="{{ route('details','tu-dong') }}">Tủ đông</a>
                            <a href="{{ route('details','tu-mat') }}">Tủ Mát</a>
                            <a href="{{ route('details','gia-dung') }}">Gia Dụng</a>
                            <a href="{{ route('details','lo-nuong') }}">Lò Nướng</a>
                   
                            <a href="{{ route('details','may-say-quan-ao') }}">Máy sấy quần áo</a>
                            <a href="{{ route('details','may-loc-nuoc') }}">A.O.Smith</a>
                            <a href="{{ route('details','quat') }}">Quạt</a>
                            <a href="{{ route('details','may-cu-trung-bay') }}">Máy cũ, Trưng bày</a>
                            
                                                        
                            <a href="/deal" class="promotion-menu">
                                Giảm giá <br>đặc biệt
                                <span class="item__label">- 5%</span>
                            </a>
                        </nav>
                    </div>
                   
                </section>
            </div>
          
        </header> -->


        <div class="tygh-top-panel clearfix">
                <div class="container-fluid ">
                    <div class="row-fluid ">
                        <div class="span16 nk-banner-top">
                            <script>
                                let _cdp365JourneySetting = {
                                    jrequest_events: [{
                                        event_category: "pageview",
                                        event_action: "view"
                                    }],
                                    jrequest_zones: "none"
                                }
                            </script>
                            <style>
                                .lp-menu ul {
                                    display: inline-block;
                                }

                                .m .lp-menu.menu-type-4 ul li {
                                    min-width: 33.33%;
                                    max-width: 33.33%;
                                }

                                .m .nk-main-content-checkout .nk-tra-gop-bang-the-tin-dung .item-content ul li img {
                                    object-fit: cover;
                                }

                                .m .nk-main-content-checkout .nk-tra-gop-bang-the-tin-dung .item-content ul li {
                                    height: 46px;
                                }

                                .m .flash-product .position-top-left {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                }

                                .m .flash-product .position-top-left img {
                                    height: 41px;
                                    object-fit: contain;
                                }

                                .m #nk-banner-home {
                                    margin-top: 6px;
                                }

                                .m .custom-dot-carousel.trang-chu.active {
                                    min-height: auto;
                                }
                            </style>
                                                                                                                                                                                                                                        
                            <span class="close_top_banner">✕</span>
                        </div>
                    </div>
                    <div class="row-fluid ">
                        <div class="span16 nk-header">
                            <div class="row-fluid ">
                                <div class="span16 container _nk_main">
                                    <div class="row-fluid ">
                                        <div class="span16 row flexthis _nk_bottom">
                                            <div class="row-fluid ">
                                                <div class="span4 ">
                                                    <h1 id="nk-logo">
                                                        <a href="/">
                                                            <img fetchpriority="high" loading="eager" src="/images/companies/_1/html/2017/T11/homepage/Logo_NK.svg" width="242px" height="42px" alt="">
                                                        </a>
                                                    </h1>
                                                </div>
                                                <div class="span12 nk-nav-right">
                                                    <div class="row-fluid ">
                                                        <div class="span16 ">
                                                            <div class="header-right" id="nk-holine-new">
                                                                <div id="nk-location" class="nk_tooltip nk_tooltip_ext newstyle">
                                                                    <!-- <ul>
                                                                        <li class="placeholder-info-box">
                                                                            <i class="nki-placeholder-3"></i>
                                                                            <div>
                                                                                <span class="title">Xem giá tại</span>
                                                                                <br>
                                                                                <a class="nk-select-loccation" id="nk-select-loccation">TP.HCM</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul> -->
                                                                    <div id="popUpChangeProvince" class="modal">
                                                                        <div class="modal-background bnt-close-popup"></div>
                                                                        <div class="popup_location popup_location_list">
                                                                            <a class="nki-Vector nk-close-ext bnt-close-popup"></a>
                                                                            <h2>Chọn tỉnh thành để xem đúng giá &amp; khuyến mãi:</h2>
                                                                            <div class="nk-search-box">
                                                                                <input type="text" placeholder="Tìm kiếm tỉnh thành." class="act_search">
                                                                                <button>
                                                                                    <i class="nki-search"></i>
                                                                                </button>
                                                                            </div>
                                                                            <div class="nk-location-list">
                                                                                <a data-id="001" data-name="TP.HCM" data-alias="tp.hcm" data-value="001" class="item_area checker">TP.HCM <div class="icon">
                                                                                        <svg height="15" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-check-circle">
                                                                                            <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </a>
                                                                                <a data-id="027" data-name="Hà Nội" data-alias="ha noi" data-value="027" class="item_area">Hà Nội</a>
                                                                                <a data-id="002" data-name="Bình Dương" data-alias="binh duong" data-value="002" class="item_area">Bình Dương</a>
                                                                                <a data-id="031" data-name="Hải Phòng" data-alias="hai phong" data-value="031" class="item_area">Hải Phòng</a>
                                                                                <a data-id="004" data-name="Đồng Nai" data-alias="dong nai" data-value="004" class="item_area">Đồng Nai</a>
                                                                                <a data-id="061" data-name="Quảng Ninh" data-alias="quang ninh" data-value="061" class="item_area">Quảng Ninh</a>
                                                                                <a data-id="012" data-name="Bà Rịa - Vũng Tàu" data-alias="ba ria vung tau" data-value="012" class="item_area">Bà Rịa - Vũng Tàu</a>
                                                                                <a data-id="054" data-name="Thái Nguyên" data-alias="thai nguyen" data-value="054" class="item_area">Thái Nguyên</a>
                                                                                <a data-id="040" data-name="Lâm Đồng" data-alias="lam dong" data-value="040" class="item_area">Lâm Đồng</a>
                                                                                <a data-id="045" data-name="Phú Thọ" data-alias="phu tho" data-value="045" class="item_area">Phú Thọ</a>
                                                                                <a data-id="018" data-name="Bình Thuận" data-alias="binh thuan" data-value="018" class="item_area">Bình Thuận</a>
                                                                                <a data-id="041" data-name="Nam Định" data-alias="nam dinh" data-value="041" class="item_area">Nam Định</a>
                                                                                <a data-id="007" data-name="Tiền Giang" data-alias="tien giang" data-value="007" class="item_area">Tiền Giang</a>
                                                                                <a data-id="055" data-name="Thanh Hóa" data-alias="thanh hoa" data-value="055" class="item_area">Thanh Hóa</a>
                                                                                <a data-id="006" data-name="Bến Tre" data-alias="ben tre" data-value="006" class="item_area">Bến Tre</a>
                                                                                <a data-id="042" data-name="Nghệ An" data-alias="nghe an" data-value="042" class="item_area">Nghệ An</a>
                                                                                <a data-id="003" data-name="Vĩnh Long" data-alias="vinh long" data-value="003" class="item_area">Vĩnh Long</a>
                                                                                <a data-id="056" data-name="Thừa Thiên Huế" data-alias="thua thien hue" data-value="056" class="item_area">Thừa Thiên Huế</a>
                                                                                <a data-id="057" data-name="Trà Vinh" data-alias="tra vinh" data-value="057" class="item_area">Trà Vinh</a>
                                                                                <a data-id="021" data-name="Đà Nẵng" data-alias="da nang" data-value="021" class="item_area">Đà Nẵng</a>
                                                                                <a data-id="010" data-name="An Giang" data-alias="an giang" data-value="010" class="item_area">An Giang</a>
                                                                                <a data-id="049" data-name="Quảng Ngãi" data-alias="quang ngai" data-value="049" class="item_area">Quảng Ngãi</a>
                                                                                <a data-id="008" data-name="Cần Thơ" data-alias="can tho" data-value="008" class="item_area">Cần Thơ</a>
                                                                                <a data-id="016" data-name="Bình Định" data-alias="binh dinh" data-value="016" class="item_area">Bình Định</a>
                                                                                <a data-id="035" data-name="Kiên Giang" data-alias="kien giang" data-value="035" class="item_area">Kiên Giang</a>
                                                                                <a data-id="024" data-name="Gia Lai" data-alias="gia lai" data-value="024" class="item_area">Gia Lai</a>
                                                                                <a data-id="011" data-name="Bạc Liêu" data-alias="bac lieu" data-value="011" class="item_area">Bạc Liêu</a>
                                                                                <a data-id="022" data-name="Đắk Lắk" data-alias="dak lak" data-value="022" class="item_area">Đắk Lắk</a>
                                                                                <a data-id="020" data-name="Cà Mau" data-alias="ca mau" data-value="020" class="item_area">Cà Mau</a>
                                                                                <a data-id="034" data-name="Khánh Hòa" data-alias="khanh hoa" data-value="034" class="item_area">Khánh Hòa</a>
                                                                                <a data-id="014" data-name="Bắc Giang" data-alias="bac giang" data-value="014" class="item_area">Bắc Giang</a>
                                                                                <a data-id="013" data-name="Bắc Kạn" data-alias="bac kan" data-value="013" class="item_area">Bắc Kạn</a>
                                                                                <a data-id="015" data-name="Bắc Ninh" data-alias="bac ninh" data-value="015" class="item_area">Bắc Ninh</a>
                                                                                <a data-id="017" data-name="Bình Phước" data-alias="binh phuoc" data-value="017" class="item_area">Bình Phước</a>
                                                                                <a data-id="019" data-name="Cao Bằng" data-alias="cao bang" data-value="019" class="item_area">Cao Bằng</a>
                                                                                <a data-id="025" data-name="Hà Giang" data-alias="ha giang" data-value="025" class="item_area">Hà Giang</a>
                                                                                <a data-id="026" data-name="Hà Nam" data-alias="ha nam" data-value="026" class="item_area">Hà Nam</a>
                                                                                <a data-id="029" data-name="Hà Tĩnh" data-alias="ha tinh" data-value="029" class="item_area">Hà Tĩnh</a>
                                                                                <a data-id="030" data-name="Hải Dương" data-alias="hai duong" data-value="030" class="item_area">Hải Dương</a>
                                                                                <a data-id="066" data-name="Hậu Giang" data-alias="hau giang" data-value="066" class="item_area">Hậu Giang</a>
                                                                                <a data-id="032" data-name="Hòa Bình" data-alias="hoa binh" data-value="032" class="item_area">Hòa Bình</a>
                                                                                <a data-id="033" data-name="Hưng Yên" data-alias="hung yen" data-value="033" class="item_area">Hưng Yên</a>
                                                                                <a data-id="036" data-name="Kon Tum" data-alias="kon tum" data-value="036" class="item_area">Kon Tum</a>
                                                                                <a data-id="037" data-name="Lai Châu" data-alias="lai chau" data-value="037" class="item_area">Lai Châu</a>
                                                                                <a data-id="038" data-name="Lạng Sơn" data-alias="lang son" data-value="038" class="item_area">Lạng Sơn</a>
                                                                                <a data-id="039" data-name="Lào Cai" data-alias="lao cai" data-value="039" class="item_area">Lào Cai</a>
                                                                                <a data-id="005" data-name="Long An" data-alias="long an" data-value="005" class="item_area">Long An</a>
                                                                                <a data-id="043" data-name="Ninh Bình" data-alias="ninh binh" data-value="043" class="item_area">Ninh Bình</a>
                                                                                <a data-id="044" data-name="Ninh Thuận" data-alias="ninh thuan" data-value="044" class="item_area">Ninh Thuận</a>
                                                                                <a data-id="046" data-name="Phú Yên" data-alias="phu yen" data-value="046" class="item_area">Phú Yên</a>
                                                                                <a data-id="047" data-name="Quảng Bình" data-alias="quang binh" data-value="047" class="item_area">Quảng Bình</a>
                                                                                <a data-id="048" data-name="Quảng Nam" data-alias="quang nam" data-value="048" class="item_area">Quảng Nam</a>
                                                                                <a data-id="009" data-name="Quảng Trị" data-alias="quang tri" data-value="009" class="item_area">Quảng Trị</a>
                                                                                <a data-id="051" data-name="Sóc Trăng" data-alias="soc trang" data-value="051" class="item_area">Sóc Trăng</a>
                                                                                <a data-id="050" data-name="Sơn La" data-alias="son la" data-value="050" class="item_area">Sơn La</a>
                                                                                <a data-id="052" data-name="Tây Ninh" data-alias="tay ninh" data-value="052" class="item_area">Tây Ninh</a>
                                                                                <a data-id="053" data-name="Thái Bình" data-alias="thai binh" data-value="053" class="item_area">Thái Bình</a>
                                                                                <a data-id="058" data-name="Tuyên Quang" data-alias="tuyen quang" data-value="058" class="item_area">Tuyên Quang</a>
                                                                                <a data-id="059" data-name="Vĩnh Phúc" data-alias="vinh phuc" data-value="059" class="item_area">Vĩnh Phúc</a>
                                                                                <a data-id="060" data-name="Yên Bái" data-alias="yen bai" data-value="060" class="item_area">Yên Bái</a>
                                                                                <a data-id="068" data-name="Đắk Nông" data-alias="dak nong" data-value="068" class="item_area">Đắk Nông</a>
                                                                                <a data-id="067" data-name="Điện Biên" data-alias="dien bien" data-value="067" class="item_area">Điện Biên</a>
                                                                                <a data-id="023" data-name="Đồng Tháp" data-alias="dong thap" data-value="023" class="item_area">Đồng Tháp</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="nk-search">
                                                                    <form action="https://www.nguyenkim.com/tim-kiem.html" name="search_form" method="get" class="cm-processed-form">
                                                                        <div class="nk-search-box">
                                                                            <input type="text" id="tags" name="key" value="" id="search_input" placeholder="Bạn cần tìm gì hôm nay ?" autocomplete="off">
                                                                            <button>
                                                                                <i class="nki-search"></i>
                                                                            </button>
                                                                            <div class="nk-search-hint">
                                                                                <div class="search-result" style="display: none;">
                                                                                    <ul class="nk-search-cate">
                                                                                        <li></li>
                                                                                    </ul>
                                                                                    <ul class="nk-search-product-item">
                                                                                        <li></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div id="nk-cart">
                                                                    <ul>
                                                                        <li class="cart-info-box nk_tooltip" data-toggle=".nk-cart-content" data-overlay="true">
                                                                            <a href="javascript:void(0)" class="checkout_header" onclick="showToCart()">
                                                                                <div class="icon"><i class="nki-shopping-cart"></i>
                                                                                    @if($number_cart>0)
                                                                                    <span class="mount">{{$number_cart }}</span>
                                                                                    <span class="mount">{{$number_cart }}</span></div>
                                                                                    @endif
                                                                                Giỏ hàng 
                                                                            </a>
                                                                            
                                                                        </li>
                                                                        <li class="search-order">
                                                                            <div class="icon">
                                                                                <span class="material-symbols-rounded" style=" display: block; color: white; font-size: 26px">history</span>
                                                                            </div>
                                                                            <a href="/tra-cuu.html"> Tra cứu đơn hàng </a>
                                                                        </li>
                                                                        <li id="login_form">
                                                                            <a href="login.html?return_url=index.php" class="nk-text-login">
                                                                                <i class="nki-user"></i> Tài khoản </a>
                                                                        </li>
                                                                        <li id="login_form2" class="nk_tooltip" data-toggle=".nk-login-content" data-overlay="overlay" style="display: none;"></li>
                                                                        <li class="nk_tooltip" data-toggle=".nk-hotline-content1" data-overlay="true">
                                                                            <a href="tel:18006800">
                                                                                <div class="icon">
                                                                                    <i class="nki-Phone"></i>
                                                                                </div>
                                                                                <p>
                                                                                    <span>Gọi mua: 1800.6800 (Miễn phí)</span>
                                                                                </p>
                                                                            </a>
                                                                            <div class="nk-hotline-content1">
                                                                                <div class="icon-up"></div>
                                                                                <p>
                                                                                    <span>Thời gian hoạt động</span>
                                                                                    <span class="color3">8h00 - 21h00</span>
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid ">
                        <div class="span16 nk-menu bg-white clearfix">
                            <div class="row-fluid ">
                                <div class="span16 container">
                                    <div class="row-fluid ">
                                        <div class="span16 row">
                                            <div class="row-fluid ">
                                                <div class="span4 wrap-grid-menu">
                                                    <div id="nk-danh-muc-san-pham-left" class="nk-danh-muc-trang-chu">
                                                        <h3>
                                                            <i class="nki-menu"></i>
                                                            <b>Danh mục sản phẩm</b>
                                                        </h3>
                                                        <ul>
                                                            <li class="left-menu">
                                                                <div class="menu-item">
                                                                    <div class="icon">
                                                                        <i class="nki-menu-television"></i>
                                                                    </div>
                                                                    <p>
                                                                        <a href="/tivi/">Tivi</a>
                                                                        <a href="/amply-va-loa/">Loa</a>
                                                                        <a href="/dan-karaoke/">Dàn Karaoke</a>
                                                                    </p>
                                                                </div>
                                                                <div class="sub-menu tivi-loa-amthanh" style="display: none;">
                                                                    <div class=" menu-tivi children_sort">
                                                                        <div class="item row2 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Tivi">
                                                                                    <a class="a-links" href="/tivi-man-hinh-lcd/?sort_by=position&amp;sort_order=desc">Tivi <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Thương hiệu">
                                                                                    <a class="a-links" href="https://www.nguyenkim.com/tivi-man-hinh-lcd/">Thương hiệu <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Samsung" class="a-links" href="/tivi-lcd-samsung/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Samsung </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Sony" class="a-links" href="/tivi-lcd-sony/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Sony </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="LG" class="a-links" href="/tivi-lcd-lg/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> LG </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="TCL" class="a-links" href="/tivi-lcd-tcl/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> TCL </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Hisense" class="a-links" href="/tivi-hisense/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Hisense </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Philips" class="a-links" href="/tivi-philips/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Philips </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Sharp" class="a-links" href="/tivi-lcd-sharp/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Sharp </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Casper" class="a-links" href="/tivi-casper/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Casper </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Kích thước">
                                                                                    <a class="a-links" href="https://www.nguyenkim.com/tivi-man-hinh-lcd/">Kích thước <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Từ 27&quot; - 43&quot;" class="a-links" href="https://www.nguyenkim.com/tivi/?features_hash=76-214430-155065-155062-155057">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Từ 27" - 43" </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Từ 44&quot; - 55&quot; " class="a-links" href="https://www.nguyenkim.com/tivi/?features_hash=76-155057-155045-155037">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Từ 44" - 55" </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Từ 56&quot; - 65&quot;" class="a-links" href="https://www.nguyenkim.com/tivi/?features_hash=76-155037-155033">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Từ 56" - 65" </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Từ 66&quot; - 75&quot;" class="a-links" href="https://www.nguyenkim.com/tivi/?features_hash=76-155033-155040-155030">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Từ 66" - 75" </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Trên 75&quot;" class="a-links" href="https://www.nguyenkim.com/tivi/?features_hash=76-84770-81471-155025-206067">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Trên 75" </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Loại Tivi">
                                                                                    <a class="a-links" href="/tivi/">Loại Tivi <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Tivi QLED" class="a-links" href="https://www.nguyenkim.com/tivi/?features_hash=36-226338-217896-227718-79004">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Tivi QLED </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Tivi OLED" class="a-links" href="https://www.nguyenkim.com/tivi/?utm_campaign=dRsTOFDW2NKfTG-5TsQaWA&amp;traffic_id=62abd3b854b4650042b77642&amp;features_hash=36-225299-67778">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Tivi OLED </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Tivi NanoCell" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/tivi/?utm_campaign=dRsTOFDW2NKfTG-5TsQaWA&amp;traffic_id=62abd3b854b4650042b77642&amp;features_hash=36-228366">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Tivi NanoCell </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Tivi 8K" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/tivi/?utm_campaign=dRsTOFDW2NKfTG-5TsQaWA&amp;traffic_id=62abd3b854b4650042b77642&amp;features_hash=36-77336">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Tivi 8K </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Google/Android Tivi" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/tivi/?utm_campaign=dRsTOFDW2NKfTG-5TsQaWA&amp;traffic_id=62abd3b854b4650042b77642&amp;features_hash=36-195380-72010">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Google/Android Tivi </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Smart Tivi" class="a-links" href="https://www.nguyenkim.com/tivi/?utm_campaign=dRsTOFDW2NKfTG-5TsQaWA&amp;traffic_id=62abd3b854b4650042b77642&amp;features_hash=36-206168-229788-82928">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Smart Tivi </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Tivi thường (Non Smart Tivi)" class="a-links" rel="nofollow">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Tivi thường (Non Smart Tivi) </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Lifestyle Tivi" class="a-links" href="https://www.nguyenkim.com/tivi/?utm_campaign=dRsTOFDW2NKfTG-5TsQaWA&amp;traffic_id=62abd3b854b4650042b77642&amp;features_hash=36-227973">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Lifestyle Tivi </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Tivi Máy Chiếu" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/tivi/?utm_campaign=dRsTOFDW2NKfTG-5TsQaWA&amp;traffic_id=62abd3b854b4650042b77642&amp;features_hash=36-230067">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Tivi Máy Chiếu </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row1 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Loa - Âm thanh">
                                                                                    <a class="a-links" href="/amply-va-loa/">Loa - Âm thanh <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Loa" class="a-links" href="/loa/"> Loa </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Micro" class="a-links" href="/micro/"> Micro </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Amply" class="a-links" href="/amply/"> Amply </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Micro" class="a-links" rel="nofollow" href="/micro/"> Micro </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Dàn âm thanh" class="a-links" href="/dan-may-nghe-nhac/"> Dàn âm thanh </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Loa thanh (Soundbar)" class="a-links" href="/loa-soundbar/"> Loa thanh (Soundbar) </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Loa kéo" class="a-links" rel="nofollow" href="/loa/?features_hash=399-124415">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Loa kéo </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Loa Bluetooth" class="a-links" href="/loa-di-dong/"> Loa Bluetooth </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Đầu DVD Bluray" class="a-links" href="/dau-dia-dvd-bluray/"> Đầu DVD Bluray </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Phụ kiện cho Tivi và Âm Thanh"> Phụ kiện cho Tivi và Âm Thanh </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Cáp HDMI - Cáp Tivi" class="a-links" rel="nofollow" href="/day-cap-chuyen-doi/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Cáp HDMI - Cáp Tivi </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Giá treo tivi" class="a-links" rel="nofollow" href="/gia-treo-tivi/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Giá treo tivi </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="left-menu">
                                                                <div class="menu-item">
                                                                    <div class="icon">
                                                                        <i class="nki-menu-fridge"></i>
                                                                    </div>
                                                                    <p>
                                                                        <a href="/tu-lanh/">Tủ lạnh</a>
                                                                        <a href="/tu-dong/">Tủ đông</a>
                                                                        <a href="tu-mat-tu-giu-lanh/">Tủ mát</a>
                                                                    </p>
                                                                </div>
                                                                <div class="sub-menu tu-lanh-tu-dong" style="display: none;">
                                                                    <div class=" menu-tulanh children_sort">
                                                                        <div class="item row2 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Tủ lạnh">
                                                                                    <a class="a-links" href="/tu-lanh/">Tủ lạnh <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Thương hiệu">
                                                                                    <a class="a-links" href="/tu-lanh/">Thương hiệu <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Samsung" class="a-links" href="/tu-lanh-samsung/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Samsung </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Panasonic" class="a-links" href="/tu-lanh-panasonic/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Panasonic </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Sharp" class="a-links" href="/tu-lanh-sharp/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Sharp </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="AQUA" class="a-links" href="/tu-lanh-aqua/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> AQUA </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Toshiba" class="a-links" href="/tu-lanh-toshiba/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Toshiba </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="LG" class="a-links" href="/tu-lanh-lg/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> LG </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Hitachi" class="a-links" href="/tu-lanh-hitachi/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Hitachi </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Electrolux" class="a-links" href="/tu-lanh-electrolux/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Electrolux </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Mitsubishi" class="a-links" rel="nofollow" href="/tu-lanh-mitsubishi/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Mitsubishi </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Casper" class="a-links" href="/tu-lanh-casper/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Casper </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Loại tủ lạnh">
                                                                                    <a class="a-links" href="https://www.nguyenkim.com/tu-lanh/?sort_by=position&amp;sort_order=desc">Loại tủ lạnh <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Multi doors" class="a-links" href="https://www.nguyenkim.com/tu-lanh/?sort_by=position&amp;sort_order=desc&amp;features_hash=82-93811">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Multi doors </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Side by side" class="a-links" href="https://www.nguyenkim.com/tu-lanh/?sort_by=position&amp;sort_order=desc&amp;features_hash=82-5872">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Side by side </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Ngăn đá trên" class="a-links" href="https://www.nguyenkim.com/tu-lanh/?sort_by=position&amp;sort_order=desc&amp;features_hash=82-10311">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Ngăn đá trên </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Ngăn đá dưới" class="a-links" href="https://www.nguyenkim.com/tu-lanh/?sort_by=position&amp;sort_order=desc&amp;features_hash=82-23889">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Ngăn đá dưới </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Mini" class="a-links" href="https://www.nguyenkim.com/tu-lanh/?sort_by=position&amp;sort_order=desc&amp;features_hash=82-35046">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Mini </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Dung tích">
                                                                                    <a class="a-links" href="/tu-lanh/">Dung tích <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Dưới 150 lít" class="a-links" href="https://www.nguyenkim.com/tu-lanh/?sort_by=position&amp;sort_order=desc&amp;features_hash=86-0-149-LIT">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Dưới 150 lít </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="150 - 300 lít" class="a-links" href="https://www.nguyenkim.com/tu-lanh/?sort_by=position&amp;sort_order=desc&amp;features_hash=86-150-300-LIT">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> 150 - 300 lít </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="300 - 450 lít" class="a-links" href="https://www.nguyenkim.com/tu-lanh/?sort_by=position&amp;sort_order=desc&amp;features_hash=86-300-450-LIT">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> 300 - 450 lít </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Trên 450 lít" class="a-links" href="https://www.nguyenkim.com/tu-lanh/?sort_by=position&amp;sort_order=desc&amp;features_hash=86-451-1000-LIT">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Trên 450 lít </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Tủ đông">
                                                                                    <a class="a-links" href="/tu-dong/">Tủ đông <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Sanaky" class="a-links" rel="nofollow" href="/tu-dong-sanaky/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Sanaky </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Alaska" class="a-links" href="/tu-dong-alaska/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Alaska </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Kangaroo" class="a-links" rel="nofollow" href="/tu-dong-kangaroo/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Kangaroo </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="LG" class="a-links" rel="nofollow" href="/tu-dong-lg/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> LG </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="AQUA" class="a-links" href="/tu-dong-aqua/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> AQUA </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Sunhouse" class="a-links" rel="nofollow" href="/tu-dong-sunhouse/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Sunhouse </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Tủ mát">
                                                                                    <a class="a-links" href="/tu-mat-tu-giu-lanh/">Tủ mát <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Sanaky" class="a-links" href="/tu-mat-sanaky/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Sanaky </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Alaska" class="a-links" href="/tu-mat-alaska/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Alaska </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Kangaroo" class="a-links" rel="nofollow" href="/tu-mat-kangroo/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Kangaroo </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="AQUA" class="a-links" rel="nofollow" href="/tu-mat-aqua/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> AQUA </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="left-menu">
                                                                <div class="menu-item">
                                                                    <div class="icon">
                                                                        <i class="nki-menu-washer"></i>
                                                                    </div>
                                                                    <p>
                                                                        <a href="/may-giat/">Máy giặt</a>
                                                                        <a href="/may-say-quan-ao/">Máy sấy</a>
                                                                        <a href="/may-nuoc-nong/">Máy nước nóng</a>
                                                                    </p>
                                                                </div>
                                                                <div class="sub-menu may-giat-may-say" style="display: none;">
                                                                    <div class=" menu-maygiat children_sort" style="display: none;">
                                                                        <div class="item row2 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Máy giặt">
                                                                                    <a class="a-links" href="/may-giat/">Máy giặt <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Thương hiệu">
                                                                                    <a class="a-links" href="https://www.nguyenkim.com/may-giat/?sort_by=position&amp;sort_order=desc">Thương hiệu <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="LG" class="a-links" href="/may-giat-lg/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> LG </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Electrolux" class="a-links" href="/may-giat-electrolux/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Electrolux </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Samsung" class="a-links" href="/may-giat-samsung/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Samsung </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Toshiba" class="a-links" href="/may-giat-toshiba/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Toshiba </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Panasonic" class="a-links" href="/may-giat-panasonic/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Panasonic </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="AQUA" class="a-links" href="/may-giat-aqua/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> AQUA </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Whirlpool" class="a-links" href="/may-giat-whirlpool/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Whirlpool </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Casper" class="a-links" rel="nofollow" href="/may-giat-casper/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Casper </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Sharp" class="a-links" href="/may-giat-sharp/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Sharp </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Loại máy giặt">
                                                                                    <a class="a-links" href="https://www.nguyenkim.com/may-giat/?sort_by=position&amp;sort_order=desc">Loại máy giặt <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Cửa trước" class="a-links" href="https://www.nguyenkim.com/may-giat/?sort_by=position&amp;sort_order=desc&amp;features_hash=72-6127">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Cửa trước </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Cửa trên" class="a-links" href="https://www.nguyenkim.com/may-giat/?sort_by=position&amp;sort_order=desc&amp;features_hash=72-5708">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Cửa trên </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Lồng đôi" class="a-links" href="https://www.nguyenkim.com/may-giat/?sort_by=position&amp;sort_order=desc&amp;features_hash=72-95507">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Lồng đôi </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Tủ chăm sóc quần áo" class="a-links" href="https://www.nguyenkim.com/may-giat/?features_hash=72-127539">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Tủ chăm sóc quần áo </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Tháp giặt sấy" class="a-links" href="https://www.nguyenkim.com/may-giat/?features_hash=72-293524">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Tháp giặt sấy </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Khối lượng">
                                                                                    <a class="a-links" href="https://www.nguyenkim.com/may-giat/?sort_by=position&amp;sort_order=desc">Khối lượng <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Trên 10kg" class="a-links" href="https://www.nguyenkim.com/may-giat/?sort_by=position&amp;sort_order=desc&amp;features_hash=73-73800-10662-86165-8906-16001-86179-8434-25569-10719-104868-9855-24350-119912-6594-24097-96379-90445-79428">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Trên 10kg </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Từ 9kg đến 10kg" class="a-links" href="https://www.nguyenkim.com/may-giat/?sort_by=position&amp;sort_order=desc&amp;features_hash=73-5771-97521-6606">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Từ 9kg đến 10kg </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Từ 8kg đến 9kg" class="a-links" href="https://www.nguyenkim.com/may-giat/?sort_by=position&amp;sort_order=desc&amp;features_hash=73-6317-6850-5709-7177">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Từ 8kg đến 9kg </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Dưới 8kg" class="a-links" href="https://www.nguyenkim.com/may-giat/?sort_by=position&amp;sort_order=desc&amp;features_hash=73-127543-6142-6110-6861-7542-116953">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Dưới 8kg </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row1 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Máy sấy">
                                                                                    <a class="a-links" href="/may-say-quan-ao/">Máy sấy <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Electrolux" class="a-links" href="/may-say-quan-ao-electrolux/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Electrolux </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Samsung" class="a-links" rel="nofollow" href="/may-say-quan-ao-samsung/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Samsung </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="LG" class="a-links" rel="nofollow" href="/may-say-quan-ao-lg/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> LG </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="AQUA" class="a-links" rel="nofollow" href="/may-say-quan-ao-aqua/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> AQUA </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Casper" class="a-links" rel="nofollow" href="/may-say-quan-ao-casper/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Casper </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Candy" class="a-links" href="/may-say-quan-ao-candy/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Candy </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Whirlpool" class="a-links" href="/may-say-quan-ao-whirlpool/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Whirlpool </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy sấy 8-10kg" class="a-links" href="https://www.nguyenkim.com/may-say-quan-ao/?features_hash=74-86281-12812-9051-41686-10042-80406"> Máy sấy 8-10kg </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy sấy trên 10kg" class="a-links" href="/may-say-quan-ao/?features_hash=74-27815-88901-10220"> Máy sấy trên 10kg </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy sấy dưới 10 triệu" class="a-links" href="/may-say-quan-ao/?features_hash=34-0-4999999-VND_34-5000000-7000000-VND_34-7000000-10000000-VND"> Máy sấy dưới 10 triệu </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy sấy trên 10 triệu" class="a-links" href="https://www.nguyenkim.com/may-say-quan-ao/?features_hash=34-10000001-1000000000-VND"> Máy sấy trên 10 triệu </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Máy nước nóng">
                                                                                    <a class="a-links" href="/may-nuoc-nong/">Máy nước nóng <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Ariston" class="a-links" href="/may-nuoc-nong-ariston/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Ariston </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Panasonic" class="a-links" href="/may-nuoc-nong-panasonic/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Panasonic </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Ferroli" class="a-links" href="/may-nuoc-nong-ferroli/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Ferroli </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Centon" class="a-links" href="/may-nuoc-nong-centon/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Centon </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Electrolux" class="a-links" href="/may-nuoc-nong-electrolux/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Electrolux </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Legend" class="a-links" href="/may-nuoc-nong-legend/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Legend </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Anpha" class="a-links" href="/may-nuoc-nong-alpha/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Anpha </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Casper" class="a-links" href="/may-nuoc-nong-casper/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Casper </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Trực tiếp không bơm tăng áp" class="a-links" href="/may-nuoc-nong/?features_hash=103-6010_104-6159"> Trực tiếp không bơm tăng áp </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Trực tiếp có bơm tăng áp" class="a-links" href="/may-nuoc-nong/?features_hash=103-6010_104-6011"> Trực tiếp có bơm tăng áp </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Gián tiếp" class="a-links" href="/may-nuoc-nong/?features_hash=103-6047"> Gián tiếp </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="left-menu">
                                                                <div class="menu-item">
                                                                    <div class="icon">
                                                                        <i class="nki-menu-air-conditioner icon-new"></i>
                                                                    </div>
                                                                    <p>
                                                                        <a href="/may-lanh/">Máy lạnh</a>
                                                                        <a href="/quat-vi/">Quạt</a>
                                                                        <a href="/may-loc-khong-khi/">Lọc khí</a>
                                                                    </p>
                                                                </div>
                                                                <div class="sub-menu may-lanh" style="display: none;">
                                                                    <div class=" menu-maylanh children_sort" style="display: none;">
                                                                        <div class="item row2 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Máy lạnh">
                                                                                    <a class="a-links" href="/may-lanh/">Máy lạnh <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Thương hiệu">
                                                                                    <span class="js_hidden_link" data-url="L21heS1sYW5oLw==">Thương hiệu <span class="nki-sticker-hot nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Panasonic" class="a-links" href="/may-lanh-panasonic/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Panasonic </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Daikin" class="a-links" href="/may-lanh-daikin/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Daikin </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Toshiba" class="a-links" href="/may-lanh-toshiba/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Toshiba </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Casper" class="a-links" href="/may-lanh-casper/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Casper </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="LG" class="a-links" href="/may-lanh-lg/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> LG </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Samsung" class="a-links" href="/may-lanh-samsung/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Samsung </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Sharp" class="a-links" href="/may-lanh-sharp/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Sharp </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Mitsubishi Electric" class="a-links" href="/may-lanh-mitsubishi/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Mitsubishi Electric </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <span title="AQUA" class="js_hidden_link" rel="nofollow" data-url="L21heS1sYW5oLWFxdWEv">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> AQUA </span>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <span title="Midea" class="js_hidden_link" data-url="L21heS1sYW5oLW1pZGVhLw==">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Midea </span>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a title="Thương hiệu" href="/may-lanh/">Xem thêm <i class="text-arrow"> →</i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Công suất làm lạnh">
                                                                                    <span class="js_hidden_link" data-url="L21heS1sYW5oLw==">Công suất làm lạnh <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="1 HP" class="a-links" href="https://www.nguyenkim.com/may-lanh/?sort_by=position&amp;sort_order=desc&amp;features_hash=70-5407">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> 1 HP </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="1.5 HP" class="a-links" href="https://www.nguyenkim.com/may-lanh/?sort_by=position&amp;sort_order=desc&amp;features_hash=70-5976">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> 1.5 HP </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="2 HP" class="a-links" href="https://www.nguyenkim.com/may-lanh/?sort_by=position&amp;sort_order=desc&amp;features_hash=70-5523">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> 2 HP </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="2.5 HP" class="a-links" href="https://www.nguyenkim.com/may-lanh/?sort_by=position&amp;sort_order=desc&amp;features_hash=70-7334">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> 2.5 HP </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Giá bán">
                                                                                    <span class="js_hidden_link" data-url="L21heS1sYW5oLw==">Giá bán <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Dưới 7 triệu" class="a-links" href="https://www.nguyenkim.com/may-lanh/?features_hash=34-0-6999999-VND">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Dưới 7 triệu </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Từ 7 - 10 triệu" class="a-links" href="https://www.nguyenkim.com/may-lanh/?sort_by=position&amp;sort_order=desc&amp;features_hash=34-7000000-10000000-VND">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Từ 7 - 10 triệu </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Từ 10 - 15 triệu" class="a-links" href="https://www.nguyenkim.com/may-lanh/?features_hash=34-10000001-15000000-VND">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Từ 10 - 15 triệu </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Trên 15 triệu" class="a-links" href="https://www.nguyenkim.com/may-lanh/?features_hash=34-15000001-9999999999.99-VND">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Trên 15 triệu </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Quạt - sưởi">
                                                                                    <span class="js_hidden_link" data-url="L3F1YXQtdmkv">Quạt - sưởi <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Quạt điều hòa" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/quat-vi/?features_hash=65-148987-148986-5954">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Quạt điều hòa </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Quạt đứng" class="a-links" rel="nofollow">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Quạt đứng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Quạt bàn" class="a-links" rel="nofollow">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Quạt bàn </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Quạt lửng" class="a-links" rel="nofollow">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Quạt lửng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Quạt tháp" class="a-links" rel="nofollow">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Quạt tháp </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Quạt trần" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/quat-vi/?features_hash=65-6230">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Quạt trần </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Quạt sạc" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/quat-vi/?features_hash=65-6097">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Quạt sạc </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy hút ẩm" class="a-links" rel="nofollow" href="/may-hut-am-tao-am/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy hút ẩm </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy sưởi - Đèn sưởi" class="a-links" rel="nofollow" href="/may-suoi-den-suoi/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy sưởi - Đèn sưởi </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Máy hút ẩm">
                                                                                    <a class="a-links" href="/may-hut-am-tao-am/">Máy hút ẩm <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Stadler Form" class="a-links" href="/may-hut-am-stadler-form/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Stadler Form </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Máy lọc không khí">
                                                                                    <a class="a-links" href="/may-loc-khong-khi/">Máy lọc không khí <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="LG" class="a-links" href="/may-loc-khong-khi-lg/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> LG </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Dyson" class="a-links" rel="nofollow" href="/may-loc-khong-khi-dyson/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Dyson </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Sharp" class="a-links" href="/may-loc-khong-khi-sharp/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Sharp </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Hitachi" class="a-links" href="/may-loc-khong-khi-hitachi/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Hitachi </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Coway" class="a-links" href="/may-loc-khong-khi-coway/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Coway </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <span title="Daikin" class="js_hidden_link" data-url="aHR0cHM6Ly93d3cubmd1eWVua2ltLmNvbS9tYXktbG9jLWtob25nLWtoaS1kYWlraW4v">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Daikin </span>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Samsung" class="a-links" href="/may-loc-khong-khi-samsung/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Samsung </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Electrolux" class="a-links" href="/may-loc-khong-khi-electrolux/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Electrolux </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Xiaomi" class="a-links" href="/may-loc-khong-khi-xiaomi/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Xiaomi </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <span title="Panasonic" class="js_hidden_link" data-url="L21heS1sb2Mta2hvbmcta2hpLXBhbmFzb25pYy8=">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Panasonic </span>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a title="Máy lọc không khí" href="/may-loc-khong-khi/">Xem thêm <i class="text-arrow"> →</i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="left-menu">
                                                                <div class="menu-item">
                                                                    <div class="icon">
                                                                        <img src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/icon/noi chien-01.webp" width="17px" height="17px" alt="noi chien">
                                                                    </div>
                                                                    <p>
                                                                        <a href="/gia-dung/">Điện gia dụng</a>
                                                                        <a href="/may-hut-bui/">Hút bụi</a>
                                                                        <a href="/noi-chien-khong-dau/">Nồi chiên</a>
                                                                    </p>
                                                                </div>
                                                                <div class="sub-menu dien-gia-dung" style="display: none;">
                                                                    <div class=" menu-diengiadung children_sort">
                                                                        <div class="item row2 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Nồi chiên không dầu">
                                                                                    <span class="js_hidden_link" data-url="L25vaS1jaGllbi1raG9uZy1kYXUv">Nồi chiên không dầu <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </h5>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Hút bụi">
                                                                                    <span class="js_hidden_link" data-url="L21heS1odXQtYnVpLw==">Hút bụi <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Robot" class="a-links" rel="nofollow">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Robot </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Cầm tay" class="a-links" rel="nofollow">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Cầm tay </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Dạng hộp" class="a-links" rel="nofollow">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Dạng hộp </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Công nghiệp" class="a-links" rel="nofollow">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Công nghiệp </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Bàn ủi">
                                                                                    <span class="js_hidden_link" data-url="L2Jhbi11aS1iYW4tbGEv">Bàn ủi <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bàn ủi hơi nước" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/ban-ui-ban-la/?features_hash=68-7040">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Bàn ủi hơi nước </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bàn ủi khô" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/ban-ui-ban-la/?features_hash=68-7293">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Bàn ủi khô </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Cây ủi hơi nước" class="a-links" rel="nofollow">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Cây ủi hơi nước </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bàn ủi chuyên dụng" class="a-links" rel="nofollow">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Bàn ủi chuyên dụng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Cải thiện nhà cửa"> Cải thiện nhà cửa </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Đèn điện" class="a-links" rel="nofollow" href="/den-dien-den-sac/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Đèn điện </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Quạt sạc" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/quat-vi/?features_hash=65-6097">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Quạt sạc </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy bơm nước" class="a-links" rel="nofollow" href="/may-bom-nuoc/"> Máy bơm nước </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy phát điện" class="a-links" href="/may-phat-dien/"> Máy phát điện </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="left-menu">
                                                                <div class="menu-item">
                                                                    <div class="icon">
                                                                        <img src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/icon/noi com-01.webp" width="17px" height="17px" alt="noi com">
                                                                    </div>
                                                                    <p>
                                                                        <a href="/gia-dung/">Đồ dùng bếp</a>
                                                                        <a href="/bep-dien/">Bếp điện</a>
                                                                        <a href="/noi-com-dien/">Nồi cơm</a>
                                                                    </p>
                                                                </div>
                                                                <div class="sub-menu gia-dung" style="display: none;">
                                                                    <div class=" menu-giadung children_sort">
                                                                        <div class="item row1 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Đồ dùng nhà bếp"> Đồ dùng nhà bếp </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Nồi cơm điện" class="a-links" href="/noi-com-dien/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Nồi cơm điện </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Lò vi sóng" class="a-links" href="/lo-vi-song-microwave/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Lò vi sóng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Nồi chiên không dầu" class="a-links" href="/noi-chien/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Nồi chiên không dầu </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bếp từ" class="a-links" href="/bep-dien/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Bếp từ </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bếp hồng ngoại" class="a-links" href="/bep-tu-hong-ngoai">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Bếp hồng ngoại </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bếp gas" class="a-links" href="/bep-gas/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Bếp gas </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <span title="Máy hút khói" class="js_hidden_link" data-url="L21heS1odXQtbXVpLw==">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy hút khói </span>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Nồi áp suất" class="a-links" href="/noi-ap-suat/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Nồi áp suất </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Thiết bị nướng" class="a-links" href="/lo-nuong-vi-nuong/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Thiết bị nướng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Nồi chức năng" class="a-links" href="/noi-da-nang/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Nồi chức năng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Lẩu điện" class="a-links" href="/lau-dien-da-nang/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Lẩu điện </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bình đun siêu tốc" class="a-links" href="/am-nuoc-binh-nuoc/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Bình đun siêu tốc </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Đồ dùng nhà bếp">
                                                                                    <span class="js_hidden_link" data-url="L2dpYS1kdW5nLw==">Đồ dùng nhà bếp <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <span title="Bình thủy điện" class="js_hidden_link" rel="nofollow" data-url="L2JpbmgtdGh1eS1kaWVuLw==">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Bình thủy điện </span>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy rửa chén" class="a-links" href="/may-rua-chen/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy rửa chén </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <span title="Máy sấy chén" class="js_hidden_link" rel="nofollow" data-url="L21heS1zYXktY2hlbi8=">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy sấy chén </span>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Dụng cụ nhà bếp">
                                                                                    <a class="a-links" href="/gia-dung/">Dụng cụ nhà bếp <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bộ nồi, nồi" class="a-links" href="/bo-noi-nau-an/"> Bộ nồi, nồi </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Chảo chống dính" class="a-links" rel="nofollow" href="/chao-chong-dinh/"> Chảo chống dính </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bình giữ nhiệt, Cà men" class="a-links" rel="nofollow" href="/binh-luong-tinh/"> Bình giữ nhiệt, Cà men </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Dụng cụ ăn" class="a-links" rel="nofollow" href="/dung-cu-nha-bep/"> Dụng cụ ăn </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="left-menu">
                                                                <div class="menu-item">
                                                                    <div class="icon">
                                                                        <img src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/icon/may-loc-nuoc.webp" width="18px" height="18px" alt="may-loc-nuoc">
                                                                    </div>
                                                                    <p>
                                                                        <a href="/may-loc-nuoc/">Lọc nước</a>
                                                                        <a href="/may-xay-sinh-to/">Sinh tố</a>
                                                                        <a href="/may-ep-trai-cay/">Xay ép</a>
                                                                    </p>
                                                                </div>
                                                                <div class="sub-menu loc-nuoc" style="display: none;">
                                                                    <div class=" menu-locnuoc children_sort">
                                                                        <div class="item row2 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Lọc nước">
                                                                                    <span class="js_hidden_link" data-url="L21heS1sb2MtbnVvYy8=">Lọc nước <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bình lọc nước" class="a-links" rel="nofollow" href="/binh-loc-nuoc/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Bình lọc nước </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy lọc nước" class="a-links" rel="nofollow" href="/may-loc-nuoc/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy lọc nước </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy lọc nước thường" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/may-loc-nuoc/?features_hash=411-233364">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy lọc nước thường </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy lọc nước nóng lạnh" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/may-loc-nuoc/?features_hash=411-233176">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy lọc nước nóng lạnh </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy lọc nước để bàn" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/may-loc-nuoc/?features_hash=411-232779">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy lọc nước để bàn </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Cây nước nóng lạnh" class="a-links" rel="nofollow" href="/may-nuoc-nong-lanh/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Cây nước nóng lạnh </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Sinh tố - Xay ép"> Sinh tố - Xay ép </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy xay sinh tố" class="a-links" rel="nofollow" href="/may-xay-sinh-to/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy xay sinh tố </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy ép trái cây" class="a-links" rel="nofollow" href="/may-ep-trai-cay/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy ép trái cây </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy vắt cam" class="a-links" rel="nofollow" href="/may-vat-cam/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy vắt cam </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy pha cà phê" class="a-links" rel="nofollow" href="/may-pha-ca-phe/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy pha cà phê </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy xay đa năng" class="a-links" rel="nofollow">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy xay đa năng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy đánh trứng" class="a-links" rel="nofollow" href="/may-danh-trung/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy đánh trứng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy xay thịt" class="a-links" rel="nofollow" href="/may-xay-thit/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy xay thịt </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="left-menu">
                                                                <div class="menu-item">
                                                                    <div class="icon">
                                                                        <span class="material-symbols-rounded"> heart_plus </span>
                                                                    </div>
                                                                    <p>
                                                                        <a href="/suc-khoe-va-lam-dep/">Sức khoẻ</a>
                                                                        <a href="/suc-khoe-va-lam-dep/">Làm đẹp</a>
                                                                    </p>
                                                                </div>
                                                                <div class="sub-menu suc-khoe" style="display: none;">
                                                                    <div class=" menu-suckhoe children_sort">
                                                                        <div class="item row1 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Làm đẹp">
                                                                                    <span class="js_hidden_link" data-url="L3N1Yy1raG9lLXZhLWxhbS1kZXAv">Làm đẹp <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy sấy tóc" class="a-links" href="/may-say-toc/?sort_by=position&amp;sort_order=desc"> Máy sấy tóc </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy cạo râu" class="a-links" href="/may-cao-rau/"> Máy cạo râu </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Sức khỏe">
                                                                                    <span class="js_hidden_link" data-url="L3N1Yy1raG9lLXZhLWxhbS1kZXAv">Sức khỏe <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Cân sức khỏe" class="a-links" rel="nofollow" href="/can-suc-khoe/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Cân sức khỏe </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Đo huyết áp" class="a-links" rel="nofollow" href="/thiet-bi-y-te/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Đo huyết áp </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy tập thể dục" class="a-links" rel="nofollow" href="/may-tap-da-nang/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy tập thể dục </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy massage" class="a-links" rel="nofollow" href="/may-massage-ghe-massage/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Máy massage </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="left-menu">
                                                                <div class="menu-item">
                                                                    <div class="icon">
                                                                        <i class="nki-menu-phone"></i>
                                                                    </div>
                                                                    <p>
                                                                        <a href="/dien-thoai-di-dong/">Điện thoại</a>
                                                                        <a href="/may-tinh-bang/">Tablet</a>
                                                                        <a href="/phu-kien/">Phụ kiện</a>
                                                                    </p>
                                                                </div>
                                                                <div class="sub-menu dien-thoai" style="display: none;">
                                                                    <div class=" menu-dienthoai children_sort">
                                                                        <div class="item row1 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Điện thoại">
                                                                                    <a class="a-links" href="/dien-thoai-di-dong/">Điện thoại <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Samsung" class="a-links" href="/dien-thoai-di-dong-samsung/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Samsung </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="iPhone" class="a-links" href="/dien-thoai-di-dong-apple-iphone/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> iPhone </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="OPPO" class="a-links" href="/dien-thoai-di-dong-oppo/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> OPPO </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Vivo" class="a-links" href="/dien-thoai-vivo/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Vivo </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Realme" class="a-links" href="/dien-thoai-realme/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Realme </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Nokia" class="a-links" href="/dien-thoai-di-dong-nokia/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Nokia </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Xiaomi" class="a-links" href="/dien-thoai-xiaomi/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Xiaomi </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="TCL" class="a-links" href="https://www.nguyenkim.com/dien-thoai-tcl">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> TCL </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Điện thoại 2 sim 2 sóng" class="a-links" href="/dien-thoai-di-dong/?features_hash=172-36722-35181-71028/"> Điện thoại 2 sim 2 sóng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Màn hình tràn viền" class="a-links" href="https://www.nguyenkim.com/dien-thoai-di-dong/?features_hash=365-97229"> Màn hình tràn viền </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Camera kép" class="a-links" href="/dien-thoai-di-dong/?features_hash=23-80164-95399-91829-97139-94181-96949-69312-91789-90763-93559-79714"> Camera kép </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row1 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Tablet">
                                                                                    <a class="a-links" href="/may-tinh-bang/">Tablet <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="iPad" class="a-links" href="/may-tinh-bang-apple-ipad/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> iPad </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Samsung" class="a-links" href="/may-tinh-bang-samsung/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Samsung </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Tablet trả góp 0%" class="a-links" href="/may-tinh-bang/?subcats=Y&amp;features_hash=99999-2"> Tablet trả góp 0% </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Màn hình lớn" class="a-links" href="/may-tinh-bang/?features_hash=163-44684-9405-36190-46039-9376"> Màn hình lớn </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bộ nhớ khủng" class="a-links" href="/may-tinh-bang/?features_hash=49-51316-16092"> Bộ nhớ khủng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy tính bảng giá rẻ" class="a-links" href="https://www.nguyenkim.com/may-tinh-bang/?features_hash=34-0-4999999-VND"> Máy tính bảng giá rẻ </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy tính bảng cao cấp" class="a-links" href="https://www.nguyenkim.com/may-tinh-bang/?features_hash=34-10000001-1000000000-VND"> Máy tính bảng cao cấp </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Phụ kiện điện thoại">
                                                                                    <a class="a-links" href="https://www.nguyenkim.com/phu-kien-dien-thoai/">Phụ kiện điện thoại <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bao da, ốp lưng" class="a-links" rel="nofollow" href="/bao-da-op-lung-dien-thoai/"> Bao da, ốp lưng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Miếng dán điện thoại" class="a-links" href="/mieng-dan-dien-thoai/"> Miếng dán điện thoại </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Cáp, cổng kết nối" class="a-links" href="/day-sac-cap-dien-thoai/"> Cáp, cổng kết nối </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Pin sạc dự phòng" class="a-links" href="/pin-sac-du-phong/"> Pin sạc dự phòng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Phụ kiện laptop">
                                                                                    <span class="js_hidden_link" data-url="L3BodS1raWVuLXRpbi1ob2Mv">Phụ kiện laptop <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Chuột" class="a-links" href="/chuot-may-tinh/"> Chuột </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bàn phím" class="a-links" href="/ban-phim/"> Bàn phím </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Đế laptop" class="a-links" href="/de-tan-nhiet/"> Đế laptop </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Thiết bị âm thanh">
                                                                                    <a class="a-links" href="/phu-kien-thiet-bi-so/">Thiết bị âm thanh <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Loa bluetooth" class="a-links" href="/loa-bluetooth/"> Loa bluetooth </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Tai nghe" class="a-links" href="/tai-nghe-vi-tinh/"> Tai nghe </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Micro Bluetooth" class="a-links"> Micro Bluetooth </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Phụ kiện Apple"> Phụ kiện Apple </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Apple watch" class="a-links" href="/dong-ho-thong-minh-apple-watch/"> Apple watch </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Chuột Apple" class="a-links" href="/chuot-may-tinh-apple/"> Chuột Apple </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bàn phím Apple" class="a-links" href="/ban-phim-apple-imac/"> Bàn phím Apple </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Tai nghe iPhone" class="a-links" href="/tai-nghe-iphone/"> Tai nghe iPhone </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Ốp lưng" class="a-links" href="/op-lung-iphone/"> Ốp lưng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Đồng hồ thông minh">
                                                                                    <span class="js_hidden_link" data-url="L2RvbmctaG8tdGhvbmctbWluaC12aS8=">Đồng hồ thông minh <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </h5>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Thiết bị lưu trữ"> Thiết bị lưu trữ </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="USB" class="a-links" href="/usb-vi/"> USB </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Ổ cứng di động" class="a-links" href="/o-cung-di-dong/"> Ổ cứng di động </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Thẻ nhớ" class="a-links" href="/the-nho/"> Thẻ nhớ </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Camera quan sát">
                                                                                    <span class="js_hidden_link" data-url="L2NhbWVyYS1xdWFuLXNhdC8=">Camera quan sát <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="left-menu">
                                                                <div class="menu-item">
                                                                    <div class="icon">
                                                                        <i class="nki-menu-laptop"></i>
                                                                    </div>
                                                                    <p>
                                                                        <a href="/laptop-may-tinh-xach-tay/">Laptop</a>
                                                                        <a href="/may-tinh-de-ban/">PC</a>
                                                                        <a href="/thiet-bi-van-phong/">Thiết bị văn phòng</a>
                                                                    </p>
                                                                </div>
                                                                <div class="sub-menu laptop" style="display: none;">
                                                                    <div class=" menu-maytinh children_sort">
                                                                        <div class="item row1 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Laptop">
                                                                                    <a class="a-links" href="/may-tinh-xach-tay/">Laptop <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Asus" class="a-links" href="/laptop-asus/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Asus </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="HP" class="a-links" href="/laptop-hp/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> HP </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Dell" class="a-links" href="/laptop-dell/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Dell </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Apple" class="a-links" href="/laptop-apple-macbook/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Apple </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Fujitsu" class="a-links" href="/laptop-fujitsu/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Fujitsu </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Lenovo" class="a-links" href="/laptop-lenovo/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Lenovo </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Acer" class="a-links" href="/laptop-acer/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Acer </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="MSI" class="a-links" href="/laptop-msi/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> MSI </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="LG" class="a-links" href="/laptop-lg/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> LG </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Chơi game" class="a-links" href="https://www.nguyenkim.com/may-tinh-xach-tay/?sort_by=position&amp;sort_order=desc&amp;features_hash=367-97743"> Chơi game </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Đồ họa" class="a-links" href="https://www.nguyenkim.com/may-tinh-xach-tay/?sort_by=position&amp;sort_order=desc&amp;features_hash=371-97747"> Đồ họa </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Thiết kế mỏng nhẹ" class="a-links" href="https://www.nguyenkim.com/may-tinh-xach-tay/?sort_by=position&amp;sort_order=desc&amp;features_hash=369-97745"> Thiết kế mỏng nhẹ </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Máy tính bàn ">
                                                                                    <a class="a-links" href="/may-tinh-de-ban/">Máy tính bàn <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Apple" class="a-links" href="/may-tinh-de-ban-apple-imac/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Apple </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="DELL" class="a-links" href="/may-tinh-de-ban-dell/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> DELL </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Acer" class="a-links" href="/may-tinh-de-ban-acer/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Acer </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="ASUS" class="a-links" href="/may-tinh-de-ban-asus/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> ASUS </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="HP" class="a-links" href="/may-tinh-de-ban-hp/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> HP </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Màn hình LCD">
                                                                                    <a class="a-links" href="/man-hinh-lcd-vi-tinh/">Màn hình LCD <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="DELL" class="a-links" href="/lcd-vi-tinh-dell/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> DELL </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="HP" class="a-links" href="/lcd-vi-tinh-hp/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> HP </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="ASUS" class="a-links" href="/asus/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> ASUS </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="LG" class="a-links" href="/lcd-vi-tinh-lg/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> LG </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Samsung" class="a-links" href="/lcd-vi-tinh-samsung/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Samsung </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row1 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Máy in">
                                                                                    <a class="a-links" href="/may-in-van-phong/">Máy in <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Canon" class="a-links" href="/may-in-canon/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Canon </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="HP" class="a-links" href="/may-in-hp/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> HP </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Brother" class="a-links" href="/may-in-brother/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Brother </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Epson" class="a-links" href="/may-in-epson/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Epson </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy in trả góp 0%" class="a-links" href="/may-in-van-phong/?subcats=Y&amp;features_hash=99999-2"> Máy in trả góp 0% </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy in laser" class="a-links" href="/may-in-van-phong/?sort_by=position&amp;sort_order=desc&amp;features_hash=53-9212-9163"> Máy in laser </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy in phun" class="a-links" href="/may-in-van-phong/?sort_by=position&amp;sort_order=desc&amp;features_hash=53-88079-5186"> Máy in phun </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy in 2 mặt tự động" class="a-links" href="/may-in-van-phong/?sort_by=position&amp;sort_order=desc&amp;features_hash=198-9290"> Máy in 2 mặt tự động </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy in đa chức năng" class="a-links" href="/may-in-van-phong/?sort_by=position&amp;sort_order=desc&amp;features_hash=363-39327-39325-39329-9202-88089-20370"> Máy in đa chức năng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy in kim" class="a-links" href="/may-in-van-phong/?features_hash=53-9744"> Máy in kim </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Máy in dưới 5 triệu" class="a-links" href="/may-in-van-phong/?subcats=Y&amp;features_hash=34-0-4999999-VND"> Máy in dưới 5 triệu </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Phụ kiện máy tính">
                                                                                    <a class="a-links" href="/phu-kien-tin-hoc/">Phụ kiện máy tính <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Loa vi tính" class="a-links" href="/dan-loa-vi-tinh/"> Loa vi tính </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Chuột máy tính" class="a-links" href="/chuot-may-tinh/"> Chuột máy tính </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bàn phím" class="a-links" href="/ban-phim/"> Bàn phím </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="USB" class="a-links" href="/usb-vi/"> USB </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Ổ cứng di động" class="a-links" href="/o-cung-di-dong/"> Ổ cứng di động </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Tai nghe vi tính" class="a-links" href="/tai-nghe-vi-tinh/"> Tai nghe vi tính </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Đế tản nhiệt" class="a-links" href="/de-tan-nhiet/"> Đế tản nhiệt </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Thiết bị mạng" class="a-links" href="/thiet-bi-mang/"> Thiết bị mạng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Phần mềm">
                                                                                    <a class="a-links" href="/phan-mem/">Phần mềm <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Microsoft Office" class="a-links" href="/microsoft-office/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Microsoft Office </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Microsoft Windows" class="a-links" href="/microsoft-windows/">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Microsoft Windows </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="left-menu">
                                                                <div class="menu-item">
                                                                    <div class="icon">
                                                                        <span class="material-symbols-rounded"> settings_suggest </span>
                                                                    </div>
                                                                    <p>
                                                                        <a href="/bang-gia-dich-vu-lap-dat.html">Dịch vụ</a>
                                                                        <a href="/quy-trinh-bao-hanh-tai-nguyen-kim.html">Hỗ trợ</a>
                                                                        <a href="/cac-trung-tam-mua-sam-nguyen-kim.html">Hệ thống siêu thị</a>
                                                                    </p>
                                                                </div>
                                                                <div class="sub-menu dich-vu" style="display: none;">
                                                                    <div class=" menu-dichvu children_sort" style="display: none;">
                                                                        <div class="item row2 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Dịch vụ"> Dịch vụ </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Dịch Vụ Vệ Sinh Máy Lạnh" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/dich-vu-chuan-chinh-cham-soc-cuc-dinh.html"> Dịch Vụ Vệ Sinh Máy Lạnh </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Đăng Kí Yêu Cầu Bảo Hành" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/index.php?dispatch=2"> Đăng Kí Yêu Cầu Bảo Hành </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Bảng Giá Dịch Vụ Lắp Đặt" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/bang-gia-dich-vu-lap-dat.html"> Bảng Giá Dịch Vụ Lắp Đặt </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Hỗ Trợ"> Hỗ Trợ </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Chính Sách và Quy Trình Bảo Hành Nguyễn Kim" class="a-links" href="https://www.nguyenkim.com/quy-trinh-bao-hanh-tai-nguyen-kim.html"> Chính Sách và Quy Trình Bảo Hành Nguyễn Kim </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Hệ Thống Cửa Hàng"> Hệ Thống Cửa Hàng </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Các Cửa Hàng Điện Máy Nguyễn Kim" class="a-links" href="https://www.nguyenkim.com/cac-trung-tam-mua-sam-nguyen-kim.html"> Các Cửa Hàng Điện Máy Nguyễn Kim </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="left-menu">
                                                                <div class="menu-item">
                                                                    <div class="icon">
                                                                        <span class="material-symbols-rounded"> tips_and_updates </span>
                                                                    </div>
                                                                    <p>
                                                                        <a href="/blog.html">Thông tin hữu ích</a>
                                                                    </p>
                                                                </div>
                                                                <div class="sub-menu blog" style="display: none;">
                                                                    <div class="menu-blog children_sort" style="display: none;">
                                                                        <div class="item row2 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Tư vấn - Đánh giá">
                                                                                    <a class="a-links" href="https://www.nguyenkim.com/review-san-pham.html">Tư vấn - Đánh giá <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Samsung Galaxy S24 Gây Sốt Với Trí Tuệ Nhân Tạo (AI)" class="a-links" href="samsung-galaxy-s24-gay-sot-voi-tri-tue-nhan-tao-ai.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Samsung Galaxy S24 Gây Sốt Với Trí Tuệ Nhân Tạo (AI) </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Khám phá tính năng nổi bật của máy nước nóng gián tiếp Ariston dòng cao cấp RS" class="a-links" href="kham-pha-tinh-nang-ariston-rs-cao-cap.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Khám phá tính năng nổi bật của máy nước nóng gián tiếp Ariston dòng cao cấp RS </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Tạo bất ngờ đêm Noel cho bạn gái với những món quà công nghệ độc đáo" class="a-links" href="qua-tang-dem-giang-sinh-cho-ban-gai.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Tạo bất ngờ đêm Noel cho bạn gái với những món quà công nghệ độc đáo </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Philips Đến Nhà - Trao Tay Quà Tết" class="a-links" href="philips-den-nha-trao-tay-qua-tet.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Philips Đến Nhà - Trao Tay Quà Tết </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Nhập Full Code Play Together VNG Quà Khủng Mới Nhất 1/2024 Update liên tục" class="a-links" href="code-play-together.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Nhập Full Code Play Together VNG Quà Khủng Mới Nhất 1/2024 Update liên tục </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Kinh nghiệm - Mẹo vặt">
                                                                                    <a class="a-links" href="https://www.nguyenkim.com/chia-se-kinh-nghiem.html">Kinh nghiệm - Mẹo vặt <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="99+ Lời chúc Tết khách hàng, đối tác hay, ý nghĩa nhất 2024" class="a-links" href="chuc-tet-khach-hang.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> 99+ Lời chúc Tết khách hàng, đối tác hay, ý nghĩa nhất 2024 </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Khám phá mâm cỗ ngày Tết 3 miền với các món ăn ngon, hấp dẫn" class="a-links" href="mam-co-ngay-tet.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Khám phá mâm cỗ ngày Tết 3 miền với các món ăn ngon, hấp dẫn </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="50+ Bài thơ, câu thơ chúc Tết 2024 hay, ngắn gọn và độc đáo" class="a-links" href="tho-chuc-tet.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> 50+ Bài thơ, câu thơ chúc Tết 2024 hay, ngắn gọn và độc đáo </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Cách làm bánh chưng xanh dẻo, thơm, đậm đà hương vị ngày Tết" class="a-links" href="cach-lam-banh-chung.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Cách làm bánh chưng xanh dẻo, thơm, đậm đà hương vị ngày Tết </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="5 Cách gói bánh chưng truyền thống vuông đẹp, đơn giản đón Tết" class="a-links" href="cach-goi-banh-chung.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> 5 Cách gói bánh chưng truyền thống vuông đẹp, đơn giản đón Tết </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item row2 bg-gray">
                                                                            <div class="links">
                                                                                <h5 title="Top sản phẩm">
                                                                                    <a class="a-links" href="https://www.nguyenkim.com/top-san-pham.html">Top sản phẩm <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="TOP 8 điện thoại gaming giá rẻ dưới 5 triệu tốt, “ngon trong tầm giá”" class="a-links" href="dien-thoai-gaming-gia-re-duoi-5-trieu.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> TOP 8 điện thoại gaming giá rẻ dưới 5 triệu tốt, “ngon trong tầm giá” </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="TOP 5 điện thoại chụp ảnh đẹp giá rẻ dưới 5 triệu nên mua" class="a-links" href="dien-thoai-chup-anh-dep-gia-re-duoi-5-trieu.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> TOP 5 điện thoại chụp ảnh đẹp giá rẻ dưới 5 triệu nên mua </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="TOP 10 điện thoại dưới 5 triệu tốt, bán chạy và nên mua" class="a-links" href="dien-thoai-duoi-5-trieu.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> TOP 10 điện thoại dưới 5 triệu tốt, bán chạy và nên mua </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Từ 5 đến 7 triệu nên mua điện thoại nào? Top 7 điện thoại đáng mua" class="a-links" href="5-den-7-trieu-nen-mua-dien-thoai-nao.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Từ 5 đến 7 triệu nên mua điện thoại nào? Top 7 điện thoại đáng mua </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Nên mua điện thoại nào? 10 điện thoại smartphone tốt, bền đáng mua" class="a-links" href="nen-mua-dien-thoai-nao.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Nên mua điện thoại nào? 10 điện thoại smartphone tốt, bền đáng mua </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="links">
                                                                                <h5 title="Khuyến mãi - Dịch vụ">
                                                                                    <a class="a-links" href="https://www.nguyenkim.com/khuyen-mai-dich-vu-nguyen-kim.html">Khuyến mãi - Dịch vụ <span class="nk-sticker">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </h5>
                                                                                <ul>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Đặt Trước Galaxy S24 Series Tại Nguyễn Kim Rước Ưu Đãi Cực Khủng" class="a-links" href="dat-truoc-galaxy-s24-series-tai-nguyen-kim-ruoc-uu-dai-cuc-khung.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Đặt Trước Galaxy S24 Series Tại Nguyễn Kim Rước Ưu Đãi Cực Khủng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Giáp Thìn vui bất thình lình - Mua 1 sản phẩm, giảm thêm cho một sản phẩm nữa!" class="a-links" href="giap-thin-vui-bat-thinh-linh-bill2.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Giáp Thìn vui bất thình lình - Mua 1 sản phẩm, giảm thêm cho một sản phẩm nữa! </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Giáp Thìn vui bất thình lình - Danh sách sản phẩm tặng gói Dịch vụ vàng" class="a-links" href="giap-thin-vui-bat-thinh-linh-danh-sach-ap-dung-dich-vu-vang.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Giáp Thìn vui bất thình lình - Danh sách sản phẩm tặng gói Dịch vụ vàng </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Sắm Tết tại Nguyễn Kim, nhận thêm thùng nước ngọt Coca Cola" class="a-links" href="10k-qua-tet-coca.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Sắm Tết tại Nguyễn Kim, nhận thêm thùng nước ngọt Coca Cola </a>
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p style="">
                                                                                            <a title="Sắm Tết hàng điện máy, nhận ngay bia Tết cùng hơn 10.000 phần quà cực chất" class="a-links" href="10k-qua-tet-bia.html">
                                                                                                <span class="nki-sort-next ">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                </span> Sắm Tết hàng điện máy, nhận ngay bia Tết cùng hơn 10.000 phần quà cực chất </a>
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="left-menu">
                                                                <div class="menu-item">
                                                                    <div class="icon">
                                                                        <span class="material-symbols-rounded"> diamond </span>
                                                                    </div>
                                                                    <p>
                                                                        <a href="/giai-phap-doanh-nghiep.html">Bán hàng doanh nghiệp</a>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="menu-thuong-hieu children_sort">
                                                        <div class="links sub-item-1 cl2">
                                                            <h3 title="Thương hiệu">
                                                                <a class="a-links" href="javascript:void(0)">Thương hiệu <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </a>
                                                            </h3>
                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Samsung" class="a-links" href="/thuong-hieu/samsung">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Samsung </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Panasonic" class="a-links" href="/thuong-hieu/panasonic">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Panasonic </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Sony" class="a-links" href="/thuong-hieu/sony">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Sony </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Apple" class="a-links" href="/thuong-hieu/apple">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Apple </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Electrolux" class="a-links" href="/thuong-hieu/electrolux">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Electrolux </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="LG" class="a-links" href="/thuong-hieu/lg">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> LG </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Daikin" class="a-links" href="/thuong-hieu/daikin">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Daikin </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Sunhouse" class="a-links" href="/thuong-hieu/sunhouse">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Sunhouse </a>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="links sub-item-1 cl1">
                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Toshiba" class="a-links" href="/thuong-hieu/toshiba">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Toshiba </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Elecom" class="a-links" href="/thuong-hieu/elecom">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Elecom </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Sharp" class="a-links" href="/thuong-hieu/sharp">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Sharp </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Philips" class="a-links" href="/thuong-hieu/philips">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Philips </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Hitachi" class="a-links" href="/thuong-hieu/hitachi">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Hitachi </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Kangaroo" class="a-links" href="/thuong-hieu/kangaroo">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Kangaroo </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Logitech" class="a-links" href="/thuong-hieu/logitech">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Logitech </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="AQUA" class="a-links" href="/thuong-hieu/aqua">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> AQUA </a>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class=" menu-sap-xep children_sort"></div>
                                                    <div class="menu-sap-xep bg-white menu-tin-tuc-sap-xep style-tin-tuc" style="display: block;">
                                                        <h3></h3>
                                                    </div>
                                                    <div class=" menu-mayanh children_sort">
                                                        <div class="links ">
                                                            <h5 title="Lọc nước">
                                                                <span class="js_hidden_link" data-url="L21heS1sb2MtbnVvYy8=">Lọc nước <span class="nk-sticker">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </span>
                                                                </span>
                                                            </h5>
                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Bình lọc nước" class="a-links" rel="nofollow" href="/binh-loc-nuoc/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Bình lọc nước </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy lọc nước" class="a-links" rel="nofollow" href="/may-loc-nuoc/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy lọc nước </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy lọc nước thường" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/may-loc-nuoc/?features_hash=411-233364">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy lọc nước thường </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy lọc nước nóng lạnh" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/may-loc-nuoc/?features_hash=411-233176">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy lọc nước nóng lạnh </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy lọc nước để bàn" class="a-links" rel="nofollow" href="https://www.nguyenkim.com/may-loc-nuoc/?features_hash=411-232779">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy lọc nước để bàn </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Cây nước nóng lạnh" class="a-links" rel="nofollow" href="/may-nuoc-nong-lanh/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Cây nước nóng lạnh </a>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="links ">
                                                            <h5 title="Sinh tố - Xay ép"> Sinh tố - Xay ép </h5>
                                                            <ul>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy xay sinh tố" class="a-links" rel="nofollow" href="/may-xay-sinh-to/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy xay sinh tố </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy ép trái cây" class="a-links" rel="nofollow" href="/may-ep-trai-cay/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy ép trái cây </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy vắt cam" class="a-links" rel="nofollow" href="/may-vat-cam/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy vắt cam </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy pha cà phê" class="a-links" rel="nofollow" href="/may-pha-ca-phe/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy pha cà phê </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy xay đa năng" class="a-links" rel="nofollow">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy xay đa năng </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy đánh trứng" class="a-links" rel="nofollow" href="/may-danh-trung/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy đánh trứng </a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p style="">
                                                                        <a title="Máy xay thịt" class="a-links" rel="nofollow" href="/may-xay-thit/">
                                                                            <span class="nki-sort-next ">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </span> Máy xay thịt </a>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class=" menu-mayin children_sort"></div>
                                                </div>
                                                <div class="span12 wrap-grid-menu-right">
                                                    <div class="" data-block="2864">
                                                        <div class="header-menu">
                                                            <div class="header-menu__navs">
                                                                <a class="navs-item-link delivery-free" href="javascript:void(0)">
                                                                    <img src="https://cdn.nguyenkimmall.com/images/companies/_1/img/icon free ship-do-01.webp" width="30px" height="20px" alt="icon%20free%20ship-do-01"> Giao lắp chuyên nghiệp </a>
                                                                <div class="hr-vertical">|</div>
                                                                <a class="navs-item-link" href="javascript:void(0)">
                                                                    <img style="width: 21px;height: auto" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/icon/icon-baohanh.webp" width="21" height="21" alt="icon-baohanh"> Bảo hành nhanh gọn </a>
                                                                <div class="hr-vertical">|</div>
                                                                <a class="navs-item-link" href="javascript:void(0)">
                                                                    <img style="width: 21px;height: auto" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/icon/icon-camnang.webp" width="21" height="21" alt="icon-camnang">Tổng hợp khuyến mãi </a>
                                                                <div class="hr-vertical">|</div>
                                                                <a class="navs-item-link" href="javascript:void(0)">
                                                                    <img style="width: 21px;height: auto" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/icon/icon-gem.webp" width="21" height="21" alt="icon-gem">Bán hàng doanh nghiệp </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @yield('content')


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="loader"></div>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thông tin giỏ hàng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        
                        <div id="tbl_list_cartss">
                            
                        </div>

                        <div class="c3_col_1 form-info-cart {{ $number_cart<=0?'hide':'' }}" >
                            <form class="c3_box" id="form-sub" method="post"  action="{{ route('order') }}">
                                {{ csrf_field() }}
                                <div class="title_box_cart"> Thông tin khách hàng</div>
                                <div class="item-form">
                                    <div class="option-group clearfix">
                                        <div class="step_option">
                                            <span class="st_opt st_opt_active" data-value="Anh" data-name="sex"></span><span>Anh</span>
                                        </div>
                                        <div class="step_option">
                                            <span class="st_opt" data-value="Chị" data-name="sex"></span><span>Chị</span>
                                        </div>
                                        <input type="hidden" name="sex" id="sex" value="Nam">
                                    </div>
                                    <!--option-group-->
                                </div>
                                <div class="item-form">
                                    <input type="text" name="name" id="buyer_name" placeholder="Họ tên">
                                </div>
                                <div class="item-form">
                                    <input type="text" name="phone_number" id="buyer_tel" value="" placeholder="Số điện thoại">
                                </div>
                                <div class="item-form">
                                    <input type="text" name="mail" id="buyer_email" value="" placeholder="Email">
                                </div>
                                <div class="item-form">
                                    <textarea name="address" placeholder="Địa chỉ" id="buyer_address"></textarea>
                                </div>
                                <div class="item-form" style="width: 50%;display: inline-block;color: #0083d1;">
                                    <select name="province" class="form-control" id="ship_to_province" onchange="getDistrict(this.value)">
                                        <option value="0">--Lựa chọn--</option>
                                        <option value="1">Hà nội</option>
                                        <option value="2">TP HCM</option>
                                        <option value="5">Hải Phòng</option>
                                        <option value="4">Đà Nẵng</option>
                                        <option value="6">An Giang</option>
                                        <option value="7">Bà Rịa-Vũng Tàu</option>
                                        <option value="13">Bình Dương</option>
                                        <option value="15">Bình Phước</option>
                                        <option value="16">Bình Thuận</option>
                                        <option value="14">Bình Định</option>
                                        <option value="8">Bạc Liêu</option>
                                        <option value="10">Bắc Giang</option>
                                        <option value="9">Bắc Kạn</option>
                                        <option value="11">Bắc Ninh</option>
                                        <option value="12">Bến Tre</option>
                                        <option value="18">Cao Bằng</option>
                                        <option value="17">Cà Mau</option>
                                        <option value="3">Cần Thơ</option>
                                        <option value="24">Gia Lai</option>
                                        <option value="25">Hà Giang</option>
                                        <option value="26">Hà Nam</option>
                                        <option value="27">Hà Tĩnh</option>
                                        <option value="30">Hòa Bình</option>
                                        <option value="28">Hải Dương</option>
                                        <option value="29">Hậu Giang</option>
                                        <option value="31">Hưng Yên</option>
                                        <option value="32">Khánh Hòa</option>
                                        <option value="33">Kiên Giang</option>
                                        <option value="34">Kon Tum</option>
                                        <option value="35">Lai Châu</option>
                                        <option value="38">Lào Cai</option>
                                        <option value="36">Lâm Đồng</option>
                                        <option value="37">Lạng Sơn</option>
                                        <option value="39">Long An</option>
                                        <option value="40">Nam Định</option>
                                        <option value="41">Nghệ An</option>
                                        <option value="42">Ninh Bình</option>
                                        <option value="43">Ninh Thuận</option>
                                        <option value="44">Phú Thọ</option>
                                        <option value="45">Phú Yên</option>
                                        <option value="46">Quảng Bình</option>
                                        <option value="47">Quảng Nam</option>
                                        <option value="48">Quảng Ngãi</option>
                                        <option value="49">Quảng Ninh</option>
                                        <option value="50">Quảng Trị</option>
                                        <option value="51">Sóc Trăng</option>
                                        <option value="52">Sơn La</option>
                                        <option value="53">Tây Ninh</option>
                                        <option value="56">Thanh Hóa</option>
                                        <option value="54">Thái Bình</option>
                                        <option value="55">Thái Nguyên</option>
                                        <option value="57">Thừa Thiên-Huế</option>
                                        <option value="58">Tiền Giang</option>
                                        <option value="59">Trà Vinh</option>
                                        <option value="60">Tuyên Quang</option>
                                        <option value="61">Vĩnh Long</option>
                                        <option value="62">Vĩnh Phúc</option>
                                        <option value="63">Yên Bái</option>
                                        <option value="19">Đắk Lắk</option>
                                        <option value="22">Đồng Nai</option>
                                        <option value="23">Đồng Tháp</option>
                                        <option value="21">Điện Biên</option>
                                        <option value="20">Đăk Nông</option>
                                    </select>
                                </div>
                                <div id="district-holder-login" style="width: 49%;display: inline-block;color: #0083d1;"></div>
                                <!-- <div id="ajxTaxInvoice" class="item-form">
                                    <div class="ng_ml">
                                        <input type="checkbox" onclick="showTap('pnlTaxInvoice')" name="chkTaxInvoice" id="chkTaxInvoice">
                                        <label id="bale_ml" for="chkTaxInvoice">Xuất hóa đơn công ty</label>
                                    </div>
                                    <div style="width: 100%; margin-top:10px; padding: 0px;display: none;" id="pnlTaxInvoice">
                                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td width="120" align="left">Công ty/Tổ chức:
                                                    </td>
                                                    <td align="left">
                                                        <input type="text" id="txtTaxName" value="" size="50" name="user_info[tax_company]">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="120" align="left">Địa chỉ:
                                                    </td>
                                                    <td align="left">
                                                        <input type="text" id="txtTaxAddress" value="" size="50" name="user_info[tax_address]">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="120" align="left">Mã số thuế:
                                                    </td>
                                                    <td align="left">
                                                        <input type="text" id="txtTaxCode" name="user_info[tax_code]" value="">
                                                        <span class="cmt" id="txtTaxCodeView">&nbsp;</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> -->
                                <!--ajxTaxInvoice-->

                               

                                <div class="item-form">
                                    
                                    <table style="width:100%;">
                                        <tbody>
                                          
                                            <tr class="item-paymethod">
                                                <td><input type="radio" style="width:initial; padding:0; margin:0; height:auto;" name="pay_method" value="3" class="pay_option" id="paymethod_3" checked></td>
                                                <td>
                                                    <label for="paymethod_3">Trả tiền khi nhận hàng</label>
                                                    <div id="pay_2" style="display:none;" class="pay_content">Trả tiền khi nhận hàng</div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="clear"></div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary order1">Đặt hàng</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    
                                </div>


                            </form>
                        </div>
                        
                        <style type="text/css">
                            .cart-container {
                                    text-align: center;
                                    padding: 20px;
/*                                    border: 1px solid #ccc;*/
                                    border-radius: 8px;
                                    background-color: #fff;
                                }

                                .empty-cart-message {
                                    font-size: 18px;
                                    color: #555;
                                    margin-top: 30px;
                                }

                                .cart-icon {
                                    font-size: 40px;
                                    color: #ccc;
                                }

                                #exampleModal .modal-body{
                                    min-height: 200px;
                                }
                        </style>

                        <div class="cart-container {{ $number_cart>0?'hide':'' }}">
                            <div class="cart-icon">🛒</div>
                            <div class="empty-cart-message">
                                <p>Không có sản phẩm nào trong giỏ hàng</p>
                                
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="Modal-register" tabindex="-1" role="dialog" aria-labelledby="Modal-register" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabels">Đăng ký</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" role="form" id="registers-form-submit" action="#">
                            {{ csrf_field() }}
                            <div class="clearfix pt-3"></div>
                            <h4>Tạo tài khoản mới.</h4>
                            <hr>
                            <div class="text-danger validation-summary-valid" data-valmsg-summary="true">
                                <ul>
                                    <li style="display:none"></li>
                                </ul>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="Email">Địa chỉ email</label>
                                <div class="col-md-8"><input class="form-control" type="email" data-val="true" data-val-email="The Địa chỉ email field is not a valid e-mail address." data-val-required="Trường Địa chỉ email là bắt buộc." id="Emails" name="Emails"> <span class="text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="FullName">Họ và tên</label>
                                <div class="col-md-8"><input class="form-control" data-val="true" data-val-required="Trường Tên là bắt buộc." id="FullName" name="FullName"> <span class="text-danger field-validation-valid" data-valmsg-for="FullName" data-valmsg-replace="true"></span></div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="number-phone">Số điện thoại </label>
                                <div class="col-md-8"><input class="form-control" data-val="true" data-val-required="Số điện thoại là bắt buộc" id="number-phone-customer" name="number-phone-register"> <span class="text-danger field-validation-valid" data-valmsg-for="FullName" data-valmsg-replace="true"></span></div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="Password">Mật khẩu</label>
                                <div class="col-md-8"><input class="form-control" type="password"></span></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="ConfirmPassword">Xác nhận mật khẩu</label>
                                <div class="col-md-8"><input class="form-control" type="password"  id="ConfirmPassword" name="ConfirmPassword" autocomplete="on"> <span class="text-danger field-validation-valid"></span></div>
                            </div>

                             
                            <button type="submit" class="btn btn-primary">Đăng ký</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            
                            
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

       <!--  Endmodal -->

       <!-- Modal -->
        <div class="modal fade" id="Modal-login" tabindex="-1" role="dialog" aria-labelledby="Modal-login" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="login-modals">Đăng nhập</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('login-Fe') }}"  id="login-forms-fe">
                            {{ csrf_field() }}

                            <h2>Đăng nhập</h2>
                            <div class="clearfix pt-3"></div>
                            <h4>Sử dụng tài khoản của bạn để đăng nhập</h4>
                            <hr>
                            <div class="text-danger validation-summary-valid" data-valmsg-summary="true">
                                <ul>
                                    <li style="display:none"></li>
                                </ul>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="Email">Địa chỉ email</label>
                                <div class="col-md-8"><input class="form-control" type="email"  id="email" name="email"> <span class="text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="Password">Mật khẩu</label>
                                <div class="col-md-8"><input class="form-control" type="password"  name="password"> <span class="text-danger field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span></div>
                            </div>
                            
                            <div class="form-group row">
                               <div class="modal-footer">
                                    
                                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <p><a href="javascript::void(0)" class="register-forms">Đăng ký người dùng mới</a></p>


                            
                            
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

       <!--  Endmodal -->

      

    <div class="max-width">
        <div class="phone_hotline"> <a href="tel:0243.687.9145" title="Bảo Hành: 0243.687.9145" class="p_hotline_item"> <i class="icon_security"></i> <span><strong>Bảo Hành: 0243.687.9145</strong> (8h00 - 17h00)</span> </a> <a href="tel:0247.303.6336" title="Mua hàng: 0247.303.6336" class="p_hotline_item"> <i class="icon_purchase"></i> <span><strong>Mua hàng: 0247.303.6336</strong> (8h00 - 17h00)</span> </a> <a href="tel:0916917949" title="Khiếu nại:0916917949" class="p_hotline_item"> <i class="icon_complain"></i> <span><strong>Khiếu nại: 091.691.7949</strong> (8h00 - 17h00)</span> </a> </div>
    </div>
       

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-footer">
                        <h3 class="title">Thông tin</h3>
                        <ul class="footer_list-link">
                            <li>
                                <a href="{{ route('details', 'gioi-thieu') }}">Giới thiệu</a>
                            </li>
                            <li>
                                <a href="{{ route('details', 'lien-he') }}">Liên hệ</a>
                            </li>
                            <li>
                                <a href="{{ route('details', 'nha-phan-phoi-dien-may-uy-tin-chuyen-nghiep') }}">Dự án bán buôn</a>
                            </li>

                          
                            <li class="mobile">
                                <?php 

                                    $routeUri = Route::getFacadeRoot()->current();
                                ?>
                                @if(!empty($routeUri))
                                <a href="{{ Route::getFacadeRoot()->current()->uri() }}?show=pc_view">Xem bản desktop</a>
                                @endif
                            </li>
                        </ul>
                    </div>

                   
                    <div class="col-md-3 col-footer">
                        <h3 class="title">Hỗ trợ mua hàng</h3>
                        <ul class="footer_list-link">
                            <li>
                                <a href="{{ route('details','huong-dan-mua-dien-may-tra-gop-online-qua-the-tin-dung-tren-trang-web-dien-may-nguoi-viet') }}">Hướng dẫn trả góp</a>
                            </li>
                            <li>
                                <a href="{{ route('details', 'page/cach-thuc-thanh-toan') }}">Cách thức thanh toán</a>
                            </li>
                            <li>
                                <a href="{{ route('details', 'bang-gia-vat-tu-lap-dat') }}">Bảng giá vật tư lắp đặt</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="col-md-4 col-footer">
                        <h3 class="title">Chính sách</h3>
                        <ul class="footer_list-link">
                            <li>
                                <a href="/page/chinh-sach-quy-dinh-chung">Chính sách &amp; quy định chung</a>
                            </li>
                            <li>
                                <a href="{{ route('details', 'page/chinh-sach-doi-tra-hang') }}">Chính sách đổi trả sản phẩm</a>
                            </li>
                            <li>
                                <a href="{{ route('details', 'page/chinh-sach-bao-hanh') }}">Chính sách bảo hành</a>
                            </li>
                            <li>
                                <a href="{{ route('details', 'page/chinh-sach-van-chuyen') }}">Chính sách giao hàng</a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="col-md-3 col-footer">
                        <form>
                            <input id="email_newsletter" type="text" placeholder="Đăng ký email nhận thông tin khuyến mại">
                            <span id="now_submit">Gửi</span>
                        </form>

                        <h4 style="margin-top: 20px;margin-bottom: 10px;">Kết nối với chúng tôi</h4>
                        <a class="ft-fb" rel="nofollow" href="https://www.facebook.com/dienmaynguoiviet/"><i class="fab fa-facebook-f"></i></a>
                        <a class="ft-yt" rel="nofollow" href="https://www.youtube.com/channel/UCRVWFSZs8k81B61_hwmkMIA"><i class="fab fa-youtube"></i></a>
                        <a rel="nofollow" href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=1180"><img style="max-height: 40px" src="{{ asset('images/template/dathongbao.png') }}"></a>
                    </div> -->
                </div>
                <!-- <div class="footer-bottom">
                    <div class="container">
                        <p> <b>© 2018. Công ty TNHH Thương Mại Phú Tiến. Địa chỉ: : Kho Đóng Tàu, Ngõ 683 Đường Nguyễn Khoái, Quận Hoàng
                            Mai, TP HN. GPKD số : 0102011440 do Sở Kế Hoạch và Đầu Tư TP. Hà Nội, cấp ngày 25/02/2004 </b>
                        </p>
                    </div>
                </div> -->
            </div>
        </footer>

        

        <div class="hotlines">   
            <a href="tel:02473036336"><img src="{{ asset('images/template/tongdai02473036336.png') }}" alt="hotline" style="height:55px; z-index: 999;"></a>
              
            <div class="clear"></div>
              
        </div>

        <div class="global-compare-group">
            <div class="title text-22 text-white d-flex align-items-center justify-content-between font-600">
                <p>SO SÁNH SẢN PHẨM</p>
                <a href="javascript:void(0)" class="close-compare text-white fa fa-times" onclick="compare_close()"></a>
            </div>
            <div class="text-center red mt-2 text-18 font-500" id="js-alert"></div>
            <div class="pro-compare-holder">
                <div class="compare-pro-holder clearfix" id="js-compare-holder">
                   

                </div>
                <div>
                    <a href="javascript:void(0)" class="btn-compare btn-compare" onclick="compare_link()">SO SÁNH</a>
                    <br>
                    <a href="javascript:void(0)" class="btn-compare btn-remove-all-compare" onclick="compare_close()">XÓA TOÀN BỘ </a>
                </div>
                
            </div>
        </div>


       <!--  <button onclick="topFunction()" id="myBtn-top" title="Go to top"><i class="fas fa-angle-up"></i></button> -->
        
        <script>
            window.dataLayer = window.dataLayer || [];
            
            dataLayer.push({ 'pageType':'Home','pagePlatform':'Web','pageStatus':'Kinh doanh'})
            
            
            
        </script>

        <div class="hotline position-fixed">

           
            <a href="tel:02473036336" class="d-flex align-items-center position-relative hotline-fix mb-2">
   
            <i class="fa fa-phone"></i>
            <span><b>024 7303 6336</b> <br> <span>Bấm phím 1</span></span>

           
        </div>

     

        <div class="zalo-mobile">

            <a href="https://zalo.me/0913011888" target="_blank">
                <div style="position: fixed; bottom: 52px; right: 52px; transform: translate(0px, 0px) !important; z-index: 2147483644; border: none; visibility: visible; right: 0px; width: 60px; height: 60px;" class="zalo-chat-widget"data-welcome-message="Điện Máy Người Việt rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="" data-height="">
                    <img src="https://page.widget.zalo.me/static/images/2.0/Logo.svg">
                </div>
            </a>
        </div>    
          
            

        
       <!--  <div  class="zalo-chat-widget" data-oaid="1329456933344915716" data-welcome-message="Điện Máy Người Việt rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="" data-height=""></div>

         <script src="{{ asset('/js/zalo.js') }}"></script>  -->
       
        
        
 
<!-- Messenger Plugin chat Code -->
   <!--  <div id="fb-root"></div> -->

    <!-- Your Plugin chat code -->
   <!--  <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "101251095983613");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script> -->

    <!-- Your SDK code -->
   <!--  <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script> -->

  

     <!--Start of Tawk.to Script-->
    <script src="{{asset('js/tawto.js')}}"></script>
   
    <!--End of Tawk.to Script-->



    <link rel="stylesheet" href="{{asset('css/lib/owl.carousel.min.css')}}">

 <script src="{{ asset('js/layout1.js') }}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{asset('css/lib/owl.theme.default.min.css')}}">
    <script type="text/javascript" src="{{asset('js/lib/owl.carousel.min.js')}}"></script>

  
    <script src="{{ asset('js/lib/bootstrap.min.js') }}"></script>

    <script src="{{asset('js/lib/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('js/lib/lazyload.js') }}"></script>
    <script src="{{ asset('js/lib/sweetalert2.all.min.js') }}"></script>


    @stack('script')

  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

  <script>

    function compare_close() {

        ar_product = [];

        $('.global-compare-group').hide();

        $('.compare-show .fa-solid').removeClass('fa-check')

        $('.compare-show .fa-solid').addClass('fa-plus');

        $('.compare-show').css('color','#59A0DA');
    }


    $('.loader').hide();

    $(function() {
        $("#tags").autocomplete({

            minLength: 2,
            
            source: function(request, response) {
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }


                });
                $.ajax({

                    url: "{{  route('sugest-click')}}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        product:$('#tags').val()
                    },
                    dataType: "json",
                    success: function (data) {
                        var items = data;

                        response(items);

                        $('#ui-id-1').html();

                        $('#ui-id-1').html(data);
                    
                    }
                });
            },
            html:true,
        });
    });

    $(function() {
        $("#skw").autocomplete({
            minLength: 2,
            source: function(request, response) {
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }


                });
                $.ajax({

                    url: "{{  route('sugest-click')}}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product:$('#skw').val()
                    },
                    dataType: "json",
                    success: function (data) {
                        var items = data;

                        response(items);


                        $('#ui-id-2').html();

                        $('#ui-id-2').html(data);
                    
                    }
                });
            },
            html:true,
        });
    }) 

   
  
  </script>

    <script type="text/javascript">
       
         function topFunction() {
  
           $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;
          
        }

    </script>

    @if($popup->option ==0)
    <script type="text/javascript">
        
        // turn off popup
        
        lazyload();

        $('.box-promotion-close').bind("click", function(){

            if ( typeof(Storage) !== "undefined") {
               
                sessionStorage.setItem('popup','1');
               
               
            } else {
                alert('Trình duyệt của bạn đã quá cũ. Hãy nâng cấp trình duyệt ngay!');
            }
            $('.box-promotion-active').hide();

        });


        if(sessionStorage.getItem('popup')){
             $('.box-promotion-active').hide();

        }

        
    </script>

    @else

    <script type="text/javascript">

    $('.box-promotion-close').bind("click", function(){

           
            $('.box-promotion-active').hide();

    });


    </script>

    @endif

    <script type="text/javascript">

    
        $('.register-forms').click(function(){
            $("#Modal-login").modal("hide");
            $("#Modal-register").modal("show");
        })

        $('.logins-modal').click(function(){
             $("#Modal-login").modal("show");


        })

        $('.register-form').click(function(){
             $("#Modal-register").modal("show");


        })
       


        // hover menu

        $(".child").mouseenter(function(){
            const child = $( this ).attr('data-id');

            $(this).css('position','relative');

           
            $('.'+child).show();
        }).mouseleave(function(){
            
            $('.navmwg').hide();
        });

        
        
       
        $('#now_submit').click(function() {
            const value = $('#email_newsletter').val();
            if(value==''){
                alert('bạn chưa nhập thông tin email');
            }
            else{
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value))
                {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                
                    $.ajax({
                       
                        type: 'POST',
                        url: "{{ route('getemail') }}",
                        data: {
                            email: $('#email_newsletter').val(),
                           
                               
                        },
                        success: function(result){
                            alert(result);
                        }
                    });
                    
                }
                else{
                    alert('email không đúng đinh dạng');
                }
            }
        })
        $(window).resize(function(){
            if($(window).width()<768){

                $('.bar-top-lefts').hide();
            }
         
        });


         $("#exampleModal").on("hidden.bs.modal", function () {
            $('#tbl_list_cartss').html('');
        });

        function showToCart() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: "{{ route('showCart') }}",
               
                success: function(result){
                  
                   // numberCart = result.find("#number-product-cart").text();

                    $('#tbl_list_cartss').append(result);

                   
                    $('#exampleModal').modal('show'); 
                    
                }
            });
            
        }

        // check sub mit

        $( "#form-sub" ).submit(function( event ) {

          
            const numberProduct =  parseInt($('#number-product-cart').text()) ;

            if($('#ship_to_province').val()==0){

                alert('vui lòng lựa chọn thành phố');
                event.preventDefault();   
            }
            else if($('#buyer_tel').val().length<10){
                alert('vui kiểm tra lại trường số điện thoai');
                event.preventDefault();  
            }
            else if($('#buyer_address').val().length==0){
                alert('vui kiểm tra lại trường địa chỉ');
                event.preventDefault(); 
            }

            else{
                if(numberProduct<=0){
                    alert('không thể mua sản phẩm vì trong giỏ hàng ko có sản phẩm')
                    event.preventDefault();
                }
               
                else{
                    var click = 0;
                    click++;

                    $('.order1').remove();
                    $('#form-sub .btn-secondary').remove();

                    $('#exampleModal .close').hide();
                    
                    $('#exampleModal .modal-footer').append('<div  class="btn btn-primary">Đang xử lý đơn hàng</div>')
                    $('.loader').show();
                    return;
                    
                }
            }

            
        });


       

        $('.menu-list .fa-bars').bind("click", function(){
            if($('.nav-list').is(":visible")){

                $('.nav-list').hide();
            }
            else{
                $('.nav-list').show();
            }

        });

        $(".st_opt").bind("click", function(){
            $('.st_opt').removeClass('st_opt_active');

            $(this).addClass('st_opt_active');

            let sex = $(this).attr('data-value');

            $('#sex').val(sex);

        });


        $(".menu-list").bind("click", function(){
            if($(".bar-top-lefts").is(":hidden")){
                $(".bar-top-lefts").show()
            }
            else{
                $(".bar-top-lefts").hide();
            }
        });  


        $().ready(function() {
             jQuery.validator.addMethod("phonenu", function (value, element) {
                if ( /^\d{3}-?\d{3}-?\d{4}$/g.test(value)) {
                    return true;
                } else {
                    return false;
                };
            }, "Invalid phone number");



            $("#registers-form-submit").validate({
                rules: {
                   
                    "FullName": {
                        required: true,
                        maxlength:150
                         
                    },

                    "Emails": {
                        required: true,
                        email: true,
                        
                    },

                    "number-phone-register": {
                        required: true,
                         phonenu: true,
                        
                    },

                   

                    "Passwords":{
                        required:true,
                    },
                    "ConfirmPassword":{
                        required:true,
                        equalTo: "#Passwords"
                    }

                   
                },

                messages: {
                    "FullName": {
                        required: "Bắt buộc nhập Họ và tên",
                        maxlength: "Hãy nhập tối đa 150 ký tự"
                    },
                   
                    "Emails":{
                        email: "Email không đúng định dạng",
                        required: "Bắt buộc nhập Email",
                    },

                    "Passwords":{
                        required:"Bắt buộc nhập Password",
                    },
                    "ConfirmPassword":{
                        required:"Bắt buộc nhập xác nhận Password",
                        equalTo:'Xác nhận Password phải giống với Password'
                    }
                   
                }
               
            }); 

             $("#login-forms-fe").validate({
                rules: {
                   
                   

                    "email": {
                        required: true,
                        email: true,
                        
                    },

                    "password":{
                        required:true,
                    },
                   

                   
                },

                messages: {
                    
                    "email":{
                        email: "Email không đúng định dạng",
                        required: "Bắt buộc nhập Email",
                    },

                    "password":{
                        required:"Bắt buộc nhập Password",
                    },
                  
                   
                }
               
            }); 


            $('#registers-form-submit').submit(function (e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: "{{ route('register-client-fe') }}",
                    data: {
                        fullname: $('#FullName').val(),
                        password: $('#Passwords').val(),
                        email: $('#Emails').val(),
                        phone: $('#number-phone-customer').val(),
                        
                    },
                   
                    success: function(result){
                        $("#Modal-register").modal("hide");
                        alert(result);

                        
                    }
                });
            })    

            

            $("#form-sub").validate({
                rules: {
                    "name": {
                        required: true,
                        maxlength: 15
                    },
                    "phone_number": {
                        required: true,
                         phonenu: true,
                    },

                    "mail": {
                        email: true,
                        
                    },

                    "address":{
                        required:true,
                    },
                    "province":{
                        required:true,
                    }

                   
                },
                messages: {
                    "name": {
                        required: "Bắt buộc nhập Họ và tên",
                        maxlength: "Hãy nhập tối đa 15 ký tự"
                    },
                    "phone_number": {
                        required: "Bắt buộc nhập số điện thoại",
                       
                    },
                    "mail":{
                        email: "Email không đúng định dạng",
                    },

                    "address":{
                        required:"Bắt buộc nhập thông tin địa chỉ",
                    },
                    "province":{
                        required:"Bắt buộc chọn thành phố",
                    }
                   
                }
            });
        });

        
        $( ".fa-user" ).click(function(){
            if($('.client-login').is(':visible')){
                 $('.client-login').hide();
            }
            else{
                $('.client-login').show();
            }
        })

       
    
    </script>

    </body>
</html>
