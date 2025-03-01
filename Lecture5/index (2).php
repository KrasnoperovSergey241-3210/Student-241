<?php
    $c = 7;
    $b = 6;
    $a = &$c; // жесткая ссылка

    function f(&$s) {
        ++$s;
    }

    echo $b."<BR>";
    f($b);
    echo $b."<BR>";

    $g = 10; // символическая ссылка
    $z = 'g';

    echo $$z.'<BR>';

    $f=5; $h=2; $j = 1;

    list($f, $h, $j) = F1($f, $h, $j);

    print "f=$f, h=$h, j=$j<BR>";

    function F1($d, $e, $o) {
        $d++; $e--; $o++; // переменные локальные - не меняют переменные снаружи
        return array($d, $e, $o);
    }

    $t=50; $x=20; $y=10;

    function F2(&$m, &$o, &$n) {
        $m++; $o--; $n++; // ссылки глобальные - меняют переменные снаружи
    }

    F2($t, $x, $y);

    print "t=$t, x=$x, y=$y<BR>";

    $func = 'sin';

    $u = 30;

    $e = $u/180*pi();

    $w = $func($e);

    print "$func($u<sup>o</sup>) = $w<BR>";

    eval("\$w = $func($e);");

    echo $w.'<BR>';

    echo '<a href="index.php?FIO=Пётр&x=20">Link</a><BR>';

    if (!empty($_GET)) {
        foreach($_GET as $z=>$value) {
            eval("\$$z = '$value';");
        }
        echo "Имя = $FIO. Оклад=$value";
    }

    //1



    //21

    //
?>