<?php include('header.php');
	  include('left_sidebar.php');
?>

<div class="span7">
<div class="dropdowns">
<div class="block">
<h1 class="block-header service-header">Alexa Statistics</h1>
<div class="block-wrap">
<img class="service-thumb" src="static/img/alexa_large.png"/>
Alexa Internet, Inc. is a California-based subsidiary company of Amazon.com which provides commercial web traffic data.
As of 2013, Alexa provides traffic data, global rankings and other information on 30 million websites, and claims
that 6 million people visit its website monthly.
<div class="clearfix"></div>
<div class="form-area thumbnail">
<div class="error alert alert-error"></div>

<div class="control-group">
<label for="domain" class="control-label">Enter Domain</label>
<div class="controls">
<input type="text" id="domain" name="domain" placeholder="google.com" value="" class="input-block-level"/>
</div>
</div>


<button type="submit" id="go" onclick="pg_rank()" class="btn btn-large btn-primary">Submit</button>

</div><div class="clearfix"></div>
<div id="ajax_response"></div>
</div>
</div>
</div>
<?php
		include('right_sidebar.php');
		include('footer.php');
?>`
