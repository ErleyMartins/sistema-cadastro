@extends('adminlte::page')

@section('title', 'Cadastro de cliente')

@section('content_header')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <h1>Cadastrar Cliente</h1>
    <ol class="breadcrumb">
    <li><a href="{{ route('admin') }}">Dashbord</a></li>
    <li><a href="">Cadastrar Cliente</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
        </div>
        <div class="box-body">
            @include('includes.alerts')
            <form action="{{ route('create.client.store') }}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="name">Nome Completo:</label>
                            <input type="text" name="nome" placeholder="Nome Completo:" class="form-control">
                            
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="nasc">Data de Nascimento:</label>
                            <input type="date" name="nasc" placeholder="Data de Nascimento" class="form-control">
                            
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="rg">RG:</label>
                            <input type="text" name="rg" placeholder="RG:" class="form-control">
                            
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="cpf">CPF:</label>
                            <input type="text" name="cpf" placeholder="Sem pontos e traço" class="form-control">
                            
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-1 mb-3">
                            <label for="genero">Genero:</label>
                            <select name="genero" class="custom-control">
                                <option value="">-- SELECIONE --</option>
                                @foreach ($typeg as $key => $type)
                                    <option value="{{ $key }}">{{ $type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <input type="hidden" name="">
                        </div>
                        <div class="col-md-1 mb-3">
                            <label for="logradouro">Logradouro:</label>
                            <select name="logradouro" class="custom-control">
                                <option value="">-- SELECIONE --</option>
                                @foreach ($types as $key => $type)
                                    <option value="{{ $key }}">{{ $type }}</option>
                                @endforeach
                            </select>
                            &nbsp;
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="endereco">Endereço:</label>
                            <input type="text" name="endereco" placeholder="Endereço" class="form-control">
                            &nbsp;
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="bairro">Bairro:</label>
                            <input type="text" name="bairro" placeholder="Bairro:" class="form-control">
                            &nbsp;
                        </div>
                        <div class="col-md-1 mb-3">
                            <label for="cep">CEP:</label>
                            <input type="text" name="cep" placeholder="_____-___" class="form-control">
                            &nbsp;
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="complemento">Complemento:</label>
                            <input type="text" name="complemento" placeholder="Complemento:" class="form-control">
                            &nbsp;
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="email">E-mail:</label>
                            <input type="text" name="email" placeholder="E-mail:" class="form-control">
                            &nbsp;                            
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="telefone">Telefone:</label>
                            <input type="text" name="telefone" placeholder="Telefone:" class="form-control">
                            &nbsp;
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="celular">Celular:</label>
                            <input type="text" name="celular" placeholder="Celular:" class="form-control">
                            &nbsp;
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="image">Foto:</label>
                            <input type="file" name="image"  class="form-control-file">
                            &nbsp;
                        </div>
                    </div>
                    <div class="form-row">
                    <button type="submit" class="btn btn-success"><i class="fas fa-user-plus"></i> Cadastrar</button>
                    <a href="{{ route('admin') }}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
                    </div>
                </form>
        </div>
    </div>
@stop