@extends('app')

@section('htmlheader_title')
    Dashboard
@endsection



@section('main-content')
    <div class='row'>
        <div class='col-xs-12'>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#fa-icons" data-toggle="tab">Principal</a></li>
                </ul>
                <div class="tab-content">
                    <!-- Font Awesome icons -->
                    <div class="tab-pane active" id="fa-icons" >
                        <div class="row">
                            <div class="col-lg-9 col-xs-12">
                                <div class="col-lg-6 col-xs-12">
                                    <!-- small box -->
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Ultimas mascotas atendidas</h3>
                                            <div class="box-tools pull-right">
                                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body table-responsive no-padding">
                                            <table class="table table-hover">
                                                <tr>
                                                    <th>Mascota</th>
                                                    <th>Propietario</th>
                                                    <th>Fecha</th>
                                                </tr>
                                            </table>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div>
                                <div class="col-lg-6 col-xs-12">
                                    <!-- small box -->
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Mascotas atendidas por mes</h3>
                                            <div class="box-tools pull-right">
                                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="chart">
                                                <canvas id="atendidosMes" height="200"></canvas>
                                            </div>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div>
                                <div class="col-lg-6 col-xs-12">
                                    <!-- small box -->
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Ultimas mascotas registradas</h3>
                                            <div class="box-tools pull-right">
                                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body table-responsive no-padding">
                                            <table class="table table-hover">
                                                <tr>
                                                    <th>Mascota</th>
                                                    <th>Propietario</th>
                                                    <th>Fecha</th>
                                                </tr>
                                            </table>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div>
                                <div class="col-lg-6 col-xs-12">
                                    <!-- small box -->
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Mascotas registradas por mes</h3>
                                            <div class="box-tools pull-right">
                                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="chart">
                                                <canvas id="registradosMes" height="200"></canvas>
                                            </div>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div>
                                <div class="col-lg-6 col-xs-12">
                                    <!-- small box -->
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Productos con Stock bajo</h3>
                                            <div class="box-tools pull-right">
                                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body table-responsive no-padding">
                                            <table class="table table-hover">
                                                <tr>
                                                    <th>Producto</th>
                                                    <th>Cantidad</th>
                                                </tr>
                                            </table>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div>
                                <div class="col-lg-6 col-xs-12">
                                    <!-- small box -->
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Mascotas registradas por Año</h3>
                                            <div class="box-tools pull-right">
                                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="chart">
                                                <canvas id="registradosAno" height="200"></canvas>
                                            </div>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12">
                                <div class="col-lg-12 col-xs-12">
                                    <div class="small-box bg-green">
                                        <div class="inner">
                                            <h3>--</h3>
                                            <p>Mascotas Registradas</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-github-alt"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">
                                            Ver mas <i class="fa fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                    <div class="small-box bg-orange">
                                        <div class="inner">
                                            <h3>--</h3>
                                            <p>Clientes Registrados</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">
                                            Ver mas <i class="fa fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                    <div class="small-box bg-primary">
                                        <div class="inner">
                                            <h3>--</h3>
                                            <p>Ventas Mes</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">
                                            Ver mas <i class="fa fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                    <div class="small-box bg-red">
                                        <div class="inner">
                                            <h3>--</h3>
                                            <p>Cuentas por Cobrar</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">
                                            Ver mas <i class="fa fa-arrow-circle-right"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>


                        </div>

                    </div><!-- /#fa-icons -->


                </div><!-- /.tab-content -->
            </div><!-- /.nav-tabs-custom -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection