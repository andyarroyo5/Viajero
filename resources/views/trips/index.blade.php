
@extends('layouts.layout')

@section('content')

{{-- Trips Index  --}}

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Trips</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('trips.create') }}"> Add New Trip </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

  @foreach ($trips as $trip)
  <div class="card-deck">
    <div class="card">
      <div class="card-block">
        <a class="btn btn-info" href="{{ route('trips.show',$trip->id) }}">Show</a>
        <a class="btn btn-primary" href="{{ route('trips.edit',$trip->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['trips.destroy', $trip->id],'style'=>'display:inline']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
      </div>
      <div class="card-block">
        <h4 class="card-title">{{$trip->name}}<span class="glyphicon glyphicon-star" style="float:right"></span></h4>
        <p class="card-text">{{$trip->description}}</p>
        <p class="card-text">{{$trip->start_date}}</p>
          <p class="card-text">{{$trip->end_date}}</p>
        <p class="card-text" style="float:right">$ {{$trip->budget}} pesos</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">{{$trip->updated_at}}</small>
      </div>
    </div>
  </div>
@endforeach

<div class="card-deck">
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">UK 2017<span class="glyphicon glyphicon-star" style="float:right"></span></h4>
      <p class="card-text">A 15 day trip through England, Scotland, Ireland and Wales</p>
      <p class="card-text">From 12/13/2017 To 12/28/2017</p>
      <p class="card-text" style="float:right">$40,000 pesos</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">Japón 2017<span class="glyphicon glyphicon-star" style="float:right"></span></h4>
      <p class="card-text">A 21 days trip through Japan, visiting cities such as Sendai, Tokyo, Kanazawa, Kyoto, Hiroshima and Osaka</p>
      <p class="card-text">From 12/15/2017 To 01/04/2018</p>
      <p class="card-text" style="float:right">$60,000 pesos</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">Alemania 2017<span class="glyphicon glyphicon-star-empty" style="float:right"></span></h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">Alemania 2017<span class="glyphicon glyphicon-star-empty" style="float:right"></span></h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

<div class="card-deck">
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">UK 2017<span class="glyphicon glyphicon-star" style="float:right"></span></h4>
      <p class="card-text">A 15 day trip through England, Scotland, Ireland and Wales</p>
      <p class="card-text">From 12/13/2017 To 12/28/2017</p>
      <p class="card-text" style="float:right">$40,000 pesos</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">Japón 2017<span class="glyphicon glyphicon-star" style="float:right"></span></h4>
      <p class="card-text">A 21 days trip through Japan, visiting cities such as Sendai, Tokyo, Kanazawa, Kyoto, Hiroshima and Osaka</p>
      <p class="card-text">From 12/15/2017 To 01/04/2018</p>
      <p class="card-text" style="float:right">$60,000 pesos</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">Alemania 2017<span class="glyphicon glyphicon-star-empty" style="float:right"></span></h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">Alemania 2017<span class="glyphicon glyphicon-star-empty" style="float:right"></span></h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
@endsection
