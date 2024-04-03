
<script>
// var code = prompt('Nhập mã để truy cập trang web:');
// if (code !== '112233445577') {
//     window.location.href = 'https://demo.dienmaynguoiviet.net/404';
// }
</script>

   <!DOCTYPE html>
   <!--[if lt IE 10]>
<html class="ltie10" lang="vi-VN">
    <![endif]-->
   <!--[if gt IE 9]>
    <!-->
   <html lang="vi-VN" itemscope itemtype="https://schema.org/WebPage">
       <!--
        <![endif]-->
       <head>
           <!-- Google Tag Manager -->
           <script defer type="text/javascript">
               (function(w, d, s, l, i) {
                   w[l] = w[l] || [];
                   w[l].push({
                       'gtm.start': new Date().getTime(),
                       event: 'gtm.js'
                   });
                   var f = d.getElementsByTagName(s)[0],
                       j = d.createElement(s),
                       dl = l != 'dataLayer' ? '&l=' + l : '';
                   j.async = true;
                   j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                   f.parentNode.insertBefore(j, f);
               })(window, document, 'script', 'dataLayer', 'GTM-PN5JS4V');
           </script>
           <!-- End Google Tag Manager -->
          
           
           <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
           <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
           <meta name="revisit-after" content="1 days" />
           <meta property="og:locale" content="vi_VN" />
           <meta name="google-site-verification" content="GcfqZD0vVCwymOXxI1gbgkuvmHrDcNw8ziH_bpM6YRU" />
           @if(!empty($meta))
            <title>{{ $meta->meta_title }}</title>
            <meta name="description" content="{{ $meta->meta_content }}"/>
            <meta property="og:title" content="{{ $meta->meta_title }}" />

            @else
             <title>Siêu thị điện máy</title>
            @endif 
            @if(!empty($data) && !empty($data->Image))
            <meta property="og:image" content="{{ asset($data->Image) }}"/>
            @endif
           
           <link rel="canonical" href="https://www.nguyenkim.com/" />
           <meta http-equiv="X-UA-Compatible" content="IE=edge" />
           
           <meta property="og:type" content="article" />
           <meta property="og:title" content="Nguyễn Kim - Siêu thị điện máy, điện lạnh giá tốt " />
           <meta property="og:site_name" content="Siêu thị điện máy Nguyễn Kim - www.nguyenkim.com" />
           <meta property="fb:app_id" content="534767553533391" />
           <meta property="fb:pages" content="150921051593902" />
           <meta property="og:image" content="" />
           
           <meta property="og:description" content="" />
           <meta itemprop="name" content="">
           <meta itemprop="description" content="">
           <meta itemprop="image" content="">
           <meta name="twitter:card" content="summary_large_image">
           <meta name="twitter:site" content="@Nguyenkimonline">
           <meta name="twitter:title" content="">
           <meta name="twitter:description" content="">
           <meta name="twitter:creator" content="">
           <meta name="twitter:image:src" content="">
           <meta name="format-detection" content="telephone=no">
           <meta name="csrf-token" content="{{ csrf_token() }}">

           <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
             <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
            <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}?ver=5 ">


            <script type="text/javascript" src="https://dienmaynguoiviet.vn/js/lib/owl.carousel.min.js"></script>
            <link rel="stylesheet" href="https://dienmaynguoiviet.vn/css/lib/owl.carousel.min.css">
           <link href="https://cdn.nguyenkimmall.com/images/favicon/icon803.png" rel="shortcut icon" />
          
               
           <script type="application/javascript">
               var dataRenderProduct = [];
           </script>

           <style type="text/css">
               
               #ui-id-1{
                background: #fff;
                z-index: 9999;
                width: 22%;
               }
           </style>

           <?php  

            $requestcheck = \Request::route();

            if(!empty($requestcheck)){
                 $nameRoute = \Request::route()->getName();
            }
            else{
                 $nameRoute = '';
            }
           

          ?>
          @if(!empty($requestcheck)&& \Request::route()->getName() =="homeFe")

            <style type="text/css">
                .nk-menu #nk-danh-muc-san-pham-left.nk-danh-muc-trang-chu>ul {
                   display: block;
               }

                #nk-banner-home .item{
                    margin-left: 256px !important;
                }
            </style>
            
           @endif 

           <style type="text/css">
            .nk_houseware_best_selling_2020_wrapper .product, .product-slide{
                width: auto !important;
            }
            </style>
       </head>

       <script>
               function getCookie(name) {
                   var nameEQ = name + "=";
                   var ca = document.cookie.split(';');
                   for (var i = 0; i < ca.length; i++) {
                       var c = ca[i];
                       while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                       if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                   }
                   return null;
               }

               function isApp() {
                   return false;
                   return getCookie('client') == 'app';
               }

               function isAndroid() {
                   return /Android/.test(navigator.userAgent || navigator.vendor || window.opera);
               }

               function isMobileSkin() {
                   return getCookie('mp_skin') == 'mobile';
               }

               function isIOS() {
                   return /iPad|iPhone|iPod/.test(navigator.userAgent || navigator.vendor || window.opera) && !window.MSStream;
               }

               function loadAppJS() {
                   var element = document.createElement("script");
                   element.async = true;
                   element.defer = true;
                   element.src = '/js/addons/nk_mp_mobile/app/libs/requirejs/require.js';
                   element.setAttribute('data-main', '/js/addons/nk_mp_mobile/app/AppLoader.js?t=1805225');
                   document.head.appendChild(element);
               }
               if (location.search.indexOf("phone_app=Y") >= 0) document.cookie = "client=app";
               var bodyClass = document.body.getAttribute('class');
               bodyClass += isApp() ? ' app' : '';
               bodyClass += isIOS() ? ' ios' : isAndroid() ? ' android' : '';
               document.body.setAttribute('class', bodyClass);
               if (isApp()) {
                   if (document.addEventListener) {
                       document.addEventListener("DOMContentLoaded", function() {
                           document.removeEventListener("DOMContentLoaded", arguments.callee, false);
                           loadAppJS();
                       }, false);
                   } else if (document.attachEvent) {
                       document.attachEvent("onreadystatechange", function() {
                           if (document.readyState === "complete") {
                               document.detachEvent("onreadystatechange", arguments.callee);
                               loadAppJS();
                           }
                       });
                   }
               }
            </script>

            <body class="d nk-home-page " data-cache-time="1705532485000" data-layout="desktop" data-ctrl="index_index">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PN5JS4V" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script>
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        function isApp() {
            return false;
            return getCookie('client') == 'app';
        }

        function isAndroid() {
            return /Android/.test(navigator.userAgent || navigator.vendor || window.opera);
        }

        function isMobileSkin() {
            return getCookie('mp_skin') == 'mobile';
        }

        function isIOS() {
            return /iPad|iPhone|iPod/.test(navigator.userAgent || navigator.vendor || window.opera) && !window.MSStream;
        }

        function loadAppJS() {
            var element = document.createElement("script");
            element.async = true;
            element.defer = true;
            element.src = '/js/addons/nk_mp_mobile/app/libs/requirejs/require.js';
            element.setAttribute('data-main', '/js/addons/nk_mp_mobile/app/AppLoader.js?t=1805225');
            document.head.appendChild(element);
        }
        if (location.search.indexOf("phone_app=Y") >= 0) document.cookie = "client=app";
        var bodyClass = document.body.getAttribute('class');
        bodyClass += isApp() ? ' app' : '';
        bodyClass += isIOS() ? ' ios' : isAndroid() ? ' android' : '';
        document.body.setAttribute('class', bodyClass);
        if (isApp()) {
            if (document.addEventListener) {
                document.addEventListener("DOMContentLoaded", function() {
                    document.removeEventListener("DOMContentLoaded", arguments.callee, false);
                    loadAppJS();
                }, false);
            } else if (document.attachEvent) {
                document.attachEvent("onreadystatechange", function() {
                    if (document.readyState === "complete") {
                        document.detachEvent("onreadystatechange", arguments.callee);
                        loadAppJS();
                    }
                });
            }
        }
    </script>
    <div class="ty-tygh" id="tygh_container">
        <div id="ajax_overlay" class="ty-ajax-overlay"></div>
        <div id="ajax_loading_box" class="ty-ajax-loading-box"></div>
        <div class="ty-helper-container no-touch" id="tygh_main_container">
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
                            <a class="banner-link" href="https://www.nguyenkim.com/tet-2024-giap-thin-vui-bat-thinh-linh.html" title="banner-top">
                                <img class="banner-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/TET_2024/WEB/Top-Banner-1920x45px.jpg" width="1920px" height="45px" alt="ECM_Top banner Tết 2024">
                            </a>
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
                                                                            <input type="text" id="tags" name="key"  id="search_input" placeholder="Bạn cần tìm gì hôm nay ?" autocomplete="off">
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

                                                                 <?php
                                                                    $cart = Gloudemans\Shoppingcart\Facades\Cart::content();

                                                             

                                                                    $number_cart = count($cart);
                                                                   
                                                                 ?>   
                                                                <div id="nk-cart">
                                                                    <ul>
                                                                        <li class="cart-info-box nk_tooltip" data-toggle=".nk-cart-content" data-overlay="true">
                                                                            <a href="/index.php?dispatch=checkout.new_checkout" class="checkout_header">
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
                                                                            <!-- <a href="/tra-cuu.html"> Tra cứu đơn hàng </a> -->
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
                                                                        <a href="/ti-vi">Tivi</a>
                                                                        
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
                                                                        <a href="/tu-lanh">Tủ lạnh</a>
                                                                        <a href="/tu-dong">Tủ đông</a>
                                                                        <a href="tu-mat">Tủ mát</a>
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
                                                                        <a href="/may-giat">Máy giặt</a>
                                                                        <a href="/may-say-quan-ao">Máy sấy</a>
                                                                        <a href="/binh-nong-lanh">Máy nước nóng</a>
                                                                    </p>
                                                                </div>
                                                                <div class="sub-menu may-giat-may-say" style="display: none;">
                                                                    <div class=" menu-maygiat children_sort" style="display: none;">
                                                                        <div class="item row2 bg-white">
                                                                            <div class="links">
                                                                                <h5 title="Máy giặt">
                                                                                    <a class="a-links" href="/may-giat">Máy giặt <span class="nk-sticker">
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
                                                                        <a href="/dieu-hoa">Máy lạnh</a>
                                                                        <a href="/quat">Quạt</a>
                                                                       
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
            <div class="tygh-content clearfix">
                <div class="container-fluid none-bacground">

                    <div class="row-fluid ">
                        <div class="span16 container wrap_banner_scroll">
                            <div class="nk-banner-scroll-home-left">
                                <div class="scroll-content">
                                    <a rel="nofollow" href="javascript:void(0)">
                                        <img class="banner-lazy" src="https://cdn.nguyenkimmall.com/images/promo/907/Side_banner_120X450-01.png" data-src="https://cdn.nguyenkimmall.com/images/promo/907/Side_banner_120X450-01.png" width="100%" alt="ECM_Banner scroll homepage position left">
                                    </a>
                                </div>
                            </div>
                            <div class="nk-banner-scroll-home-right">
                                <div class="scroll-content">
                                    <a rel="nofollow" href="javascript:void(0)">
                                        <img class="banner-lazy" src="https://cdn.nguyenkimmall.com/images/promo/914/Side_banner_120X450-02.png" data-src="https://cdn.nguyenkimmall.com/images/promo/914/Side_banner_120X450-02.png" width="100%" alt="ECM_Banner scroll homepage position right (1)">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row-fluid ">
                        <div class="span16 banner_home__ container">
                            <div class="row-fluid ">
                                <div class="span11 row banner-left">
                                    <div id="nk-banner-home">
                                        <div  class="nk-banner-main owl-carousel carsl1 owl-loaded owl-drag" >
                                            @if(isset($banners))

                                                @foreach($banners as $value)

                                                <div data-banner-item="0" class="item">
                                                    <a rel="nofollow" href="javascript:void(0)">
                                                         <img fetchpriority="high" class="main-banner" src="{{ asset($value->image) }}"  alt="ECM_Pre-order S24_0124" style="width: 100%">
                                                    </a>
                                                </div>
                                                 @endforeach

                                            @else

                                            <div data-banner-item="0" class="item">
                                                <a rel="nofollow" href="javascript:void(0)">
                                                     
                                                     <img fetchpriority="high" class="main-banner" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/PRE_ORDER_S24/WEB/694x376px.jpg"  alt="ECM_Pre-order S24_0124" style="width: 100%">

                                                </a>
                                            </div>
                                                 
                                            @endif 

                                        </div>
                                    </div>
                                    <style>
                                        #nk-banner-home #sync1 {
                                            display: block;
                                            visibility: visible;
                                            opacity: 1;
                                            border-radius: 0.5rem;
                                        }

                                        .owl-carousel .item {
                                            padding: 0;
                                        }

                                        .wrapper-home-banner .owl-carousel {
                                            display: block;
                                            visibility: visible;
                                            opacity: 1;
                                            border-radius: 0.5rem;
                                        }

                                        .owl-item .owl-lazy {
                                            opacity: 1;
                                        }
                                    </style>
                                </div>
                                <div class="span5 banner-right">
                                    <div class="top-image">
                                        <a href="javascript:void(0)">
                                            <img fetchpriority="high" loading="eager" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/TET_2024/HOME/309x183px_AV1.jpg" width="100%" alt="309x183px_AV1">
                                        </a>
                                    </div>
                                    <div class="bottom-image">
                                        <a href="javascript:void(0)">
                                            <img fetchpriority="high" loading="eager" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/PRE_ORDER_S24/WEB/309x183.jpg" width="100%" alt="309x183">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    @yield('content')





                
                    <div class="row-fluid ">
                        <!-- <div class="span16 margbt10 ">
                            <div class="container">
                                <div class="blog-container">
                                    <div class="header-blog header-block">
                                        <span>Thông tin hữu ích - Mua sắm thông minh</span>
                                        <a class="view-more-blog" href="/blog.html">Xem thêm</a>
                                    </div>
                                    <div class="section-news-top ">
                                        <div class="content_blog">
                                            <div class="wrap_item_left">
                                                <div class="item">
                                                    <a href="https://www.nguyenkim.com/ct-giap-thin-vui-bat-thinh-linh.html">
                                                        <img loading="lazy" class="pict lazy ls-is-cached lazyloaded" src="https://cdn.nguyenkimmall.com/images/thumbnails/580/326/detailed/914/0301-MN-1_1162x652__2_.png" data-src="https://cdn.nguyenkimmall.com/images/thumbnails/580/326/detailed/914/0301-MN-1_1162x652__2_.png" width="285px" height="195px" alt="0301-MN-1_1162x652__2_">
                                                        <span class="options">
                                                            <h3 class="truncate-blog-title" data-truncate="Giáp Thìn Vui Bất Thình Lình - Ưu đãi đặc biệt tại Nguyễn Kim mùa Tết 2024"> Giáp Thìn Vui Bất Thình Lình - Ưu đãi đặc biệt tại Nguyễn Kim mùa Tết 2024</h3>
                                                            <span class="truncate-blog-time">Nguyễn Vũ Chi Mai</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="wrap_item_right">
                                                <div class="item">
                                                    <a href="https://www.nguyenkim.com/hang-ngan-san-pham-xa-kho-gia-soc-dang-cho-ban-tai-53-ttms-nguyen-kim.html">
                                                        <img loading="lazy" class="pict lazy ls-is-cached lazyloaded" src="https://cdn.nguyenkimmall.com/images/thumbnails/160/97/detailed/914/0401-TTT-4_1162x652.png" data-src="https://cdn.nguyenkimmall.com/images/thumbnails/160/97/detailed/914/0401-TTT-4_1162x652.png" width="285px" height="195px" alt="0401-TTT-4_1162x652">
                                                        <span class="options">
                                                            <h3 class="truncate-blog-title" data-truncate="Hàng ngàn sản phẩm Xả Kho Giá Sốc đang chờ bạn tại 53 TTMS Nguyễn Kim "> Hàng ngàn sản phẩm Xả Kho Giá Sốc đang chờ bạn tại 53 TTMS Nguyễn Kim </h3>
                                                            <span class="truncate-blog-time">Trương Thu Thảo </span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="https://www.nguyenkim.com/mua-tu-lanh-may-giat-panasonic-ruoc-40-may-giat-say-panasonic-cuc-xin.html">
                                                        <img loading="lazy" class="pict lazy ls-is-cached lazyloaded" src="https://cdn.nguyenkimmall.com/images/thumbnails/160/97/detailed/914/0901-TTT-1_1162x652.png" data-src="https://cdn.nguyenkimmall.com/images/thumbnails/160/97/detailed/914/0901-TTT-1_1162x652.png" width="285px" height="195px" alt="0901-TTT-1_1162x652">
                                                        <span class="options">
                                                            <h3 class="truncate-blog-title" data-truncate="Mua tủ lạnh, máy giặt Panasonic - Rước 40 máy giặt sấy Panasonic cực xịn"> Mua tủ lạnh, máy giặt Panasonic - Rước 40 máy giặt sấy Panasonic cực xịn</h3>
                                                            <span class="truncate-blog-time">Trương Thu Thảo </span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="https://www.nguyenkim.com/dat-truoc-galaxy-s24-series-tai-nguyen-kim-ruoc-uu-dai-cuc-khung.html">
                                                        <img loading="lazy" class="pict lazy ls-is-cached lazyloaded" src="https://cdn.nguyenkimmall.com/images/thumbnails/160/97/detailed/916/Catepage-Banner_1200x628px_4muz-rc.jpg" data-src="https://cdn.nguyenkimmall.com/images/thumbnails/160/97/detailed/916/Catepage-Banner_1200x628px_4muz-rc.jpg" width="285px" height="195px" alt="Catepage-Banner_1200x628px_4muz-rc">
                                                        <span class="options">
                                                            <h3 class="truncate-blog-title" data-truncate="Đặt Trước Galaxy S24 Series Tại Nguyễn Kim Rước Ưu Đãi Cực Khủng"> Đặt Trước Galaxy S24 Series Tại Nguyễn Kim Rước Ưu Đãi Cực Khủng</h3>
                                                            <span class="truncate-blog-time">Trương Thu Thảo </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row-fluid ">
                            <div class="span16 container">
                                <div class="nk-recent">
                                    <div class="nk-recent-title header-block">
                                        <span>Sản phẩm Gợi ý</span>
                                    </div>
                                    <?php
                                    $hot = DB::table('hot')->select('product_id')->where('group_id', 2)->orderBy('orders', 'asc')->get()->pluck('product_id');

                                        $data = App\Models\product::whereIn('id', $hot->toArray())->Orderby('orders_hot', 'desc')->get();

                                    ?>    
                                    <div class=" recent-container">
                                        <div class="nk-recent-list product-list owl-carousel owl-loaded owl-drag">
                                            
                                            <div id="sync1" class="owl-carousel">

                                                @foreach($data as $key =>$datas)


                                                <div class="product-slide">
                                                    <div class="product-slide">
                                                        <div class="product">
                                                            <div class="product-header" href="https://www.nguyenkim.com/dien-thoai-iphone-15-pro-128gb-blue-titanium.html">
                                                                <div class="top-right">
                                                                    <div class="product-feature-badge-item installment"><span>Trả góp 0%</span></div>
                                                                </div>
                                                                <div class="product-image">
                                                                    <a href="{{ route('details', $datas->Link) }}">
                                                                        <img
                                                                            class="ls-is-cached lazyloaded"
                                                                            
                                                                            src="{{ asset($datas->Image) }}"
                                                                            
                                                                        />
                                                                    </a>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="product-body">
                                                                <div class="product-feature-badge"></div>
                                                                <div class="product-title"><a href="{{ route('details', $datas->Link) }}">{{ $datas->Name }}</a></div>
                                                                <div class="product-price">
                                                                    <p class="final-price">{{ @str_replace(',' ,'.', number_format($datas->Price)) }}đ   </p>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="product-footer"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>         
                                            <div class="owl-dots disabled"></div>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    a.adpopup-close.close-desktop {
                                        height: 25px;
                                        width: 25px;
                                        background-color: #FFF;
                                        border-radius: 50%;
                                        display: inline-block;
                                    }

                                    .adpopup-style-bg-light {
                                        background-color: #fff0;
                                    }

                                    .adpopup {
                                        box-shadow: 0 7px 20px 0 rgba(17, 29, 43, 0);
                                    }

                                    .adpopup-close.close-desktop::before,
                                    .adpopup-close.close-desktop::after {
                                        left: 11px;
                                        top: 4px;
                                    }

                                    .m .adpopup-content-image img {
                                        background: #fff0;
                                    }
                                </style>
                            </div>
                        </div>
                        <div class="row-fluid ">
                            <div class="span16 container">
                                <div class="nk-product-cate-homepage">
                                    <div class="lst-cate-title header-block">
                                        <span>Danh Mục Nổi Bật</span>
                                    </div>
                                    <div class="categories">
                                        <div class="nk-content">
                                            <a class="item" href="/dieu-hoa">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/maylanh.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/maylanh.png" width="50" height="50" alt="may-lanh">
                                                </div>
                                                <h4 class="cate-title">Điều hòa</h4>
                                            </a>
                                            <a class="item" href="/dien-thoai-di-dong/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/dien-thoai.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/dien-thoai.png" width="50" height="50" alt="may-lanh">
                                                </div>
                                                <h4 class="cate-title">Điện thoại</h4>
                                            </a>
                                            <a class="item" href="/tu-lanh/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/tulanh.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/tulanh.png" width="50" height="50" alt="bep-tu-hong-ngoai">
                                                </div>
                                                <h4 class="cate-title">Tủ lạnh</h4>
                                            </a>
                                            <a class="item" href="/tivi/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/tivi.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/tivi.png" width="50" height="50" alt="dien-thoai-di-dong">
                                                </div>
                                                <h4 class="cate-title">Tivi</h4>
                                            </a>
                                            <a class="item" href="/may-tinh-xach-tay/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/laptop.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/laptop.png" width="50" height="50" alt="may-tinh-xach-tay">
                                                </div>
                                                <h4 class="cate-title">Laptop</h4>
                                            </a>
                                            <a class="item" href="/may-giat/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-giat.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-giat.png" width="50" height="50" alt="may-say-toc">
                                                </div>
                                                <h4 class="cate-title">Máy giặt</h4>
                                            </a>
                                            <a class="item" href="/quat-vi/?features_hash=65-148987-148986-5954">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/quat-hoi-nuoc.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/quat-hoi-nuoc.png" width="50" height="50" alt="loa">
                                                </div>
                                                <h4 class="cate-title">Quạt hơi nước</h4>
                                            </a>
                                            <a class="item" href="/may-nuoc-nong/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-nuoc-nong.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-nuoc-nong.png" width="50" height="50" alt="binh-loc-nuoc">
                                                </div>
                                                <h4 class="cate-title">Máy nước nóng</h4>
                                            </a>
                                            <a class="item" href="/may-in-van-phong/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-in.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-in.png" width="50" height="50" alt="man-hinh-lcd-vi-tinh">
                                                </div>
                                                <h4 class="cate-title">Máy in</h4>
                                            </a>
                                            <a class="item" href="/noi-com-dien/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/noi-com-dien.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/noi-com-dien.png" width="50" height="50" alt="may-ep-trai-cay">
                                                </div>
                                                <h4 class="cate-title">Nồi cơm điện</h4>
                                            </a>
                                            <a class="item" href="/noi-chien-khong-dau/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/noi-chien-khong-dau.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/noi-chien-khong-dau.png" width="50" height="50" alt="may-in-van-phong">
                                                </div>
                                                <h4 class="cate-title">Nồi chiên không dầu</h4>
                                            </a>
                                            <a class="item" href="/may-loc-khong-khi/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-loc-khong-khi.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-loc-khong-khi.png" width="50" height="50" alt="may-loc-khong-khi">
                                                </div>
                                                <h4 class="cate-title">Máy lọc không khí</h4>
                                            </a>
                                            <a class="item" href="/man-hinh-lcd-vi-tinh/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/man-hinh.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/man-hinh.png" width="50" height="50" alt="may-nuoc-nong">
                                                </div>
                                                <h4 class="cate-title">Màn hình</h4>
                                            </a>
                                            <a class="item" href="/may-ep-trai-cay/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-ep.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-ep.png" width="50" height="50" alt="may-giat">
                                                </div>
                                                <h4 class="cate-title">Máy ép</h4>
                                            </a>
                                            <a class="item" href="/binh-loc-nuoc/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-loc-nuoc.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-loc-nuoc.png" width="50" height="50" alt="noi-chien-khong-dau">
                                                </div>
                                                <h4 class="cate-title">Máy lọc nước</h4>
                                            </a>
                                            <a class="item" href="/quat-vi/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/quat-dien.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/quat-dien.png" width="50" height="50" alt="noi-com-dien">
                                                </div>
                                                <h4 class="cate-title">Quạt điện</h4>
                                            </a>
                                            <a class="item" href="/bep-tu-hong-ngoai">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/bep-dien.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/bep-dien.png" width="50" height="50" alt="quat-vi">
                                                </div>
                                                <h4 class="cate-title">Bếp điện</h4>
                                            </a>
                                            <a class="item" href="/amply-va-loa/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/loa.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/loa.png" width="50" height="50" alt="quat-vi">
                                                </div>
                                                <h4 class="cate-title">Loa</h4>
                                            </a>
                                            <a class="item" href="/may-tinh-bang/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-tinh-bang.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-tinh-bang.png" width="50" height="50" alt="ti-vi">
                                                </div>
                                                <h4 class="cate-title">Máy tính bảng</h4>
                                            </a>
                                            <a class="item" href="/may-say-toc/">
                                                <div>
                                                    <img class=" ls-is-cached lazyloaded" loading="lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-say-toc.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/layout/categories_v2/may-say-toc.png" width="50" height="50" alt="dien-thoai-di-dong">
                                                </div>
                                                <h4 class="cate-title">Máy sấy tóc</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid ">
                            <div class="span16 ">
                                <div id="div_asm_nk_banner_side_pc"></div>
                                <script defer="">
                                    _cdp365JourneySetting = {
                                        jrequest_events: [{
                                            event_category: "pageview",
                                            event_action: "view"
                                        }],
                                        jrequest_zones: ["div_asm_nk_banner_side_pc"]
                                    }
                                </script>
                                <style>
                                    .d .nk-recent {
                                        margin: 1em -15px !important;
                                    }
                                </style>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>         
    <script src="https://cdn.nguyenkimmall.com/js/addons/nk_mp_core/onesignal.js" async=""></script>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>


    <script type="text/javascript">

        $('.carsl1').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:1
                }
            }
        })

        setTimeout(function() {
            run(0);
        }, 1000);

        function run(key) {
            var hour =  $('.time'+key+' .hourss').text();
            var minutes =  $('.time'+key+' .minutess').text();
            var second =  $('.time'+key+' .secondss').text();
            h =  parseInt(hour);
            m = parseInt(minutes);
            s = parseInt(second);
            s--;
            /*BƯỚC 1: CHUYỂN ĐỔI DỮ LIỆU*/
              // Nếu số giây = -1 tức là đã chạy ngược hết số giây, lúc này:
              //  - giảm số phút xuống 1 đơn vị
              //  - thiết lập số giây lại 59
            if (s === -1){
                  m -= 1;
                 
                  s = 59;
            }

            // Nếu số phút = -1 tức là đã chạy ngược hết số phút, lúc này:
            //  - giảm số giờ xuống 1 đơn vị
            //  - thiết lập số phút lại 59
            if (m === -1){
                h -= 1;
                m = 59;
            }

             if (h < 0){
                $('.time'+key).remove();

                priceSet =  $('.desc-deal'+key+' .price-old').text();

                $('.desc-deal'+key+' .price-old').css('text-decoration','none');

                $('.desc-deal'+key+' .price-new').text(priceSet);

              }  

            hour =  h.toString();

            minutes =  m.toString();
            
            seconds =  s.toString();
            // $('.time'+key+' .hourss').text(h<10?'0'+hour:''+hour);
            // $('.time'+key+' .secondss').text(s<10?'0'+seconds:''+seconds);
            // $('.time'+key+' .minutess').text(m<10?'0'+minutes:''+minutes); 

            if(key===0){

                $('.countdown-timer #hour').text(h<10?'0'+hour:''+hour);
                $('.countdown-timer #second').text(s<10?'0'+seconds:''+seconds);
                $('.countdown-timer #minute').text(m<10?'0'+minutes:''+minutes); 


            }

            // nhảy time bản mobile khi tắt set giờ riêng
            $('.mobiles .time .hourss').text(h<10?'0'+hour:''+hour);
            $('.mobiles .time .secondss').text(s<10?'0'+seconds:''+seconds);
            $('.mobiles .time .minutess').text(m<10?'0'+minutes:''+minutes); 

            setTimeout(function() {
                run(0);
            }, 1000);
        }
        
    </script>

    <script type="text/javascript">
        $('#sync1').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })

        

        $('#banner-home').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })


        $('#payday-blocks').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })

        $('#payday-block').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })

        $('#payday-blockss').owlCarousel({

            loop:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })

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

                         console.log(1);

                        $('#ui-id-1').html();

                        $('#ui-id-1').html(data);
                    
                    }
                });
            },

            
            html:true,
        });
    });


        
        

    </script>
</body>
</html>