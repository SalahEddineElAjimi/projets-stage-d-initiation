@extends('adminlte::page')



@section('title')
    Liste des Produits | Laravel Document App
@endsection

@section('content_header')
    <h1>Liste des Produits</h1>
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase font-weight-bold">
                            <h4>Produits</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nom</th>
                                    <th>Quantite</th>
                                    <th>Prix</th>
                                    <th></th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach ($produits as $produit)
                                    <tr>
                                        <td>{{ $produit->id }}</td>
                                        <td>{{ $produit->nom }}</td>
                                        <td>{{ $produit->quantite}}</td>
                                        <td>{{ $produit->prix }}</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <a class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-warning mx-2">
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
