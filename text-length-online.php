<?php include('header.php');
	  include('left_sidebar.php');
?>
<div class="span7">
<div class="dropdowns">
<div class="block">
<h1 class="block-header service-header">Text Length Online</h1>
<div class="block-wrap">
<img class="service-thumb" src="static/img/text_large.png"/>
Enter some text into the text area above and the table box will let you know how many characters, lines and word count are in the string.
<div class="clearfix"></div>
<script type="text/javascript">
$(document).ready(function(){
	$('#text').bind('paste, keyup', function (){
		var t = $("#text").val();
		$("#ch_cnt_sp").html(t.length);
		$("#ch_cnt").html(t.split(" ").join("").length);
		$("#line_cnt").html(t.split("\n").length);
		$("#wrd_cnt").html(t.split(" ").length);
		var max=$("#lgn_ln").text();	
		var max =parseInt(max);
		var lin = t.split("\n");
		var x=lin.length;
		var y=lin[x];
		
		var len=y.length;
		if(max<len)
		$("#lgn_ln").html(len);
		
	});
});
</script>
<div class="form-area thumbnail">
<table class="table table-striped">
<thead>
<tr>
<th width="70%">Statistic</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>Character count (With spaces)</td>
<td id="ch_cnt_sp">0</td>
</tr>
<tr>
<td>Character count (Without spaces)</td>
<td id="ch_cnt">0</td>
</tr>
<tr>
<td>Line count</td>
<td id="line_cnt">0</td>
</tr>
<tr>
<td>Word count (Counts spaces between words)</td>
<td id="wrd_cnt">0</td>
</tr>
<tr>
<td>Longest line</td>
<td id="lgn_ln">0</td>
</tr>
</tbody>
</table>
<div class="control-group">
<label for="text" class="control-label">Input your text here &darr;</label>
<div class="controls">
<textarea id="text" rows="5" class="input-block-level"></textarea>
</div>
</div>
<br/>
</div><div class="clearfix"></div>
</div>
</div>
</div>
<?php
		include('right_sidebar.php');
		include('footer.php');
?>`