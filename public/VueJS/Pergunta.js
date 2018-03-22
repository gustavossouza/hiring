Vue.component('app-perguntas', {
 data:function(){
  return { info: [] };
 },
 ready: function(){
  this.$http.get("/Perguntas/askstories").then(function(dados){
   this.info = dados.data;
  });
 },
 template: '<tr v-for="item in info"><td>{{item.id}}</td><td><b>{{item.by}}</b></td><td>{{item.title}}</td><td>{{item.text}}</td><td>{{item.descendants}}</td><td>{{item.score}}</td><td>{{item.time}}</td><td>{{item.type}}</td></tr>'
});

new Vue({
 el:'body'
});