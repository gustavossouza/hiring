@extends('Shared._Layout')
@section('titulo','Melhores Historias')
@section('css')



@stop

@section('breadcrumbs')
<ol class="breadcrumb">
 <li class="breadcrumb-item">
   <a href="index.html">História</a>
 </li>
 <li class="breadcrumb-item active">Novos</li>
</ol>

@stop


@section('conteudo')
 <div class="table-responsive">
  <table class="table table-bordered table-hovero">
   <tr>
    <th>Código</th>
   	<th>Por:</th>
   	<th>Titulo:</th>
    <th>Descendentes</th>
    <th>Pontos</th>
    <th>Tempo</th>
    <th>Tipo</th>
   </tr>
   <tr>
   	<td>16649135</td>
   	<td>saranshk</td>
   	<td><a href="https://www.wisdomgeek.com/web-development/how-react-relay-graphql-stick-together/" target="_blank">How React, Relay, and GraphQL Fit Together</a></td>
    <td>18</td>
    <td>1</td>
    <td>1521730322</td>
    <td>Story</td>
   </tr>
  </table>
 </div>
@stop


@section('scripts')



@stop