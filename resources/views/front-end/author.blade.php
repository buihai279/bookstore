@section('title')
Tác giả : "{{$authorInfo->author_name}}"
@stop

@extends('front-end.layouts.master')
@section('content')
    @include('front-end.layouts.section-author')
@stop