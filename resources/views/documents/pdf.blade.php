@extends('adminlte::page')



@section('title')
    Afficher des Documents | Laravel Document App
@endsection

@section('content_header')
    <h1>Afficher des Documents</h1>
@endsection


@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase font-weight-bold">
                            <h4>Afficher le Document</h4>
                        </div>
                    </div>
                    <div class="card-body">

                           <h1>{{ $document->titre}}</h1>
                            <p>{{ $document->contenu }}</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection





