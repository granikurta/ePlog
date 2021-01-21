@extends('layout')
@section('content')
    <tests-list-component :tests="{{json_encode($tests)}}" ></tests-list-component>
@endsection
