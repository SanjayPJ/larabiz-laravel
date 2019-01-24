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
                    <li class="list-group-item">Address : {{$listing->address}}</li>
                    <li class="list-group-item">Website : <a href="{{$listing->website}}">{{$listing->address}}</a></li>
                    <li class="list-group-item">Phone : {{$listing->phone}}</li>        
                    <li class="list-group-item">email : {{$listing->email}}</li>
                    </ul>
                    <hr>
                    <div class="card">
                        <div class="card-body">
                            {{$listing->bio}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
