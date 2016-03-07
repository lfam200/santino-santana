@extends('app')

@section('htmlheader_title')
    Agregar Mascota
@endsection

@section('contentheader_title')
    Agregar Mascota

@endsection

@section('contentheader_description')
    Registrar Mascota
@endsection

@section('contentheader_level')
    <li>Clientes {{ $id }}</li><li class="active">Agregar Mascota</li>
@endsection



@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success box-solid">
                <div class="box-header">
                    <h3 class="box-title">Agregar Mascota</h3>
                    <div class="box-tools pull-right">
                        <a href="{{ route('customer_show_path',$id) }}">
                            <button class="btn btn-box-tool"><i class="fa fa-arrow-circle-left"></i>Regresar</button>
                        </a>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    @include('partials.errors')
                    <form action="{{ route('pet_store_path') }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="person_id" value="{{ $id }}">
                        <div class="box-body">
                            <div class="col-xs-12">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        <input type="text" class="form-control" name="name" placeholder="Duque" tabindex="1" value="{{ old('name') }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="sex" >Sexo</label>
                                        <select name="sex" class="form-control" tabindex="2">
                                            <option value="Macho">Macho</option>
                                            <option value="Hembra">Hembra</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="sterilization" >Esterilizado</label>
                                        <select name="sterilization" class="form-control" tabindex="3">
                                            <option value="1">Si</option>
                                            <option value="0">No</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="birthday">Fecha Nacimiento</label>
                                        <input type="date" class="form-control" name="birthday" value="{{ old('birthday') }}" tabindex="4">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="specie" >Especie</label>
                                        <select name="specie" id="specie" class="form-control" tabindex="5">
                                            <option value="" selected>Seleccione una especie</option>
                                        @foreach($species as $specie)
                                            <option value="{{ $specie->id }}">{{ $specie->name }}</option>
                                        @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="race_id" >Raza</label>
                                        <select name="race_id" id="race_id" class="form-control" tabindex="6">
                                            <option value="" selected>Seleccione una raza</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pelage_id" >Pelaje</label>
                                        <select name="pelage_id" class="form-control" tabindex="7">
                                            @foreach($pelages as $pelage)
                                                <option value="{{ $pelage->id }}">{{ $pelage->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="avatar">Foto</label>
                                        <input type="file" class="form-control" name="avatar" tabindex="8">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="pedigree" >Pedigree</label>
                                        <select name="pedigree" class="form-control" tabindex="9">
                                            <option value="1">Si</option>
                                            <option value="0">No</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="pedigree_number">Nro. Pedigree</label>
                                        <input type="text" class="form-control" name="pedigree_number" placeholder="2398278" value="{{ old('pedigree_number') }}" tabindex="10">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="code">Codigo</label>
                                        <input type="text" class="form-control" name="code" placeholder="2398179" value="{{ old('code') }}" tabindex="11">
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="col-xs-12">
                            <div class="pull-left">
                                <input type="submit" class="btn btn-primary btn-lg" value="Registrar">
                            </div>

                        </div>

                    </form>
                    <div class="pull-right">
                        <a href="{{ route('customer_show_path',$id) }}"><button class="btn btn-default btn-lg">Cancelar</button></a>
                    </div>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div><!-- /.row -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#specie').change(function(){
                $.get("{{ url('dropdown')}}",
                        { option: $(this).val() },
                        function(data) {
                            $('#race_id').empty();
                            $.each(data, function(key, element) {
                                $('#race_id').append("<option value='" + key + "'>" + element + "</option>");
                            });
                        });
            });
        });
    </script>
@endsection