@section('title')
Công ty phát hành : "{{$companyInfo->company_name}}"
@stop
@extends('front-end.layouts.master')
@section('content')
    @include('front-end.layouts.section-company')
@stop