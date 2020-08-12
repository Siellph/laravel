@extends('layouts.main')

@section('title')
    @parent Категории новостей
@endsection

@section ('menu')
    @include('menu')
@endsection

@section('content')
    @forelse($categories as $category)

        <a class="text-decoration-none" href="{{ route('news.category.show', $category['slug']) }}">
            {{ $category['title'] }}
        </a>

    @empty
        Нет категорий
    @endforelse
@endsection

