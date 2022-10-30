<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(!empty($badges))
                    <p><b>Congratulation!</b> You have earn {{ count($badges) }} badges</p>

                    <br>

                      @foreach($badges as $badge)

                     <div class="max-w-2xl p-5 rounded-md tracking-wide">
                        <div id="header" class="flex">

                             @if(array_key_exists('KEY', $badge))
                               <img alt="" class="" src="{{ str_replace( 'webservice/', '', $badge['KEY']['32']['VALUE']) }}" style="height: 100px"/>
                               <div id="body" class="flex flex-col ml-5">
                                  <h4 id="name" class="text-xl font-semibold mb-2">{{ $badge['KEY']['1']['VALUE'] }}</h4>
                                  <p id="job" class="text-gray-800 mt-2">{{ $badge['KEY']['2']['VALUE'] }}</p>
                                  <p>
                                    <b>Date issued:</b> {{ date("d/m/Y", $badge['KEY']['22']['VALUE']) }}
                                  </p>
                                  <p>
                                    @if(!is_array($badge['KEY']['23']['VALUE']))
                                    <b>Date expired:</b> {{ date("d/m/Y",$badge['KEY']['23']['VALUE']) }}
                                    @else
                                    <b>Date expired:</b> No expiry
                                    @endif
                                  </p>
                                </div>
                              @else
                                <img alt="" class="" src="{{ str_replace( 'webservice/', '', $badge['32']['VALUE']) }}" style="height: 100px"/>
                                <div id="body" class="flex flex-col ml-5">
                                    <h4 id="name" class="text-xl font-semibold mb-2">{{ $badge['1']['VALUE'] }}</h4>
                                    <p id="job" class="text-gray-800 mt-2">{{ $badge['2']['VALUE'] }}</p>
                                    <p>
                                      <b>Date issued:</b> {{ date("d/m/Y", $badge['22']['VALUE']) }}
                                    </p>
                                    <p>
                                      @if(!is_array($badge['23']['VALUE']))
                                      <b>Date expired:</b> {{ date("d/m/Y",$badge['23']['VALUE']) }}
                                      @else
                                      <b>Date expired:</b> No expiry
                                      @endif
                                    </p>
                                  </div>
                              @endif


                        </div>
                     </div>
                      @endforeach
                      <p>You can manage and download the badge from your <a href="http://localhost/moodle/badges/mybadges.php">Manage badges</a> page.</p>
                    @else
                    <p>You didn't earn any badges yet! Enroll to earn badges</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @if(!empty($courses))
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <h4 class="font-semibold text-xl text-gray-800 leading-tight">Currently enroll</h4>
                      @foreach($courses as $course)

                     <div class="max-w-2xl p-5 rounded-md tracking-wide">
                        <div id="header" class="flex">
                          @if(array_key_exists('KEY', $course))
                            <img src="{{ str_replace( 'webservice/', '', $course['KEY']['24']['MULTIPLE']['SINGLE']['KEY'][3]['VALUE']) }}" alt="" style="height:100px;">
                            <div id="body" class="flex flex-col ml-5">
                              <h5 class="font-semibold text-l text-gray-800">{{ $course['KEY'][1]['VALUE'] }}: {{ $course['KEY'][2]['VALUE'] }}</h5>
                              <div>{!! $course['KEY'][7]['VALUE'] !!}</div>
                            </div>
                            <hr>
                          @else
                            <img src="{{ str_replace( 'webservice/', '', $course['24']['MULTIPLE']['SINGLE']['KEY'][3]['VALUE']) }}" alt="" style="height:100px;">
                            <div id="body" class="flex flex-col ml-5">
                              <h5 class="font-semibold text-l text-gray-800">{{ $course[1]['VALUE'] }}: {{ $course[2]['VALUE'] }}</h5>
                              <div>{!! $course[7]['VALUE'] !!}</div>
                            </div>
                          @endif
                        </div>
                     </div>
                      @endforeach

                </div>
            </div>
        </div>
    </div>
    @endif
</x-app-layout>
