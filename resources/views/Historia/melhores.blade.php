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
 <div class="table-responsive" id="app-4">
  <table class="table table-bordered table-hover">
   <tr>
    <th>asdas</th>
    <th><%message%></th>
    <th>asdasd3</th>
    <th>asdasd4</th>
    <th>asdasd5</th>
   </tr>
  </table>
 </div>
@stop


@section('scripts')
 <script type="text/javascript" src="{!! asset('/VueJS/testes.js') !!}"></script>
@stop