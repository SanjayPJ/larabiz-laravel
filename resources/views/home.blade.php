@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
                @include('inc.messages')
            <div class="card">
                   
                <div class="card-header">Your Listings <span class="float-right"><a href="/listings/create" class="btn btn-secondary btn-sm">Create Listing</a></span></div>

                <div class="card-body p-0">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (count($listings) > 0)
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Company</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($listings as $listing)
                            <tr>
                            <th scope="row">{{$listing->id}}</th>
                            <td>{{$listing->name}}</td>
                            <td></td>
                            <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
