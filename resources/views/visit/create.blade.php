@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Add Visitor</div>

                <div class="card-body">
                  <form method="POST" action="{{ route('visits.store') }}">
                      @csrf

                      <div class="form-group row">
                          <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

                          <div class="col-md-6">
                              <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>

                              @if ($errors->has('firstname'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('firstname') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                          <div class="col-md-6">
                              <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                              @if ($errors->has('lastname'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('lastname') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="host" class="col-md-4 col-form-label text-md-right">{{ __('Host') }}</label>

                          <div class="col-md-6">
                              <input id="host" type="text" class="form-control{{ $errors->has('host') ? ' is-invalid' : '' }}" name="host" value="{{ old('host') }}" required autofocus>

                              @if ($errors->has('host'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('host') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="purpose" class="col-md-4 col-form-label text-md-right">{{ __('Purpose of Visit') }}</label>

                          <div class="col-md-6">
                              <textarea id="purpose" class="form-control{{ $errors->has('purpose') ? ' is-invalid' : '' }}" name="purpose" required>
                                {{ old('purpose') }}
                              </textarea>

                              @if ($errors->has('purpose'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('purpose') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>


                      <div class="form-group row">
                          <label for="timein" class="col-md-4 col-form-label text-md-right">{{ __('Time In') }}</label>

                          <div class="col-md-6">
                              <input id="timein" type="time" class="form-control{{ $errors->has('timein') ? ' is-invalid' : '' }}" name="timein" value="{{ old('timein') }}" required autofocus>

                              @if ($errors->has('timein'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('timein') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>



                      <div class="form-group row">
                          <label for="timeout" class="col-md-4 col-form-label text-md-right">{{ __('Time Out') }}</label>

                          <div class="col-md-6">
                              <input id="timeout" type="time" class="form-control{{ $errors->has('timeout') ? ' is-invalid' : '' }}" name="timeout" value="{{ old('timeout') }}" required autofocus>

                              @if ($errors->has('timeout'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('timeout') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Register') }}
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
