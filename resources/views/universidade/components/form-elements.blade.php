<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" id="" name="nome" maxlength="50" required value="{{ $faculdade->nome ?? '' }}" placeholder="insira o nome">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Sigla</label>
            <input type="text" class="form-control" id="" maxlength="5" name="sigla" value="{{ $faculdade->sigla ?? '' }}" placeholder="insira o sigla">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Orçamento</label>
            <input type="number" class="form-control" id="" name="orcamento" value="{{ $faculdade->orcamento ?? '' }}" placeholder="insira o orçamento">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Bloco</label>
            <select type="text" class="form-control" id="" name="bloco" value="{{ $faculdade->bloco ?? '' }}" placeholder="insira o bloco">
                <option value="">Selecione o Bloco</option>
                @foreach($salas as $sala)
                    <option value="{{$sala->id}}">{{$sala->nome_bloco}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>