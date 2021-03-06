<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minitest</title>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> -->
		
		<!-- CSS -->
		<!-- <link rel="stylesheet" href="css/style.css"> -->
		<script src="js/loadXML.js"></script>
	
  </head>
  <body>
	
	<div>
		<b>Title:</b> <span id="title"></span><br />
		<b>Help:</b> <span id="help"></span><br />
		<b>Items:</b> <span id="items"></span><br />
	</div>
	
	
	
	<script>
	//var xmlDoc=loadXMLDoc("http://gracias.nu/test/generateXML.php?chapter_id=3&excercise_id=255&type=GL");
	
	//testdata from gracias.nu/exercises7/actions_s.php?item=quiz&action=getXMLwSound&quizid=13
	/*
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","xml/testdata.xml",false);
	xmlhttp.send();
	xmlDoc=xmlhttp.responseXML;
	
	*/
	
	/*
	var quizNode=xmlDoc.firstChild;
	document.getElementById("title").innerHTML = JSON.stringify(quizNode);
	var quizTitleNode = quizNode.firstChild;
	var title = quizTitleNode.firstChild.nodeValue;
	
	document.getElementById("title").innerHTML = title;
	
	*/
	
	<script>
		if (window.XMLHttpRequest)
			{
			xhttp=new XMLHttpRequest();
			}
		else // for IE 5/6
			{
			xhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
		xhttp.open("GET","xml/test.xml",false);
		xhttp.send();
		xmlDoc=xhttp.responseXML;
		document.write("XML document loaded into an XML DOM Object.");
	</script>

	document.getElementById("help").innerHTML=
	xmlDoc.getElementsByTagName("question")[0].childNodes[0].nodeValue;
	
	document.getElementById("items").innerHTML=
	xmlDoc.getElementsByTagName("items")[0].firstChild.nodeValue;
	
	var items = xmlDoc.getElementsByTagName("items")[0];
	
	
	
	
	</script>
	
	

	<!-- jQuery -->
	<!--<script src="https://code.jquery.com/jquery.js"></script> -->
	
	<!-- Bootstrap JavaScript, needed if you want for instance tabs, models, popovers etc. -->
	<!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>	-->

  </body>
</html>
