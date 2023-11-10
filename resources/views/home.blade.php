@extends('layouts.master')


@section("content")


    {{-- affiche l'interface de l'armateur s'il s'agit bien d'un armateur --}}
        @include("user.mesdemandes")
         
    {{-- ----- ----------- ------ --}}
    {{-- affichera l'interface de l'agent portuaire ou autre ici --}}
    {{-- ----- ----------- ------ --}}

@endsection








{{-- ----- ------------------------------------------ ------ --}}
{{-- ancienne presentation venue avec l'installation de auth --}}
{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
