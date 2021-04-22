@extends('templates.template')

@section('content')
    <h2 class="text-center">Editar Faculdade</h2>
    <div class="container mt-4">

        <form method="post" action="{{ url('faculdade/' . $faculdade->id) }}">
            @csrf

            @include('universidade.components.form-elements')
                
            <button type="submit" class="btn btn-primary text-center w-100" style="font-size: larger" >Salvar</button>
        </form>
    </div>
@endsection
