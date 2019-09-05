@extends('adminlte::page')
@include('includes.includes')

@section('title', 'Compra')

@section('content_header')
<h1 class="title-pg">{{$titulo}}</h1>

<ol class="breadcrumb">
    <li><a href="">Home</a></li>
    <li><a href="">Cadastro</a></li>
    <li><a href="">Compra</a></li>
</ol>
@stop
@section('content')
<div class="box">
    <div class="box-body">
        @include('includes.alerts')
        <a href="{{route('compra.create')}}" class="btn btn-primary btn-add">
            <span class="fas fa-plus"></span>
            Cadastrar
        </a>
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>Cliente</th>
                <th>Dt Venda</th>
                <th>Qtde Parcelas</th>
                <th>Valor total</th>
                <th>Empresa</th>
                <th>Dt Criação</th>
                <th>Dt Atualização</th>
                <th width="105px">Ações</th>
            </tr>
            @foreach($compras as $compra)
            <tr>
                <td>{{$compra->pessoa->nome}}</td>
                
                <td>{{date( 'd/m/Y' , strtotime($compra->data_venda))}}</td>

                <td>{{$compra->qtde_parcelas}}</td>

                <td>{{$compra->valor_total}}</td>

                <td>{{$compra->empresa->razao_social}}</td>

                <td>{{date( 'd/m/Y - H:m:s' , strtotime($compra->created_at))}}</td>
                <td>{{date( 'd/m/Y - H:m:s' , strtotime($compra->updated_at))}}</td>

                <td>
                    <div class="btn-toolbar justify-content-between" role="toolbar">
                        <div class="btn-group" role="group">
                            <a href="{{route('compra.edit',$compra->id)}}">
                                <button type="button" class="edit btn btn-primary ">
                                    <span class="far fa-edit"></span>
                                </button>
                            </a>
                            <a href="{{route('compra.show',$compra->id)}}">
                                <button type="button" class="delete btn btn-primary ">
                                    <span class="fas fa-eye"></span>
                                </button>
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $compras->links()}}
    </div>
</div>

@endsection

