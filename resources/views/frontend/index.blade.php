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

<link rel="stylesheet" type="text/css" href="{{ asset('css/details.css') }}?ver=25">
<div class="row-fluid ">
    <div class="span16 container outstanding">
        <div class="row-fluid ">
            <div class="span16 ">
                

                <div id="new-flash-sale_3621" class="block_render_falshsale" style="" data-layout="layout_5">

                    <div class="header title-block header-block">
                        <div class="title">
                            <span class="hot-deal">DEAL NGON MỖI NGÀY</span>
                           <!--  <span class="material-symbols-rounded flash">  </span>
                            <span class="today"></span> -->
                        </div>
                        <div class="clock flip-clock-wrapper">
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
                        </div> 
                    </div>

                    <?php 
                        $convert_ar_deal = json_decode($deal, true);
                       
                        $key_first = array_key_first($convert_ar_deal);

                        $time_deal_end = $deal[$key_first]->end;
                       

                        $timestamp = $now->diffInSeconds($time_deal_end);
                        $hour =  floor($timestamp/3600);
                        $timestamp = floor($timestamp % 3600);
                        $minutes =floor($timestamp/60);
                        $timestamp = floor($timestamp % 60);
                        $seconds =floor($timestamp);


                    ?>



                   

                    <div class="content first-render owl-carousel owl-loaded owl-drag" data-layout="layout_5" data-items_start="0" data-items_limit="50" data-big_bang="N" data-layout_type_config="Y" data-promotion_ids="" data-not_promotion_ids="">


                        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="payday-blockss">

                           

                            @foreach($deal as $key => $value)
                               
                            @if( !empty($value->active) && $value->active ==1 && $now->between($value->start, $value->end))

                           
                            <?php
                                $discount_deal =  round(((intval($value->price) - intval($value->deal_price))/intval($value->price))*100)
                            ?>
                            <div class="product-slide">                         
                                <div class="product">
                                    <div class="product-header" href="{{ route('details', $value->link) }}">
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


                    <!-- banner under sale -->
                    @if(!empty($bannerUnderSale[0]['image']))
                   
                    <div class="payday-header">
                        <div class="hinh_giamgia">
                            <a href="#" title="Chương trình khuyến mãi giá sốc">
                                <img src="{{ $bannerUnderSale[0]['image'] }}" width="1200px" height="45px" alt="Chương trình khuyến mãi giá số">
                            </a>
                        </div>
                    </div>

                    @endif

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
                                                <!-- <div class="product-feature-badge">
                                                    <div class="badge-shock-price">
                                                        <span>Giá Sốc Online</span>
                                                    </div>
                                                </div> -->
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


                <div class="lst-cate-title header-block"> <span>ƯU ĐÃI NỔI BẬT</span> </div>
            
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
                                                <div class="product-header" href="{{ route('details', $datas->Link) }}">
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

    setInterval(function(){
        for (var i = 0 ; i < loop; i++) {
            run(i);
        }

    }, 1000);

    function run(key) {
        var hour =  '{{ $hour }}';
        var minutes =  '{{ $minutes }}';
        var second =  '{{ $seconds }}';
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