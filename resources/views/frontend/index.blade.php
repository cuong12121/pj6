@extends('frontend.layouts.appsss')

@section('content')

<style type="text/css">
    .banner_home__.container{
        padding: 0 80px !important;
    }

    .product{
            margin-right: 7.2px;
            margin-bottom: 7.2px;
        }

</style>

<link rel="stylesheet" type="text/css" href="{{ asset('css/details.css') }}?ver=8">
<div class="row-fluid ">
    <div class="span16 container outstanding">
        <div class="row-fluid ">
            <div class="span16 ">
                

                <div id="new-flash-sale_3621" class="block_render_falshsale" style="" data-layout="layout_5">

                    <div class="header title-block header-block">
                        <div class="title">
                            <span class="hot-deal">DEAL VERY NGON</span>
                            <span class="material-symbols-rounded flash"> flash_on </span>
                            <span class="today">HÔM NAY</span>
                        </div>
                        <!-- <div class="clock flip-clock-wrapper">
                            <ul class="flip ">
                               
                                <li class="flip-clock-active">
                                    <a href="#">
                                        <div class="up">
                                            <div class="shadow"></div>
                                            <div class="inn">0</div>
                                        </div>
                                        <div class="down">
                                            <div class="shadow"></div>
                                            <div class="inn">0</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="flip ">
                                

                                <li class="flip-clock-active">
                                    <a href="#">
                                        <div class="up">
                                            <div class="shadow"></div>
                                            <div class="inn">7</div>
                                        </div>
                                        <div class="down">
                                            <div class="shadow"></div>
                                            <div class="inn">7</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <span class="flip-clock-divider minutes">
                                <span class="flip-clock-label">Minutes</span>
                                <span class="flip-clock-dot top"></span>
                                <span class="flip-clock-dot bottom"></span>
                            </span>
                            <ul class="flip ">
                               
                                <li class="flip-clock-active">
                                    <a href="#">
                                        <div class="up">
                                            <div class="shadow"></div>
                                            <div class="inn">0</div>
                                        </div>
                                        <div class="down">
                                            <div class="shadow"></div>
                                            <div class="inn">0</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="flip ">
                               
                                <li class="flip-clock-active">
                                    <a href="#">
                                        <div class="up">
                                            <div class="shadow"></div>
                                            <div class="inn">3</div>
                                        </div>
                                        <div class="down">
                                            <div class="shadow"></div>
                                            <div class="inn">3</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <span class="flip-clock-divider seconds">
                                <span class="flip-clock-label">Seconds</span>
                                <span class="flip-clock-dot top"></span>
                                <span class="flip-clock-dot bottom"></span>
                            </span>
                            <ul class="flip play">
                                
                                <li class="flip-clock-active">
                                    <a href="#">
                                        <div class="up">
                                            <div class="shadow"></div>
                                            <div class="inn">2</div>
                                        </div>
                                        <div class="down">
                                            <div class="shadow"></div>
                                            <div class="inn">2</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="flip play">
                                
                                <li class="flip-clock-active">
                                    <a href="#">
                                        <div class="up">
                                            <div class="shadow"></div>
                                            <div class="inn">5</div>
                                        </div>
                                        <div class="down">
                                            <div class="shadow"></div>
                                            <div class="inn">5</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div> -->
                    </div>

                   

                    <div class="content first-render owl-carousel owl-loaded owl-drag" data-layout="layout_5" data-items_start="0" data-items_limit="50" data-big_bang="N" data-layout_type_config="Y" data-promotion_ids="" data-not_promotion_ids="">


                        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="payday-blockss">

                            @foreach($deal as $key => $value)
                               
                            @if( !empty($value->active) && $value->active ==1 && $now->between($value->start, $value->end))


                            <?php
                                $discount_deal =  round(((intval($value->price) - intval($value->deal_price))/intval($value->price))*100)
                            ?>
                            <div class="product-slide">                         
                                <div class="product">
                                    <div class="product-header" href="https://www.nguyenkim.com/laptop-lenovo-ideapad-3-14iau7-82rj0019vn.html">
                                        <div class="top-right">
                                            <div class="product-feature-badge-item installment">
                                                <span>Trả góp 0%</span>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                            <a href="{{ route('details', $value->link) }}">
                                                <img class="lazyload" loading="lazy" width="180px" height="180px" src="{{ $value->image }}" alt="Laptop Lenovo Ideapad 3 14IAU7 i5-1235U/8GB/512GB/Win11 82RJ0019VN">
                                            </a>
                                        </div>
                                       
                                        
                                    </div>
                                    <div class="product-body">
                                        <div class="product-feature-badge"></div>
                                        <div class="product-title">
                                            <a href="{{ route('details', $value->link) }}">{{ $value->name }}</a>
                                        </div>
                                        <div class="product-price">
                                            <p class="final-price">{{ @str_replace(',' ,'.', number_format($value->deal_price)) }}đ</p>
                                            <div class="saved">
                                                <span class="amount">{{ @str_replace(',' ,'.', number_format($value->price)) }}đ</span>
                                                <div class="discount-percent">
                                                    <span>-31%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-footer"></div>
                                    <a class="promotion" href="{{ route('details', $value->link) }}">
                                        <span class="note">Đã bán 4</span>
                                        <input style="background-size: 40% 100%" type="range" value="4" max="10">
                                    </a>
                                </div>
                            </div>

                            @endif

                            @endforeach


                        </div>    


                    </div>                             
                </div>


                @if(!empty($product_sale)&&$product_sale->count()>0)

                <?php 

                    $product_sale_chunk = $product_sale->chunk(2);
                ?>

                @if(!empty($product_sale)&&$product_sale->count()>0)
                <div class="payday-container" id="payday-block-container">
                    <div class="payday-header">
                        <div class="hinh_giamgia">
                            <a href="https://www.nguyenkim.com/tet-2024-giap-thin-vui-bat-thinh-linh.html" title="Chương trình khuyến mãi giá sốc">
                                <img src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/TET_2024/WEB/Title-web_1200x65.jpg" width="1200px" height="45px" alt="Chương trình khuyến mãi giá số">
                            </a>
                        </div>
                    </div>
                    <div class="payday-new-wrap">
                        <div style="display: none" id="getTimeDay">08/31/2</div>
                        <div style="display: none" id="getTimeHours">23:59:59</div>
                        <div class="new-carousel owl-carousel owl-theme owl-loaded owl-drag" id="payday-block">



                            @foreach($product_sale_chunk as $value)
                            <div class="owl-item-col">
                                @foreach($value as $key => $vals)

                                <a href="">
                                <div class="item-{{ $key }}">
                                    <a class="product-render rd" data-product_id="115481" product-id="115481" name="{{ $vals->Name  }}" href="{{ route('details', $vals->Link) }}" ></a>
                                    <div class="product-slide">
                                        <a class="product-render rd" data-product_id="115481" product-id="115481" name="{{ $vals->Name  }}" href="" ></a>
                                        <div class="product">
                                            <a class="product-render rd" data-product_id="115481" product-id="115481" name="{{ $vals->Name  }}" href="{{ route('details', $vals->Link) }}"></a>
                                            <div class="product-header">
                                                <a class="product-render rd" data-product_id="115481" product-id="115481" name="Tủ lạnh LG Inverter 374 lít GN-D372PS">
                                                    <div class="top-right">
                                                        <div class="product-feature-badge-item installment">
                                                            <span>Trả góp 0%</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="product-image">
                                                    <a class="product-render rd" data-product_id="115481" product-id="115481" name="Tủ lạnh LG Inverter 374 lít GN-D372PS"></a>
                                                    <a href="{{ route('details', $vals->Link) }}">
                                                        <img class="lazyload" loading="lazy" width="180px" height="180px" src="{{ asset($vals->Image) }}" alt="Tủ lạnh LG Inverter 374 lít GN-D372PS">
                                                    </a>
                                                </div>
                                                
                                               
                                            </div>
                                            <div class="product-body">
                                                <div class="product-feature-badge">
                                                    <div class="badge-shock-price">
                                                        <span>Giá Sốc Online</span>
                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <a href="{{ route('details', $vals->Link) }}">{{ $vals->Name }}</a>
                                                </div>
                                                <div class="product-price">
                                                    <p class="final-price">{{ @str_replace(',' ,'.', number_format($vals->Price)) }} </p>
                                                    
                                                </div>
                                            </div>
                                            <div class="product-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                @endif

                @endif

                

                <div class=" offers-partner">
                    <div style="text-align: center;">
                        <a href="https://www.nguyenkim.com/uu-dai-doi-tac.html" title="Ưu đãi đối tác">
                            <img loading="lazy" class=" lazyloaded" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/1122/TITLE%20HOME/Title-San-Uu-Dai-Noi-Bat-WEB.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/1122/TITLE%20HOME/Title-San-Uu-Dai-Noi-Bat-WEB.png" width="1200" height="65" alt="Title-San-Uu-Dai-Noi-Bat-WEB">
                        </a>
                    </div>
                </div> 
            
                <div class=" title-offers pay"><h2>Ưu Đãi Thanh Toán</h2></div>  

                <div class="nk_banner_floor_carousel_2020_wrapper">
                    <div class="owl-carousel nk_banner_floor_carousel_2020 owl-loaded owl-drag" style="">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-4053px, 0px, 0px); transition: all 0.25s ease 0s; width: 8107px;">
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2024/MOMO/Tet/MoMo-936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2024/MOMO/Tet/MoMo-936x376.jpg" width="100%" alt="VAS_CTKM MOMO">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/UOB/UOB_936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/UOB/UOB_936x376.jpg" width="100%" alt="VAS_CTKM UOB">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/SMARTPAY/Smartpay_936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/SMARTPAY/Smartpay_936x376.jpg" width="100%" alt="VAS_SMARTPAY">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/BE/Be-936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/BE/Be-936x376.jpg" width="100%" alt="VAS_Ưu đãi Be">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/VIB/Amex/VIB_936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/VIB/Amex/VIB_936x376.jpg" width="100%" alt="VAS - CT MỞ THẺ VIB AMEX">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2024/CTKM%20TH%C3%81NG/TH%C3%81NG%2001/TET/VAS-Thang-1-936X376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2024/CTKM%20TH%C3%81NG/TH%C3%81NG%2001/TET/VAS-Thang-1-936X376.jpg" width="100%" alt="VAS_CT FESTIVE">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/VNPAY/T11/VNPay-936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/VNPAY/T11/VNPay-936x376.jpg" width="100%" alt="VAS_VNPAY_NK300">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/VPBANK/Q4/VPBank-936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/VPBANK/Q4/VPBank-936x376.jpg" width="100%" alt="VAS:VPBank 24/11 - 31/01">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2024/SACOMBANK/Q1/Sacom_936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2024/SACOMBANK/Q1/Sacom_936x376.jpg" width="100%" alt="VAS_SACOMBANK Q1">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/HSBC/Mo%20the/HSBC-936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/HSBC/Mo%20the/HSBC-936x376.jpg" width="100%" alt="VAS_HSBC_Mo The">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2024/MOMO/Tet/MoMo-936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2024/MOMO/Tet/MoMo-936x376.jpg" width="100%" alt="VAS_CTKM MOMO">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/UOB/UOB_936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/UOB/UOB_936x376.jpg" width="100%" alt="VAS_CTKM UOB">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/SMARTPAY/Smartpay_936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/SMARTPAY/Smartpay_936x376.jpg" width="100%" alt="VAS_SMARTPAY">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/BE/Be-936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/BE/Be-936x376.jpg" width="100%" alt="VAS_Ưu đãi Be">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/VIB/Amex/VIB_936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/VIB/Amex/VIB_936x376.jpg" width="100%" alt="VAS - CT MỞ THẺ VIB AMEX">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2024/CTKM%20TH%C3%81NG/TH%C3%81NG%2001/TET/VAS-Thang-1-936X376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2024/CTKM%20TH%C3%81NG/TH%C3%81NG%2001/TET/VAS-Thang-1-936X376.jpg" width="100%" alt="VAS_CT FESTIVE">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/VNPAY/T11/VNPay-936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/VNPAY/T11/VNPay-936x376.jpg" width="100%" alt="VAS_VNPAY_NK300">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/VPBANK/Q4/VPBank-936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/VPBANK/Q4/VPBank-936x376.jpg" width="100%" alt="VAS:VPBank 24/11 - 31/01">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2024/SACOMBANK/Q1/Sacom_936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2024/SACOMBANK/Q1/Sacom_936x376.jpg" width="100%" alt="VAS_SACOMBANK Q1">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/HSBC/Mo%20the/HSBC-936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/PARTNERSHIP/2023/HSBC/Mo%20the/HSBC-936x376.jpg" width="100%" alt="VAS_HSBC_Mo The">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev">
                                <i class="nki-arow-rounded-back" aria-hidden="true"></i>
                            </button>
                            <button type="button" role="presentation" class="owl-next">
                                <i class="nki-arow-rounded-next" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div> 

                <div class=" title-offers brand"><h2>Ưu Đãi Thương Hiệu</h2></div>

                <div class="nk_banner_floor_carousel_2020_wrapper">
                    <div class="owl-carousel nk_banner_floor_carousel_2020 owl-loaded owl-drag" style="">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1621px, 0px, 0px); transition: all 0.25s ease 0s; width: 6080px;">
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/PRE_ORDER_S24/WEB/937x376_1.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/PRE_ORDER_S24/WEB/937x376_1.jpg" width="100%" alt="ECM_PRE-ORDER S24 DOT NGOAI 0923">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/promo/897/z5057769392193_f5b3b3e9f6c3b15fd8938bf6a13cb191.jpg" data-src="https://cdn.nguyenkimmall.com/images/promo/897/z5057769392193_f5b3b3e9f6c3b15fd8938bf6a13cb191.jpg" width="100%" alt="ECM_Brand deal Philips_dot ngoai">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/1223/DEALSHEET/MDA/Homepage-Top-Slide-Banner_936x376px_Button.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/1223/DEALSHEET/MDA/Homepage-Top-Slide-Banner_936x376px_Button.jpg" width="100%" alt="ECM_Brand deal desktop Aqua_1223">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/DEALSHEET/SHARP/Banner%20936%20x%20376-01.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/DEALSHEET/SHARP/Banner%20936%20x%20376-01.png" width="100%" alt="ECM_Dealsheet Sharp dot ngoai 0124">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/1223/PNS/Partnership%20936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/1223/PNS/Partnership%20936x376.jpg" width="100%" alt="ECM_Brand deal desktop Toshiba (1) 1223">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/1223/DEALSHEET/MDA/936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/1223/DEALSHEET/MDA/936x376.jpg" width="100%" alt="ECM_Brand deal mobile SS Bespoke 1223 ">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/LDP_PANA/Partnership%20banner%20936%20x%20376px-01.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/LDP_PANA/Partnership%20banner%20936%20x%20376px-01.png" width="100%" alt="ECM_KMHN_MuaPanatrungqualon_DOT NGOAI">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/PRE_ORDER_S24/WEB/937x376_1.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/PRE_ORDER_S24/WEB/937x376_1.jpg" width="100%" alt="ECM_PRE-ORDER S24 DOT NGOAI 0923">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/promo/897/z5057769392193_f5b3b3e9f6c3b15fd8938bf6a13cb191.jpg" data-src="https://cdn.nguyenkimmall.com/images/promo/897/z5057769392193_f5b3b3e9f6c3b15fd8938bf6a13cb191.jpg" width="100%" alt="ECM_Brand deal Philips_dot ngoai">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/1223/DEALSHEET/MDA/Homepage-Top-Slide-Banner_936x376px_Button.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/1223/DEALSHEET/MDA/Homepage-Top-Slide-Banner_936x376px_Button.jpg" width="100%" alt="ECM_Brand deal desktop Aqua_1223">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/DEALSHEET/SHARP/Banner%20936%20x%20376-01.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/DEALSHEET/SHARP/Banner%20936%20x%20376-01.png" width="100%" alt="ECM_Dealsheet Sharp dot ngoai 0124">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/1223/PNS/Partnership%20936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/1223/PNS/Partnership%20936x376.jpg" width="100%" alt="ECM_Brand deal desktop Toshiba (1) 1223">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/1223/DEALSHEET/MDA/936x376.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/1223/DEALSHEET/MDA/936x376.jpg" width="100%" alt="ECM_Brand deal mobile SS Bespoke 1223 ">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/LDP_PANA/Partnership%20banner%20936%20x%20376px-01.png" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/LDP_PANA/Partnership%20banner%20936%20x%20376px-01.png" width="100%" alt="ECM_KMHN_MuaPanatrungqualon_DOT NGOAI">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 395.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img style="width:100%;;opacity: 1;" class="owl-lazy" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/PRE_ORDER_S24/WEB/937x376_1.jpg" data-src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0124/PRE_ORDER_S24/WEB/937x376_1.jpg" width="100%" alt="ECM_PRE-ORDER S24 DOT NGOAI 0923">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev">
                                <i class="nki-arow-rounded-back" aria-hidden="true"></i>
                            </button>
                            <button type="button" role="presentation" class="owl-next">
                                <i class="nki-arow-rounded-next" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>


                <div class="w100p show-group-data">
                    <div class="span16 nk_houseware_best_selling_2020_wrapper nk_homepage_houseware_best_selling_2020_wrapper js_done ">
                        <div class="menu-wrap0" style="height: 35px;">
                            <div class="menu-wrap">

                                <?php 
                                    $define = ['Nổi bật','Tivi', 'Máy giặt', 'Tủ lạnh', 'Điều hòa'];

                                ?>

                                @foreach($define as $key => $value)
                                <div class="menu-item {{ $key===0?'active':''  }}" data-id="{{ $key }}" data-uid=""><span>{{ $value }}</span></div>
                                @endforeach

                                
                               
                            </div>
                        </div>
                        <div class="product-item show-data-group" data-uid="4133_3386">
                            <div class="nk-product-cate-style-grid nk-product-collection nk-product- clearfix">
                                <div id="pagination_contents" class="nk-product nks-fs-sync index-index" data-fs-type="0">

                                    <?php 

                                        $hot = DB::table('hot')->select('product_id')->where('group_id', 1)->orderBy('orders', 'asc')->get()->pluck('product_id');

                                        $data = App\Models\product::whereIn('id', $hot->toArray())->Orderby('orders_hot', 'desc')->get();

                                    ?>

                                    @foreach($data as $key =>$datas)

                                    <a class="product-render rd">
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
                                    </a>

                                    @endforeach

                                </div>
                            </div>
                        </div>
                             
                    </div>
                </div>

            </div>    
        </div>    
            
    </div>    
</div>

<script type="text/javascript">
    
    $('.menu-wrap0 .menu-item').click(function () {
        
        $('.menu-wrap0 .menu-item').removeClass('active');

        $(this).addClass('active');

        var id = $(this).attr('data-id')

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: "{{ route('showGroupData') }}",
                data: {

                    id:id
                   
                },

               
                success: function(result){
                  
                   // numberCart = result.find("#number-product-cart").text();

                    $('.show-data-group').html(''); 

                    $('.show-data-group').append(result);

                
                    
                }
            });


    });
</script>

@endsection