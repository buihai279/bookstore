@extends('front-end.layouts.master')
@section('content')
<script type="text/javascript" src="{{ asset('lib/zoom/jquery.zoom.min.js') }}"></script>
<div class="row">
	<div class="col l4">
	<span class='zoom' id='ex1'>
		<img src='{{ asset($book->book_image) }}' width='270'  alt='Daisy on the Ohoopee'/>
		{{-- <p>Hover</p> --}}
	</span>
	</div>
	<div class="col l8">
		<div class="item-box col l9">
			<h1 class="item-name" itemprop="name" id="product-name">
                {{$book->book_name}}        
            </h1>
            <div class="item-brand">
                <h6>Tác giả</h6>
                <p>
                	<a target="_blank" href="{{$book->authorId}}">{{$book->author_name}}</a>
                </p>
                <br>
            </div>
            <p style="" class="old-price-item"  id="p-listpirce">
                <span>Giá bìa:</span>
                <span id="span-list-price " class="number-format">{{$book->cover_price}}&nbsp;₫</span>
            </p>
            <p class="special-price-item"  id="p-specialprice">
                <span id="special-price-label">Giá bán:</span>
                <span id="span-price" class="number-format">{{$book->price}}&nbsp;₫</span>
                <span>(Chưa có VAT)</span>
            </p>
            <p style="" class="saleoff-price-item" id="p-saving-price">
                <span>Tiết kiệm:</span>
                <span id="span-saving-price" class="number-format">
                    {{$book->cover_price-$book->price}}&nbsp;₫
                </span>
                <span>( -{{round((1-$book->cover_price/$book->price)*100)}}%)</span>
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
                                        <input id="qty" type="text"  name="txtBookId" value="{{$book->bookId}}" hidden min="1" max="100">
                                        <input id="qty" type="number"  name="qty" value="1" min="1" max="100">
                                    </p>
                                </div>
                            </div>
                            <div class="cta-box">
                                @if ($book->quality<=10&&$book->quality>0)
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
                                    <a href="#" data-id="{{$book->bookId}}" class="save-book">Thêm vào mua sau</a>
                                @endif
                                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
		</div>
        <div class="col l3">
            <div class="seller-container" id="seller-list" style="display: ">
                <div class="current-seller" data-id="1">
                    <div class="title">
                        <div class="img"></div>
                        <div class="text">
                            CUNG CẤP BỞI
                            <br/><a href="#">{{$book->company_name}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	</div>
</div>
  <!-- Load Facebook SDK for JavaScript -->
  <div class="fb-save" data-uri="{{url()->current()}}" data-size="large"></div>
<div id="fb-root"></div>


<!-- Modal Trigger -->
<a class="modal-trigger waves-effect waves-light btn" href="#modal1">Đọc thử</a>
<div class="row">
    <div class="item-other">
        <div class="item-benefit">
            <p>
                Xem thêm Sách<a href="{{$book->authorId}}" class="category_brand_list">{{$book->author_name}}</a>
            </p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="product-content-box">
            <h3 class="product-table-title">Giới Thiệu Sách</h3>
            <div class="row">
                <div class="col-xs-8">
                    <div class="product-content-detail">
                        <div id="gioi-thieu" class="content js-content" itemprop="description">
							@php
								echo $book->description;
							@endphp
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-table-box row">
            	@php
            		$arrayName = array(
            			'Công ty phát hành' => $book->company_name ,
            			'Tác giả' => $book->author_name ,
            			'Dịch giả' => $book->translator ,
            			'Số trang' => $book->number_of_pages ,
            			'Nhà xuất bản' => $book->publishing_house ,
            			'Ngày xuất bản' => $book->publish_date ,
            			);
            	@endphp
                <h3 class="product-table-title">Thông Tin Chi Tiết</h3>
                <table id="chi-tiet" cellspacing="0" class="striped col l8">
                	@foreach ($arrayName as $key => $value)
                		@if ($value==''||$value=='null')
                			@continue
                		@endif
                		<tr>
                			<td>{{$key}}</td>
                			<td>{{$value}}</td>
                		</tr>
                	@endforeach
                </table>
            </div>

            <div class="box-recentlyviewed-product" id="box-recentlyviewed-product" data-impress-list-title="Product Detail | Sản phẩm bạn đã xem"></div>
            <div class="box-same-author-product" id="box-same-author-product" data-impress-list-title="Product Detail | Sản phẩm cùng tác giả"></div>
            <h3 class="product-table-title">Đánh giá bình luận</h3>
            <div id="rateYo"></div>
            <form class="col s12" action="{{ route('comment.store') }}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="txtRate" hidden id='rateYoInput'>
                <script>
                    $(document).ready(function(){
                        $(function () {
                            $("#rateYo").rateYo({
                                rating: {{($book->avgComment)?$book->avgComment:0}},
                                fullStar: true
                            });
                        });
                        $(function () {
                            $("#rateYo").rateYo()
                                .on("rateyo.change", function (e, data) {
                                var rating = data.rating;
                                    $("#rateYoInput").val(rating);
                            });
                        });
                    });
                </script>
            	<input type="text" name="txtBookId" value="{{$book->bookId}}" hidden id='txtBookId'>
                @if ($errors->has('txtRate'))
                    <span class="red-text">
                        <strong>{{ $errors->first('txtRate') }}</strong><br>
                    </span>
                @endif
                <div class="row">
                    <div class="input-field col s8">
                      <input  id="first_name" name="txtTitle" type="text" class="validate">
                      <label for="first_name">Tiêu đề bình luận (Không bắt buộc)</label>
                       @if ($errors->has('txtTitle'))
                            <span class="red-text">
                                <strong>{{ $errors->first('txtTitle') }}</strong><br>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                      <textarea id="textarea1" name="txtContent" class="materialize-textarea"></textarea>
                      <label for="textarea1">Nội dung bình luận </label>
                      @if ($errors->has('txtContent'))
                            <span class="red-text">
                                <strong>{{ $errors->first('txtContent') }}</strong><br>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                    	<button type="submit" class="waves-effect waves-light btn">
                            <i class="material-icons left">cloud</i>Gửi bình luận
                        </button>
                    </div>
                </div>
		    </form>
		    <div class="col s12 product-review-box">
			    <ul class="tabs product-review-tabs nav nav-tab">
			        <li class="tab col s3"><a href="#review-new">Nhận Xét Mới Nhất</a></li>
			        <li class="tab col s3"><a href="#review-facebook">Thảo Luận FB</a></li>
			    </ul>
			    <div class="product-review-content tab-content">
			        <div class="col s12" id="review-new">
			            <div data-reactroot="" class="review-list">
                            @if ($book->avgComment<=0)
                               <p class="red-text">Không có bình luận</p>     
                            @endif
                            @foreach ($comments as $comment)
    			                <div class="item" itemprop="review" itemtype="http://schema.org/Review">
    			                    <div itemprop="itemReviewed" itemtype="http://schema.org/Product"><span itemprop="name" content=""></span>
    			                    </div>
    			                    <div class="product-col-1">
    			                        <p class="image">
    			                            <a>
    			                            </a>
    			                        </p>
    			                        <p class="name" itemprop="author">{{$comment->name}}</p>
    			                        <p class="days">{{$comment->strTime}}</p>
    			                    </div>
    			                    <div class="product-col-2">
    			                        <div class="infomation">
    			                            <div class="rateYo{{$comment->id}}">
    			                            </div>
                                              <script>
                                                  $(document).ready(function(){
                                                    $(function () {
                                                      $(".rateYo{{$comment->id}}").rateYo({
                                                        rating: {{$comment->rate}},
                                                        readOnly: true
                                                      });
                                                    });
                                                  });
                                              </script>
    			                            <p class="review" itemprop="name">{{$comment->title}}</p>
    			                            <div class="description js-description">
    			                                <p class="review_detail" itemprop="reviewBody">
    			                                <span>
    			                                    {{$comment->content}}
    			                                </span>
    			                                </p>
    			                            </div>
    			                        </div>
    			                    </div>
    			                </div>
                                {{-- expr --}}
                            @endforeach
			            </div>
			        </div>
			        <div class="col s12 active" id="review-facebook">
			            <div data-reactroot="" class="review-list">
                            <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
			            </div>
			        </div>
			    </div>
			</div>
</div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
	$('#ex1').zoom();
});
</script>
  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Đọc thử vài trang sách</h4>
        @if (is_array(json_decode($book->images)))
            @foreach (json_decode($book->images) as $element)
              <img src="{{ url($element) }}" alt="">
            @endforeach
        @else
            <p class="red-text">Không có hình ảnh đọc thử</p>
      @endif
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Đóng</a>
    </div>
  </div>
   <div class="fixed-action-btn">
    <a class="btn-floating btn-large red" href="{{ route('book.edit',$book->bookId) }}">
      <i class="large material-icons">mode_edit</i>
    </a>
  </div>
  <form action="{{ route('save.store') }}" id="form-save" method="POST">
    {{ csrf_field() }}
      <input type="text" hidden="hidden" name="bookId" class="saveId" value="">
  </form>
@stop