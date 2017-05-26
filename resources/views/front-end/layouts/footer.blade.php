@include('front-end.layouts.button')
<form action="{{ route('cart.add') }}" id="data-form-add-to-cart" method="POST">
  {{ csrf_field() }}
  <input id="qty" type="number"  name="qty" value="1" min="1" max="100" hidden>
  <input id="data-input-add-to-cart" type="text"  name="txtBookId" value="" hidden min="1" max="100">
</form>
<footer class="page-footer" >
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Fanpage</h5>
        <p class="grey-text text-lighten-4">
          <div class="fb-page" data-href="https://www.facebook.com/facebook" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
        </p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Liên kết</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="https://github.com/buihai279/bookstore">Project on Github</a></li>
          <li><a class="grey-text text-lighten-3" href="http://tiki.vn">Tiki.vn</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ route('viewHotBookWeek') }}">Sách bán chạy trong tuần</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ route('viewHotBookMonth') }}">Sách bán chạy trong tháng</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ route('viewBookNewPublish') }}">Sách mới</a></li>
          <li><div class="g-ytsubscribe" data-channelid="UCfr-whHvVvzNTfKTMueLOig" data-layout="full" data-count="default"></div></li>
          <script src="https://apis.google.com/js/platform.js"></script>


        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © {{date("Y")}} Copyright Text: Bùi Văn Hải (0841060177) - Ngô Phú Minh (0841060138)
    <a class="grey-text text-lighten-4 right" href="https://www.facebook.com/buihai279">Facebook Me</a>
    </div>
  </div>
</footer>