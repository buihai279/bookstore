<section>
    <div class="row" >
        <div class="col s12 " style="padding: 0">
            <div class="home-header">
                <h2>
                    <a href="#">Tất cả tác giả</a>
                </h2>
            </div>
        </div>
    </div>
    <div class="row" style="box-sizing:content-box;border: 1px solid #dfdfdf;">
        @foreach ($authors as $key => $author)
            <div class="col s12 m4 l3">
                <div class="card product-item hoverable">
                    <div class="card-image">
                        @if ($author->author_image!='')
                            <img src="{{ asset($author->author_image) }}">
                        @else
                            <img src="{{ url('storage/app/noimagefound.jpg') }}">
                        @endif
                    </div>
                    <div class="card-content ">
                        <a  href="{{ route('viewAuthor',$author->authorId) }}" title="{{$author->author_name}}" >
                            <span class="card-title">
                                {{$author->author_name}}
                            </span>
                        </a>
                    </div>
                    <div class="card-action">
                        <div class="price-sale">
                            <span class="review">Tác giả của {{$author->totalBook}} đầu sách</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>