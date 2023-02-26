@extends('layouts.app')

@section('content')
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
            <div class="mt-2">
                <a class="btn btn-primary m-2" href="{{ route('forma') }}"> PVM </a>
                <a class="btn btn-primary m-2" href="{{ route('kmi') }} "> KMI </a>
            </div>


        </div>


    </div>




</div>
@endsection
