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
  <table class="table table-bordered table-hovero">
   <tr>
    <th>Código</th>
   	<th>Por:</th>
    <th>Titulo:</th>
   	<th>Texto:</th>
    <th>Descendentes</th>
    <th>Pontos</th>
    <th>Crianças</th>
    <th>Tempo</th>
    <th>Tipo</th>
   </tr>
   <tr>
   	<td>16649338</td>
   	<td>sir_brickalot</td>
    <td>Ask HN: Where to go after deleting Facebook?</td>
   	<td>Facebook for me is mainly a self updating address book. So is there any other recommended service that could possibly even import all or some of my FB data and is able to help keep in touch with my acquantances?"</td>
    <td>2</td>
    <td>4</td>
    <td>Array</td>
    <td>1521731874</td>
    <td>Story</td>
   </tr>
  </table>
 </div>
@stop


@section('scripts')



@stop