@extends('adminlte::page')



@section('title')
    Home | Laravel Document App
@endsection

@section('content_header')
    <h1>Dashboard</h1>
@endsection


@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4">
                <div class="small-box bg-info">
                   <div class="inner">
                        <h3>{{\App\Models\Document::count()}}</h3>
                        <p>Total Documents</p>
                   </div>
                   <div class="icon">
                        <i class="fas fa-users"></i>
                   </div>
                   <a href="{{url('admin/documents')}}" class="small-box-footer">
                        More info<i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection