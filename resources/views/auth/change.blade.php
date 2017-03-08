@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('submitPassword') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('newPassword') ? ' has-error' : '' }}">
                            <label for="newPassword" class="col-md-4 control-label">Mật khẩu mới</label>

                            <div class="col-md-6">
                                <input id="newPassword" type="password" class="form-control" name="newPassword" required>

                                @if ($errors->has('newPassword'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newPassword') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="newPassword-confirmation" class="col-md-4 control-label">Xác nhận mật khẩu mới</label>

                            <div class="col-md-6">
                                <input id="newPassword-confirmation" type="password" class="form-control" name="newPassword_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Thay đổi mật khẩu
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
