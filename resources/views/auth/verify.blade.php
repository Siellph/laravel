@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтвердите вашу электронную почту') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('На ваш электронный адрес была отправлена новая проверочная ссылка.') }}
                        </div>
                    @endif

                    {{ __('Прежде чем продолжить, пожалуйста, проверьте свою электронную почту на наличие проверочной ссылки.') }}
                    {{ __('Если вы не получили письмо по электронной почте') }}, <a href="{{ route('verification.resend') }}">{{ __('нажмите здесь, чтобы запросить еще раз') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
