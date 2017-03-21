<ul class="">
    <li><a href="#">Sách bán chạy trong tuần</a></li>
    <li><a href="#">Sách bán chạy trong tháng</a></li>
    @foreach ($categories as $key => $value)
        <li>
            <a href="{{ route('viewCategory',$value->id) }}" style="line-height: 40px;height: 40px">{{$value->category_name}} <i class="material-icons " style="vertical-align: middle;">keyboard_arrow_right</i></a>
            <div class="nav-sub">
                <ul>
                    <li>
                        <div class="nav-sub-list-box">
                            <a href="#sach-truyen-tieng-viet"><h2>{{$value->category_name}}</h2></a>
                            <a href="#bestsellers/sach-truyen-tieng-viet/c316">Sách bán chạy</a>
                            <a href="#sach-truyen-tieng-viet/c316?order=newest">Sách mới</a>
                            @foreach ($categoriesChild[$value->id] as $keyChild => $elementChild)
                                <a href="{{ route('viewCategory',$elementChild->id) }}">{{$elementChild->category_name}}</a>
                                @if ($keyChild==5) 
                                @break
                                @endif
                            @endforeach
                            <a href="#sach-truyen-tieng-viet" class="all">Xem tất cả<i class="fa fa-caret-right"></i> </a>
                        </div>
                    </li>
                    <li>
                        <div class="nav-sub-list-box">
                            <h2>Công ty phát hành</h2>
                            @foreach ($companyChild[$value->id] as $keyChild => $elementChild)
                                <a href="#sach-truyen-tieng-viet/c316?order=newest">{{$elementChild->company_name}}</a>
                                @if ($keyChild==6) 
                                @break
                                @endif
                            @endforeach
                        </div>
                    </li>
                    <li>
                        <div class="nav-sub-list-box">
                            <a href="#sach-tieng-anh"><h2>Tác giả</h2></a>
                            @foreach ($authorsChild[$value->id] as $keyChild => $elementChild)
                                <a href="#sach-truyen-tieng-viet/c316?order=newest">{{$elementChild->author_name}}</a>
                                @if ($keyChild==6) 
                                @break
                                @endif
                            @endforeach
                        </div>
                    </li>
                </ul>
            </div>
        </li>
    @endforeach
</ul>
