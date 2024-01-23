<div class="nk-product-cate-style-grid nk-product-collection nk-product- clearfix">
                                <div id="pagination_contents" class="nk-product nks-fs-sync index-index" data-fs-type="0">

                                   

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