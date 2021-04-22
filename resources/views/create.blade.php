@extends('templates.template')

@section('content')
    <h2 class="text-center">@if(isset($faculdade))Cadastrar Faculdades @else Cadastrar Faculdades @endif</h2>
    <div class="container mt-4">

            <form method="post" action="{{url('faculdade')}}">



            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" class="form-control" id="" name="nome" required value="{{$faculdade->nome ?? ''}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sigla</label>
                        <input type="text" class="form-control" id="" name="sigla" value="{{$faculdade->sigla ?? ''}}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Orçamento</label>
                        <input type="text" class="form-control" id="" name="orcamento" value="{{$faculdade->orcamento ?? ''}}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bloco</label>
                        <select type="text" class="form-control" id="" name="bloco" value="{{$faculdade->bloco ?? ''}}" >
                            <option value="">Selecione o Bloco</option>
                            @foreach($salas as $sala)
                                <option value="{{$sala->id}}">{{$sala->nome_bloco}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary text-center" style="font-size: larger" >Salvar</button>
        </form>
    </div>
@endsection
