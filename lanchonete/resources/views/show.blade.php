@extends('app')

@section('content')
  <div class="container">
    <h3>Listagem pelo ID</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>Id</td>
          <td>Nome</td>
          <td>Preço</td>
          <td>Tipo</td>
          <td>Quantidade</td>
          <td>Descriçao</td>
        </tr>
      </thead>

      <tbody>
          <tr>
              <td>{{ $lanche-> id}}</td>
              <td>{{ $lanche-> nome}}</td>
              <td>{{ $lanche-> preco}}</td>
              <td>{{ $lanche-> tipo}}</td>
              <td>{{ $lanche-> quantidade}}</td>
              <td>{{ $lanche-> descricao}}</td>
          </tr>
      </tbody>

    </table>

  </div>
@endsection
