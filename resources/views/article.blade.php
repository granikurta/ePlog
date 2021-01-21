@extends('layout')
@section('content')
<article-component :article="{{json_encode($article)}}"></article-component>
@endsection
