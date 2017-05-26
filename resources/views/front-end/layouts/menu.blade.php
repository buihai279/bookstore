<ul>
    <li><a href="{{ route('viewHotBookWeek') }}">Sách bán chạy trong tuần</a></li>
    <li><a href="{{ route('viewHotBookMonth') }}">Sách bán chạy trong tháng</a></li>
    <li><a href="{{ route('viewBookNewPublish') }}">Sách mới xuất bản</a></li>
    @foreach ($categories as $key => $value)
        <li>
            <a href="{{ route('viewCategory',$value->id) }}" style="line-height: 40px;height: 40px">{{$value->category_name}} <i class="material-icons " style="vertical-align: middle;">keyboard_arrow_right</i></a>
            <div class="nav-sub">
                <ul>
                    <li>
                        <div class="nav-sub-list-box">
                            <a href="{{ route('viewCategory',$value->id) }}"><h2>{{$value->category_name}}</h2></a>
                            @foreach ($categoriesChild[$value->id] as $keyChild => $elementChild)
                                <a href="{{ route('viewCategory',$elementChild->id) }}">{{$elementChild->category_name}}</a>
                                @if ($keyChild==6) 
                                    @break
                                @endif
                            @endforeach
                            <a href="{{ route('viewCategory',$value->id) }}" class="all">
                                Xem tất cả ...<i class="fa fa-caret-right"></i> 
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="nav-sub-list-box">
                            <a href="{{ route('viewCompany',0) }}"><h2>Công ty phát hành</h2></a>
                            @foreach ($companyChild[$value->id] as $keyChild => $elementChild)
                                <a href="{{route('viewCompany',$elementChild->id)}}">{{$elementChild->company_name}}</a>
                                @if ($keyChild==6) 
                                @break
                                    @endif
                            @endforeach
                            <a href="{{ route('viewCompany',0) }}" class="all">
                                Xem tất cả công ty phát hành ...<i class="fa fa-caret-right"></i> 
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="nav-sub-list-box">
                            <a href="{{ route('viewAuthor',0) }}"><h2>Tác giả</h2></a>
                            @foreach ($authorsChild[$value->id] as $keyChild => $elementChild)
                                <a href="{{route('viewAuthor',$elementChild->id)}}">{{$elementChild->author_name}}</a>
                                @if ($keyChild==6) 
                                    @break
                                @endif
                            @endforeach
                            <a href="{{ route('viewAuthor',0) }}" class="all">
                                Xem tất cả tác giả ...<i class="fa fa-caret-right"></i> 
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
    @endforeach
</ul>