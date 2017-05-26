@section('title')
Danh mục : "{{$categorySelect->category_name}}"
@stop
@extends('front-end.layouts.master')
@section('content')
    @include('front-end.layouts.section-category')
@stop