@extends('adminlte::page')



@section('title')
    Modifier des Documents | Laravel Document App
@endsection

@section('content_header')
    <h1>Modifier des Documents</h1>
@endsection


@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase font-weight-bold">
                            <h4>Modifier des Documents</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('documents.update',$document->id)}}" method="post" class="mt-3">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="titre">Titre</label>
                                <input type="text" class="form-control" name="titre" placeholder="Titre du document" value="{{old('titre',$document->titre)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="contenu">Contenu</label>
                                <textarea class="form-control" name="contenu" placeholder="Contenu du document" value="{{old('contenu',$document->contenu)}}"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="auteur">Auteur</label>
                                <input type="text" class="form-control" name="auteur" placeholder="Auteur du document" value="{{old('auteur',$document->auteur)}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection

