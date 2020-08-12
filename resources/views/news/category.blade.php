@extends ("layouts.main")

@section('title')
    @parent Новости
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <h1>Новости категории ...</h1>
    @forelse($news as $item)
        {{ $item['title'] }}
        @if (!$item['isPrivate'])
            <a href="{{ route('news.show', $item['id']) }}">Подробнее...</a>
        @endif
    @empty
        Нет новостей
    @endforelse
@endsection
