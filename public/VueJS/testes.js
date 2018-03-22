new Vue({
  el: 'body',
  data: {
  },
  ready: function(){
  	this.teste();
  },
  methods: {
  	teste: function(){
  		this.$http.get("/Historia/newseries").then(function(dados){
 				console.log(dados.data);
  		});
  	}
  }
});