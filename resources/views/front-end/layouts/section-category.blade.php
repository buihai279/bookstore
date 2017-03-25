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
                        <a href="#">
                            <strong>Tất cả Sách</strong>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row" style="box-sizing:content-box;border: 1px solid #dfdfdf;">
        @foreach ($booksChild as $keyChild => $book)
            <div class="col s12 m4 l3">
                <div class="card product-item hoverable">
                    <div class="card-image">
                        <img src="{{ URL::asset($book->book_image) }}">
                        @if ($book->quality>0)
                            <a href="{{ route('viewBook',$book->bookId)}}" class="btn-floating halfway-fab waves-effect waves-light red hoverable tooltipped" data-tooltip="Thêm hàng vào giỏ">
                                <i class="material-icons">shopping_cart</i>
                            </a>
                        @else
                         <a href="#" style="cursor:not-allowed;" class="btn-floating halfway-fab hoverable tooltipped" data-tooltip="Hết hàng">
                            <i class="material-icons">remove_shopping_cart</i>
                            </a>
                        @endif
                    </div>
                    <div class="card-content ">
                        <a  href="{{ route('viewBook',$book->bookId) }}" title="{{$book->book_name}}" >
                            <span class="card-title">
                                {{$book->book_name}}
                            </span>
                            <div class="author">{{$book->author_name}}</div>
                        </a>
                    </div>
                    <div class="card-action">
                        <div class="price-sale"><span class="price">{{$book->price}}</span>&nbsp;₫ 
                            <span class="price-regular">{{$book->cover_price}}&nbsp;₫</span>
                            <span class="new badge orange " data-badge-caption="-{{round((1-$book->cover_price/$book->price)*100)}}%"></span>
                        </div>
                        <div class="review "> </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<div class="center-align">
    {{ $booksChild->links() }}
</div>