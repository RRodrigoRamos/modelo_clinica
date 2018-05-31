@extends('layout.template')
@section('title', 'LOGIN - USUÁRIO')

@section('Menu')
            <!-- Navbar Menu -Inicio -->
                <nav id="nav" class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Navbar Header Starts -->
                    <div class="navbar-header">
                        <!-- Collapse Button Menu Mobile -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Navegação</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        <!-- Collapse Button Menu Mobile Fim -->
                            <!-- Logo  -->
                            <a href="/inicio" class="navbar-brand">
                                <img src="../images/fav/logo.png" alt="ACClinic - Agendamentos de Consultas Clinicas e Exames" class="imgLogo">
                            </a>
                        <!-- Logo Fim -->
                    </div>
                    <!-- Menu Infor Fim -->
                        <!-- Navbar Header Ends -->
                        <!-- Navbar Collapse Starts -->
                            <div class="navbar-collapse collapse">                  
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a href="/inicio"> <i class="fa fa-home" aria-hidden="true"></i> Início</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Institucional <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="/pagina/institucional">Quem Somos</a>
                                            </li>
                                            <li>
                                                <a href="/pagina/equipe"> 
                                                Equipe</a>
                                            </li>
                                            <li>
                                                <a href="/pagina/medicos">
                                                Médicos</a>
                                            </li>
                                            <li>
                                                <a href="/pagina/unidades">Unidades</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/pagina/convenios">Convênios</a>
                                    </li>       
                                    <li>
                                        <a href="/pagina/contato"><i class="fa fa-comments"> </i> Fale Conosco</a>
                                    </li>
                                    <li class="active">
                                        <a href="/areaCliente" >
                                            <i class="fa fa-sign-in"></i>
                                              Login 
                                            <i class="fa fa-user"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        <!-- Navbar Collapse Ends -->
                    </div>
        </nav>
            <!-- Navbar Menu Fim -->
            </div>
        <!-- Conteudo Inicial Fim -->
        </header>
    <!-- Topo Fim -->
    @endsection
@section('ConteudoPrincipal')
<!-- Banner Cliente -->
        <div class="main-banner paginaLogin">
            <div class="container">
                <h2><span>Login / Entrar </span></h2>
            </div>
        </div>
        <div class="breadcrumb">
            <div class="container">
                <ul class="list-unstyled list-inline">
                    <li>
                        <a href="/inicio">Inicio</a>
                    </li>
                    <li class="active">Login - Usuário</li>
                </ul>
            </div>
        </div>
<!-- Banner Cliente Fim-->
 <div class="container-fluid form_user">
    <div class="col-lg-1">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-6 col-xs-12">
            <br>
                <fieldset>
                        <legend>::Login::</legend>
                    <form id="formLoginUser" method="POST" action="{{ route('login') }}">
                        @csrf
                    
                        <div class="form-group row">
                        <label for="email" class="col-sm-12 col-form-label text-md-right">
                            {{ __('E-Mail @') }}
                        </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="::Email do Usuario::" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>
                                            {{ $errors->first('email') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-12 col-sm-12 col-xs-12 col-form-label text-md-right" placehold="teste">{{ __('Senha') }}</label>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="::Senha do Usuario::" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Lembrar minha senha!') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ENTRAR') }}
                                </button>
                                <a class="btn btn-success" href="{{ route('register') }}">
                                    CADASTRA-SE
                                </a>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu sua Senha?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </fieldset>
                <a href="/admin/login" target="_blank"> Area Administrativa. </a>
        </div>
    </div>
</div>
@endsection