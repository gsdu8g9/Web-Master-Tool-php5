<?php
 
if (isset($_GET['search'])){
    $q = '';
    foreach($_GET as $k=>$v){
      $q.='&'.urlencode($k).'='.urlencode($v);
    }
    header('Content-type:text/xml;charset=tis-620');
    $s = file_get_contents('http://www.google.com/search?'.$q);
 
    function cite_callback($m){
      global $cites;
      list($c)=explode(' - ',strip_tags($m[1]));
      $c=preg_replace('/\s+/','',$c);
      $cites.="<c>{$c}</c>";
      return '';
    }
    $s = strstr($s,'<ol>');
    $s = substr($s,0,strpos($s,'</ol>')+5);
    $cites = '';
    preg_replace_callback('/<cite>(.+?)<\/cite>/','cite_callback',$s);
    echo '<?xml version="1.0" encoding="tis-620" ?>'.
            "<google>{$cites}</google>";
    exit();
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="th" xml:lang="th">
<head>
    <title>google order check tool</title>
  <meta http-equiv="Content-Type" content="text/html; charset=tis-620" />
  <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
  <script type="text/javascript">
  /*<![CDATA[*/
  var gTimer;
  var gProgress;
  function progress(){
    if (gProgress){
        gProgress.val(gProgress.val()*1+1);
    }
      gTimer = setTimeout('progress()',1000);
  }
  function clearProgress(){
        gProgress.val(0);
        if (gTimer)    clearTimeout(gTimer);
  }
  $(document).ready(function(){
        var website = $('#website');
        var num = $('#num');
        var keyword = $('#keyword');
        var order = $('#order');
        var result = $('#result');
    gProgress = $('#progress');
 
        $('#searchForm').submit(function(e){
            var meta = $('input[name=meta]:checked');
            var data;
            if (meta.val()=='')
                data = {
                         as_q: keyword.val(),
                        num: num.val(),
                        oe: 'tis-620'
                };
            else
                data = {
                    hl: 'th',
                         q: keyword.val(),
                         as_qdr: 'all',
                        num: num.val(),
                        meta: meta.val(),
                        oe: 'tis-620'
                };
            $.ajax({
             dataType: 'xml',
             type: "GET",
             url: "?search",
             data: data,
             beforeSend: function() {
                    clearProgress();
                    progress();
                    order.html('');
                    result.html('');
             },
             success: function(google) {
               var strOrder='';
               var strResult='';
               $('c',google).each(function(n){
                        var site = $(this).text();
                        n++;
                    if (site.indexOf(website.val()) == -1) {
                      strResult += n+': '+site+'<br />';
                        } else {
                          strOrder += website.val()+' Rank is '+n+
                                ' with keyword \''+keyword.val()+'\'<br />';
                          strResult += n+': <span style="color:red;">'+site+'</span><br />';
                        }
                 });
               clearProgress();
                 result.hide();
                 if (strOrder=='') {
                  order.html('No result found in '+num.val()+' ');
                 }else{
                  order.html(strOrder);
                 }
                 if (strResult=='') {
                  result.html('No result for this keyword').show('normal');
                 }else{
                  result.html(strResult).show('normal');
                 }
             },
             error: function(a,b,c){
              alert(b);
             }
            });
            return false;
        });
  });
  /*]]>*/
  </script>
</head>
<body>
 
<b>Rabking Check</b>
<br />
 
<div><form action="?" id="searchForm">
  website: <input type="text" id="website" /><br />
    keyword: <input type="text" id="keyword" /><br />
    result: <select id="num">
      <option value="5">5</option>
      <option value="10" selected="selected">10</option>
      <option value="20">20</option>
        <option value="50">50</option>
        <option value="100">100</option>
        </select>
    <br />
    Search :
        <input type="radio" name="meta" value="" checked="checked" />Web
    <br />
    progress: <input type="text" id="progress" /><br />
    <input type="submit" id="request" value="search" />
</form></div>
 
<div style="background-color:yellow">
    Rank: <br /><span id="order"></span>
</div>
<div style="background-color:lightyellow">
    Result : <span id="result"></span>
</div>
 
</body>
</html>