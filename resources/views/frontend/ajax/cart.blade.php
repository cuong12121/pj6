
<div id="number-product-cart" style="display:none">{{ count($data_cart) }}</div>


<style type="text/css">
    .item-form{
        text-align: right;
    }
    #discount_code{
        width: 35%;
        border: 1px solid #dddddd;
        padding: 5px;
    }

    .discount-div{
        border: 0;
    }
</style>
@if(count($data_cart)>0)
<div style="width:100%;">
    <?php  

        $arrPrice = [];

        $total_quantity = [];

        $key = 0;
        
    ?>
    @foreach($data_cart as $data)

        <?php 

            $price = (int)$data->price*(int)$data->qty;
            $key++;
            array_push($arrPrice, $price);

            array_push($total_quantity, $data->qty);

            $infoProducts = App\Models\product::find($data->id);

        ?>

    <div class="js-item-row product_list_cart" data-variant_id="0" data-item_id="5804" data-item_type="product">

        <div class="cart_col_1">
            <a href="{{ route('details', $infoProducts->Link) }}"><img src="{{ asset($infoProducts->Image) }}" style="width: 85px;"></a>
           
        </div>
        <div class="cart_col_2">
            <a href="{{ route('details', $infoProducts->Link) }}"><span class="name">{{ $data->name }}</span></a>
            <!--//Kiem tra khuyen mai co lua chon-->
            <ul style="list-style-type: disc;color: #888888;margin-left: 15px;">
            </ul>
            
        </div>
        <div class="cart_col_3">
            <div class="col_price code1">
                
                <span class="total-item-price">{{ number_format($data->price , 0, ',', '.')}} </span> đ


            </div>
            <div class="col_input">
                <a href="javascript:void(0)" class="quantity-change"  title="tru" onclick="tru('{{ $key  }}', '{{ $data->rowId }}')">-</a>
                <input class="buy-quantity{{ $key }} quantity-change" value="{{ $data->qty }}" size="5" disabled="">
                <a href="javascript:void(0)" class="quantity-change"  title="them" onclick="cong('{{ $key }}', '{{ $data->rowId }}')">+</a>
            </div>
        </div>

        <a href="javascript:void(0)" class="delete-from-cart" onclick="removeProductCart('{{ $data->rowId }}')"><i class="fa fa-times-circle"></i> Xóa</a>
    </div>
    @endforeach

    <?php 


        $totalPrice = array_sum($arrPrice)+(( ($data->options)['transportation_cost'])*intval(array_sum($total_quantity))) ;
    ?>

</div>



<div class="item-form"> 

    <div>
        <input type="text" name="discount-code" id="discount_code" value="" placeholder="Mã giảm giá"> 

    </div>    

    <br>
    <div>
        <div  class="btn btn-info add-discount add-click">Add</div>
    </div>
    

</div>

<div class="cart-foot discount-div"> <b>chi phí thêm (phí lắp đặt, vận chuyển...):</b> <span style="float: right;"><span class="sub1 discount-price">{{ number_format(($data->options)['transportation_cost'] , 0, ',', '.')}}  x {{ array_sum($total_quantity) }} </span> </span> </div>  

<div class="cart-foot discount-div"> <b>Mã giảm giá:</b> <span style="float: right;"><span class="sub1 discount-price">0</span> đ</span> </div>    

<br>

<div class="cart-foot">
    <b>Tổng tiền:</b>
    <span style="float: right;"><span class="sub1 total-cart-price">{{ number_format($totalPrice , 0, ',', '.')}}</span> đ</span>
</div>
@endif
<script type="text/javascript">
    
    function removeProductCart(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: "{{ route('removeCart') }}",
            data: {
                product_id: id,
                   
            },
            success: function(result){
              
               // numberCart = result.find("#number-product-cart").text();

               $('#tbl_list_cartss').html('');

                $('#tbl_list_cartss').append(result);

                

                const numberCart = $('#number-product-cart').text();

                if(numberCart==0){
                    $('.form-info-cart').addClass('hide');
                    $('.cart-container').removeClass('hide');
                }

                $('.number-cart').text(numberCart);

                $('#exampleModal').modal('show'); 
                
            }
        });


    }

    function tru(key, rowId){

        if(!$('.add-discount').hasClass('add-click')){
            $('.add-discount').addClass('add-click');
        }
        const val_number = $('.buy-quantity'+key).val();
        val_numbers =  parseInt(val_number);

        if(val_numbers>0){
            val_numbers = val_numbers-1;

            $.ajaxSetup({
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: "{{ route('addCartNumber') }}",
                data: {
                    rowId: rowId,
                    number:val_numbers
                },
                success: function(result){

                    $('#tbl_list_cartss').html('');

                    $('#tbl_list_cartss').append(result);

                    const numberCart = $('#number-product-cart').text();

                    $('.number-cart').text(numberCart);


                    $('#exampleModal').modal('show');
                    
                }
            });

            $('.buy-quantity'+key).val(val_numbers);
            
        }
    }

    function cong(key, rowId){

        if(!$('.add-discount').is(':visible')){
            $('.add-discount').show();
        }

        const val_number = $('.buy-quantity'+key).val();
        val_numbers =  parseInt(val_number);

        if(val_numbers>=0){
            val_numbers = val_numbers+1;

            $.ajax({
                type: 'POST',
                url: "{{ route('addCartNumber') }}",
                data: {
                    rowId: rowId,
                    number:val_numbers
                },
                success: function(result){

                    $('#tbl_list_cartss').html('');

                    $('#tbl_list_cartss').append(result);

                    const numberCart = $('#number-product-cart').text();

                    $('.number-cart').text(numberCart);

                    $('#exampleModal').modal('show');         
                    
                }
            });

            $('.buy-quantity'+key).val(val_numbers);
            
        }
    }

    $('.add-click').click(function () {
       
       const discount = $('#discount_code').val();

        $.ajax({
            type: 'POST',
            url: "{{ route('add-discount') }}",
            data: {
                discount: discount,
               
            },
            success: function(result){

                $('.add-discount').hide();

                if(result ==0){
                    alert('Mã giảm giá không đúng hoặc đã được sử dụng hết. Vui lòng kiểm tra lại')
                }
                else{
                    var price =  $('.total-cart-price').text().replaceAll('.','');
            
                    price = price - parseInt(result);
                              
                    formattedPrice = price.toLocaleString('en-US', {
                      style: 'currency',
                      currency: 'VND',
                    });

                    resultDiscount = parseInt(result).toLocaleString('en-US', {
                      style: 'currency',
                      currency: 'VND',
                    });

                    $('.discount-price').text('-'+resultDiscount.replace('₫',''));

                    $('.total-cart-price').text(formattedPrice.replace('₫',''));

                }
                
            }
        });
    })

   
</script>
