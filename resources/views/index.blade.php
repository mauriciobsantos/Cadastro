@extends('layout.master', ["current"=> "home"]))

@section('body')
<div class="jumbotron bg-light border border-secondary ">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Produtos</h5>
                    <p class="card-text">Aqui vai ser cadastrado todos os Produtos
                        cadastre tambem a categoria
                    </p>
                    <a href="/produtos" class="btn btn-primary">Cadastre seus Produtos</a>
                </div>
            </div>
            <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Categoria</h5>
                        <p class="card-text">Aqui vai ser cadastrado todos os Produtos
                            cadastre tambem a categoria
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastre suas Categorias</a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection