@php
    $title = env('APP_NAME');
@endphp
@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    オリジナルのほーーーーーむ
@endsection