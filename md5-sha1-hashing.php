
<?php include('header.php');
	  include('left_sidebar.php');
?>
<div class="span7">
<div class="dropdowns">
<div class="block">
<h1 class="block-header service-header">MD5/SHA-1 Hashing</h1>
<div class="block-wrap">
<img class="service-thumb" src="static/img/hash_large.png"/>
MD5/SHA-1 Online Generator generates the hash of the string you input.
<div class="clearfix"></div>
<div class="form-area thumbnail">
<table class="table">
<tbody>
<tr>
<td width="20%">String</td>
<td><input type="text" id="input-string" class="input-xxlarge in-table"></td>
</tr>
<tr>
<td>Type</td>
<td>
<button onclick="md()";" class="btn btn-medium">MD5</button>
<button onclick="sha()"; class="btn btn-medium">SHA-1</button>
</td>
</tr>
<tr>
<td>Hash</td>
<td><input type="text" id="hash-string" class="input-xxlarge in-table"></td>
</tr>
</tbody>
</table>
</div><div class="clearfix"></div>
</div>
</div>
</div>
<?php
		include('right_sidebar.php');
		include('footer.php');
?>`