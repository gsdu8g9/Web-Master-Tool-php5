
<?php include('header.php');
	  include('left_sidebar.php');
?>

<div class="span7">
<div class="dropdowns">
<div class="block">
<h1 class="block-header service-header">Meta Tags Generator</h1>
<div class="block-wrap">
<img class="service-thumb" src="static/img/metatags_large.png"/>
Meta Tags Generator creates a well formated meta tags for your website with the entered values.
<div class="clearfix"></div>
<script type="text/javascript">
$(document).ready(function(){	
	$("#generate").click(metataggenerator);
	$("#resetform").click(function(){
		$('#metatags_form')[0].reset();
		$('#result').val('').hide();
	});
});
</script>
<div class="form-area thumbnail">
<div class="error alert alert-error"></div>
<form method="post" id="metatags_form">
<table class="table table-striped table-condensed">
<thead>
<tr>
<th width="30%">Meta tag</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<label for="meta_keywords" class="control-label">Keywords:</label>
</td>
<td>
<input type="text" id="meta_keywords" name="keywords" value="" class="input-block-level"/>
</td>
</tr>
<tr>
<td>
<label for="meta_description" class="control-label">Description:</label>
</td>
<td>
<input type="text" id="meta_description" name="description" value="" class="input-block-level"/>
</td>
</tr>
<tr>
<td>
<label for="meta_author" class="control-label">Author:</label>
</td>
<td>
<input type="text" id="meta_author" name="author" value="" class="input-block-level"/>
</td>
</tr>
<tr>
<td>
<label for="meta_copyright" class="control-label">Copyright:</label>
</td>
<td>
<input type="text" id="meta_copyright" name="copyright" value="" class="input-block-level"/>
</td>
</tr>
<tr>
<td>
<label for="meta_robots" class="control-label">Robots:</label>
</td>
<td>
<select id="meta_robots" name="robots">
<option value=""></option>
<option value="index, follow">index, follow</option>
<option value="index, nofollow">index, nofollow</option>
<option value="noindex, follow">noindex, follow</option>
<option value="noindex, nofollow">noindex, nofollow</option>
</select>
</td>
</tr>
<tr>
<td>
<label for="meta_charset" class="control-label">Charset:</label>
</td>
<td>
<select id="meta_charset" name="charset">
<option value=""></option>
<option value="GB2312">GB2312</option>
<option value="US-ASCII">US-ASCII</option>
<option value="ISO-8859-1">ISO-8859-1</option>
<option value="ISO-8859-2">ISO-8859-2</option>
<option value="ISO-8859-3">ISO-8859-3</option>
<option value="ISO-8859-4">ISO-8859-4</option>
<option value="ISO-8859-5">ISO-8859-5</option>
<option value="ISO-8859-6">ISO-8859-6</option>
<option value="ISO-8859-7">ISO-8859-7</option>
<option value="ISO-8859-8">ISO-8859-8</option>
<option value="ISO-8859-9">ISO-8859-9</option>
<option value="ISO-2022-JP">ISO-2022-JP</option>
<option value="ISO-2022-JP-2">ISO-2022-JP-2</option>
<option value="ISO-2022-KR">ISO-2022-KR</option>
<option value="UTF-8">UTF-8</option>
</select>
</td>
</tr>
<tr>
<td>
<label for="meta_chache" class="control-label">Cache:</label>
</td>
<td>
<select id="meta_chache" name="cache">
<option value=""></option>
<option value="cache">cache</option>
<option value="no-cache">no-cache</option>
</select>
</td>
</tr>
<tr>
<td>
<label for="meta_language" class="control-label">Language:</label>
</td>
<td>
<select id="meta_language" name="language">
<option value=""></option>
<option value="en">English</option>
<option value="fr">French</option>
<option value="ch">Chinese</option>
<option value="de">German</option>
<option value="es">Spanish</option>
<option value="ja">Japanese</option>
<option value="ru">Russian</option>
</select>
</td>
</tr>
<tr>
<td>
<label for="meta_refresh" class="control-label">Refresh To:</label>
</td>
<td>
<input type="text" class="input-large" name="refresh">
<span class="help-inline">After&nbsp;</span>
<input type="text" class="input-mini" name="after">
<span class="help-inline">Secs</span>
</td>
</tr>
<tr>
<td>
<label for="meta_expires" class="control-label">Expires:</label>
</td>
<td>
<input type="text" id="meta_expires" name="expires" placeholder="Fri,11 Apr 2014 19:03:12 GMT" class="input-block-level"/>
</td>
</tr>
<tr>
<td>
<label for="meta_revisist" class="control-label">Revisit after:</label>
</td>
<td>
<input type="text" id="meta_revisist" class="input-mini" name="revisist">
<select name="period" class="input-small">
<option value="days">days</option>
<option value="month">month</option>
</select>
</td>
</tr>
</tbody>
</table>
<button id="generate" class="btn btn-large btn-primary" type="button">Generate</button>
<button id="resetform" class="btn btn-large" type="button">Reset</button>
</form>
<br/>
<textarea id="result" rows="10" onclick="this.focus();this.select()" readonly="readonly"></textarea>
</div><div class="clearfix"></div>
<div id="ajax_response"></div>
</div>
</div>
</div>
<?php
		include('right_sidebar.php');
		include('footer.php');
?>`