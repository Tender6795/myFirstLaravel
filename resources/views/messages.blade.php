@extends('layouts.app')

@section('content')
    @if(count($messages)>0)
        <div class="card">
            <div class="card-heading">
                Messages:
            </div>
            <div class="card-body">
                {{--<table class="table table-striped task-table">--}}
                {{--<thead>--}}
                {{--<th>Name</th>--}}
                {{--<th>Message</th>--}}
                {{--</thead>--}}
                {{--<tbody>--}}

                    @foreach($messages as $message)
                            <div class="alert alert-success"><h3 >{{$message->user_name}}</h3>
                            <h5 >{{$message->text}}</h5></div>
                    @endforeach

              {{$messages->links()}}
            </div>
        </div>
    @endif
@endsection
