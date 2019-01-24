@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        @include('inc.messages')
        <div class="card">
            <div class="card-header">Edit Listing
            <a class="btn btn-secondary float-right btn-sm" href="/dashboard">Back</a>
            </div>
            <div class="card-body">
                {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) !!}
                {{ Form::bsText('name', $listing->name, ['placeholder' => 'Company Name']) }}
                {{ Form::bsText('website', $listing->website, ['placeholder' => 'Company Website']) }}
                {{ Form::bsText('email', $listing->email, ['placeholder' => 'Contact Email']) }}
                {{ Form::bsText('phone', $listing->phone, ['placeholder' => 'Contact Phone']) }}
                {{ Form::bsTextArea('address', $listing->address, ['placeholder' => 'Business Address']) }}
                {{ Form::bsTextArea('bio', $listing->bio, ['placeholder' => 'About this business']) }}
                {{ Form::hidden('_method', 'PUT') }}
                {{ Form::bsSubmit('Submit') }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</div>
@endsection
