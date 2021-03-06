@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('clientes') }}">Clientes</a></li>
                    <li class="active">Editar</li>
                </ol>

                <div class="panel-body">

                <form action="{{ route('clientes.atualizar', $cliente->id)}}" method="post">
                {{ csrf_field()}}
                <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="Nome completo do cliente" value="{{$cliente->nome}}">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" class="form-control" placeholder="Telefone de contato" value="{{$cliente->telefone}}">
                    </div>
                        <button class="btn btn-info">Atualizar</button>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    @if(Session::has('flash_message'))
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div align="center" class="alert {{ Session::get('flash_message')['class'] }}">
                        {{ Session::get('flash_message')['msg'] }}
                    </div>
                </div>
            </div>
        </div>

    @endif
</div>
@endsection