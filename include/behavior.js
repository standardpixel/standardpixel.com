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
	},
	
	getAsyncMarkup : function( container, uri, params, scope ){
		
		if( !scope ){
			
			scope = this;
			
		}
		
		if( !params ){
			
			params = '';
			
		}
		
		container.innerHTML = 'Loading content...';
		
		YAHOO.util.Connect.asyncRequest(
			'POST', 
			uri,
			{
				success : function( response ){
					
					container.innerHTML = response.responseText;
					
				},
				failure:function(){
					
					container.innerHTML = '<a href="?showbasic">See more content</a>';
					
				},
				scope: scope
			}, 
			params
		);
		
	}
	
};

window.stapix.setAgentClass();