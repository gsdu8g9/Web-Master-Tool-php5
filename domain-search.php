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
<input type="text" id="domain" name="domain" placeholder="google" value="" class="input-block-level"/>
</div>
</div>
<div class="control-group">
								<label class="control-label" for="selectError"></label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen" >
									<option value="all">All</option>
									<option value=".com">.com</option>
									<option value=".in">.in</option>
									<option value=".co.in">.co.in</option>
									<option value=".net">.net</option>
									<option value=".org">.org</option>
									<option value=".biz">.biz</option>
									<option value=".info">.info</option>
									<option value=".mobi">.mobi</option>
									<option value=".ws">.ws</option>
									<option value=".co.id">.co.id</option>
									<option value=".or.id">.or.id</option>
									<option value=".go.id">.go.id</option>
									<option value=".sch.id">.sch.id</option>
									<option value=".ac.id">.ac.id</option>
									<option value=".mil.id">.mil.id</option>
									<option value=".web.id">.web.id</option>
									<option value=".tv">.tv</option>
									<option value=".cn">.cn</option>
									<option value=".cc">.cc</option>
								  </select>
								</div>
							  </div>

<button type="submit"  id="go" class="btn btn-large btn-primary" onclick="javascript:domain_search();">Submit</button>

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
