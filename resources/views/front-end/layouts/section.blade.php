@foreach ($categories as $key => $value)
    <section>
        <div class="row" >
            <div class="col s12 " style="padding: 0">
                <div class="home-header">
                    <h2>
                        <a href="{{ route('viewCategory',$value->id) }}">{{$value->category_name}}</a>
                    </h2>
                    <ul class="">
                        @if (count($categoriesChild)>0)
                            @foreach ($categoriesChild[$value->id] as $keyChild => $elementChild)
                                <li>
                                    <a href="{{ route('viewCategory',$elementChild->id) }}">{{$elementChild->category_name}}</a>
                                </li>
                                @if ($keyChild==4) 
                                @break
                                @endif
                            @endforeach
                        @endif
                        <li class="last">
                            <a href="{{ route('viewCategory',$value->id) }}">
                                <strong>Tất cả Sách</strong>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" style="box-sizing:content-box;border: 1px solid #dfdfdf;">
            <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width" style="box-sizing:content-box;border-bottom: 1px solid #dfdfdf;">
                <li class="tab col s2"><a href="#category-{{$value->id}}-swipe-1">Gợi ý</a></li>
                <li class="tab col s2"><a href="#category-{{$value->id}}-swipe-2">Bán chạy</a></li>
                <li class="tab col s2"><a href="#category-{{$value->id}}-swipe-3">Sách mới</a></li>
            </ul>
            <div id="category-{{$value->id}}-swipe-1" class="col s12 l12 m12">
                @foreach ($booksChild[$value->id] as $keyBook => $book)
                    <div class="col s12 m4 l3">
                        <div class="card product-item hoverable">
                            <div class="card-image">
                                <img src="{{ URL::asset($book->book_image) }}">
                                @if ($book->quality>0)
                                    <a href="{{ route('cart.add',$book->id)}}" class="btn-floating halfway-fab waves-effect waves-light red hoverable tooltipped" data-tooltip="Thêm hàng vào giỏ">
                                        <i class="material-icons">shopping_cart</i>
                                    </a>
                                @else
                                 <a href="#" style="cursor:not-allowed;" class="btn-floating halfway-fab disabled hoverable tooltipped" data-tooltip="Hết hàng">
                                    <i class="material-icons">remove_shopping_cart</i>
                                    </a>
                                @endif
                            </div>
                            <div class="card-content ">
                                <a  href="{{ route('viewBook',$book->id) }}" title="{{$book->book_name}}" >
                                    <span class="card-title">
                                        {{$book->book_name}}
                                    </span>
                                    <div class="author">{{$book->author_name}}</div>
                                </a>
                            </div>
                            <div class="card-action">
                                <div class="price-sale">
                                    <span class="price number-format">{{$book->price}}</span>&nbsp;₫ 
                                    <span class="price-regular number-format">{{$book->cover_price}}&nbsp;₫</span>
                                    <span class="new badge orange " data-badge-caption="-{{round((1-$book->cover_price/$book->price)*100)}}%"></span>
                                </div>
                                <div class="review ">Chưa có nhận xét</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="category-{{$value->id}}-swipe-2" class="col s12 l12 m12">
            </div>
            <div id="category-{{$value->id}}-swipe-3" class="col s12 l12 m12">
        </div>
    </section>
@endforeach