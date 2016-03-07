@extends('app')

@section('htmlheader_title')
    Detalle Cliente
@endsection

@section('contentheader_title')
    {{ $pet->name}} {{ $pet->person->last_name }}

@endsection

@section('contentheader_description')
    Informacion del Cliente
@endsection

@section('contentheader_level')
    <li><a href="{{ route('customers_show_path') }}">Clientes</a></li><li><a href="{{ route('customer_show_path',$pet->person->id) }}">{{ $pet->person->first_name }} {{ $pet->person->last_name }}</a></li><li class="active">Detalle {{ $pet->name }}</li>
@endsection



@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3" align="center">
                            <img alt="User Pic" src="{{ asset('/img/avatar_pet/'.$pet->avatar) }}" class="img-circle img-responsive margin">
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <th>Nombre:</th>
                                    <td><a href="#">{{ $pet->name }} {{ $pet->person->last_name }} | <span class="glyphicon glyphicon-edit"></span></a></td>
                                    <th>Propietario:</th>
                                    <td><a href="#">{{ $pet->person->first_name }} {{ $pet->person->last_name }} | <span class="glyphicon glyphicon-edit"></span></a></td>

                                </tr>
                                <tr>
                                    <th>Sexo:</th>
                                    <td>{{ $pet->sex }}</td>
                                    <th>Edad:</th>
                                    <td>5 meses 6 dias</td>
                                </tr>
                                <tr>
                                    <th>Raza:</th>
                                    <td>{{ $pet->race->name }}</td>
                                    <th>Color/Pelaje:</th>
                                    <td>{{ $pet->color }}/{{ $pet->pelage->name }}</td>
                                </tr>
                                <tr>
                                    <th>Pedigree:</th>
                                    <td>
                                        @if($pet->pedigree === 0)
                                            No
                                        @endif
                                        @if($pet->pedigree != 0)
                                            Si
                                        @endif
                                    </td>
                                    <th>Numero Pedigree:</th>
                                    <td>
                                        @if($pet->pedigree === 0)
                                            S/N
                                        @endif
                                        @if($pet->pedigree != 0)
                                            {{ $pet->pedigree_number }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Codigo Interno:</th>
                                    <td>{{ $pet->code }}</td>
                                    <th>Estado:</th>
                                    <td>
                                        @if($pet->state === 0)
                                        <span class="badge bg-red">Muerto</span>
                                        @endif
                                        @if($pet->state != 0)
                                        <span class="badge bg-green">Vivo</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Esterilizado:</th>
                                    <td>
                                        @if($pet->sterilization === 0)
                                            No
                                        @endif
                                        @if($pet->sterilization != 0)
                                            Si
                                        @endif
                                    </td>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>


                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection