<?php
if (!empty($_COOKIE['sid'])) {session_id($_COOKIE['sid']);}
session_start();
require_once 'classes/Auth.class.php';
require_once 'stayt.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<title>Табло</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="jquery-3.6.0.js"></script>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div id = "output" class = "output"></div>


<div hidden id = "pechat"></div>
<script>	
		function show()
		{
			$.ajax({
				url: "infoforTablo.php",
				cache: false,
				success: function(html){
					$("#output").html(html);
				}
			});
		}
	
		$(document).ready(function(){
			show();
			setInterval('show()',1000);
		});	
   
function PrintElem(elem)
{
Popup($(elem).html());
}
function Popup(data)
{
var mywindow = window.open('', 'my div', 'height=640,width=640');
mywindow.document.write('<html><head><title>Талон</title>');
mywindow.document.write('</head><body >');
mywindow.document.write(data);
mywindow.document.write('</body></html>');
mywindow.document.close(); // necessary for IE >= 10
mywindow.focus(); // necessary for IE >= 10
mywindow.print();
mywindow.close();
return true;
}		
	</script>
<br><p></p>
<script type="text/javascript" src="ajax-form.js"></script></body></html>