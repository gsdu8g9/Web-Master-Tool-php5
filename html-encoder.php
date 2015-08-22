<?php include('header.php');
	  include('left_sidebar.php');
?>
<div class="span7">
<div class="dropdowns">
<div class="block">
<h1 class="block-header service-header">HTML Encoder</h1>
<div class="block-wrap">
<img class="service-thumb" src="static/img/encoder_large.png"/>
Sometimes webmasters need to hide some text from search engines.
This online html encoder converts your text into Unicode or HexHTML string
which will be executed by browser on page load.
<div class="clearfix"></div>

<div class="form-area thumbnail">
<div class="control-group">
<label for="source" class="control-label">Text</label>
<div class="controls">
<textarea id="source" name="text" rows="5" class="input-block-level"></textarea>
<button onclick="encode()" class="btn btn-large btn-primary">Encode</button>
</div>
</div>
<div id="result" style="display:none;">
<div class="control-group">
<label for="for_website" class="control-label">Unicode</label>
<div class="controls">
<textarea id="unicode" name="text" rows="5" class="input-block-level" onclick="this.focus();this.select()" readonly="readonly">
</textarea>
</div>
</div>
<div class="control-group">
<label for="for_forum" class="control-label">Hex</label>
<div class="controls">
<textarea id="hex" name="text" rows="5" class="input-block-level" onclick="this.focus();this.select()" readonly="readonly">
</textarea>
</div>
</div>
</div>
</form>
</div><div class="clearfix"></div>
</div>
</div>
</div>
<?php
		include('right_sidebar.php');
		include('footer.php');
?>`