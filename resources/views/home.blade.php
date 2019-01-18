@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    <p>Welcome, {{ Auth::user()->name }}. Today Is {{ date('l, d F Y ') }}. </p>
                    <p>{{ $cnt }} people came visiting today, click <a href="{{ route('visits.index')}}">here</a> to see all visitors</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
