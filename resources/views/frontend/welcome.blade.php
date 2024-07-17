@extends('layouts.app')
@section('meta')

@endsection
@section('content')
@include('frontend.Home.hero')
{{-- @include('frontend.Home.client') --}}
@include('frontend.Home.mission')
@include('frontend.Home.service')
@include('frontend.Home.testimonial')
@include('frontend.Home.faq')
@include('frontend.Home.blog')
@include('frontend.Home.contact')
@endsection
