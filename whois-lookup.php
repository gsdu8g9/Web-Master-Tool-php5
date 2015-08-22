<?php include('header.php');
	  include('left_sidebar.php');
?>

<div class="span7">
<div class="dropdowns">
<div class="block">
<h1 class="block-header service-header">WHOIS Service</h1>
<div class="block-wrap">
<img class="service-thumb" src="static/img/whois_large.png"/>

<strong>WHOIS</strong> (who is) is the aptly named Internet function that allows one to query
remote databases for domain registration information.
By performing a simple search, you can discover when and by whom a domain was registered,
contact information, and more. A search can also reveal the name or network mapped to a numerical IP address.
<div class="clearfix"></div>
<div class="form-area thumbnail">
<div class="error alert alert-error"></div>

<div class="control-group">
<label for="domain" class="control-label">Enter Domain</label>
<div class="controls">
<input type="text" id="domain" name="domain" placeholder="google.com" value="" class="input-block-level"/>
</div>
</div>

<button type="submit"  id="go" class="btn btn-large btn-primary" onclick="javascript:whois_lookup();">Submit</button>

</div><div class="clearfix"></div>
<div id="ajax_response" style="display: block;">
<pre></pre>
</div>

</div>
</div>
</div>
<?php
		include('right_sidebar.php');
		include('footer.php');
?>`
