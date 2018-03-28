@extends('layouts.default')
@section('content')
    @if(Auth::check())
    <div class="row">
        <div class="col-md-8">
            <section class="status_form">
                @include('statuses._status_form')
            </section>
            <h3>微博列表</h3>
            @include('shared._feed')
        </div>
        <aside class="col-md-4">
            <section class="user_info">
                @include('shared._user_info', ['user' => Auth::user()])
            </section>
        </aside>
    </div>
    @else
    <div class="jumbotron">
        <h1>Hello IRENE</h1>
        <p class="lead">
            您现在看到的是IRENE APP
        </p>
        <P>
            一切从这里开始
        </P>
        <p>
            <a href="{{ route('signup') }}" role="button" class="btn btn-lg btn-success">现在注册</a>
        </p>
    </div>
    @endif
@stop
