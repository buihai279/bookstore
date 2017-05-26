<section>
    <div class="row" >
        <div class="col s12 " style="padding: 0">
            <div class="home-header">
                <h2>
                    <a href="{{ route('viewHotBookMonth') }}">Sách bán chạy trong tháng</a>
                </h2>
            </div>
        </div>
    </div>
    <div class="row" style="box-sizing:content-box;border: 1px solid #dfdfdf;">
        @foreach ($booksHot as $keyChild => $book)
            @include('front-end.layouts.one-book')
            
        @endforeach
    </div>
</section>