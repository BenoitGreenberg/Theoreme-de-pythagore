<?php

$mode = htmlspecialchars(trim($_POST['mode']));

$version = htmlspecialchars(trim($_POST['version']));


if  ( $mode == "basic" ) {


if ( $version = "theoreme" ) {

$a = htmlspecialchars(trim($_POST['a']));
$b = htmlspecialchars(trim($_POST['b']));
$c = htmlspecialchars(trim($_POST['c']));


if  ($a < 0 OR $b < 0 OR $c < 0)
{
echo "
<p align=\"center\">
Erreur: une valeur n&eacute;gative a &eacute;t&eacute; entr&eacute;e. <br /> Une longueur est toujours positive.
</p>
";
}

if ($b !== "" AND ($b <= $a OR $b <= $c))
{
echo "
<p align=\"center\">
L'hypot&eacute;nuse (AC) ne peut pas &ecirc;tre &eacute;gale ou inf&eacute;rieure &agrave; l'un des 2 autres c&ocirc;t&eacute;s.
<br />
Dans un triangle rectangle, l'hypot&eacute;nuse est toujours le plus grand c&ocirc;t&eacute;.
</p>
";
}

if ($a !== "" AND $b !== "" AND $c !== "")
{
echo "
<p align=\"center\">
Vous avez les 3 mesures des c&ocirc;tes du triangle.
<br />
Vous n'avez pas besoin d'utiliser le th&eacute;or&egrave;me de Pythagore puisque vous connaissez toutes les longueurs du triangle.
<br />
Cependant vous pouvez utiliser la r&eacute;ciproque du th&eacute;or&egrave;me de Pythagore pour savoir si le triangle est rectangle ou non.
</p>
";
}

if ( ($a !== "" AND !$b AND !$c) OR (!$a AND $b !== "" AND !$c) OR (!$a AND !$b AND $c !== "") )
{
echo "
<p align=\"center\">
La mesure d'un seul c&ocirc;t&eacute; du triangle rectangle ne suffit pas pour trouver la mesure d'un autre c&ocirc;t&eacute; du triangle.
<br />
Il faut au minimum 2 c&ocirc;t&eacute;s du triangle rectangle pour trouver le 3<sup>&egrave;me</sup> c&ocirc;t&eacute; du triangle rectangle.
</p>
";
}


if (!$a AND $b !== "" AND $c !== "" AND $b > $c AND $b > 0 AND $c > 0)
{
$y = $b * $b;
$z = $c * $c;
$x = $y - $z;
$g= sqrt($x);

echo "
<table align=\"center\">
<tr> <td><h3><u>Explication:</h3></u></td> <td></td> </tr>
<tr> <td>Justif ier l'emploi du th&eacute;or&egrave;me que vous allez utiliser.</td> <td>Comme le triangle ABC est rectangle.</td> </tr>
<tr> <td>Donner le nom du th&eacute;or&egrave;me que vous utilisez:</td> <td>D'apr&egrave;s le th&eacute;or&egrave;me de Pythagore:</td> </tr>
<tr> <td>Citer le th&eacute;or&egrave;me en entier.</td> <td>Dans un triangle rectangle le carr&eacute; de l'hypot&eacute;nuse est &eacute;gal &agrave; la somme des carr&eacute;s des c&ocirc;t&eacute;s de l'angle droit.</td> </tr>
<tr> <td>Donner la formule brute du th&eacute;or&egrave;me de Pythagore.</td> <td>AB<sup>2</sup> + BC<sup>2</sup> = AC<sup>2</sup></td> </tr>
<tr> <td>Arranger la formule (l'&eacute;quation) pour obtenir le c&ocirc;t&eacute; recherch&eacute;.</td> <td>AC<sup>2</sup> - BC<sup>2</sup> = AB<sup>2</sup></td> </tr>
<tr> <td>Effectuer les calculs.</td> <td>$b<sup>2</sup> - $c<sup>2</sup> = AB<sup>2</sup></td> </tr>
<tr> <td></td> <td>$y - $z = $x</td> </tr>
<tr> <td>Utiliser la racine carr&eacute;.</td> <td>AB = &radic;<span class=\"racine\">$x</span></td> </tr>
<tr> <td>R&eacute;sultat:</td> <td>AB = $g</td> </tr>
<tr> <td></td> <td></td> </tr>
<tr> <td>Faire une phrase de conclusion, si besoin ne pas oublier les unit&eacute;s.</td> <td>Le c&ocirc;t&eacute; AB est &eacute;gale &agrave; $g.</td> </tr>
</table>
";
}
if (!$b AND $a !== "" AND $c !== "" AND $a > 0 AND $c > 0)
{
$k = $a * $a;
$m = $c * $c;
$o = $k + $m;
$j = sqrt($o);

$h = sqrt($a * $a + $c * $c);

echo "
<table align=\"center\">
<tr> <td><h3><u>Explication:</h3></u></td> <td></td> </tr>
<tr> <td>Justif ier l'emploi du th&eacute;or&egrave;me que vous allez utiliser.</td> <td>Comme le triangle ABC est rectangle.</td> </tr>
<tr> <td>Donner le nom du th&eacute;or&egrave;me que vous utilisez:</td> <td>D'apr&egrave;s le th&eacute;or&egrave;me de Pythagore:</td> </tr>
<tr> <td>Citer le th&eacute;or&egrave;me en entier.</td> <td>Dans un triangle rectangle le carr&eacute; de l'hypot&eacute;nuse est &eacute;gal &agrave; la somme des carr&eacute;s des c&ocirc;t&eacute;s de l'angle droit.</td> </tr>
<tr> <td>Donner la formule brute du th&eacute;or&egrave;me de Pythagore.</td> <td>AB<sup>2</sup> + BC<sup>2</sup> = AC<sup>2</sup></td> </tr>
<tr> <td>Effectuer les calculs.</td> <td>$a<sup>2</sup> + $c<sup>2</sup> = AC<sup>2</sup></td> </tr>
<tr> <td></td> <td>$k + $m = $o</td> </tr>
<tr> <td>Utiliser la racine carr&eacute;.</td> <td>AC = &radic;<span class=\"racine\">$o</span></td> </tr>
<tr> <td>R&eacute;sultat:</td> <td>AC = $j</td> </tr>
<tr> <td></td> <td></td> </tr>
<tr> <td>Faire une phrase de conclusion, si besoin ne pas oublier les unit&eacute;s.</td> <td>Le c&ocirc;t&eacute; AC est &eacute;gale &agrave; $j.</td> </tr>
</table>
";
}
if (!$c AND $a !== "" AND $b !== "" AND $b > $a AND $a > 0 AND $b > 0)
{
$u = $b * $b;
$w = $a * $a;
$t = $u - $w;
$p = sqrt($t);

echo "
<table align=\"center\">
<tr> <td><h3><u>Explication:</h3></u></td> <td></td> </tr>
<tr> <td>Justif ier l'emploi du th&eacute;or&egrave;me que vous allez utiliser.</td> <td>Comme le triangle ABC est rectangle.</td> </tr>
<tr> <td>Donner le nom du th&eacute;or&egrave;me que vous utilisez:</td> <td>D'apr&egrave;s le th&eacute;or&egrave;me de Pythagore:</td> </tr>
<tr> <td>Citer le th&eacute;or&egrave;me en entier.</td> <td>Dans un triangle rectangle le carr&eacute; de l'hypot&eacute;nuse est &eacute;gal &agrave; la somme des carr&eacute;s des c&ocirc;t&eacute;s de l'angle droit.</td> </tr>
<tr> <td>Donner la formule brute du th&eacute;or&egrave;me de Pythagore.</td> <td>AB<sup>2</sup> + BC<sup>2</sup> = AC<sup>2</sup></td> </tr>
<tr> <td>Arranger la formule (l'&eacute;quation) pour obtenir le c&ocirc;t&eacute; recherch&eacute;.</td> <td>AC<sup>2</sup> - AB<sup>2</sup> = BC<sup>2</sup></td> </tr>
<tr> <td>Effectuer les calculs.</td> <td>$b<sup>2</sup> - $a<sup>2</sup> = BC<sup>2</sup></td> </tr>
<tr> <td></td> <td>$u - $w = $t</td> </tr>
<tr> <td>Utiliser la racine carr&eacute;.</td> <td>BC = &radic;<span class=\"racine\">$t</span></td> </tr>
<tr> <td>R&eacute;sultat:</td> <td>BC = $p</td> </tr>
<tr> <td></td> <td></td> </tr>
<tr> <td>Faire une phrase de conclusion, si besoin ne pas oublier les unit&eacute;s.</td> <td>Le c&ocirc;t&eacute; BC est &eacute;gale &agrave; $p.</td> </tr>
</table>
";
}


}


if ( $version = "reciproque" ) {

$d = htmlspecialchars(trim($_POST['d']));
$e = htmlspecialchars(trim($_POST['e']));
$f = htmlspecialchars(trim($_POST['f']));


if ($d < 0 OR $e < 0 OR $f < 0)
{
echo "
<p align=\"center\">
Erreur: une valeur n&eacute;gative a &eacute;t&eacute; entr&eacute;e. <br /> Une longueur est toujours positive.
</p>
";
}


if ($d !== "" AND $e !== "" AND $f !== "" AND $d > 0 AND $e > 0 AND $f > 0)
{
$petit = min($d,$e,$f);
$grand = max($d,$e,$f);

$moyen = ($d + $e + $f) - ($petit + $grand);

$mc = $moyen * $moyen;
$pc = $petit * $petit;

$h = trim($mc + $pc);
$r = trim($grand * $grand);


if ($h == $r) {
echo "
<table align=\"center\">
<tr> <td><h3><u>Explication:</h3></u></td> <td></td> </tr>
<tr> <td>Pr&eacute;senter le triangle dans lequel vous travaillez.</td> <td>Un triangle ABC tel que:</td> </tr>
<tr> <td></td> <td>AB = $petit &nbsp; BC = $moyen &nbsp; AC = $grand</td> </tr>
<tr> <td>Poser la question du probl&egrave;me.</td> <td>Est-ce que le triangle ABC est rectangle ?</td> </tr>
<tr> <td>Indiquer le plus grand c&ocirc;t&eacute;.</td> <td>Le plus grand c&ocirc;t&eacute; est AC.</td> </tr>
<tr> <td>Calculer le plus grand c&ocirc;t&eacute; au carr&eacute;.</td> <td>AC<sup>2</sup> = $grand<sup>2</sup> = $r</td> </tr>
<tr> <td>Calculer la somme des carr&eacute;s des 2 autres c&ocirc;t&eacute;s.</td> <td>AB<sup>2</sup> + BC<sup>2</sup> = $moyen<sup>2</sup> + $petit<sup>2</sup> = $mc + $pc = $h</td> </tr>
<tr> <td>Comparer AC<sup>2</sup> et AB<sup>2</sup> + BC<sup>2</sup> </td> <td>Donc AC<sup>2</sup> = AB<sup>2</sup> + BC<sup>2</sup></td> </tr>
<tr> <td>Donner le nom de la r&eacute;ciproque que vous utilisez.</td> <td>D'apr&egrave;s la r&eacute;ciproque du th&eacute;or&egrave;me de Pythagore:</td> </tr>
<tr> <td>Citer la r&eacute;ciproque du th&eacute;or&egrave;me de Pythagore.</td> <td>Si dans un triangle, le carr&eacute; du plus grand c&ocirc;t&eacute; est &eacute;gal &agrave; la somme</td> </tr>
<tr> <td></td> <td>des carr&eacute;s des 2 autres c&ocirc;t&eacute;s, alors ce triangle est rectangle.</td> </tr>
<tr> <td></td> <td>Le plus grand c&ocirc;t&eacute; est l'hypot&eacute;nuse.</td> </tr>
<tr> <td>Ecrire la conclusion.</td> <td>Donc le triangle ABC est rectangle.</td> </tr>
</table>
";
}
else {
echo "
<table align=\"center\">
<tr> <td><h3><u>Explication:</h3></u></td> <td></td> </tr>
<tr> <td>Pr&eacute;senter le triangle dans lequel vous travaillez.</td> <td>Un triangle ABC tel que:</td> </tr>
<tr> <td></td> <td>AB = $petit &nbsp; BC = $moyen &nbsp; AC = $grand</td> </tr>
<tr> <td>Poser la question du probl&egrave;me.</td> <td>Est-ce que le triangle ABC est rectangle ?</td> </tr>
<tr> <td>Indiquer le plus grand c&ocirc;t&eacute;.</td> <td>Le plus grand c&ocirc;t&eacute; est AC.</td> </tr>
<tr> <td>Calculer le plus grand c&ocirc;t&eacute; au carr&eacute;.</td> <td>AC<sup>2</sup> = $grand<sup>2</sup> = $r</td> </tr>
<tr> <td>Calculer la somme des carr&eacute;s des 2 autres c&ocirc;t&eacute;s.</td> <td>AB<sup>2</sup> + BC<sup>2</sup> = $moyen<sup>2</sup> + $petit<sup>2</sup> = $mc + $pc = $h</td> </tr>
<tr> <td>Comparer AC<sup>2</sup> et AB<sup>2</sup> + BC<sup>2</sup> </td> <td>Donc AC<sup>2</sup> n'est pas &eacute;gal &agrave; AB<sup>2</sup> + BC<sup>2</sup></td> </tr>
<tr> <td>Vous ne pouvez donc pas utiliser la r&eacute;ciproque du th&eacute;or&egrave;me de Pythagore.</td> <td></td> </tr>
<tr> <td>Ecrire la conclusion.</td> <td>Donc le triangle ABC n'est pas rectangle.</td> </tr>
</table>
";
}
}


}

}


if ( $mode == "avance" ) {

if ( $version == "theoreme" ) {

$a = htmlspecialchars(trim($_POST['a']));
$b = htmlspecialchars(trim($_POST['b']));
$c = htmlspecialchars(trim($_POST['c']));

$a_unit = htmlspecialchars(trim($_POST['unit_a']));
$b_unit = htmlspecialchars(trim($_POST['unit_b']));
$c_unit = htmlspecialchars(trim($_POST['unit_c']));

$calc_unit = htmlspecialchars(trim($_POST['unit_calc']));

$r_unit = htmlspecialchars(trim($_POST['unit_r']));

$arrondir = htmlspecialchars(trim($_POST['arrondir']));


switch ($a_unit)
{
case mm:
$a_unit = pow(10,-3);
break;
case cm:
$a_unit = pow(10,-2);
break;
case dm:
$a_unit = pow(10,-1);
break;
case m:
$a_unit = pow(10,0);
break;
case dam:
$a_unit = pow(10,1);
break;
case hm:
$a_unit = pow(10,2);
break;
case km:
$a_unit = pow(10,3);
break;
default:
$a_unit = pow(10,0);
break;
}

switch ($b_unit)
{
case mm:
$b_unit = pow(10,-3);
break;
case cm:
$b_unit = pow(10,-2);
break;
case dm:
$b_unit = pow(10,-1);
break;
case m:
$b_unit = pow(10,0);
break;
case dam:
$b_unit = pow(10,1);
break;
case hm:
$b_unit = pow(10,2);
break;
case km:
$b_unit = pow(10,3);
break;
default:
$b_unit = pow(10,0);
break;
}

switch ($c_unit)
{
case mm:
$c_unit = pow(10,-3);
break;
case cm:
$c_unit = pow(10,-2);
break;
case dm:
$c_unit = pow(10,-1);
break;
case m:
$c_unit = pow(10,0);
break;
case dam:
$c_unit = pow(10,1);
break;
case hm:
$c_unit = pow(10,2);
break;
case km:
$c_unit = pow(10,3);
break;
default:
$c_unit = pow(10,0);
break;
}

switch ($calc_unit)
{
case mm:
$calc_unit = pow(10,3);
$calc_unit_name = "millim&egrave;tre";
break;
case cm:
$calc_unit = pow(10,2);
$calc_unit_name = "centim&egrave;tre";
break;
case dm:
$calc_unit = pow(10,1);
$calc_unit_name = "d&eacute;cim&egrave;tre";
break;
case m:
$calc_unit = pow(10,0);
$calc_unit_name = "m&egrave;tre";
break;
case dam:
$calc_unit = pow(10,-1);
$calc_unit_name = "d&eacute;cam&egrave;tre";
break;
case hm:
$calc_unit = pow(10,-2);
$calc_unit_name = "hectom&egrave;tre";
break;
case km:
$calc_unit = pow(10,-3);
$calc_unit_name = "kilom&egrave;tre";
break;
default:
$calc_unit = pow(10,0);
$calc_unit = "m&egrave;tre";
break;
}

switch ($r_unit)
{
case mm:
$r_unit = pow(10,3);
$r_unit_result = mm;
break;
case cm:
$r_unit = pow(10,2);
$r_unit_result = cm;
break;
case dm:
$r_unit = pow(10,1);
$r_unit_result = dm;
break;
case m:
$r_unit = pow(10,0);
$r_unit_result = m;
break;
case dam:
$r_unit = pow(10,-1);
$r_unit_result = dam;
break;
case hm:
$r_unit = pow(10,-2);
$r_unit_result = hm;
break;
case km:
$r_unit = pow(10,-3);
$r_unit_result = km;
break;
default:
$r_unit = pow(10,0);
$r_unit_result = m;
break;
}


$a_m = $a * $a_unit;
$b_m = $b * $b_unit;
$c_m = $c * $c_unit;

$a_calc=$a_m*$calc_unit;
$b_calc=$b_m*$calc_unit;
$c_calc=$c_m*$calc_unit;

if ($a_m < 0 OR $b_m < 0 OR $c_m < 0)
{
echo "
<p align=\"center\">
Erreur: une valeur n&eacute;gative a &eacute;t&eacute; entr&eacute;e. <br /> Une longueur est toujours positive.
</p>
";
}

if ($b_m !== "" AND ($b_m <= $a_m OR $b_m <= $c_m))
{
echo "
<p align=\"center\">
L'hypot&eacute;nuse (AC) ne peut pas &ecirc;tre &eacute;gale ou inf&eacute;rieure &agrave; l'un des 2 autres c&ocirc;t&eacute;s.
<br />
Dans un triangle rectangle, l'hypot&eacute;nuse est toujours le plus grand c&ocirc;t&eacute;.
</p>
";
}

if ($a !== "" AND $b !== "" AND $c !== "")
{
echo "
<p align=\"center\">
Vous avez les 3 mesures des c&ocirc;tes du triangle.
<br />
Vous n'avez pas besoin d'utiliser le th&eacute;or&egrave;me de Pythagore puisque vous connaissez toutes les longueurs du triangle.
<br />
Cependant vous pouvez utiliser la r&eacute;ciproque du th&eacute;or&egrave;me de Pythagore pour savoir si le triangle est rectangle ou non.
</p>
";
}

if ( ($a_m !== "" AND !$b_m AND !$c_m) OR (!$a_m AND $b_m !== "" AND !$c_m) OR (!$a_m AND !$b_m AND $c_m !== "") )
{
echo "
<p align=\"center\">
La mesure d'un seul c&ocirc;t&eacute; du triangle rectangle ne suffit pas pour trouver la mesure d'un autre c&ocirc;t&eacute; du triangle.
<br />
Il faut au minimum 2 c&ocirc;t&eacute;s du triangle rectangle pour trouver le 3<sup>&egrave;me</sup> c&ocirc;t&eacute; du triangle rectangle.
</p>
";
}


if (!$a_m AND $b_m !== "" AND $c_m !== "" AND $b_m > $c_m AND $b_m > 0 AND $c_m > 0)
{
$y = $b_calc * $b_calc;
$z = $c_calc * $c_calc;
$x = $y - $z;
$g = sqrt($x);

$p = sqrt($b_m * $b_m - $c_m * $c_m);
$result_ab = round($p * $r_unit,$arrondir);

echo "
<table align=\"center\">
<tr> <td><h3><u>Explication:</h3></u></td> <td></td> </tr>
<tr> <td>Justifier l'emploi du th&eacute;or&egrave;me que vous allez utiliser.</td> <td>Comme le triangle ABC est rectangle.</td> </tr>
<tr> <td>Donner le nom du th&eacute;or&egrave;me que vous utilisez:</td> <td>D'apr&egrave;s le th&eacute;or&egrave;me de Pythagore:</td> </tr>
<tr> <td>Citer le th&eacute;or&egrave;me en entier.</td> <td>Dans un triangle rectangle le carr&eacute; de l'hypot&eacute;nuse est &eacute;gal &agrave; la somme des carr&eacute;s des c&ocirc;t&eacute;s de l'angle droit.</td> </tr>
<tr> <td>Donner l'unit&eacute; de mesure (facultatif), ne pas oublier de faire des conversions.</td> <td>Les calculs sont effectu&eacute;s en $calc_unit_name.</td> </tr>
<tr> <td>Donner la formule brute du th&eacute;or&egrave;me de Pythagore.</td> <td>AB<sup>2</sup> + BC<sup>2</sup> = AC<sup>2</sup></td> </tr>
<tr> <td>Arranger la formule (l'&eacute;quation) pour obtenir le c&ocirc;t&eacute; recherch&eacute;.</td> <td>AC<sup>2</sup> - BC<sup>2</sup> = AB<sup>2</sup></td> </tr>
<tr> <td>Effectuer les calculs.</td> <td>$b_calc<sup>2</sup> - $c_calc<sup>2</sup> = AB<sup>2</sup></td> </tr>
<tr> <td></td> <td>$y - $z = $x</td> </tr>
<tr> <td>Utiliser la racine carr&eacute;.</td> <td>AB = &radic;<span class=\"racine\">$x</span></td> </tr>
<tr> <td>R&eacute;sultat:</td> <td>AB = $g</td> </tr>
<tr> <td></td> <td></td> </tr>
<tr> <td>Faire une phrase de conclusion, sans oublier les unit&eacute;s.</td> <td>Le c&ocirc;t&eacute; AB est &eacute;gale &agrave; $result_ab $r_unit_result.</td> </tr>
</table>
";
}

if (!$b_m AND $a_m !== "" AND $c_m !== "" AND $a_m > 0 AND $c_m > 0)
{
$k = $a_calc * $a_calc;
$m = $c_calc * $c_calc;
$o = $k + $m;
$j = sqrt($o);

$h = sqrt($a_m * $a_m + $c_m * $c_m);
$result_ac = round($h * $r_unit,$arrondir);
echo "
<table align=\"center\">
<tr> <td><h3><u>Explication:</h3></u></td> <td></td> </tr>
<tr> <td>Justifier l'emploi du th&eacute;or&egrave;me que vous allez utiliser.</td> <td>Comme le triangle ABC est rectangle.</td> </tr>
<tr> <td>Donner le nom du th&eacute;or&egrave;me que vous utilisez:</td> <td>D'apr&egrave;s le th&eacute;or&egrave;me de Pythagore:</td> </tr>
<tr> <td>Citer le th&eacute;or&egrave;me en entier.</td> <td>Dans un triangle rectangle le carr&eacute; de l'hypot&eacute;nuse est &eacute;gal &agrave; la somme des carr&eacute;s des c&ocirc;t&eacute;s de l'angle droit.</td> </tr>
<tr> <td>Donner l'unit&eacute; de mesure (facultatif), ne pas oublier de faire des conversions.</td> <td>Les calculs sont effectu&eacute;s en $calc_unit_name.</td> </tr>
<tr> <td>Donner la formule brute du th&eacute;or&egrave;me de Pythagore.</td> <td>AB<sup>2</sup> + BC<sup>2</sup> = AC<sup>2</sup></td> </tr>
<tr> <td>Effectuer les calculs.</td> <td>$a_calc<sup>2</sup> + $c_calc<sup>2</sup> = AC<sup>2</sup></td> </tr>
<tr> <td></td> <td>$k + $m = $o</td> </tr>
<tr> <td>Utiliser la racine carr&eacute;.</td> <td>AC = &radic;<span class=\"racine\">$o</span></td> </tr>
<tr> <td>R&eacute;sultat:</td> <td>AC = $j</td> </tr>
<tr> <td></td> <td></td> </tr>
<tr> <td>Faire une phrase de conclusion, sans oublier les unit&eacute;s.</td> <td>Le c&ocirc;t&eacute; AC est &eacute;gale &agrave; $result_ac $r_unit_result.</td> </tr>
</table>
";
}

if (!$c_m AND $a_m !== "" AND $b_m !== "" AND $b_m > $a_m AND $a_m > 0 AND $b_m > 0)
{
$u=$b_calc*$b_calc;
$w=$a_calc*$a_calc;
$t=$u-$w;
$p=sqrt($t);

$s=sqrt($b_m*$b_m-$a_m*$a_m);
$result_bc=round($s*$r_unit,$arrondir);

echo "
<table align=\"center\">
<tr> <td><h3><u>Explication:</h3></u></td> <td></td> </tr>
<tr> <td>Justifier l'emploi du th&eacute;or&egrave;me que vous allez utiliser.</td> <td>Comme le triangle ABC est rectangle.</td> </tr>
<tr> <td>Donner le nom du th&eacute;or&egrave;me que vous utilisez:</td> <td>D'apr&egrave;s le th&eacute;or&egrave;me de Pythagore:</td> </tr>
<tr> <td>Citer le th&eacute;or&egrave;me en entier.</td> <td>Dans un triangle rectangle le carr&eacute; de l'hypot&eacute;nuse est &eacute;gal &agrave; la somme des carr&eacute;s des c&ocirc;t&eacute;s de l'angle droit.</td> </tr>
<tr> <td>Donner l'unit&eacute; de mesure (facultatif), ne pas oublier de faire des conversions.</td> <td>Les calculs sont effectu&eacute;s en $calc_unit_name.</td> </tr>
<tr> <td>Donner la formule brute du th&eacute;or&egrave;me de Pythagore.</td> <td>AB<sup>2</sup> + BC<sup>2</sup> = AC<sup>2</sup></td> </tr>
<tr> <td>Arranger la formule (l'&eacute;quation) pour obtenir le c&ocirc;t&eacute; recherch&eacute;.</td> <td>AC<sup>2</sup> - AB<sup>2</sup> = BC<sup>2</sup></td> </tr>
<tr> <td>Effectuer les calculs.</td> <td>$b_calc<sup>2</sup> - $a_calc<sup>2</sup> = BC<sup>2</sup></td> </tr>
<tr> <td></td> <td>$u - $w = $t</td> </tr>
<tr> <td>Utiliser la racine carr&eacute;.</td> <td>BC = &radic;<span class=\"racine\">$t</span></td> </tr>
<tr> <td>R&eacute;sultat:</td> <td>BC = $p</td> </tr>
<tr> <td></td> <td></td> </tr>
<tr> <td>Faire une phrase de conclusion, sans oublier les unit&eacute;s.</td> <td>Le c&ocirc;t&eacute; BC est &eacute;gale &agrave; $result_bc $r_unit_result.</td> </tr>
</table>
";
}

}


////////////////////////////////////////////////////////


if ( $version == "reciproque" ) {

$d = htmlspecialchars(trim($_POST['d']));
$e = htmlspecialchars(trim($_POST['e']));
$f = htmlspecialchars(trim($_POST['f']));

$d_unit = htmlspecialchars(trim($_POST['unit_d']));
$e_unit = htmlspecialchars(trim($_POST['unit_e']));
$f_unit = htmlspecialchars(trim($_POST['unit_f']));

$unit_calc_recip = htmlspecialchars(trim($_POST['unit_calc_recip']));


switch ($d_unit)
{
case mm:
$d_unit = pow(10,-3);
break;
case cm:
$d_unit = pow(10,-2);
break;
case dm:
$d_unit = pow(10,-1);
break;
case m:
$d_unit = pow(10,0);
break;
case dam:
$d_unit = pow(10,1);
break;
case hm:
$d_unit = pow(10,2);
break;
case km:
$d_unit = pow(10,3);
break;
default:
$d_unit = pow(10,0);
break;
}

switch ($e_unit)
{
case mm:
$e_unit = pow(10,-3);
break;
case cm:
$e_unit = pow(10,-2);
break;
case dm:
$e_unit = pow(10,-1);
break;
case m:
$e_unit = pow(10,0);
break;
case dam:
$e_unit = pow(10,1);
break;
case hm:
$e_unit = pow(10,2);
break;
case km:
$e_unit = pow(10,3);
break;
default:
$e_unit = pow(10,0);
break;
}

switch ($f_unit)
{
case mm:
$f_unit = pow(10,-3);
break;
case cm:
$f_unit = pow(10,-2);
break;
case dm:
$f_unit = pow(10,-1);
break;
case m:
$f_unit = pow(10,0);
break;
case dam:
$f_unit = pow(10,1);
break;
case hm:
$f_unit = pow(10,2);
break;
case km:
$f_unit = pow(10,3);
break;
default:
$f_unit = pow(10,0);
break;
}

switch ($unit_calc_recip)
{
case mm:
$calc_unit_power = pow(10,3);
$calc_recip_unit_name = "millim&egrave;tre";
break;
case cm:
$calc_unit_power = pow(10,2);
$calc_recip_unit_name = "centim&egrave;tre";
break;
case dm:
$calc_unit_power = pow(10,1);
$calc_recip_unit_name = "d&eacute;cim&egrave;tre";
break;
case m:
$calc_unit_power = pow(10,0);
$calc_recip_unit_name = "m&egrave;tre";
break;
case dam:
$calc_unit_power = pow(10,-1);
$calc_recip_unit_name = "d&eacute;cam&egrave;tre";
break;
case hm:
$calc_unit_power = pow(10,-2);
$calc_recip_unit_name = "hectom&egrave;tre";
break;
case km:
$calc_unit_power = pow(10,-3);
$calc_recip_unit_name = "kilom&egrave;tre";
break;
default:
$calc_unit_power = pow(10,0);
$calc_recip_unit = "m&egrave;tre";
break;
}


$d_convert = $d * $d_unit * $calc_unit_power;
$e_convert = $e * $e_unit * $calc_unit_power;
$f_convert = $f * $f_unit * $calc_unit_power;

if ($d_convert<0 OR $e_convert<0 OR $f_convert<0)
{
echo "
<p align=\"center\">
Erreur: une valeur n&eacute;gative a &eacute;t&eacute; entr&eacute;e. <br /> Une longueur est toujours positive.
</p>
";
}

if ($d_convert !== "" AND $e_convert !== "" AND $f_convert !== "" AND $d_convert > 0 AND $e_convert > 0 AND $f_convert > 0)
{
$petit = min($d_convert,$e_convert,$f_convert);

$grand = max($d_convert,$e_convert,$f_convert);

$moyen = ($d_convert + $e_convert + $f_convert) - ($petit + $grand);

$mc = $moyen * $moyen;
$pc = $petit * $petit;

$h = trim($mc + $pc);
$r = trim($grand * $grand);

if($h == $r)
{
echo "
<table align=\"center\">
<tr> <td><h3><u>Explication:</h3></u></td> <td></td> </tr>
<tr> <td>Pr&eacute;senter le triangle dans lequel vous travaillez.</td> <td>Un triangle ABC tel que:</td> </tr>
<tr> <td></td> <td>AB = $petit &nbsp; BC = $moyen &nbsp; AC = $grand</td> </tr>
<tr> <td>Poser la question du probl&egrave;me.</td> <td>Est-ce que le triangle ABC est rectangle ?</td> </tr>
<tr> <td>Indiquer le plus grand c&ocirc;t&eacute;.</td> <td>Le plus grand c&ocirc;t&eacute; est AC.</td> </tr>
<tr> <td>Donner l'unit&eacute; de mesure (facultatif), ne pas oublier de faire des conversions.</td> <td>Les calculs sont effectu&eacute;s en $calc_recip_unit_name.</td> </tr>
<tr> <td>Calculer le plus grand c&ocirc;t&eacute; au carr&eacute;.</td> <td>AC<sup>2</sup> = $grand<sup>2</sup> = $r</td> </tr>
<tr> <td>Calculer la somme des carr&eacute;s des 2 autres c&ocirc;t&eacute;s.</td> <td>AB<sup>2</sup> + BC<sup>2</sup> = $moyen<sup>2</sup> + $petit<sup>2</sup> = $mc + $pc = $h</td> </tr>
<tr> <td>Comparer AC<sup>2</sup> et AB<sup>2</sup> + BC<sup>2</sup> </td> <td>Donc AC<sup>2</sup> = AB<sup>2</sup> + BC<sup>2</sup></td> </tr>
<tr> <td>Donner le nom de la r&eacute;ciproque que vous utilisez.</td> <td>D'apr&egrave;s la r&eacute;ciproque du th&eacute;or&egrave;me de Pythagore:</td> </tr>
<tr> <td>Citer la r&eacute;ciproque du th&eacute;or&egrave;me de Pythagore.</td> <td>Si dans un triangle, le carr&eacute; du plus grand c&ocirc;t&eacute; est &eacute;gal &agrave; la somme</td> </tr>
<tr> <td></td> <td>des carr&eacute;s des 2 autres c&ocirc;t&eacute;s, alors ce triangle est rectangle.</td> </tr>
<tr> <td></td> <td>Le plus grand c&ocirc;t&eacute; est l'hypot&eacute;nuse.</td> </tr>
<tr> <td>Ecrire la conclusion.</td> <td>Donc le triangle ABC est rectangle.</td> </tr>
</table>
";
}
else
{
echo "
<table align=\"center\">
<tr> <td><h3><u>Explication:</h3></u></td> <td></td> </tr>
<tr> <td>Pr&eacute;senter le triangle dans lequel vous travaillez.</td> <td>Un triangle ABC tel que:</td> </tr>
<tr> <td></td> <td>AB = $petit &nbsp; BC = $moyen &nbsp; AC = $grand</td> </tr>
<tr> <td>Poser la question du probl&egrave;me.</td> <td>Est-ce que le triangle ABC est rectangle ?</td> </tr>
<tr> <td>Indiquer le plus grand c&ocirc;t&eacute;.</td> <td>Le plus grand c&ocirc;t&eacute; est AC.</td> </tr>
<tr> <td>Donner l'unit&eacute; de mesure (facultatif), ne pas oublier de faire des conversions.</td> <td>Les calculs sont effectu&eacute;s en $calc_recip_unit_name.</td> </tr>
<tr> <td>Calculer le plus grand c&ocirc;t&eacute; au carr&eacute;.</td> <td>AC<sup>2</sup> = $grand<sup>2</sup> = $r</td> </tr>
<tr> <td>Calculer la somme des carr&eacute;s des 2 autres c&ocirc;t&eacute;s.</td> <td>AB<sup>2</sup> + BC<sup>2</sup> = $moyen<sup>2</sup> + $petit<sup>2</sup> = $mc + $pc = $h</td> </tr>
<tr> <td>Comparer AC<sup>2</sup> et AB<sup>2</sup> + BC<sup>2</sup> </td> <td>Donc AC<sup>2</sup> n'est pas &eacute;gal &agrave; AB<sup>2</sup> + BC<sup>2</sup></td> </tr>
<tr> <td>Vous ne pouvez donc pas utiliser la r&eacute;ciproque du th&eacute;or&egrave;me de Pythagore.</td> <td></td> </tr>
<tr> <td>Ecrire la conclusion.</td> <td>Donc le triangle ABC n'est pas rectangle.</td> </tr>
</table>
";
}
}

}

}

?>