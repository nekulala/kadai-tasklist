@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ Auth::user()->name }}</h3>
                    </div>
                </div>
            </aside>
            <div class="col-sm-8">
                @include('tasks.index', ['tasks' => $tasks])
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Tasklists -ようこそ-</h1>
                {!! link_to_route('signup.get', '新規登録はこちら', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection