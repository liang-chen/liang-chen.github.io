<html>
<head>
<style> 
</style>
<meta http-equiv="Content-Type" content="text/html">
<title>First-view OMR data</title>
</head>
<body>

<h2>First-view Music Score Dataset</h2>
<hr align = left width = 500> 
<?php

echo "<table><tr>";

$folder = '';
$filetype = '*.jpg';
$files = glob($folder.$filetype);
$page = 1;
foreach ($files as $file) {
    $fname = basename($file);
    if((int)$fname[10] != $page){
        echo "</br></br><a href=$file>".basename($file)."</a>";
        $page = (int)$fname[10];
    }
    else echo "<a href=$file>".basename($file)."</a>";        
}

echo "</tr><tr><tr></tr>";

$filetype = '*.mp4';
$files = glob($folder.$filetype);
foreach ($files as $file) {
    echo "<td><a href=$file>".basename($file)."</a></td>";
}

echo "</tr><tr><tr></tr>";

$filetype = '*.mid';
$files = glob($folder.$filetype);
foreach ($files as $file) {
    echo "<td><a href=$file>".basename($file)."</a></td>";
}

echo "</tr></table>";

?>
</body>
</html>