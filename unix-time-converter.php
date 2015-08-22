<?php include('header.php');
	  include('left_sidebar.php');
?>
<div class="span7">
<div class="dropdowns">
<div class="block">
<h1 class="block-header service-header">UNIX Time Converter</h1>
<div class="block-wrap">
<img class="service-thumb" src="static/img/timeconverter_large.png"/>
This online tool converts Unix timestamp to human readable date/time.
<div class="clearfix"></div>
<script type="text/javascript">

</script>

<div class="form-area thumbnail">
<div class="error alert alert-error"></div>
<table class="table table-striped table-condensed">
<thead>
<tr>
<th>Human readable time</th>
<th>Seconds</th>
</tr>
</thead>
<tbody>
<tr><td>1 minute</td><td align="right">60 seconds</td></tr>
<tr><td>1 hour</td><td align="right">3600 seconds</td></tr>
<tr><td>1 day</td><td align="right">86400 seconds</td></tr>
<tr><td>1 week</td><td align="right">604800 seconds</td></tr>
<tr><td>1 month (30.44 days)&nbsp;</td><td align="right">2629743 seconds</td></tr>
<tr><td>1 year (365.24 days)&nbsp;</td><td align="right">&nbsp;31556926 seconds</td></tr></tbody></table>
<hr/>
<p><strong>The current Unix epoch time is: </strong><span id="now"></span></p>
<button class="btn btn-mini" type="button" id="start" onclick="startClock(1)">Start</button>
<button class="btn btn-mini" type="button" id="stop" onclick="stopClock(1)">Stop</button>
<button class="btn btn-mini" type="button" id="refresh" onclick="now()">Refresh</button>
<hr/>
<p><strong>Convert unix timestamp to human readable format</strong></p>
<div class="input-append">
<input type="text" name="unix-human" value="" id="unix_time">
<input type="button" class="btn" id="unix-human" onclick="unixToHuman()" value="Convert">
</div>
<br/>
<div style="display:none;" id="unix-human-div">
<p>
<strong>GMT:</strong> <span id="gmt"></span><br/>
<strong>Your timezone:</strong> <span id="timezone"></span>
</p>
</div>
<hr/>
<p><strong>Convert human readable format to unix timestamp</strong></p>
<table>
<tr>
<td>Month</td>
<td>Day</td>
<td>Year</td>
<td>Hour</td>
<td>Min</td>
<td>Sec</td>
</tr>
<tr>
<td><input type="text" name="month" id="month" class="input-mini" maxlength=2> / </td>
<td><input type="text" name="day" id="day" class="input-mini" maxlength=2> / </td>
<td><input type="text" name="year" id="year" class="input-mini" maxlength=5>&nbsp;&nbsp;</td>
<td><input type="text" name="hour" id="hour" class="input-mini" maxlength=2> : </td>
<td><input type="text" name="min" id="min" class="input-mini" maxlength=2> : </td>
<td><input type="text" name="sec" id="sec" class="input-mini" maxlength=2>&nbsp;&nbsp;</td>
<td><input type="button" class="btn" id="unix-human" style="margin:0 10px 10px 0;" onclick="humanToUnix()" value="Convert"></td>
</tr>
</table>
<div style="display:none;" id="human-unix-div">
<p>
<strong>Epoch timestamp:</strong> <span id="epoch-timestamp"></span><br/>
<strong>UTC date and time as a string:</strong> <span id="utc-date"></span>
</p>
</div>
<hr/>
<p><strong>The RFC 2822 formatted date</strong></p>
<div class="input-append">
<input type="text" id="rfc-2822" class="input-xlarge">
<input type="button" class="btn" id="to-rfc-2822" onclick="torfc()" value="Convert">
</div>
<br/>
<div style="display:none;" id="rfc-div">
<p>
<strong>Epoch timestamp:</strong> <span id="rfc-timestamp"></span><br/>
</p>
</div>
<hr/>



<br/>
</div><div class="clearfix"></div>
</div>
</div>
</div>
<?php
		include('right_sidebar.php');
		include('footer.php');
?>`
