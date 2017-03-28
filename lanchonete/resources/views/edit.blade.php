@extends('app') <!-- importando o template  -->

@section('content')
  <div class="container">
    <h1>Edição de Lanches</h1>

    @if($errors->any())
      <ul class="list-group">
          @foreach($errors->all() as $error)
            <li class="list-group-item list-group-item-warning">{{ $error }}</li>
          @endforeach
      </ul>
    @endif

    {!! Form::open(array('url' => '/' . $lanche->id, 'method' => 'put'))!!}

      {!! Form::label('nome', 'Nome:')!!}
      {!! Form::text('nome', $lanche->nome, array('class' => 'form-control', 'placeholder' => 'Nome do lanche'))!!}

      {!! Form::label('preco', 'Preço:')!!}
      {!! Form::text('preco', $lanche->preco, array('class' => 'form-control', 'placeholder' => 'preço do lanche'))!!}

      {!! Form::label('tipo', 'Tipo:')!!}
      {!! Form::text('tipo', $lanche->tipo, array('class' => 'form-control', 'placeholder' => 'ex Salgado'))!!}
      <!-- {!! Form::select('size', ['Salgado' => 'Salgado', 'Doce' => 'Doce', 'Vitamina' => 'Vitamina', 'Suco' => 'Suco'])!!} -->

      {!! Form::label('quantidade', 'Quantidade:')!!}
      {!! Form::text('quantidade', $lanche->quantidade, array('class' => 'form-control', 'placeholder' => 'Quantidade do lanches'))!!}

      {!! Form::label('descricao', 'Descricao:')!!}
      {!! Form::textarea('descricao', $lanche->descricao, array('class' => 'form-control', 'placeholder' => 'Descrição do lanche'))!!}

      {!! Form::submit('Cadastrar lanche!')!!}

    {!! Form::close() !!}
  </div>
@endsection
