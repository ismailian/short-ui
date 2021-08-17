const vue = new Vue({
	el:'#wp-main-container',
	data:{
	  search_input: "",
	  api_url: "http://link-shortener.rt/shorten",
	  message: null,
	  message_type: null,
	  response: null,
	  isloading: false,
	},
	methods:{
	  shorten(){
	    if (this.search_input.length == 0) {
	      return;
	    }
	    this.isloading = true;
	    axios({
	      url: this.api_url,
	      method: 'POST',
	      header: {
	        'Content-Type' : 'application/x-www-form-urlencoded',
	      },
	      data: `link=${this.search_input}`,
	    }).then(response => {
	      this.message_type = "success";
	      this.response = response.data;
	      this.message = "Your link has been shortened successfully!";
	      this.isloading = false;
	    }).catch(res => {
	      this.message_type = "danger";
	      this.message = "Ooops! something went wrong!";
	      this.isloading = false;
	    });
	  }
	}
});