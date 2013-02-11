<?php
$foo="
<html>
<head>
 <title>JavaScript Popup Example 3</title>
<SCRIPT language="JavaScript1.2">
function poponload()
{
testwindow= window.open ("", "mywindow", // you start with your http and also you add your get variables
    "location=1,status=1,scrollbars=1,width=100,height=100");
testwindow.moveTo(0,0);// your position
}
</SCRIPT>
</head>
<body onload="javascript: poponload()">
</body>
</html>";
echo "thank you"
?>