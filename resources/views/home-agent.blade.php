@extends("layouts.master-agent")
@section("content")
    <div id="loading-svg" style=" display: none;" class="pl-5">
            <img class="" src="{{asset("images/loading.gif")}}" srcset="{{asset("images/loading.gif")}}"  alt="logo">
    </div>
    <div class="js-preloader">
    <div class="loading-animation tri-ring"></div>
</div>
        @include("agent.welcome")
        <hr>
        @include("agent.agent-page-stat")
   

@endsection