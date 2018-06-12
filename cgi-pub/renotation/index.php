<!-- 
<!DOCTYPE html>
<html>
<body onload="runcgi()">
<head>
<script language="javascript"><!~~
function runcgi(){
    var w = window.outerWidth;
    var h = window.outerHeight;
    window.location.href='renotate.cgi?height='+h+'&width='+w;
}
// ~~>
</script>
</head>
</body>
</html>
 -->


<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
sort($files); // this does the sorting
foreach(glob("/u/chen348/cgi-pub/renotation/*.pdf") as $file){
   echo'<a href='.basename($file).'>'.$file.'</a><br>';
}
  
foreach(glob("/u/chen348/cgi-pub/renotation/*.mov") as $file){
   echo'<a href='.basename($file).'>'.$file.'</a><br>';
}
 ?> 
 </body>
</html>
