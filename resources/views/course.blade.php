@extends('layouts.main')

@section('content')
<div class="row">
  <div class="col-sm-12">
    <h2>Microcredentials</h2>
    <br>
    <h4>{{ $course['1']['VALUE'] }}</h4>
    <br>
    <div class="row">
      <div class="col-md-4">
          @if(array_key_exists('SINGLE', $course['10']['MULTIPLE']))
          <img class="" src="{{ str_replace( 'webservice/', '', $course['10']['MULTIPLE']['SINGLE']['KEY'][3]['VALUE']) }}" style="width:100%"/>
          @else
          <img class="" src="{{ url('img/no_image.jpeg') }}" alt="No image" style="width:100%">
          @endif
      </div>
      <div class="col-md-8">
        <span class="badge badge-success">{{ $course['5']['VALUE'] }}</span><span style="margin-left:20px" class="badge badge-danger">{{ $course['3']['VALUE'] }}</span><br>
        <p class="card-text">{!! $course['7']['VALUE'] !!}</p>
        <a href="{{ env('MOODLE_URL') }}/enrol/index.php?id={{ $course['0']['VALUE'] }}" class="btn btn-primary">Enroll</a>
      </div>
    </div>
    <br>
    <br>
  </div>
</div>

@endsection
