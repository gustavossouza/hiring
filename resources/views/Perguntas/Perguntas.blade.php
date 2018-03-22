@extends('Shared._Layout')
@section('titulo','Perguntas')
@section('css')



@stop

@section('breadcrumbs')
<ol class="breadcrumb">
 <li class="breadcrumb-item">
   <a href="index.html">Perguntas</a>
 </li>
 <li class="breadcrumb-item active">Lista</li>
</ol>

@stop


@section('conteudo')
 <div class="table-responsive">
  <table class="table table-bordered table-hover">
   <tr>
    <th>Código</th>
   	<th>Por</th>
    <th width="30%">Titulo</th>
   	<th width="10%">Texto</th>
    <th>Descendentes</th>
    <th>Pontos</th>
    <th>Tempo</th>
    <th>Tipo</th>
   </tr>
   <tr is="app-perguntas">
   </tr>
  </table>
 </div>
@stop


@section('scripts')
 <script type="text/javascript" src="{!! asset('/VueJS/Pergunta.js') !!}"></script>
@stop