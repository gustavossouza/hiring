Vue.component('app-melhores', {
 data:function(){
  return { info: [] };
 },
 ready: function(){
  this.$http.get("/Historia/bestseries").then(function(dados){
   this.info = dados.data;
  });
 },
 template: '<tr v-for="item in info"><td>{{item.id}}</td><td>{{item.by}}</td><td><a href="{{item.url}}">{{item.title}}</a></td><td>{{item.descendants}}</td><td>array</td><td>{{item.score}}</td><td>{{item.time}}</td><td>{{item.type}}</td></tr>'
});

Vue.component('app-tops', {
 data:function(){
  return { info: [] };
 },
 ready: function(){
  this.$http.get("/Historia/topseries").then(function(dados){
   this.info = dados.data;
  });
 },
 template: '<tr v-for="item in info"><td>{{item.id}}</td><td>{{item.by}}</td><td><a href="{{item.url}}">{{item.title}}</a></td><td>{{item.descendants}}</td><td>array</td><td>{{item.score}}</td><td>{{item.time}}</td><td>{{item.type}}</td></tr>'
});

Vue.component('app-novos', {
 data:function(){
  return { info: [] };
 },
 ready: function(){
  this.$http.get("/Historia/newseries").then(function(dados){
   this.info = dados.data;
  });
 },
 template: '<tr v-for="item in info"><td>{{item.id}}</td><td>{{item.by}}</td><td><a href="{{item.url}}">{{item.title}}</a></td><td>{{item.descendants}}</td><td>array</td><td>{{item.score}}</td><td>{{item.time}}</td><td>{{item.type}}</td></tr>'
});

Vue.component('app-mostra', {
 data:function(){
  return { info: [] };
 },
 ready: function(){
  this.$http.get("/Historia/showseries").then(function(dados){
   this.info = dados.data;
  });
 },
 template: '<tr v-for="item in info"><td>{{item.id}}</td><td>{{item.by}}</td><td><a href="{{item.url}}">{{item.title}}</a></td><td>{{item.descendants}}</td><td>array</td><td>{{item.score}}</td><td>{{item.time}}</td><td>{{item.type}}</td></tr>'
});

Vue.component('app-trabalho', {
 data:function(){
  return { info: [] };
 },
 ready: function(){
  this.$http.get("/Historia/jobseries").then(function(dados){
   this.info = dados.data;
  });
 },
 template: '<tr v-for="item in info"><td>{{item.id}}</td><td>{{item.by}}</td><td><a href="{{item.url}}">{{item.title}}</a></td><td>{{item.descendants}}</td><td>array</td><td>{{item.score}}</td><td>{{item.time}}</td><td>{{item.type}}</td></tr>'
});

new Vue({
 el:'body'
});