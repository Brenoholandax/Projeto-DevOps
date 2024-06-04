@extends('../main')
@section('title','Lista')
@section('content')
{{--<a class="btn btn-primary" href="/" target="_self">Home</a>--}}
<a class="btn btn-primary" href="/formulario" target="_self">Formulario</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col">Sexo</th>
        </tr>
        <tbody class="table-group-divider">
            @foreach ($json as $item)
                <tr>
                    <th scope="row">{{$item['id']}}</th>
                    <th>{{$item['nome']}}</th>
                    <th>{{$item['idade']}}</th>
                    <th>{{$item['sexo']}}</th>
                </tr>
            @endforeach
        </tbody>
    </thead>

</table>
@endsection
