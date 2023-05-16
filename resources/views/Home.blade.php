@extends('layout.master')

@section('content')
@parent
{{$test}}
<img width="400px" src="{{$imgSrc}}">
<a type="button" href="{{ route('showImg', ['id' => $id+1]) }}">next image</a>

{{-- <a type="button" href="/home/22">next image</a> --}}
@endsection
