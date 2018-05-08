@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="panel-body">
                    Instagram hasgtag
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('store') }}">
                        {{ csrf_field() }}
                        
                        @if ( $tag )
                            <input id="tag" name="tag" value="{{ $tag }}" type="text">
                        @else
                            <input id="tag" name="tag" value="{{ old('tag') }}" type="text" placeholder="#sample tag">
                        @endif
                        
                        <button type="submit" class="btn btn-primary">
                            submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
