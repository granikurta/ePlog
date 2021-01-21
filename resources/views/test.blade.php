@extends('layout')
@section('content')
   <test-component :tests="{{json_encode($test)}}"></test-component>
@endsection
