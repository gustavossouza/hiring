@extends('Shared._Layout')
@section('titulo','Melhores Historias')
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
  <table class="table table-bordered table-hovero">
   <tr>
    <th>Código</th>
   	<th>Por:</th>
   	<th>Titulo:</th>
    <th>Descendentes</th>
    <th>Crianças</th>
    <th>Pontos</th>
    <th>Tempo</th>
    <th>Tipo</th>
   </tr>
   <tr>
   	<td>16648270</td>
   	<td>rbanffy</td>
   	<td><a href="https://gizmodo.com/a-visiting-star-jostled-our-solar-system-70-000-years-a-1823954398" target="_blank">A Visiting Star Jostled Our Solar System 70,000 Years Ago</a></td>
    <td>18</td>
    <td>array</td>
    <td>71</td>
    <td>1521724098</td>
    <td>Story</td>
   </tr>
  </table>
 </div>
@stop


@section('scripts')
 <script type="text/javascript" src="{!! asset('/VueJS/Historia.js') !!}"></script>
@stop