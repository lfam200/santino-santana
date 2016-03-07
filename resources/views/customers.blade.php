@extends('app')

@section('htmlheader_title')
    Clientes
@endsection

@section('contentheader_title')
    Clientes
@endsection

@section('contentheader_description')
    Listado de Clientes
@endsection

@section('contentheader_level')
    <li class="active">Clientes</li>
@endsection



@section('main-content')
    <div class='row margin-bottom'>
        <div class='col-xs-6'>
           {{--Espacio para formulario de busqueda--}}
        </div><!-- /.col -->
        <div class="col-xs-3">
            <a href="{{ route('customer_create_path') }}"><button class="btn btn-block btn-primary btn"><i class="fa fa-user-plus"></i> Agregar Cliente</button></a>
        </div>
        <div class="col-xs-3">
            <button class="btn btn-block btn-info btn"><i class="fa fa-print"></i>Imprimir</button>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Registro de Clientes</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Mascotas</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <th>
                                <a href="{{ route('customer_show_path',$user->id) }}">
                                    {{ $user->person->first_name }} {{ $user->person->last_name }}
                                </a>
                            </th>
                            <th>
                                @foreach($pets as $pet)
                                    @if($pet->person->id === $user->person->id)
                                        <a href="{{ route('pet_show_path',$pet->id) }}">{{ $pet->name }}</a> -
                                    @endif

                                @endforeach
                            </th>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div><!-- /.row -->
@endsection