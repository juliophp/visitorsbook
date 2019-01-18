@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">View Visit</div>

                <div class="card-body">
                      <div class="form-group row">
                          <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname:') }}</label>

                          <div class="col-md-6 pt-2">
                              {{ $visit->firstname }}
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname:') }}</label>

                          <div class="col-md-6 pt-2">
                                {{ $visit->lastname }}
                          </div>
                      </div>


                      <div class="form-group row">
                          <label for="host" class="col-md-4 col-form-label text-md-right">{{ __('Host:') }}</label>

                          <div class="col-md-6 pt-2">
                              {{ $visit->host }}
                          </div>
                      </div>


                      <div class="form-group row">
                          <label for="purpose" class="col-md-4 col-form-label text-md-right">{{ __('Purpose of Visit:') }}</label>

                          <div class="col-md-6 pt-2">
                              {{ $visit->purpose }}
                          </div>
                      </div>


                      <div class="form-group row">
                          <label for="timein" class="col-md-4 col-form-label text-md-right">{{ __('Time In:') }}</label>

                          <div class="col-md-6 pt-2">
                              {{ $visit->timein }}
                          </div>
                      </div>



                      <div class="form-group row">
                          <label for="timeout" class="col-md-4 col-form-label text-md-right">{{ __('Time Out:') }}</label>

                          <div class="col-md-6 pt-2">
                              {{ $visit->timeout }}
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                            <form method="post" action="{{ route('visits.destroy', $visit->id)}}">

                              <a href="{{ route('visits.edit', $visit->id)}}" class="btn btn-primary">
                                  {{ __('Edit Visit') }}
                              </a>

                                @csrf
                                @method('delete')
                              <button type="submit" class="btn btn-danger">
                                  {{ __('Delete Visit') }}
                              </button>
                            </form>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
