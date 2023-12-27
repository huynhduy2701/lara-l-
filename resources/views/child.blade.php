{{-- stored in resourc/views/child.blade.php --}}
@extends('layouts.app')
@section('title','Page title')
@section('sidebar')
     @parent<p>this is appended to the master sidebar</p>
@endsection
@section('content')
    <p>this is my content</p>
@endsection  {{-- @yeld('conten','default value') --}}

@include('includes.header')
{{-- @yield('content','default value') --}}
