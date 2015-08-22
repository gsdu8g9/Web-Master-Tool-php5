function whois_lookup(){
	var domain = $("#domain").val();
	var url = "http://freedomainapi.com/?key=zavtsobdic&domain=yuvrajyadav025.com";
	$.post(url,{name:domain},function(data){
			alert(data)
			
	});
	alert(domain);
	
	
	
}
	
