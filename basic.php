<?php
setcookie("mode[pythagore]");
setcookie("mode[pythagore]","basic",time()+2505600);

$space = "&nbsp;&nbsp;&nbsp;";
?>

<form>

<table align="center">

<tr>
<td><h3>Th&eacute;or&egrave;me de Pythagore</h3></td> <td><?php echo $space; ?></td> <td><h3>R&eacute;ciproque du th&eacute;or&egrave;me de Pythagore</h3></td>
</tr>

<tr>
<td>Entrez les mesures de 2 c&ocirc;t&eacute;s du triangle rectangle pour obtenir la mesure du troisi&egrave;me c&ocirc;t&eacute;s.</td> <td><?php echo $space; ?></td> <td>Entrer les mesures des 3 c&ocirc;t&eacute;s du triangle pour savoir si le triangle est rectangle.</td>
</tr>

<tr>
<td>  
mesure de AB : 
<input id="a" type="text" tabindex="1" size="8" maxlength="8" onkeyup="bpythagore();"/>
</td> <td><?php echo $space; ?></td>
<td><input id="d" type="text" tabindex="4" size="8" maxlength="8" onkeyup="brpythagore()"/> , &nbsp;&nbsp; <input id="e" type="text" tabindex="5" size="8" maxlength="8" onkeyup="brpythagore()"/> , &nbsp;&nbsp; <input id="f" type="text" tabindex="6" size="8" maxlength="8" onkeyup="brpythagore()"/>
</td>
</tr>

<tr>
<td>
mesure de AC : 
<input id="b" type="text" tabindex="2" size="8" maxlength="8" onkeyup="bpythagore();"/>
</td> <td><?php echo $space; ?></td>
<td>
</td>
</tr>

<tr>
<td>
mesure de BC : 
<input id="c" type="text" tabindex="3" size="8" maxlength="8" onkeyup="bpythagore();"/>
</td> <td><?php echo $space; ?></td>
<td>
</td>
</tr>

</table>

</form>