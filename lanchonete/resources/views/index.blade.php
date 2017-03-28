@extends('app') <!-- importando o template  -->

@section('content')
  <div class="container">
    <h1>Listagens de Lanches</h1>

    <table class="table table-bordered">
      <thead>
        <tr>
          <td>Id</td>
          <td>Nome</td>
          <td>Preço</td>
          <td>Tipo</td>
          <td>Quantidade</td>
          <td>Descriçao</td>
          <td>Ação</td>
        </tr>
      </thead>

      <tbody>
        @foreach ($lanches as $lanche)
          <tr>
              <td>{{ $lanche-> id}}</td>
              <td>{{ $lanche-> nome}}</td>
              <td>{{ $lanche-> preco}}</td>
              <td>{{ $lanche-> tipo}}</td>
              <td>{{ $lanche-> quantidade}}</td>
              <td>{{ $lanche-> descricao}}</td>
              <td>
                  {{Form::open(['url' => '/' . $lanche->id, 'method' => 'delete', 'class' => 'form-delete'])}}
                    {{Form::submit('Excluir', ['class' => 'btn btn-danger'])}}
                  {{Form::close()}}
              </td>
          </tr>
        @endforeach
      </tbody>

    </table>
  </div>
@endsection
