@extends('adminlte::page')

@section('title', 'Busca de cliente')

@section('content_header')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <h1>Pesquisar Cliente</h1>
    <ol class="breadcrumb">
    <li><a href="{{ route('admin') }}">Dashbord</a></li>
    <li><a href="">Pesquisar Clientes</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
@include('includes.alerts')
            <form action="{{ route('search.client') }}" method="POST" class="form-inline">
                {!! csrf_field() !!}
                    <a href="" class="btn btn-primary"> <i class="fas fa-search"></i> Pesquisar</a>
                    <input type="text" name="id" placeholder="ID:" class="form-control">
                    <input type="text" name="nome" placeholder="Nome:" class="form-control">
                    <input type="date" name="nasc" class="form-control">
                    <input type="text" name="rg" placeholder="RG:" class="form-control">
                    <input type="text" name="cpf" placeholder="CPF: Sem pontos e traços" class="form-control">
                    <select name="genero" class="custom-control">
                                <option value="">-- SELECIONE --</option>
                                @foreach ($types as $key => $type)
                                    <option value="{{$key}}">{{$type}}</option>
                                @endforeach
                    </select>
                    <input type="text" name="cep" placeholder="CEP: _____-___" class="form-control">
            </form>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>RG</th>
                        <th>CPF</th>
                        <th>Genero</th>
                        <th>CEP</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($searchs as $search)
                    <tr>
                        <td>{{ $search->id }}</td>
                        <td>{{ $search->nome }}</td>
                        <td>{{ $search->nasc }}</td>
                        <td>{{ $search->rg }} </td>
                        <td>{{ $search->cpf}} </td>
                        <td></td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop