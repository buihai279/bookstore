<section>
    <div class="row" >
        <div class="col s12 " style="padding: 0">
            <div class="home-header">
                <h2>
                    <a href="#">{{$companyInfo->company_name}}</a>
                </h2>
            </div>
        </div>
    </div>
    <div class="row" style="box-sizing:content-box;border: 1px solid #dfdfdf;">
        @foreach ($books as $keyChild => $book)
            <div class="col s12 m4 l3">
                <div class="card product-item hoverable">
                    <div class="card-image">
                        <img src="{{ URL::asset($book->book_image) }}">
                        <a class="btn-floating halfway-fab waves-effect waves-light red hoverable">
                            <i class="material-icons">add_shopping_cart</i>
                        </a>
                    </div>
                    <div class="card-content ">
                        <a  href="{{ route('viewBook',$book->bookId) }}" title="{{$book->book_name}}" >
                            <span class="card-title">
                                {{$book->book_name}}
                            </span>
                            <div class="author">
                                <a href="{{ route('viewAuthor',$book->authorId) }}">{{$book->author_name}}</a>
                            </div>
                        </a>
                    </div>
                    <div class="card-action">
                            <div class="price-sale"><span class="price">{{$book->price}}</span>&nbsp;₫ 
                                <span class="price-regular">{{$book->cover_price}}&nbsp;₫</span>
                                <span class="new badge orange " data-badge-caption="-{{round((1-$book->cover_price/$book->price)*100)}}%"></span>
                            </div>
                            @if ($book->totalComment>0)
                                <div class="review ">Có {{$book->totalComment}} nhận xét</div>
                            @else
                                <div class="review ">Chưa có nhận xét</div>
                            @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<div class="center-align">
    {{-- {{ $books->links() }} --}}
</div>