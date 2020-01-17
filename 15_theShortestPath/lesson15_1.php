<?php

//一维数组key表示到达目的点
$collectPath = [
    'b' =>[
        's_b' => 0.3,
    ],
    'd' => [
        's_d' => 0.4,
    ],
    'a' =>[
        's_a' => 0.5,
        'b_a' => 0.2,
    ],
    'c' =>[
        's_c' => 0.2,
        'd_c' => 0.1,
    ],
    'f' =>[
        'b_f' => 0.1,
        'c_f' => 0.4,
    ],
    'h' =>[
        'c_h' => 0.8,
        'd_h' => 0.6,
        'f_h' => 0.2,
    ],
    'e' =>[
        'a_e' => 0.3,
        'f_e' => 0.1,
    ],
    'g' =>[
        'e_g' => 0.1,
        'h_g' => 0.4,
    ],
];
// 得出最短路径的数组
$ret = [];
// O(n)的时间复杂度
foreach($collectPath as $end => $selectPath){
    foreach($selectPath as $path => $distance){
        $start = explode('_',$path)[0];
        if($start == 's'){
            $ret[$path] = $distance;
        }else{
            $prePath = 's_'.$start;
            $wholePath = 's_'.$end;

            $wholeDistance = $ret[$prePath] + $distance;

            if(!isset($ret[$wholePath])){
                $ret[$wholePath] = $wholeDistance;
            }else{
                $ret[$wholePath] = $ret[$wholePath] < $wholeDistance ? $ret[$wholePath] : $wholeDistance;
            }
        }
    }
}

var_dump($ret);

