@extends('layouts.app')

@section('content')
  {{-- Trips Show  --}}

  <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2> More About Your Trip</h2>
          </div>
          <div class="pull-right">
              <a class="btn btn-primary" href="{{ route('trips.index') }}"> Back</a>
          </div>
      </div>
  </div>

  <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Name:</strong>
                {{ $trip->name}}
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Description:</strong>
                {{ $trip->description}}
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Start Date :</strong>
                {{ $trip->start_date}}
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>End Date :</strong>
                {{$trip->end_date}}
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Budget:</strong>
                {{$trip->budget}}
          </div>
      </div>

  </div>

@endsection
