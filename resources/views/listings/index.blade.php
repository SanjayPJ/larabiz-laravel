@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
                @include('inc.messages')
            <div class="card">
                   
                <div class="card-header">Latest Business Listings</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-group">
                        @if (count($listings) > 0)
                            @foreach ($listings as $listing)
                                <li class="list-group-item"><a href="listings/{{$listing->id}}">{{$listing->name}}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
