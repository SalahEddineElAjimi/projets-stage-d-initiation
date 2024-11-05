@extends('adminlte::page')



@section('title')
    Liste des Documents | Laravel Document App
@endsection

@section('content_header')
    <h1>Liste des Documents</h1>
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase font-weight-bold">
                            <h4>Documents</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>titre</th>
                                    <th>contenu</th>
                                    <th>auteur</th>
                                    <th></th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach ($documents as $document)
                                    <tr>
                                        <td>{{ $document->id }}</td>
                                        <td>{{ $document->titre }}</td>
                                        <td>{{ Str::limit($document->contenu,50)}}</td>
                                        <td>{{ $document->auteur }}</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('documents.show',$document->id)}}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('documents.edit',$document->id)}}" class="btn btn-sm btn-warning mx-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                        </table>
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
    @if(session()->has('success'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '{{session()->get('success')}}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
@endsection
