@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">KMI Skaičiuoklė</div>

                    <div class="card-body">
                        <form method="post" action="{{ route("kmiRezultatas") }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Svoris (kilogramais):</label>
                                <input class="form-control" name="svoris" value="0">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Ūgis (centimetrais):</label>
                                <input class="form-control" name="ugis" value="0">
                            </div>

                            <button class="btn btn-success">Skaičiuoti KMI</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
