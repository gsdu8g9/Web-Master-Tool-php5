
<?php include('header.php');
	  include('left_sidebar.php');
?>

<div class="span7">
<div class="dropdowns">
<div class="block">
<h1 class="block-header service-header">Social Analytics</h1>
<div class="block-wrap">
<img class="service-thumb" src="static/img/social_large.png"/>
You can use this free online tool to track like count, shares, tweets and more information about domain
provided by public API's.
<div class="clearfix"></div>
<div class="form-area thumbnail">
<div class="error alert alert-error"></div>
<form method="post" id="main">
<div class="control-group">
<label for="domain" class="control-label">Enter Domain</label>
<div class="controls">
<input type="text" id="domain" name="domain" placeholder="google.com" value="" class="input-block-level"/>
</div>
</div>

<button type="submit" id="go" onclick="social()" class="btn btn-large btn-primary">Submit</button>
</form>
</div><div class="clearfix"></div>
<div id="ajax_response"></div>
</div>
</div>
</div>

<?php
		include('right_sidebar.php');
		include('footer.php');
?>`