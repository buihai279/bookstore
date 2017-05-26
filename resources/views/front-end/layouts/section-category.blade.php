@section('title')
Danh mục {{$categorySelect->category_name}}
@stop
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
                        <a href="{{ route('viewCategory',$categorySelect->id) }}">
                            <strong>Tất cả Sách</strong>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row" style="box-sizing:content-box;border: 1px solid #dfdfdf;">
        @foreach ($booksChild as $keyChild => $book)
            @include('front-end.layouts.one-book')
        @endforeach
    </div>
</section>