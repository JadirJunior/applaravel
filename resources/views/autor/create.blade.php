@extends('layouts.app')
@section('content')
<div>
    <div class="app-title">
        <div>
            <h1><i class="bi bi-ui-checks"></i>Cadastro de Autor</h1>
            <p>Cadastro de autor</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul>
    </div>

    <div class="tile">
        <div class="tile-body">

            <form action="{{ route('autor.store') }}" method="POST">
                @csrf
                @include('autor.__form')
                <button type="submit">Salvar Registro</button>
            </form>


        </div>
    </div>
</div>
@endsection