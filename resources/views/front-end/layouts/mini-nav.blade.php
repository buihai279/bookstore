<div class="row" >
    <div class="col s12 " style="padding: 0">
        <div class="home-header">
            <h2>
                <a href="{{ route('viewCategory',$value->id) }}">{{$value->category_name}}</a>
            </h2>
            <ul class="">
                @if (count($categoriesChildSelect)>0)
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
                    <a href="/nha-sach-tiki">
                        <strong>Tất cả Sách</strong>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>