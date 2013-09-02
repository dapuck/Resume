dynamicPage = {
	
	base: '',
	
	current: '',
	
	initialize: function(base, current) {
		this.base = base;
		this.current = current;
		if(Modernizr.history) {
			//initalize the history state
			history.replaceState({id:this.current},'',location.href);
			
			//observe links with class "rewrite"
			$$('a.rewrite').invoke('observe','click', function(event){
				event.stop();
				var a = event.element();
				var id = a.href.replace(this.base,"");
				$$('a.rewrite').invoke('removeClassName','active');
				a.addClassName('active');
				this.loadPage(id);
				history.pushState({id:id},'',a.href);
				$('qrcode').src = this.getQRURL();
				return false;
			}.bind(this));
			
			window.onpopstate = function(stack){
				var state = stack.state;
				if(state && state.id){
					this.loadPage(state.id);
				} else {
					//this.loadPage('Education');
				}
				$('qrcode').src = this.getQRURL();
			}.bind(this);
		}
		
		$('qrcode').src = this.getQRURL();
	},
	
	loadPage: function(id) {
		if(!id || id.blank() || id === this.current) return;
		$(this.current).fade();
		$(id).appear();
		this.current = id;
	},
	
	getQRURL: function(){
		//alert(document.URL);
		var qrsrc = "http://qrcode.kaywa.com/img.php?s=5";
		qrsrc += "&d=" + encodeURI(document.URL.replace(/#.*/,''));
		return qrsrc;
	}
};
