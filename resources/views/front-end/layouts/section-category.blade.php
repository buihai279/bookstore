<section>
    <div class="row" >
        <div class="col s12 " style="padding: 0">
            <div class="home-header">
                <h2>
                    <a href="{{ route('viewCategory',$categorySelect->id) }}">{{$categorySelect->category_name}}</a>
                </h2>
                <ul class="">
                    @if (count($categoriesChildSelect)>0)
                        @foreach ($categoriesChildSelect as $keyChild => $elementChild)
                            <li>
                                <a href="{{ route('viewCategory',$elementChild->id) }}">{{$elementChild->category_name}}</a>
                            </li>
                            @if ($keyChild==4) 
                            @break
                            @endif
                        @endforeach
                    @endif
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
        @foreach ($booksChild as $keyChild => $elementChild)
            <div class="col s12 m4 l3">
                <div class="card product-item hoverable">
                    <div class="card-image">
                        <img src="{{ URL::asset($elementChild->book_image) }}">
                        <a class="btn-floating halfway-fab waves-effect waves-light red hoverable">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
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
                            <div class="price-sale"><span class="price">{{$elementChild->price}}</span>&nbsp;₫ 
                                <span class="price-regular">{{$elementChild->cover_price}}&nbsp;₫</span>
                                <span class="new badge orange " data-badge-caption="-{{round((1-$elementChild->cover_price/$elementChild->price)*100)}}%"></span>
                            </div>

                            <div class="review ">Chưa có nhận xét</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<div class="center-align">
    {{ $booksChild->links() }}
</div>