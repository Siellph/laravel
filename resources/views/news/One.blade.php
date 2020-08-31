@extends ("layouts.app")

@section('title')
    @parent Новости
@endsection

@section('content')
    @if (!$news['isPrivate'])
        <h2><?=$news['title']?></h2>
        <p><?=$news['text']?></p>
    @else
        Новость приватная. Зарегистрируйтесь для просмотра ...
    @endif
@endsection


