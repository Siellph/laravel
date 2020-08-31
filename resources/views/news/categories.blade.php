@extends('layouts.app')

@section('content')
    @forelse($categories as $category)
<div class="list-group">
        <a class="text-decoration-none list-group-item-action" href="{{ route('news.category.show', $category['slug']) }}">
            {{ $category['title'] }}
        </a>
</div>
    @empty
        Нет категорий
    @endforelse
@endsection