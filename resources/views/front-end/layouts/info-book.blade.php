<div class="col-xs-12">
    <div class="product-content-box">
        <h3 class="product-table-title">Giới Thiệu Sách</h3>
        <div class="row">
            <div class="col-xs-8">
                <div class="product-content-detail">
                    <div id="gioi-thieu" class="content js-content" itemprop="description">
                        @php
                            echo $book->description;
                        @endphp
                    </div>
                </div>
            </div>
        </div>
        <div class="product-table-box row">
          @php
            $arrayName = array(
              'Công ty phát hành' => $book->company_name ,
              'Tác giả' => $book->author_name ,
              'Dịch giả' => $book->translator ,
              'Số trang' => $book->number_of_pages ,
              'Nhà xuất bản' => $book->publishing_house ,
              'Ngày xuất bản' => $book->publish_date
              );
          @endphp
            <h3 class="product-table-title">Thông Tin Chi Tiết</h3>
            <table id="chi-tiet" cellspacing="0" class="striped col l8">
              @foreach ($arrayName as $key => $value)
                @if ($value==''||$value=='null')
                  @continue
                @endif
                <tr>
                  <td>{{$key}}</td>
                  <td>{{$value}}</td>
                </tr>
              @endforeach
            </table>
        </div>

        <h3 class="product-table-title">Giới Thiệu Tác giả</h3>
        <div class="row">
            <div class="col-xs-8">
                <div class="product-content-detail">
                    <div id="gioi-thieu" class="content js-content">
                    <img src="{{($book->author_image)?url("$book->author_image"):url('storage/app/noimagefound.jpg')}}" width="150" style="float: left;">
                        <p style="float: left;">
                        @php
                            echo $book->author_info;
                        @endphp
                        </p>
                    </div>
                </div>
            </div>
        </div>

        @if (!Auth::guest())
            @include('front-end.layouts.form-comment')
        @else
            <b>Chỉ người dùng mới được bình luận</b>
        @endif
        @include('front-end.layouts.comment')
    
    </div>
    </div>
</div>