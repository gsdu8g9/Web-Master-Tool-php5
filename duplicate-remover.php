
<?php include('header.php');
	  include('left_sidebar.php');
?>
<div class="span7">
<div class="dropdowns">
<div class="block">
<h1 class="block-header service-header">Duplicate Remover</h1>
<div class="block-wrap">
<img class="service-thumb" src="static/img/duplicate_large.png"/>
This free online Duplicate Remover is useful for webmasters to
remove repeating keywords from meta tags.
<div class="clearfix"></div>
<div class="form-area thumbnail">
<div class="control-group">
<label for="text" class="control-label">Input your text here &darr;</label>
<div class="controls">
<textarea id="text" rows="5" class="input-block-level"></textarea>
<p><strong>Options</strong></p>
<textarea id="separator" class="in-table input-mini"></textarea>
<span class="help-inline">Separator (leave empty if it's space)</span>
</div>
</div>
<br/>
<button onclick="rmdp()" class="btn btn-large btn-primary">Remove duplicates</button>
<br/>
<br/>
<div class="control-group">
<label for="result" class="control-label">Result</label>
<div class="controls">
<textarea id="res" name="text" rows="5" class="input-block-level"></textarea>
</div>
</div>
</div><div class="clearfix"></div>
</div>
</div>
</div>
<?php
		include('right_sidebar.php');
		include('footer.php');
?>`