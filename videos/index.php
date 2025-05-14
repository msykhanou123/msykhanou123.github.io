<!--
	books.xml
	setcd.php : insert, delete ..etc.. in books.xml
	
-->
<html>
<style>
	iframe {
		border-radius: 15px;
		margin: 5px;
		_border: 1px solid black;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	}
	div.divBook {
		_border: 1px solid #ccc;
		_border: 1px solid white;
		border-radius: 15px;	
		width: 200px;
		height: 220px;
		float: left;
		margin: 5px;
		_padding: 5 5 5 5;
		padding: 0 0 5 0;
		_overflow: auto;
		text-align: center;
		position: relative;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		overflow: visible;
			
	}
	div.divBook:hover {
		_border: 1px solid aqua;
		_background: aqua;
	}
	.imgVideo {
		width: 200px;
		height: 120px;
		cursor: pointer;
		border-radius: 15px 15px 0px 0px;	
		
	}
	#idTrash {
		width: 20px;
		height: 20px;		
	}
	#idDivTrash {
		width: 198px;
		height: 22px;
		border: 1px solid aqua;
		_position : absolute;
		_background : aqua;
		
	}
	#idDeleteVideo {
		width: 50px;
		height: 22px;
		border: 1px solid red;
		background : lime;
		position: absolute;	
	}
	#idInfoVideo {
		width: 50px;
		height: 22px;
		border: 1px solid black;
		background : greenyellow;
		position : absolute;
		left: 54px;
	
	}
	#idLyricsVideo {
		width: 50px;
		height: 20px;
		border: 1px solid purple;
		background : dodgerblue;
		position : absolute;
		left: 107px;
	
	}

</style>
<body>
<style>
	.divMenuLeft {
		font-family: "Lato", sans-serif;
		height: 100%;
		width: 0px;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #111;
		overflow-x: hidden;
		padding-top: 60px;
		_border: 1px solid #ccc;
		transition: width 0.5s;
	}
	.divMenuLeft a {
		padding: 8px 8px 8px 32px;
		text-decoration: none;
  		font-size: 25px;
  		color: #818181;
		display: block;
		outline: none;
		transition: 0.3s;
	}
	.divMenuLeft a:hover {
  		color: #f1f1f1;
	}
	.divMenuLeft .closebtn {
		position: absolute;
  		top: 0;
  		right: 25px;
		font-size: 36px;
		_margin-left: 50px;
	}


</style>

<div class="divMenuLeft" id="idDivMenuLeft">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>


<p id="info"><p>
<h1><span style="cursor: pointer" onclick="openNav()">&#9776;</span> SimpleXML - Tree-Based Parsers</h1>

<script>

function openNav() {
  document.getElementById("idDivMenuLeft").style.width = "250px";
}

function closeNav() {
  document.getElementById("idDivMenuLeft").style.width = "0";
}

</script>


<?php

//$txt = "PHP";
//echo "My first $txt script!";
//phpinfo();

/*
$myXMLData = 
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Dont't forget me this weekend!</body>
</note>";

$xml = simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);
*/


?>
<!--
<iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0">
</iframe>
<br>
-->

<style>
	#IdPlayer {
		_border: 1px solid red;
	}
</style>

<!-- 1. The <iframe> (and video player) will replace this <div> tage. -->
<div id="IdPlayer"></div>
<br>

<script>

// 2. This code loads the IFrame Player API code Asynchronously
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
// 	after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
	player = new YT.Player('IdPlayer', {
		height: '360',
		width: '640',
		videoId: '3JWTaaS7LdU',
		events: {
			'onReady': onPlayerReady,
			'onStateChange': onPlayerStateChange
		
		}
	
	});
}

function onPlayerReady(event) {
//	alert("hello");
	event.target.playVideo();
}
function onPlayerStateChange(event) {
}


</script>


<!--
<script>
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '390',
        width: '640',
        videoId: 'l-gQLqv9f4o',
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}

// 4. The API will call this function when the video player is ready.
var seconds = 0;
var timer;
function onPlayerReady(event) {
    event.target.playVideo();
  
}

function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING) {
        //player play
        timer = setInterval(
          function() {
            seconds++;
            console.log("you watch: "+ seconds +" seconds of the video");
          }, 1000
        );
    } else {
      //player pause
      clearInterval(timer);
    }
}

function stopVideo() {
    player.stopVideo();
}


</script>
-->



<style>
	.divMenuBook {
		
		_height: 25px;
		_width: 30px;
		border: 1px solid #ccc;
		position: absolute;
		background-color: white;
		top: 86px;
		right: 12px;
		border-radius: 5px;	
		display: none;
		_visibility: hidden;
		_position: relative;
		_left: 80px;
		cursor: pointer;
	}

	.dropdown-content {
		display: none;
		position: absolute;
		z-index: 1;
		_top: 22px;
		_left: 14px;
  		background-color: #f1f1f1;
  		_min-width: 160px;
  		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		border-radius: 10px;	
		padding: 10px 0px 10px 0px;
		border : 1px solid #ccc;	
		text-align : left;
	}
	.dropdown-content a {
		color: black;
		padding: 2px 0px 2px 20px;
		text-decoration : none;
		display: block;
	}
	.dropdown-content a:hover {
		background-color: blue;
		color: white;
		_text-color: white;
	}
	.divMenuBook:hover .dropdown-content {
		_display : block;
	}
</style>


<?php

//displayVideo("3JWTaaS7LdU");


$xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");
//echo $xml->book[0]->title . "<br>";
//echo $xml->book[1]->title;

$MaxVideos = 40;
$i = 0;

echo "<div>";
foreach($xml->children() as $x) {
	if ($i < $MaxVideos) {
		echo "<div class=\"divBook\" " .    
			" 	onmouseover=\"_openDiv('" . ($i + 1) . "', this)\" " . 
			" 	onmouseenter=\"openDiv('" . ($i + 1) . "', this)\" " . 
			" 	onmouseout=\"_closeDiv('" . ($i + 1) . "', this)\" " . 
			" 	onmouseleave=\"closeDiv('" . ($i + 1) . "', this)\" " . 

			">";
		displayVideoPicture($x->video, ($i + 1)); echo "<br>";
		echo $x->title . "<br>";
		//echo $x->author . "&nbsp;&nbsp;&nbsp;" . $x->year . " -  " . $x->title['lang'] . "<br>";
		echo $x->author . "&nbsp;<br>";
		echo $x->year . " - ";
		echo $x->title['lang'];
		//echo $x->video . ", ";
		//displayVideo($x->video); echo $x->title['lang'] . "<br>"; //echo $x->price . " | " . $x->video . "<br>";
		//echo $x->price . "<br>";
		//echo "<img id=\"idTrash\" src=\"trash.jpg\" />";

		//echo 	"<div class=\"divMenuBook\" id=\"idMenuBook" . ($i + 1) . "\">&#9776;</div>";
		echo 	"<div class=\"divMenuBook\" id=\"idMenuBook" . ($i + 1) . "\" " . 
			" 	onclick=\"displayBookMenuItems('" . ($i + 1) . "', this, event)\" ". 
			" 	style=\"width:30; height:25;\" " .
			">" . 
		//	"<div class=\"vertical-center\">&#9776;</div>" .  
		//	" &#9776; " . 
		//	" &#10010; " .
				"<span>&#10010;</span>" .
				"<div style=\"width: 160; height: 80; left:14; top:22\" " . 
				" class=\"dropdown-content\">" .
				//"<p>Hello World!</p>" .
				"<a href=\"javascript:deleteVideo('" . $x->video . "')\">Delete</a>" .
   	 			"<a href=\"javascript:addVideo()\">Add</a>" .
   	 			"<a href=\"#\">Modify</a>" .
				" " .	
				"</div>" .
			"</div>";
		//	echo 	"<div id=\"idMenuBook\">Menu</div>";
		echo 	"<div id=\"idDivTrash\">" .
		       	//"<img id=\"idTrash\" src=\"trash.jpg\" />" .	
			"<div onclick=\"deleteVideo('" . $x->video .  "')\" id=\"idDeleteVideo\"></div>" .
			"<div id=\"idInfoVideo\"></div>" .
			"<div id=\"idLyricsVideo\">" . ($i + 1) . "</div>" .
			"</div>";
		
	
		echo "</div>";
	}
	$i++;
}
echo "</div>";


function displayVideoPicture($v, $i) {
	$src = "https://img.youtube.com/vi/" . $v ."/0.jpg";
	echo 	"<img class=\"imgVideo\" src=\"" . $src . "\" " .
		//" onmouseenter=\"_displayBookMenu($i)\" " .
		//" onmouseleave=\"_closeBookMenu(event, $i)\" " .
	
		" onclick=\"displayVideo('" . $v . "')\" " .
		">";
}


function displayVideo($v) {
	echo 	"<iframe width=\"420\" height=\"315\" " .
		//" src=\"https://www.youtube.com/embed/" . $v . "\">" .
		" src=\"https://www.youtube.com/watch?v=0IA3ZvCkRkQ\">" .
		"</iframe>";
	echo 	"<br>";	
}
?>

<script>

function openDiv(i, e) {
	//alert("Open div " + i);
	var x = e.getElementsByTagName("img")[0];
	//x.style.opacity = 0.5;

	displayBookMenu(i);
}


function closeDiv(i, e) {
	//alert("Open div " + i);
	var id = "idMenuBook" + i;
	document.getElementById(id).style.display = "none";
	
	var menu = document.getElementById(id).getElementsByClassName("dropdown-content")[0];
	menu.style.display = "none";
}

function displayBookMenuItems(i, t, e) {
	var el = t.getElementsByTagName("div")[0];
	if (el.style.display == "block") {
		el.style.display = "none";
	}
	else {
		el.style.display = "block";
	}

	var x = e.clientX;
	var y = e.clientY;

	var wX = window.innerWidth;
	var hX = window.innerHeight;

	var menu = document.getElementById("idMenuBook" + i);
	var left = parseInt(menu.style.width, 10);	
	var width = parseInt(el.style.width, 10);
	//document.getElementById("info").innerHTML = x + " " + y;
	if ((x + width) > wX) {
		el.style.left = (left / 2) - width;
	}
	else {
		el.style.left = left / 2;
	
	}


	var Hmenu  = parseInt(menu.style.height); //25
	var ytop   = parseInt(el.style.top); //22
	var height = parseInt(el.style.height); // 90
	
	//document.getElementById("info").innerHTML = ytop + " " + height;
	
	if ((y + height + 100) > hX) {
		var diff = Hmenu - (3 + 1) * 2;
		el.style.top = - height - diff;
	} 
	/*
	else {
		el.style.top = 0;
	
	}
	*/

}


function displayBookMenu(i) {
	var id = "idMenuBook" + i;
	//document.getElementById(id).style.visibility = "visible";
	document.getElementById(id).style.display = "block";
	//alert("menu " + i);
	
	var menu = document.getElementById(id).getElementsByClassName("dropdown-content")[0];
	menu.style.display = "none";



}

function closeBookMenu(e, i) {
	var id = "idMenuBook" + i;
	//document.getElementById(id).style.visibility = "hidden";
	var x = e.clientX; 
	var y = e.clientY;
	var efp = document.elementFromPoint(x, y);
	var menu = document.getElementById(id);
	if (efp == menu) {
		//alert("Ok menu");
	}
	else {
		document.getElementById(id).style.display = "none";
	}
	//alert("menu " + i);
}

function displayVideo(videoId) {
	player.loadVideoById(videoId);
	player.playVideo();
}

function deleteVideo(idVideo) {

	//alert("Delete video" + idVideo);
	if (confirm("Do you really want to delete this video ?") == true) { 
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("txtHint").innerHTML = this.responseText;
				//alert(this.responseText);
				alert("Video deleted, reloading now");
				location.reload();
			}
		};
		xmlhttp.open("GET", "setcd.php?exe=del&v=" + idVideo, true);
		xmlhttp.send();
	}

}

</script>


<div class="divForm" id="idDivSearch">

<p><b>Start typing a name in the input field below:</b></p>
<form action="javascript:myfunction()">
	<label for="fname">First name:</label>
	<input 	type="text" id="fname" name="fname" 
		
		onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>


<style>
table,th,td {
  border : 10px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>

<br><br>
<table id="demo2"></table>

</div>

<script>

function showHint(str) {
	
	if (str.length == 0) {
		document.getElementById("txtHint").innerHTML = "";
		return;	
	}
	else  {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("txtHint").innerHTML = this.responseText;
			}

		};
		xmlhttp.open("GET", "gethint.php?q=" + str, true);
		xmlhttp.send();

	}

}

function myfunction() {
	var str = document.getElementById("fname").value;

 	var xmlhttp=new XMLHttpRequest();
  	xmlhttp.onreadystatechange=function() {
    		if (this.readyState==4 && this.status==200) {
      			//document.getElementById("txtHint").innerHTML=this.responseText;
			//document.getElementById("demo2").innerHTML=this.responseText;
			
			//loadXML(this);
			loadXMLBooks(this);
    		}
  	};
  	xmlhttp.open("GET","getcd.php?q=" + str,true);
  	xmlhttp.send();
	

}

function loadXML(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Artist</th><th>Title</th></tr>";
  var x = xmlDoc.getElementsByTagName("CD");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo2").innerHTML = table;


}

function loadXMLBooks(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Author</th><th>Country</th><th>Category</th><th>Title</th></tr>";
  var x = xmlDoc.getElementsByTagName("book");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("author")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("title")[0].getAttribute("lang") +
    "</td><td>" +
    x[i].getAttribute("category") +
    "</td><td>" +
    x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo2").innerHTML = table;

}

</script>


<style>
	.divForm {
		height: 450px;
		width: 250px;
		border: 1px solid black;
		position: absolute;
		top: 80px;
		left: 680px;
		background-color: white;
		_border-radius: 15px;
		padding: 15 15 15 15;
		visibility: hidden;	
	}


</style>

<div class="divForm" id="idDivAdd">
<form id="idFormAdd" _action="setcd.php" action="javascript:sendForm()" method="post">
	<label for="title">Title: </label>
	<input type="text" name="title"><br>
	<label for="video">Video ID: </label>
	<input type="text" name="video"><br>
	<label for="author">Author: </label>
	<input type="text" name="author"><br>
	<label for="lang">Country: </label>
 	<select name="lang">
			<option value="USA">USA</option>
			<option value="UK">United Kingdom</option>
	</select>
	<br>
	<label for="cat">Category: </label>
 	<select name="cat">
			<option value="Man">Man</option>
			<option value="Woman">Woman</option>
			<option value="Band">Band</option>
	</select>
	<br>
	<label for="Year">Year : </label>
	<input type="text" name="year"><br>
	<br>
	<input type="submit" value="Submit">
	<input type="reset" value="Reset">

</form>
<p id="idResponse"></p>
</div>

<div class="divForm" id="idDivDelete">

</div>

<script>
function sendForm() {
	var len = document.getElementById("idFormAdd").elements.length;
	/*
	var _title = document.getElementById("idForm").elements.item(0).value; 
	var _author = document.getElementById("idForm").elements.item(1).value; 
	var _country = document.getElementById("idForm").elements.item(2).value; 
	var _year = document.getElementById("idForm").elements.item(3).value; 
	 */
	var x = document.getElementById("idFormAdd");
	var t = x.elements.namedItem("title").value; 
	var v = x.elements.namedItem("video").value; 
	var a = x.elements.namedItem("author").value; 
	var l = x.elements.namedItem("lang").value; 
	var c = x.elements.namedItem("cat").value; 
	var y = x.elements.namedItem("year").value; 

	var exe = "add";
	/*
	alert("Add video " + len + " " +
			t + " " +
			v + " " +
			a + " " +
			l + " " +
			c + " " +
			y + " " +
		" ");
	*/
	if (confirm("Do you really want to add this video ?") == false) return;

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("idResponse").innerHTML = this.responseText;
			alert("Video added, reloading now");

			document.getElementById("idFormAdd").reset();
			document.getElementById("idDivAdd").style.visibility = "hidden";
			displayVideo(v);
			
			//location.reload();
			

		}	
	};
	xmlhttp.open("GET", "setcd.php?exe=" + exe + 
				"&t=" + t + 
				"&v=" + v + 
				"&a=" + a + 
				"&l=" + l + 
				"&c=" + c + 
				"&y=" + y, true);
	xmlhttp.send();

}
</script>

<style>
	.divMenu {
		height: 30px;
		width: 260px;
		border: 1px solid black;
		position: absolute;
		top: 0px;
		left: 680px;
		background-color: white;
		_border-radius: 0 0 0 15px;
		padding: 5 5 5 15;	
	}
</style>


<div class="divMenu">
	<!--
	<button type="button" onclick="addVideo()">Add new video</button>
	<button type="button" onclick="deleteVideo()">Delete video</button>
	-->
	<a href="javascript:addVideo()">Add new video</a> |	 
	<a href="javascript:_deleteVideo()">Delete video</a> |	 
	<a href="javascript:searchVideo()">Search</a>	 
</div>

<script>
function addVideo() {
	document.getElementById("idFormAdd").reset();
	var x = document.getElementById("idDivAdd");
	if (x.style.visibility == "visible") {
		x.style.visibility = "hidden";
	}
	else {
		x.style.visibility = "visible";
	}
}

function _deleteVideo() {
	var x = document.getElementById("idDivDelete");
	if (x.style.visibility == "visible") {
		x.style.visibility = "hidden";
	}
	else {
		x.style.visibility = "visible";
	}
}

function searchVideo() {
	var x = document.getElementById("idDivSearch");
	if (x.style.visibility == "visible") {
		x.style.visibility = "hidden";
	}
	else {
		x.style.visibility = "visible";
	}

}

</script>

</body>
</html>
