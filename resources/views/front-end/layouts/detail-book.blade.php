
  <div class="col l4">
      <span class='zoom' id='ex1'>
        <img src='{{ asset($book->book_image) }}' width='270'  alt='Daisy on the Ohoopee'/>
        <p>Hover lên ảnh</p>
      </span>
        <script>
        $(document).ready(function(){
            $('#ex1').zoom();
        });
        </script>
  </div>
  <div class="col l8">
    <div class="item-box col l9">
      <h1 class="item-name" itemprop="name" id="product-name">
          {{$book->book_name}}        
      </h1>
      <div class="item-brand">
          <h6>Tác giả</h6>
          <p>
            <a target="_blank" href="{{route('viewAuthor',$book->authorId)}}">{{$book->author_name}}</a>
          </p>
          <br>
      </div>
      <p style="" class="old-price-item"  id="p-listpirce">
          <span>Giá bìa:</span>
          <span id="span-list-price " class="number-format">{{$book->cover_price}}</span> ₫
      </p>
      <p class="special-price-item"  id="p-specialprice">
          <span id="special-price-label">Giá bán:</span>
          <span id="span-price" class="number-format">{{$book->price}}</span> ₫
          <span>(Chưa có VAT)</span>
      </p>
      <p style="" class="saleoff-price-item" id="p-saving-price">
          <span>Tiết kiệm:</span>
          <span id="span-saving-price" class="number-format">
              {{$book->cover_price-$book->price}}
          </span> ₫
          <span>( {{round((1-$book->cover_price/$book->price)*100)}}%)</span>
      </p>
      <form role="form" id="add-to-cart" method="POST" action="{{ route('cart.add') }}">
          {{ csrf_field() }}
          <!-- Only for js checking baby milk product -->
          <div class="item-product-options">
              <!-- BEGIN ADD TO CART -->
              <div id="add-cart-action">
                  <div class="add-cart-action" style="display: block">
                      <div class="quantity-box">
                          <p class="quantity-label">Số lượng:</p>
                          <div class="quantity-col1">
                              <p class="tiki-number-input" style="width:100px">
                                  <input type="text"  name="txtBookId" value="{{$book->bookId}}" hidden >
                                  <input type="number"  name="qty" value="1" min="1" max="100">
                              </p>
                          </div>
                      </div>
                      <div class="cta-box">
                          @if ($book->quality<=20&&$book->quality>0)
                              <button type="sumit" class="waves-effect waves-light btn">
                                  <i class="material-icons left">cloud</i>Thêm hàng vào giỏ
                              </button>
                              <p class="red-text">Chỉ còn {{$book->quality}} cuốn </p>
                          @elseif($book->quality<=0)
                              <button type="sumit" class="waves-effect waves-light btn disabled">
                                  <i class="material-icons left">cloud</i>Thêm hàng vào giỏ
                              </button>
                              <p class="red-text">Sản phẩm hết hàng</p>
                          @else
                              <button type="sumit" class="waves-effect waves-light btn">
                                  <i class="material-icons left">cloud</i>Thêm hàng vào giỏ
                              </button>
                              {{-- <p class="red-text">Sản phẩm hết hàng</p> --}}
                          @endif
                          @if (!Auth::guest())
                              <a href="javascript:void(0);" class="btn-save-for-later" data-product-id="{{$book->bookId}}">
                                    Để dành mua sau
                                </a>

                          @endif

                          {{-- FB Like --}}
                          <div class="fb-like" data-href="{{url()->current()}}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

                      </div>
                  </div>
              </div>
          </div>
      </form>
    </div>
        <div class="col l3">
            <div class="seller-container" id="seller-list" style="display: ">
                <div class="current-seller">
                    <div class="title">
                        <div class="text">
                            CUNG CẤP BỞI<br/>
                            <a href="{{route('viewCompany',$book->companyId)}}">
                              {{$book->company_name}}</a><br/>
                            <img src="{{($book->company_image)?url($book->company_image):url('storage/app/noimagefound.jpg')}}"  width='100'></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>

                              <form action="{{ route('save.store') }}" id='form_save' method="POST" style="display: none;">
                                {{ csrf_field() }}
                                <input id="saveId" hidden="hidden" name="bookId">
                              </form>