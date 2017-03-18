
@foreach ($categories as $key => $value)
    <section>
    <div class="row" >
        <div class="col s12 " style="padding: 0">
            <div class="home-header">
                <h2>
                    <a href="/nha-sach-tiki">{{$value->category_name}}</a>
                </h2>
                <ul class="">
                    @foreach ($categoriesChild[$value->id] as $keyChild => $elementChild)
                        <li>
                            <a href="#sach-truyen-tieng-viet/c316?order=newest">{{$elementChild->category_name}}</a>
                        </li>
                        @if ($keyChild==4) 
                        @break
                        @endif
                    @endforeach
                    <li class="last">
                        <a href="/nha-sach-tiki">
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
            
            @foreach ($booksChild[$value->id] as $keyChild => $elementChild)
                <div class="col s12 m4 l3">
                    <div class="card product-item hoverable">
                        <div class="card-image">
                            <img src="{{ URL::asset($elementChild->book_image) }}">
                            <a class="btn-floating halfway-fab waves-effect waves-light red hoverable">
                                <i class="material-icons">add_shopping_cart</i></a>
                        </div>
                        <div class="card-content ">
                            <a  href="#" title="Sword Art Online 006" >
                                <span class="card-title">
                                    {{$elementChild->book_name}}
                                </span>
                                <div class="author">{{$elementChild->author_name}}</div>
                            </a>
                        </div>
                        <div class="card-action">
                                <div class="price-sale">{{$elementChild->price}}&nbsp;₫ 
                                    <span class="price-regular">{{$elementChild->cover_price}}&nbsp;₫</span>
                                    <span class="new badge orange " data-badge-caption="-20%"></span>
                                </div>

                                <div class="review ">Chưa có nhận xét</div>
                        </div>
                    </div>
                </div>
                @if ($keyChild==11) 
                @break
                @endif
            @endforeach
        </div>
        <div id="category-{{$value->id}}-swipe-2" class="col s12 l12 m12">
        </div>
        <div id="category-{{$value->id}}-swipe-3" class="col s12 l12 m12">
    </div>

    </section>
@endforeach