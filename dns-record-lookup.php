<?php include('header.php');
	  include('left_sidebar.php');
?>
<div class="span7">
<div class="dropdowns">
<div class="block">
<h1 class="block-header service-header">DNS Record Lookup</h1>
<div class="block-wrap">
<img class="service-thumb" src="static/img/dns_large.png"/>
Online DNS Record Lookup makes it easy to view all kinds of Domain Name System (DNS) records.
The DNS is crucial system for today's Internet.
Incorrectly set up DNS records cause many different problems to administrators of web servers and company infrastructure.
Online DNS Record Lookup can be used to check various DNS records on arbitrary DNS servers.
<div class="clearfix"></div>
<div class="form-area thumbnail">
<div class="error alert alert-error"></div>
<div class="control-group">
<label for="domain" class="control-label">Enter Domain</label>
<div class="controls">
<input type="text" id="domain" name="domain" placeholder="google.com" value="" class="input-block-level"/>
</div>
</div>
<button  id="go" class="btn btn-large btn-primary" onclick="javascript:dns_lookup();">Submit</button>
</div><div class="clearfix"></div>
<div id="ajax_response"></div>
</div>
</div>
</div>
<?php
		include('right_sidebar.php');
		include('footer.php');
?>`