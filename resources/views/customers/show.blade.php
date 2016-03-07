@extends('app')

@section('htmlheader_title')
    Detalle Cliente
@endsection

@section('contentheader_title')
    {{ $customer->person->first_name }} {{ $customer->person->last_name }}

@endsection

@section('contentheader_description')
    Informacion del Cliente
@endsection

@section('contentheader_level')
    <li><a href="{{ route('customers_show_path') }}">Clientes</a></li><li class="active">Detalle {{ $customer->person->first_name }}</li>
@endsection



@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
                <div class="box-body">
                    <div class="col-xs-12 col-lg-6">
                        <div class="box">
                            <div class="box-header">
                                <i class="fa fa-info-circle"></i> Informacion del Cliente
                            </div>
                            <div class="box-body">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 " align="center">
                                                <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive">
                                            </div>
                                            <div class=" col-md-9 col-lg-9 ">
                                                <table class="table table-user-information">
                                                    <tbody>
                                                    <tr>
                                                        <td>DNI:</td>
                                                        <td>{{ $customer->person->dni }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cumpleaños:</td>
                                                        <td>{{ $customer->person->birthday }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Direccion:</td>
                                                        <td>{{ $customer->person->address }} - {{ $customer->person->city }}
                                                            <br><small>{{ $customer->person->eaddress }}</small></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td><a href="mailto:info@support.com">{{ $customer->email }}</a></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Telefono fijo:</td>
                                                        <td>{{ $customer->person->phone }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Telefono movil:</td>
                                                        <td>{{ $customer->person->cell_phone }}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <a data-original-title="Enviar mensaje" data-toggle="tooltip" type="button" class="btn btn-primary">
                                            <i class="glyphicon glyphicon-envelope"></i>
                                        </a>
                            <span class="pull-right">
                              <a href="editar_cliente.html" data-original-title="Editar usuario" data-toggle="tooltip" type="button" class="btn btn-warning">
                                  <i class="glyphicon glyphicon-edit"></i>
                              </a>
                              <a data-original-title="Eliminar usuario" data-toggle="tooltip" type="button" class="btn btn-danger">
                                  <i class="glyphicon glyphicon-remove"></i>
                              </a>
                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <div class="box">
                            <div class="box-header">
                                <i class="fa fa-github"></i> Informacion de Mascotas
                                <div class="pull-right">
                                    <a href="{{ route('pet_create_path',$customer->person->id) }}">
                                        <button class="btn btn-block btn-primary">
                                            <i class="fa fa-plus"></i> Agregar Mascota
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <table class="table table-user-information">
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                @foreach($pets as $pet)
                                                                <li><a href="{{ route('pet_show_path',$pet->id) }}">{{ $pet->name }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection