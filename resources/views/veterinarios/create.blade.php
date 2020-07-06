@extends('default', ['titulo' => 'Cadastrar Veterinário'])

@section('content')
    <form action="{{ route('veterinarios.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label class="font-weight-bold" for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="">
        </div>

        <div class="row">
            <div class="col-sm-7">
                <div class="form-group">
                    <label class="font-weight-bold" for="crmv">CRMV</label>
                    <input type="text" class="form-control" id="crmv" name="crmv" value="">
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label class="font-weight-bold" for="especialidade">Especialidade</label>
                    <select class="form-control" name="especialidades" id="especialidades">
                        @foreach( $especialidades as $esp )
                            <option value="{{ $esp['id'] }}"><p> {{ $esp['nome']}} </p></option>
                            @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-4">
                <a  href="{{ route('veterinarios.index') }}" class="btn btn-danger btn-lg w-100">Cancelar / Voltar</a>
            </div>
            <div class="col-sm-8">
                <button type="submit" class="btn btn-primary btn-lg w-100">Confirmar / Salvar</button>
            </div>
        </div>
    </form>
@endsection