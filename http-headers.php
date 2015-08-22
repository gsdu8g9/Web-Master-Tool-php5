<?php include('header.php');
	  include('left_sidebar.php');
?>

<div class="span7">
<div class="dropdowns">
<div class="block">
<h1 class="block-header service-header">HTTP Headers</h1>
<div class="block-wrap">
<img class="service-thumb" src="static/img/headers_large.png"/>
This tools allow you to inspect the HTTP headers that the web server returns when requesting a domain.
<div class="clearfix"></div>
<div class="form-area thumbnail">
<div class="error alert alert-error"></div>
<form method="post" id="main">
<div class="control-group">
<label for="domain" class="control-label"><strong>Enter Domain</strong></label>
<div class="controls">
<input type="text" id="domain" name="domain" placeholder="http://google.com" value="" class="input-block-level"/>
</div>
</div>
<div class="control-group">
<label for="domain" class="control-label"><strong>User-Agent</strong></label>
<div class="controls">
<select name="user-agent" id="user-agent">
<option value="Google Bot">Google Bot</option>
<option value="Google Mobile">Google Mobile</option>
<option value="Yahoo Slurp">Yahoo Slurp</option>
<option value="MSN Bot">MSN Bot</option>
<option value="Alexa Bot">Alexa Bot</option>
<option value="My User Agent">My User Agent</option>
<option value="Empty">Empty</option>
</select>
</div>
</div>
<div class="control-group">
<div class="controls">
<strong>HTTP version:</strong>
<label class="radio">
<input type="radio"  id="HTTP" value="1.1" checked>
HTTP/1.1
</label>
<label class="radio">
<input type="radio"  id="HTTP" value="1.0">
HTTP/1.0
</label>
</div>
</div>
<div class="control-group">
<div class="controls">
<strong>Request type:</strong>
<label class="radio">
<input type="radio" id="request" value="GET" checked>
GET
</label>
<label class="radio">
<input type="radio" id="request" value="POST">
POST
</label>
</div>
</div>
<div class="control-group">
<div class="controls">
<label class="checkbox inline">
<input type="checkbox" name="rawhtml"> Raw HTML view
</label>
<label class="checkbox inline">
<input type="checkbox" name="gzip"> Accept-Encoding: gzip
</label>
</div>
</div>
<button type="submit" id="go" onclick="http_header()" class="btn btn-large btn-primary">Submit</button>
</form>
</div><div class="clearfix"></div>
<div id="ajax_response"></div>
<textarea id="result" rows="10" onclick="this.focus();this.select()" readonly="readonly"></textarea>
</div>
</div>
</div>
<?php
		include('right_sidebar.php');
		include('footer.php');
?>`
