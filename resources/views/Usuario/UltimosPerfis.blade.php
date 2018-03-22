@extends('Shared._Layout')
@section('titulo','Atualizações')
@section('css')



@stop

@section('breadcrumbs')
<ol class="breadcrumb">
 <li class="breadcrumb-item">
   <a href="index.html">Usuário</a>
 </li>
 <li class="breadcrumb-item active">Últimos atualizações</li>
</ol>

@stop


@section('conteudo')
 <div class="table-responsive">
  <table class="table table-bordered table-hover">
   <tr>
    <th>Username</th>
    <th width="50%">Sobre</th>
    <th>Data criação</th>
    <th>Karma</th>
   </tr>
   <tr is="app-atualizacoes">
   </tr>
  </table>
 </div>
@stop


@section('scripts')
 <script type="text/javascript" src="{!! asset('/VueJS/Usuario.js') !!}"></script>
@stop