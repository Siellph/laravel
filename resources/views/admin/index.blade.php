@extends('layouts.main')

@section('title')
    @parent Панель управления
@endsection

@section ('menu')
    @include('admin.menu')
@endsection

@section('content')
    <h2>Здесь будет страница администратора</h2>
@endsection
