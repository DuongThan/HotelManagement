@extends('layout')
@section('title', 'Giới thiệu')
@section("content")

<div class="sectionTitle">
    <h2><span class="lightBg">{{$article->title}}</span></h2>
    <p>{!!$article->description!!}</p>
</div>
<div>
    {!!$article->content!!}
</div>
@endsection
