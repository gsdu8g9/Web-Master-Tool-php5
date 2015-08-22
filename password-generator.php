
<?php include('header.php');
	  include('left_sidebar.php');
?>
<div class="span7">
<div class="dropdowns">
<div class="block">
<h1 class="block-header service-header">Password Generator</h1>
<div class="block-wrap">
<img class="service-thumb" src="static/img/password_large.png"/>
The Online Password Generator allows you to create random passwords that are highly secure and extremely difficult to crack or guess due to an optional combination of different letters, numbers and symbols.
<div class="clearfix"></div>
<script>
var passopts = {
	volves: 'aeiou',
	hyphen: '-',
	consonants: 'bcdfghklmprstvxz',
}
</script>
<div class="form-area thumbnail">
<div class="error alert alert-error"></div>
<form method="post">
<div class="input-append">
<input type="text" style="text-align:center;" id="password" onclick="this.focus();this.select()">
<input type="button" class="btn" id="regen" value="Generate">
</div>
<div class="well">
<table>
<tbody><tr>
<td width="200">
<label title="abcdefghijklmnopqrstuvwxyz" class="checkbox">
<input type="checkbox" id="use_letters" value="abcdefghijklmnopqrstuvwxyz" checked="checked"> Letters</label>
<label title="1234567890" class="checkbox">
<input type="checkbox" id="use_numbers" value="1234567890" checked="checked"> Numbers</label>
<label title="!@#$%^*(){}[]?=" class="checkbox">
<input type="checkbox" id="use_specs" value="!@#$%^*(){}[]?="> Symbols</label>
<label class="checkbox"><input type="checkbox" id="use_specified" value="1"> Special chars</label>
<span class="help-inline">
<input type="text" id="specified_chars" value="&rarr;&larr;&copy;&reg;&trade;" disabled="disabled" class="input-mini">
</span>
</td>
<td>
<label class="checkbox"><input type="checkbox" id="use_pronounceable" value="1"> Pronounceable</label>
<label class="checkbox"><input type="checkbox" id="use_hyphens" value="1"> Separate each </label>
<input type="text" class="input-mini" id="hyphen_length" value="2" disabled="disabled"> symbols.
<label>Length: <input type="text" class="input-mini" id="password_length" value="8"></label>
</td>
</tr>
</tbody>
</table>
</div>
</form>
</div><div class="clearfix"></div>
</div>
</div>
</div>
<
<?php
		include('right_sidebar.php');
		include('footer.php');
?>`