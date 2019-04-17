@extends('layouts.app')

@section('content')

<div id="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
                	<div class="row">
                    @if(session('fail'))
								        <div class="alert alert-danger">
									      <p>{{session('fail')}}</p>
					              </div>
                    @else
                      @foreach($planos as $plano)
                			<div class="col-sm-3 folha">
                				<center><p class="titulo">{{ $plano->software }}</p></center>
                				<hr class='separador'>
                				@if($plano->nivel == 1)
                					<p><strong>Educação Infantil</strong><br>
                					{{ $plano->campoexperiencia->descricao}}</p>
                				@elseif($plano->nivel == 2)
                					<p><strong>Ensino Fundamental</strong><br>
                					{{ $plano->componentecurricular->descricao}} - {{ $plano->areatematica->descricao}}</p>
                				@endif
                				<p class="autores">Autor: <strong>{{ $plano->autores }}</strong></p>
                				<a href="{{ route('/plano/show', ['id' => $plano->id])}}">Ver mais detalhes</a> ::
                				<a href="{{ route('/download/planos', ['file' => $plano->arquivo])}}" target="_new">Download</a>
                			</div>
                			@endforeach
                	</div>
                  {{ $planos->links() }}
                  @endif
        </div>
    </div>
</div>
@endsection
