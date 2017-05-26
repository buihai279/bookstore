<div class="col s12 m4 l3">
    <div class="card product-item hoverable">
        <div class="card-image">
            <img src="{{ URL::asset($book->book_image) }}">
            @if ($book->quality>0)
                <a href="#!" data-url='{{$book->bookId}}' class="btn-floating halfway-fab waves-effect waves-light red hoverable tooltipped add-to-cart" data-tooltip="Thêm hàng vào giỏ">
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
            <div class="author">
                <a  href="{{ route('viewAuthor',$book->authorId) }}" title='Tác giả : "{{$book->author_name}}"' >
                    {{$book->author_name}}
                </a>
            </div>
            </a>
        </div>
        <div class="card-action">
            <div class="price-sale">
                <span class="price number-format">
                    {{$book->price}}
                </span> ₫ 
                <span class="price-regular number-format">
                    {{$book->cover_price}}
                </span> ₫
                <span class="new badge orange " data-badge-caption="{{round((1-$book->cover_price/$book->price)*100)}}%"></span>
            </div>
            @if ($book->totalComment<1)
                <div class="review ">Chưa có nhận xét</div>
            @else
                <div class="review ">Có {{$book->totalComment}} nhận xét</div>
            @endif
        </div>
    </div>
</div>