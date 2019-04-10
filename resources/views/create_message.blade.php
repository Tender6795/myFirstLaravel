@extends('layouts.app')

@section('content')
    <div class="card-body">
        @include('errors')
        <form action="{{url('create_message')}}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="container">
                <div class="row">
                    <div class="form-group">
                        <label for="Message" class="col-sm-3 control-label">Message: </label>

                        <div class="row">
                            <div class="col-sm-12">
                                {{--<input type="hidden" name="user_name" id="user_name" class="form-control"--}}
                                       {{--value={{Auth::user()->name}}>--}}
                                <textarea name="message" id="message" class="form-control"></textarea>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
