window.stapix = {
	
	getUA : function(){
		
		for( var ua in YAHOO.env.ua ){
			var ver = YAHOO.env.ua[ ua ];

			if( ver != 0 ){

				return {
					ua : ua,
					ver : ua + "_" + ver
				};

			}

		}
	},
	
	setAgentClass : function(){
		var Body = document.getElementsByTagName( 'body' )[0],
			aUA = this.getUA();

		Body.className = 'is' + aUA.ua + ' ' + 'is' + aUA.ver;
	}
	
};

window.stapix.setAgentClass();