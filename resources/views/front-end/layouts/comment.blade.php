<div class="col s12 product-review-box">
                <ul class="tabs product-review-tabs nav nav-tab">
                    <li class="tab col s3"><a href="#review-new">Nhận Xét Mới Nhất</a></li>
                    <li class="tab col s3"><a href="#review-facebook">Thảo Luận FB</a></li>
                </ul>
                <div class="product-review-content tab-content">
                    <div class="col s12" id="review-new">
                        <div data-reactroot="" class="review-list">
                            @if ($book->avgComment<=0)
                               <p class="red-text">Không có bình luận</p>     
                            @endif
                            @foreach ($comments as $comment)
                                <div class="item" itemprop="review" itemtype="http://schema.org/Review">
                                    <div itemprop="itemReviewed" itemtype="http://schema.org/Product"><span itemprop="name" content=""></span>
                                    </div>
                                    <div class="product-col-1">
                                        <p class="image">
                                            <a>
                                            </a>
                                        </p>
                                        <p class="name" itemprop="author">{{$comment->name}}</p>
                                        <p class="days">{{$comment->strTime}}</p>
                                    </div>
                                    <div class="product-col-2">
                                        <div class="infomation">
                                            <div class="rateYo{{$comment->id}}">
                                            </div>
                                              <script>
                                                  $(document).ready(function(){
                                                    $(function () {
                                                      $(".rateYo{{$comment->id}}").rateYo({
                                                        rating: {{$comment->rate}},
                                                        readOnly: true
                                                      });
                                                    });
                                                  });
                                              </script>
                                            <p class="review" itemprop="name">{{$comment->title}}</p>
                                            <div class="description js-description">
                                                <p class="review_detail" itemprop="reviewBody">
                                                <span>
                                                    {{$comment->content}}
                                                </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- expr --}}
                            @endforeach
                        </div>
                    </div>
                    <div class="col s12 active" id="review-facebook">
                        <div data-reactroot="" class="review-list">
                            <div class="fb-comments" data-href="{{url()->current()}}" data-numposts="10"></div>
                        </div>
                    </div>
                </div>
            </div>