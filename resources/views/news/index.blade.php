@extends ("layouts.app")

@section('title')
    @parent Новости
@endsection

@section('content')
    <div class="col-8 d-flex justify-content-around">
    @forelse($news as $item)


        <div class="card m-1" style="width: 18rem;">
            <img src="https://imgholder.ru/400x300/8493a8/adb9ca&text=IMAGE+HOLDER&font=kelson" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $item['title'] }}</h5>
                @if (!$item['isPrivate'])
                <p class="card-text">{{ $item['text'] }}</p>
                <a href="{{ route('news.show', $item['id']) }}" class="btn btn-primary">Подробнее</a>
                    @else
                    <p class="card-text">Чтобы увидеть больше, <a href="{{ route('auth') }}">войдите</a> в систему</p>
                    @endif
            </div>
        </div>

    @empty
        Нет новостей
    @endforelse
    </div>
    <div class="col-4">
        @yield('news.categories')
    </div>
@endsection
