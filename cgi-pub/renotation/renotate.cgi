#!/usr/bin/python

import cgi,cgitb

form = cgi.FieldStorage()
height = form.getvalue('height')
width = form.getvalue('width')

print "Content-type:text/html\r\n\r\n"
print """<html>
<body onresize="runcgi()">
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="myStyle.css">
<title>Renotation</title>
<script language="javascript"><!--
function runcgi(){
    var w = window.outerWidth;
    var h = window.outerHeight;
    window.location.href='renotate.cgi?height='+h+'&width='+w;
}
// -->
</script>
</head>
</body>"""
print "<p style=\"font-size:{}%\">&#xE050</p>".format(width)
print "</html>"
