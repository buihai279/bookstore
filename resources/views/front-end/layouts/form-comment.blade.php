            <h3 class="product-table-title">Đánh giá bình luận</h3>
            <div id="rateYo"></div>
            <form class="col s12" action="{{ route('comment.store') }}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="txtRate" hidden id='rateYoInput'>
                <script>
                    $(document).ready(function(){
                        $(function () {
                            $("#rateYo").rateYo({
                                rating: {{($book->avgComment)?$book->avgComment:0}},
                                fullStar: true
                            });
                        });
                        $(function () {
                            $("#rateYo").rateYo()
                                .on("rateyo.change", function (e, data) {
                                var rating = data.rating;
                                    $("#rateYoInput").val(rating);
                            });
                        });
                    });
                </script>
                
                <input type="text" name="txtBookId" value="{{$book->bookId}}" hidden id='txtBookId'>
                @if ($errors->has('txtRate'))
                    <span class="red-text">
                        <strong>{{ $errors->first('txtRate') }}</strong><br>
                    </span>
                @endif
                <div class="row">
                    <div class="input-field col s8">
                      <input  id="first_name" name="txtTitle" type="text" class="validate">
                      <label for="first_name">Tiêu đề bình luận (Không bắt buộc)</label>
                       @if ($errors->has('txtTitle'))
                            <span class="red-text">
                                <strong>{{ $errors->first('txtTitle') }}</strong><br>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                      <textarea id="textarea1" name="txtContent" class="materialize-textarea"></textarea>
                      <label for="textarea1">Nội dung bình luận </label>
                      @if ($errors->has('txtContent'))
                            <span class="red-text">
                                <strong>{{ $errors->first('txtContent') }}</strong><br>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s8">
                        <button type="submit" class="waves-effect waves-light btn">
                            <i class="material-icons left">cloud</i>Gửi bình luận
                        </button>
                    </div>
                </div>
            </form>