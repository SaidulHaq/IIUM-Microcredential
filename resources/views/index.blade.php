@extends('layouts.main')

@section('content')
<div class="row">
  <div class="col-sm-12">
    <h2>Microcredentials</h2>
    <br>
    <h4>List of courses</h4>
    <div class="row">
      @foreach(array_slice($courses, 1) as $course)
      <div class="col-md-3">
        <div class="card">
          @if(array_key_exists('SINGLE', $course['KEY']['10']['MULTIPLE']))
          <img class="card-img-top" src="{{ str_replace( 'webservice/', '', $course['KEY']['10']['MULTIPLE']['SINGLE']['KEY'][3]['VALUE']) }}" alt="Card image: {{ $course['KEY']['1']['VALUE'] }}">
          @else
          <img class="card-img-top" src="{{ url('img/no_image.jpeg') }}" alt="No image">
          @endif
          <div class="card-body">
            <h5 class="card-title">{{ $course['KEY']['1']['VALUE'] }}</h5>
            <span class="badge badge-success">{{ $course['KEY']['5']['VALUE'] }}</span><br>
            <p class="card-text">{!! \Illuminate\Support\Str::words($course['KEY']['7']['VALUE'], 20, '...') !!}</p>
            <a href="{{ env('MOODLE_URL') }}/enrol/index.php?id={{ $course['KEY']['0']['VALUE'] }}" class="btn btn-primary">Enroll</a>
            <a href="{{ route('course', ['id'=> $course['KEY']['0']['VALUE']]) }}" class="btn btn-success">More Info</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
    <br><br>



  </div>

</div>

@endsection
