@extends('auth.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
    <body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('auth_store_path') }}"><b>Santa</b>Ana</a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Iniciar Sesion</p>

            @include('partials.errors')

            <form action="{{ route('auth_store_path') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username" name="name"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <input type="submit" class="btn btn-primary btn-block btn-flat" value="Iniciar Sesion">
                    </div>
                </div>
            </form>
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    @include('auth.scripts')

    </body>

@endsection
