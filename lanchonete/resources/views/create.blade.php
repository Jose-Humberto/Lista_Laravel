@extends('app') <!-- importando o template  -->

@section('content')
  <div class="container">
    <h1>Cadastro de Lanches</h1>

    @if($errors->any())
      <ul class="list-group">
          @foreach($errors->all() as $error)
            <li class="list-group-item list-group-item-warning">{{ $error }}</li>
          @endforeach
      </ul>
    @endif

    {!! Form::open(array('url' => '/', 'method' => 'post'))!!}

      {!! Form::label('nome', 'Nome:')!!}
      {!! Form::text('nome', null, array('class' => 'form-control', 'placeholder' => 'Nome do lanche'))!!}

      {!! Form::label('preco', 'Preço:')!!}
      {!! Form::text('preco', null, array('class' => 'form-control', 'placeholder' => 'preço do lanche'))!!}

      {!! Form::label('tipo', 'Tipo:')!!}
      {!! Form::text('tipo', null, array('class' => 'form-control', 'placeholder' => 'ex Salgado'))!!}
      <!-- {!! Form::select('size', ['Salgado' => 'Salgado', 'Doce' => 'Doce', 'Vitamina' => 'Vitamina', 'Suco' => 'Suco'])!!} -->

      {!! Form::label('quantidade', 'Quantidade:')!!}
      {!! Form::text('quantidade', null, array('class' => 'form-control', 'placeholder' => 'Quantidade do lanches'))!!}

      {!! Form::label('descricao', 'Descricao:')!!}
      {!! Form::textarea('descricao', null, array('class' => 'form-control', 'placeholder' => 'Descrição do lanche'))!!}

      {!! Form::submit('Cadastrar lanche!')!!}

    {!! Form::close() !!}
  </div>
@endsection
