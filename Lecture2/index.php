<?php
    $arr = [2, 'r', 6, 8];
    for ($i = 0; $i < sizeof($arr); $i++) {
        echo $arr[$i].' ';
    }

    $arr2['a'] = 2;
    $arr2['b'] = 'r';
    $arr2['c'] = 6;
    $arr2['d'] = 8;
    echo $arr2[2].'<BR>';

    var_dump($arr2);
    echo '<BR>';

    for ($i = 0; $i < sizeof($arr2); $i++) {
        echo $arr2[$i].' ';
    }

    $arr3 = {
        i => 2,
        'b' => 'r',
        'c' => 6,
        4 => 8
    };

    foreach($arr3 as $elem) {
        echo "$elem ";
    };

    $a = array(1, 2);
    $b = arrY(3, 4);
    printr($a+$b);

    $d {
        'a' => 'f';
        3 => 'c';
        '4' => 1
    };

    print_r($c);
    echo '<BR>';
    print_r($d);
    echo '<BR>';
    print_r($c+$d);

    $f = $d;
    print_r($f == $d);

    var_dump($a == $b);

    $e = array(1, 2);
    $g = array(2, 1);

    var_dump($e == $g);

    $arr_2 = [
        1 => [1, 2, 3],
        'd' => [5, 6, 'g', 'i'],
        3 => [5, 7, 8, 9]
    ];

    foreach($arr_2 as $arr_new) {
        foreach($arr_new as $elem) {
            echo "$elem, ";
        }
        echo "<BR>";
    }

    function f($first, $second): int
    {
        $sum = $first + $second;
        return $sum
    }

    echo f(3, 4);

    function f2(1, 2): int
    {
        global $global;
        $global = $first2 + $second2;
        return $global
    }

    echo $global;

    // Лаба 2

    // #1

    $letters = ['a', 'b', 'c', 'b', 'a'];
    function f_counter_a($letters) {
        $counter_a = 0;
        foreach($letters as $elem) {
            if ($elem == 'a') {
                $counter_a++;
            }
        }
        return $counter_a;
    }

    function f_counter_b($letters) {
        $counter_b = 0;
        foreach($letters as $elem) {
            if ($elem == 'b') {
                $counter_b++;
            }
        }
        return $counter_b;
    }

    function f_counter_c($letters) {
        $counter_c = 0;
        foreach($letters as $elem) {
            if ($elem == 'c') {
                $counter_c++;
            }
        }
        return $counter_c;
    }

    print_r(f_counter_a($letters));
    print_r(f_counter_b($letters));
    print_r(f_counter_c($letters));

    // #2

    $array_num_2 = [
        'a' => 1,
        'b' => 2,
        'c' => 3
    ];

    var_dump(array_flip($array_num_2));

    // #3

    $array_num_3 = [1, 2, 3, 4, 5];

    var_dump(array_reverse($array_num_3));

    // #4

    $array_num_4_1 = ['a', 'b', 'c'];
    $array_num_4_2 = [1, 2, 3];
    var_dump(array_combine($array_num_4_1, $array_num_4_2));

    // #5

    $array_num_5 = [
        'a' => 1,
        'b' => 2,
        'c' => 3
    ];

    $keys = array_keys($array_num_5);
    $values = array_values($array_num_5);

    var_dump($keys);
    var_dump($values);

    // #6

    $array_num_6 = ['a', 'b', 'c', 'd', 'e']
    var_dump(array_map('strtoupper', $array_num_6));
?>