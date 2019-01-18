@extends('layouts.app')

@section('content')
<div class="container-fluid">
  @if (session('success'))
      <div class="alert alert-success" role="alert">
          {{ session('success') }}
      </div>
  @endif
    <div class="row justify-content-center">
      <h3>All Visits</h3>
        <div class="col-md-12">
          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Visit ID</th>
              <th scope="col">Firstname</th>
              <th scope="col">Lastname</th>
              <th scope="col">Purpose of Visit</th>
              <th scope="col">Host</th>
              <th scope="col">Time In</th>
              <th scope="col">Time Out</th>
            </tr>
          </thead>
          <tbody>
            @foreach($visits as $visit)
            <tr>
              <th><a href="{{ route('visits.show', $visit->id)}}">{{$visit->id}}</a></th>
              <td>{{$visit->firstname}}</td>
              <td>{{$visit->lastname}}</td>
              <td>{{$visit->purpose}}</td>
              <td>{{$visit->host}}</td>
              <td>{{$visit->timein}}</td>
              <td>{{$visit->timeout}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a class="btn btn-primary" href="{{route('visits.create')}}">Add More Visitors </a>
        </div>
    </div>
</div>
@endsection
