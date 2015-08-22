$(document).ready(function(){
	var date = new Date();
	now();
	$("#month").val(date.getMonth() + 1);
	$("#day").val(date.getDate());
	$("#year").val(date.getFullYear());
	$("#hour").val(date.getHours());
	$("#min").val(date.getMinutes());
	$("#sec").val(date.getSeconds());
	$("#rfc-2822").val(date.toGMTString());
	
	
});

function loadingLine(){
var i=0;
var interval=setTimeout(function(){i=++i%4;("#go").html("Loading"+Array(i+1).join("..")).show();},500);
return interval;
}
function whois_lookup(){
$('#go').attr("disabled",true);
var interval=loadingLine();
var query=$('#domain').val();
var url = "whois.php";
	$.post(url,{name:query},function(data){	
		$('#go').attr("disabled",false);
	$('#go').html("Submit").show();
	$("#ajax_response").html(data).show();
    });
}
function dns_lookup(){
$('#go').attr("disabled",true);
var interval=loadingLine();
var query=$('#domain').val();
var url = "action.php";
	$.post(url,{name:query,dash:2},function(data){			
	$('#go').attr("disabled",false);
	$('#go').html("Submit").show();
	$("#ajax_response").html(data).show();
    });
}
var clockActive=1;
var timerID=0;
function gettimestamp(){
return Math.round(new Date().getTime()/1000.0);
}
function now(){
$('#now').html(gettimestamp());
$('#unix_time').val(gettimestamp());
if(clockActive){
	timerID=setTimeout("now()",1000);
	}
}
function startClock(){clockActive=1;now();}
function stopClock(){clockActive=0;clearTimeout(timerID);}


function unixToHuman(){
var real=new Date($("#unix_time").val()*1000);
$('#gmt').html(real.toGMTString());
$('#timezone').html(real.toLocaleString());
$('#unix-human-div').show();
}



function humanToUnix(){
var month=parseInt($("#month").val()- 1)||0,
day=parseInt($("#day").val())||1,
year=parseInt($("#year").val())||2014,
hours=parseInt($("#hour").val())||0,
minutes=parseInt($("#min").val())||0,
seconds=parseInt($("#sec").val())||0;
var real=new Date(year,month,day,hours,minutes,seconds);
$('#epoch-timestamp').html(real.getTime()/1000.0);
$('#utc-date').html(real.toGMTString());
$('#human-unix-div').show();
}

function torfc(){
var real = $("#rfc-2822").val();
//var x = real.toGMTString();
//$('#rfc-timestamp').html(x);
$('#rfc-div').show();
}
function encode() {
	var source = $("#source").val();
	if(source.length == 0)
		return false;
	var unicode = Encoder.toUnicode(source);
	
	var hex = Encoder.toHexHTML(source);
	$("#unicode").val(
    "<script type=\"text/javascript\">//<![CDATA[\n" +
    "document.write(unescape('"+ unicode +"'));\n" +
    "//]]></script\>"
	);
	$("#hex").val(
    "<script type=\"text/javascript\">//<![CDATA[\n" +
    "document.write(unescape('"+ hex +"'));\n" +
    "//]]></script\>"
	);
	$("#result").slideDown();
}
var Encoder={toUnicode:function(source){var result='';for(i=0;i<source.length;i++){result+='&#'+ source.charCodeAt(i);}
return result;},toHexHTML:function(source){var hexhtml='';for(i=0;i<source.length;i++){if(source.charCodeAt(i).toString(16).toUpperCase().length<2){hexhtml+="&#x0"+ source.charCodeAt(i).toString(16).toUpperCase()+";";}else{hexhtml+="&#x"+ source.charCodeAt(i).toString(16).toUpperCase()+";";}}
return hexhtml;},}

function rmdp(){
var separator=$("#separator").val()||" ",
text=$("#text").val();
var url = "action.php";
if(text.length==0)
return false;
$.post(url,{str:text,x:separator,dash:6},function(data){
	$("#res").val(data);
});


}

function md(){
var str = $("#input-string").val();
var url = "action.php";
$.post(url,{str1:str,dash:1},function(data){
	$("#hash-string").val(data);
});

}

function sha(){
var str = $("#input-string").val();
var url = "action.php";
$.post(url,{str1:str,dash:3},function(data){
	$("#hash-string").val(data);
});

}
function addNew(){
		var str = "<tr><td><input type='text' name='property[]' placeholder='property' class='input-medium'/></td><td><input type='text' name='content[]' placeholder='content' style='width:95%'/></td></tr>";
		$("#mainFrame").append(str);


}
function re()
{
var str = "<tr><td><input type='text' name='property[]' placeholder='property' class='input-medium'/></td><td><input type='text' name='content[]' placeholder='content' style='width:95%'/></td></tr>";
$("#mainFrame").html(str).show();
}



function reverse_ip_lookup(){

$('#go').attr("disabled",true);
var interval=loadingLine();
var query=$('#domain').val();
var url = "action.php";
	$.post(url,{name:query,dash:4},function(data){	
		$('#go').attr("disabled",false);
	$('#go').html("Submit").show();
	$("#ajax_response").html(data).show();
    });
}
function domain_search(){

$('#go').attr("disabled",true);
var interval=loadingLine();
var query=$('#domain').val();
var saf=$('#selectError').val();
var url = "action.php";
	$.post(url,{name:query,suf:saf,dash:5},function(data){	
		$('#go').attr("disabled",false);
	$('#go').html("Submit").show();
	$("#ajax_response").html(data).show();
    });
}
function ogpropertiesgenerator(){
var og=[];
var content=$('input[name="content[]"]');
var i=0;
$('input[name="property[]"]').each(function(){
var property=$(this).val();
var c=$(content.get(i)).val();
og.push(ogproperty(property,c));
i++;
});
var meta=og.join("");
if(meta.length>0)
$('#result').val(meta).show();
function ogproperty(property,content)
{
return property.length>0?'<meta property="og:'+ property+'" content="'+ content+'" />\n':null;}}

function pg_rank(){
$('#go').attr("disabled",true);
var interval=loadingLine();

	var name = $("#domain").val();
	var url = "action.php";
	$.post(url,{domain:name,dash:7},function(data){
	$('#go').attr("disabled",false);
	$('#go').html("Submit").show();
	$("#ajax_response").html(data).show();
	
	
	})
}
function http_header(){
$('#go').attr("disabled",true);
var interval=loadingLine();
var name = $("#domain").val();
var users =$("#user-agent").val();
var https =$("#HTTP").val();
var reqs =$("#request").val();
var url = "action.php";
	$.post(url,{domain:name,user:users,http:https,req:reqs,dash:8},function(data){
	data = data.split("///");
	$('#go').attr("disabled",false);
	$('#go').html("Submit").show();
	$("#ajax_response").html(data[0]).show();
	alert(data[1]);
	//$("#row").val(data[1]);
	
	
	})
	
	


}


function social(){
$('#go').attr("disabled",true);
var interval=loadingLine();
var name = $("#domain").val();
var url = "action.php";
	$.post(url,{domain:name,dash:9},function(data){
	
	$('#go').attr("disabled",false);
	$('#go').html("Submit").show();
	$("#ajax_response").html(data).show();
	
	
	
	})
	
}

