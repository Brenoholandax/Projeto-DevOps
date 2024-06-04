@extends('../main')
@section('title','Formulário')
@section('css','/css/formulario/style.css')
@section('content')
{{--<a class="btn btn-primary" href="/" target="_self">Home</a>--}}
<a class="btn btn-primary" href="/lista" target="_self">Lista</a>
<div class="card">

    <div class="card-header">
        Formulário
    </div>

    <div class="card-body">
        <form action="/formulario/registrar" method="POST" enctype="application/json">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nome">
            </div>
            <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="text" class="form-control" name="idade" id="idade">
            </div>
            <div class="mb-3">
                <label class="form-label" for="sexo">Sexo</label>
                <select class="form-select" name="sexo">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>

@if (session('dados'))
    @if(session('dados')['erro']!="")
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('dados')['erro']}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('dados')['sucesso']!="")
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('dados')['sucesso']}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endif

@endsection
