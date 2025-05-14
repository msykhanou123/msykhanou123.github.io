<?php

// get the parameters from URL
$p_exe = $_REQUEST["exe"];
$p_title = $_REQUEST["t"];
$p_video = $_REQUEST["v"];
$p_author = $_REQUEST["a"];
$p_lang = $_REQUEST["l"];
$p_cat = $_REQUEST["c"];
$p_year = $_REQUEST["y"];

$response = 	$p_title . "<br>" . 
		$p_video . "<br>" . 
		$p_author . "<br>" . 
		$p_lang . "<br>" . 
		$p_cat . "<br>" . 
		$p_year;


/*
//$xml = simplexml_load_file("books.xml");
$xml = simplexml_load_file("test.xml");
//print_r($xml);
//echo $xml->getName() . "<br>";

foreach ($xml->children() as $x) {
	echo $x->getName() . "<br>";
	foreach ($x->children() as $xx) {
		echo $xx->getName() . " : " . $xx . "<br>";
	}
}
//$xml->bookstore->addChild("book");

echo $xml->asXML();
 */


//echo $response . "<br>Done";
//echo "Done";

// Create a xml file
/*
$doc = new DOMDocument('1.0', 'UTF-8');
$root = $doc->createElement('bookstore');
$doc->appendChild($root);


$array = array( 'title' => 'Somebody like you',
		'author' => 'Adele',
		'year' => '1994',
		'price' => '30.00',
		'video' => 'dfdkfjdkjk'
		);

$book = $doc->createElement('book');
$root->appendChild($book);

foreach ($array as $key=>$value) {
	
	//$root->appendChild($doc->createElement($key))->appendChild($doc->createTextNode($value));

$book->appendChild($doc->createElement($key))->appendChild($doc->createTextNode($value));


}
 */ 



//echo $p_exe;

switch ($p_exe) {
	case "add":
		addNode();
		break;
	case "del":
		deleteNode();
		break;
	default:
		echo "Error";

}


function deleteNode() {
$p_video = $_REQUEST["v"];
//$p_video = "S9YICeYdJBU";

$doc = new DOMDocument();
//$doc->load("test.xml");
$doc->load("books.xml");

$bookstore = $doc->documentElement;

/*
$book = $bookstore->getElementsByTagName('book')->item(0);
$oldbook = $bookstore->removeChild($book);
 */

/*
$books = $bookstore->getElementsByTagName('book');
$nodeToRemove = null;
foreach ($books as $item) {
	if ($item->getAttribute('category') == 'Woman') {
		$nodeToRemove = $item;
		echo "yes";
	}
	
}

if ($nodeToRemove != null) {
	$bookstore->removeChild($nodeToRemove);
}
 */

$books = $bookstore->getElementsByTagName('book');
$nodeToRemove = null;
foreach ($books as $book) {
	foreach ($book->childNodes as $item) {
		if (($item->nodeName == 'video') && ($item->nodeValue == $p_video)) {
			$nodeToRemove = $book;
			//break;
		}
	}
}

if ($nodeToRemove != null) {
	$bookstore->removeChild($nodeToRemove);
}



//$doc->save("test.xml");
$doc->save("books.xml");


}


function addNode() {


// get the parameters from URL
$p_title = $_REQUEST["t"];
$p_video = $_REQUEST["v"];
$p_author = $_REQUEST["a"];
$p_lang = $_REQUEST["l"];
$p_cat = $_REQUEST["c"];
$p_year = $_REQUEST["y"];


//$doc = new DOMDocument('1.0', 'UTF-8');
$doc = new DOMDocument();
//$doc->load("test.xml");

$doc->load("books.xml");

/*
$x = $doc->documentElement;
foreach ($x->childNodes AS $item) {
  //print $item->nodeName . " = " . $item->nodeValue . "<br>";
	foreach($item->childNodes as $y) {
		print $y->nodeName . " = " . $y->nodeValue . "<br>";
	}
}

 */

$bookstore = $doc->documentElement;

$book = $doc->createElement('book');
$cat = $doc->appendChild($book);
$cat->setAttribute('category', $p_cat);
$bookstore->appendChild($book);


$title = $doc->createElement('title');
$lang= $doc->appendChild($title);
$lang->setAttribute('lang', $p_lang);
$v_title = $doc->createTextNode($p_title);
$book->appendChild($title)->appendChild($v_title);


$author = $doc->createElement('author');
$v_author = $doc->createTextNode($p_author);
$book->appendChild($author)->appendChild($v_author);

$year = $doc->createElement('year');
$v_year = $doc->createTextNode($p_year);
$book->appendChild($year)->appendChild($v_year);

$price = $doc->createElement('price');
$v_price = $doc->createTextNode('30.00');
$book->appendChild($price)->appendChild($v_price);

$video = $doc->createElement('video');
$v_video = $doc->createTextNode($p_video);
$book->appendChild($video)->appendChild($v_video);



//$doc->save("test.xml");
$doc->save("books.xml");
//print $xmlDoc->saveXML();

}



//createXML();

function createXML() {

// get the parameters from URL
$p_title = $_REQUEST["t"];
$p_video = $_REQUEST["v"];
$p_author = $_REQUEST["a"];
$p_lang = $_REQUEST["l"];
$p_cat = $_REQUEST["c"];
$p_year = $_REQUEST["y"];



$doc = new DOMDocument('1.0', 'UTF-8');

$bookstore = $doc->createElement('bookstore');
$doc->appendChild($bookstore);

$book = $doc->createElement('book');
$cat = $doc->appendChild($book);
$cat->setAttribute('category', $p_cat);
$bookstore->appendChild($book);


$title = $doc->createElement('title');
$lang= $doc->appendChild($title);
$lang->setAttribute('lang', $p_lang);
$v_title = $doc->createTextNode($p_title);
$book->appendChild($title)->appendChild($v_title);


$author = $doc->createElement('author');
$v_author = $doc->createTextNode($p_author);
$book->appendChild($author)->appendChild($v_author);

$year = $doc->createElement('year');
$v_year = $doc->createTextNode($p_year);
$book->appendChild($year)->appendChild($v_year);

$price = $doc->createElement('price');
$v_price = $doc->createTextNode('30.00');
$book->appendChild($price)->appendChild($v_price);

$video = $doc->createElement('video');
$v_video = $doc->createTextNode($p_video);
$book->appendChild($video)->appendChild($v_video);


$doc->save("test.xml");

}

?>

