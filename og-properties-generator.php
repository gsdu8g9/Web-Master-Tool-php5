
<?php include('header.php');
	  include('left_sidebar.php');
?>
<div class="span7">
<div class="dropdowns">
<div class="block">
<h1 class="block-header service-header">Og Properties Generator</h1>
<div class="block-wrap">
<img class="service-thumb" src="static/img/ogmeta_large.png"/>
The Open Graph protocol enables any web page to become a rich object in a social graph.
For instance, this is used on Facebook to allow any web page to have the same functionality as any other object on Facebook.
Use this online Og Meta Properties Generator to create well formated tags for your website. Find <a href="http://ogp.me/" rel="nofollow">here</a> more information.
<div class="clearfix"></div>

<div class="form-area thumbnail">
<div class="error alert alert-error"></div>
<form method="post" id="ogmeta_form">
<table class="table table-striped table-condensed" id="ogmeta_table">
<thead>
<tr>
<th width="35%">Property</th>
<th>Content</th>
</tr>
</thead>
<tbody id="mainFrame">
<tr>
<td>
<input type="text" name="property[]" placeholder="property" class="input-medium"/>
</td>
<td>
<input type="text" name="content[]" placeholder="content" style="width:95%"/>
</td>
</tr>
</tbody>
</table>
<button id="add" onclick="javascript:addNew();" class="btn btn-large btn-success" type="button">Add+</button>
<button id="generate" onclick="javascript:ogpropertiesgenerator();" class="btn btn-large btn-primary" type="button">Generate</button>
<button id="resetform" onclick="javascript:re();" class="btn btn-large" type="button">Reset</button>
</form>
<br/>
<textarea id="result" rows="10" onclick="this.focus();this.select()" readonly="readonly"></textarea>
</div><div class="clearfix"></div>
</div>
</div>
</div>

<?php
		include('right_sidebar.php');
		include('footer.php');
?>`