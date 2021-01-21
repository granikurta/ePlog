@extends('layout')
@section('content')
<lib-list-component :articles="{{json_encode($article)}}"></lib-list-component>
@endsection
