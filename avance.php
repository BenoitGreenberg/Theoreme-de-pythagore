<?php
setcookie('mode[pythagore]');
setcookie('mode[pythagore]', 'avance', time() + 2505600);

$space = '&nbsp;&nbsp;&nbsp;';
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
<input id="a" type="text" tabindex="1" size="8" maxlength="8" onkeyup="apythagore();"/>
<select id="unit_a" onchange="apythagore();">
<option value="mm">mm</option>
<option value="cm">cm</option>
<option value="dm">dm</option>
<option value="m" selected="selected">m</option>
<option value="dam">dam</option>
<option value="hm">hm</option>
<option value="km">km</option>
</select>
</td> <td><?php echo $space; ?></td>
<td>
<input id="d" type="text" tabindex="4" size="8" maxlength="8" onkeyup="arpythagore();"/>
<select id="unit_d" onchange="arpythagore();">
<option value="mm">mm</option>
<option value="cm">cm</option>
<option value="dm">dm</option>
<option value="m" selected="selected">m</option>
<option value="dam">dam</option>
<option value="hm">hm</option>
<option value="km">km</option>
</select>
 , &nbsp;&nbsp;
<input id="e" type="text" tabindex="5" size="8" maxlength="8" onkeyup="arpythagore();"/>
<select id="unit_e" onchange="arpythagore();">
<option value="mm">mm</option>
<option value="cm">cm</option>
<option value="dm">dm</option>
<option value="m" selected="selected">m</option>
<option value="dam">dam</option>
<option value="hm">hm</option>
<option value="km">km</option>
</select>
 , &nbsp;&nbsp;
<input id="f" type="text" tabindex="6" size="8" maxlength="8" onkeyup="arpythagore();"/>
<select id="unit_f" onchange="arpythagore();">
<option value="mm">mm</option>
<option value="cm">cm</option>
<option value="dm">dm</option>
<option value="m" selected="selected">m</option>
<option value="dam">dam</option>
<option value="hm">hm</option>
<option value="km">km</option>
</select>

</td>
</tr>

<tr>
<td>
mesure de AC : 
<input id="b" type="text" tabindex="2" size="8" maxlength="8" onkeyup="apythagore();"/>
<select id="unit_b" onchange="apythagore();">
<option value="mm">mm</option>
<option value="cm">cm</option>
<option value="dm">dm</option>
<option value="m" selected="selected">m</option>
<option value="dam">dam</option>
<option value="hm">hm</option>
<option value="km">km</option>
</select>
</td> <td><?php echo $space; ?></td>
<td>
Effectuer les calculs en &nbsp;
<select id="unit_calc_recip" onchange="arpythagore();">
<option value="mm">mm</option>
<option value="cm">cm</option>
<option value="dm">dm</option>
<option value="m" selected="selected">m</option>
<option value="dam">dam</option>
<option value="hm">hm</option>
<option value="km">km</option>
</select>
</td>
</tr>

<tr>
<td>mesure de BC : 
<input id="c" type="text" tabindex="3" size="8" maxlength="8" onkeyup="apythagore();"/>
<select id="unit_c" onchange="apythagore();">
<option value="mm">mm</option>
<option value="cm">cm</option>
<option value="dm">dm</option>
<option value="m" selected="selected">m</option>
<option value="dam">dam</option>
<option value="hm">hm</option>
<option value="km">km</option>
</select>
</td> <td><?php echo $space; ?></td>
<td></td>
</tr>

<t>
<td>
Effectuer les calculs en &nbsp;
<select id="unit_calc" onchange="apythagore();">
<option value="mm">mm</option>
<option value="cm">cm</option>
<option value="dm">dm</option>
<option value="m" selected="selected">m</option>
<option value="dam">dam</option>
<option value="hm">hm</option>
<option value="km">km</option>
</select>
</td> <td><?php echo $space; ?></td>
<td></td>
</tr>

<tr>
<td>
Afficher le r&eacute;sultat en &nbsp;
<select id="unit_r" onchange="apythagore();">
<option value="mm">mm</option>
<option value="cm">cm</option>
<option value="dm">dm</option>
<option value="m" selected="selected">m</option>
<option value="dam">dam</option>
<option value="hm">hm</option>
<option value="km">km</option>
</select>
</td> <td><?php echo $space; ?></td>
<td></td>
</tr>

<tr>
<td>
Arrondir le r&eacute;sultat &agrave; 
<select id="arrondir" onchange="apythagore();">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5" selected="selected">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select> chiffres apr&egrave;s la virgule.
<td>
</tr>

</table>

</form> 
