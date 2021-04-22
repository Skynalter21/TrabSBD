@extends('templates.template')

@section('content')

    <div class="container">
        <a href="{{url('faculdade/create')}}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Nova Faculdade</a>
        <div class="col-12 text-center">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Faculdade/Sigla</th>
                    <th scope="col">Numero Professores</th>
                    <th scope="col">Numero Alunos</th>
                    <th scope="col">Orçamento</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($faculdade as $fac)
                    <tr>
                        <th scope="row">{{$fac->id}}</th>
                        <td>{{$fac->nome}}/{{$fac->sigla}}</td>

                        @if($fac->numAlunos != null)
                            <td>a fazer</td>
                            @else
                            <td>Não há registros</td>
                        @endif

                        @if($fac->numProfessor != null)
                                <td>a fazer</td>
                            @else
                            <td>Não há registros</td>
                        @endif
                        @if($fac->orcamento != null)
                        <td>R$ {{$fac->orcamento}}</td>
                        @else
                            <td>Não há registros</td>
                        @endif
                        <td>
{{--                            <a title ="Detalhe do faculdade" href = ""><i class="fas fa-eye text-primary mr-1"></i></a>--}}
                            <a title ="Editar faculdade" href='{{ "faculdade/{$fac->id}/edit" }}'><i class="fas fa-edit text-info mr-1"></i></a>
                            <a href=""><i class="fas fa-trash text-danger mr-1"></i></a>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>

    </div>




@endsection
