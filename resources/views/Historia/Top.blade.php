@extends('Shared._Layout')
@section('titulo','Tops')
@section('css')



@stop

@section('breadcrumbs')
<ol class="breadcrumb">
 <li class="breadcrumb-item">
   <a href="index.html">História</a>
 </li>
 <li class="breadcrumb-item active">Tops</li>
</ol>

@stop


@section('conteudo')
 <div class="table-responsive">
  <table class="table table-bordered table-hover">
   <tr>
    <th>Código</th>
   	<th>Por:</th>
   	<th>Titulo:</th>
    <th>Descendentes</th>
    <th>Pontos</th>
    <th>Tempo</th>
    <th>Tipo</th>
   </tr>
   <tr is="app-tops">
   </tr>
  </table>
 </div>
@stop


@section('scripts')
 <script type="text/javascript" src="{!! asset('/VueJS/Historia.js') !!}"></script>
@stop