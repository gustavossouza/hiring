@extends('Shared._Layout')
@section('titulo','Melhores Historias')
@section('css')



@stop

@section('breadcrumbs')
<ol class="breadcrumb">
 <li class="breadcrumb-item">
   <a href="index.html">História</a>
 </li>
 <li class="breadcrumb-item active">Melhores</li>
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
    <th>Crianças</th>
    <th>Pontos</th>
    <th>Tempo</th>
    <th>Tipo</th>
   </tr>
   <tr>
    <td>16628347</td>
    <td>coloneltcb</td>
    <td><a href="https://www.bloomberg.com/news/articles/2018-03-20/ftc-said-to-be-probing-facebook-for-use-of-personal-data">FTC Probing Facebook for Use of Personal Data, Source Says</a></td>
    <td>368</td>
    <td>array</td>
    <td>1103</td>
    <td>1521552658</td>
    <td>story</td>
   </tr>
  </table>
 </div>
@stop


@section('scripts')
 <script type="text/javascript" src="{!! asset('/VueJS/testes.js') !!}"></script>
@stop