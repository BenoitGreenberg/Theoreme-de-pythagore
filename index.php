<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="content-language" content="fr" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="robots" content="index,follow" />
<meta name="keywords" content="Pythagore, théor&egrave;me, réciproque" />
<meta name="description" content="Théor&egrave;me de Pythagore et sa réciproque" />
<meta name="rating" content="general" />
<meta name="author" content="Benoît GRUNENBERGER" />
<meta name="copyright" content="GRUNENBERGER Benoît" />
<meta name="generator" content="Bloc Note" />
<meta name="distribution" content="Global" />
<meta name="publisher" content="GRUNENBERGER Benoît" />
<meta http-equiv="pragma" content="no-cache" />
<link href="" rel="SHORTCUT ICON" />
<title>Th&eacute;or&egrave;me de Pythagore et sa r&eacute;ciproque</title>
<!-- &#99;&#111;&#100;&#101;&nbsp;&#112;&#97;&#114;&nbsp;&#98;&#101;&#110;&#111;&#105;&#116;&nbsp;&#103;&#114;&#117;&#110;&#101;&#110;&#98;&#101;&#114;&#103;&#101;&#114; !-->

<?php
include 'all.css';
?>

</head>


<body>

<div align="center" style="color: #0088E4;">

<h2 class="underline">Th&eacute;or&egrave;me de Pythagore et sa r&eacute;ciproque</h2>

<img src="triangle.jpg" alt="Triangle rectangle ABC pour Pythagore" />

<br />

Mode: &nbsp; <a onclick="basic();" id="selection_mode_basic" style="text-decoration: underline;">Basic</a> &nbsp;&nbsp;&nbsp; <a onclick="avance();" id="selection_mode_avance" style="text-decoration: underline;">Avanc&eacute;</a>

</div>

<script language="JavaScript" type="text/javascript">

function httpobject(URL,DATA) {

var httprequest=null;
try
  {
  // Firefox, Opera 8.0+, Safari
  httprequest=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    httprequest=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    httprequest=new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
  
if (httprequest==null) {
  alert ("Votre navigateur ne supporte pas AJAX! \r Veuillez utiliser un navigateur compatible comme Firefox, Safari, Opera 8.0 et supérieur ou encore Internet Explorer 5.5 ou supérieur.");
  return;
  }

httprequest.open('POST',URL,true);
httprequest.setRequestHeader('Content-type','application/x-www-form-urlencoded');
httprequest.send(DATA);

return httprequest;
}



// BASIC

function bpythagore() {

function action() {

if (httprequest.readyState==4) {

if (httprequest.responseText!=='') {

var TEXT=httprequest.responseText;


document.getElementById('result').innerHTML = TEXT;

}
}
}

var a = document.getElementById('a').value;
var b = document.getElementById('b').value;
var c = document.getElementById('c').value;

if ( (b!=='' && c!=='') || (a!=='' && c!=='') || (a!=='' && b!=='') ) {

var DATA = 'mode=basic&version=theoreme&a='+a+'&b='+b+'&c='+c;

var httprequest=httpobject('calcul.php',DATA);

httprequest.onreadystatechange=action;


}

else {
document.getElementById('result').innerHTML = '';
}

}


function brpythagore() {

function action() {

if (httprequest.readyState==4) {

if (httprequest.responseText!=='') {

var TEXT=httprequest.responseText;


document.getElementById('result').innerHTML = TEXT;

}
}
}

var d = document.getElementById('d').value;
var e = document.getElementById('e').value;
var f = document.getElementById('f').value;

if ( d!=='' && e!=='' && f!=='' ) {

var DATA = 'mode=basic&version=reciproque&d='+d+'&e='+e+'&f='+f;

var httprequest=httpobject('calcul.php',DATA);

httprequest.onreadystatechange=action;


}

else {
document.getElementById('result').innerHTML = '';
}

}


// AVANCE

function apythagore() {

function action() {

if (httprequest.readyState==4) {

if (httprequest.responseText!=='') {

var TEXT=httprequest.responseText;


document.getElementById('result').innerHTML = TEXT;

}
}
}

var a = document.getElementById('a').value;
var b = document.getElementById('b').value;
var c = document.getElementById('c').value;
var unit_a = document.getElementById('unit_a').value;
var unit_b = document.getElementById('unit_b').value;
var unit_c = document.getElementById('unit_c').value;
var unit_calc = document.getElementById('unit_calc').value;
var unit_r = document.getElementById('unit_r').value;
var arrondir = document.getElementById('arrondir').value;

if ( (b!=='' && c!=='') || (a!=='' && c!=='') || (a!=='' && b!=='') ) {

var DATA = 'mode=avance&version=theoreme&a='+a+'&b='+b+'&c='+c+'&unit_a='+unit_a+'&unit_b='+unit_b+'&unit_c='+unit_c+'&unit_calc='+unit_calc+'&unit_r='+unit_r+'&arrondir='+arrondir;

var httprequest=httpobject('calcul.php',DATA);

httprequest.onreadystatechange=action;


}

else {
document.getElementById('result').innerHTML = '';
}

}


function arpythagore() {

function action() {

if (httprequest.readyState==4) {

if (httprequest.responseText!=='') {

var TEXT=httprequest.responseText;


document.getElementById('result').innerHTML = TEXT;

}
}
}

var d = document.getElementById('d').value;
var e = document.getElementById('e').value;
var f = document.getElementById('f').value;
var unit_d = document.getElementById('unit_d').value;
var unit_e = document.getElementById('unit_e').value;
var unit_f = document.getElementById('unit_f').value;
var unit_calc_recip = document.getElementById('unit_calc_recip').value;



if ( d!=='' && e!=='' && f!=='' ) {

var DATA = 'mode=avance&version=reciproque&d='+d+'&e='+e+'&f='+f+'&unit_d='+unit_d+'&unit_e='+unit_e+'&unit_f='+unit_f+'&unit_calc_recip='+unit_calc_recip;

var httprequest=httpobject('calcul.php',DATA);

httprequest.onreadystatechange=action;


}

else {
document.getElementById('result').innerHTML = '';
}

}


// change mode

function basic() {

document.getElementById('selection_mode_basic').style.color = '#ff0000';
document.getElementById('selection_mode_avance').style.color = '#0088E4';

function action() {

if (httprequest.readyState==4) {
if (httprequest.responseText!=='') {
var TEXT=httprequest.responseText;
document.getElementById('mode').innerHTML = TEXT;
}
}

}

var httprequest=httpobject('basic.php');
httprequest.onreadystatechange=action;

}


function avance() {

document.getElementById('selection_mode_avance').style.color = '#ff0000';
document.getElementById('selection_mode_basic').style.color = '#0088E4';

function action() {

if (httprequest.readyState==4) {
if (httprequest.responseText!=='') {
var TEXT=httprequest.responseText;
document.getElementById('mode').innerHTML = TEXT;
}
}

}

var httprequest=httpobject('avance.php');
httprequest.onreadystatechange=action;

}



<?php

$mode = htmlspecialchars(trim($_COOKIE['mode']['pythagore']));

if ($mode == 'basic') {
    echo 'basic();';
}

if ($mode == 'avance'  or $mode == '') {
    echo 'avance();';
}

?>

</script>

<div id="mode"></div>

<div id="result"></div>

</body>
</html>