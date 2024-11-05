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

                            <form action="{{ route('documents.store')}}" method="post" class="mt-3">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="titre">Titre</label>
                                    <input type="text" disabled class="form-control" name="titre" placeholder="Titre du document" value="{{$document->titre}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="contenu">Contenu</label>
                                    <input disabled class="form-control" name="contenu" placeholder="Contenu du document" value="{{$document->contenu}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="auteur">Auteur</label>
                                    <input type="text" disabled class="form-control" name="auteur" placeholder="Auteur du document" value="{{$document->auteur}}">
                                </div>
                                <a href="{{ route('export_document_pdf' , ['id' => $document->id])}}" class="btn btn-outline-success"><i class="fas fa-file-pdf"></i> Telecharger <b>PDF</b></a>

                            </form>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection


@section('js')
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({
                dom : 'Bfrtip' ,
                buttons: [
                    'copy','csv','pdf','print','colvis'
                ]
            });
        });
    </script>

@endsection


