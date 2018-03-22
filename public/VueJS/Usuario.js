Vue.component('app-atualizacoes', {
 data:function(){
  return { info: [] };
 },
 ready: function(){
  this.$http.get("/Usuario/atualizacoesPerfil").then(function(dados){
   this.info = dados.data;
  });
 },
 template: '<tr v-for="item in info"><td><b>{{item.id}}</b></td><td>{{item.about}}</td><td>{{item.created}}</td><td>{{item.karma}}</td></tr>'
});

new Vue({
 el:'body'
});