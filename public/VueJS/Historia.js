new Vue({
  el: '.melhoresStories',
  data: {
    info: []
  },
  ready: function(){
  	this.teste();
  },
  methods: {
  	teste: function(){
  		this.$http.get("/Historia/bestseries").then(function(dados){
 				this.info = dados.data;
  		});
  	}
  }
});

// --