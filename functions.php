<?php
/**
 * @param $array
 * @param bool $bool
 * @return string
 */
function int_arr($array){
    foreach ($array as $value){
        if(!is_numeric($value)){
            return false;
        }
    }
    return true;
}


function task1($array, $bool = false){
    if($bool){
        $str = '';
        foreach ($array as $value){
             $str = $str.' '.$value;
        }
        return $str;
    } else {
        foreach ($array as $value){
            echo '<p>'.$value.'</p>';
        }
    }
}

function task2($array,$op){
    $m = ['+','-','*','/'];
    if((!is_array($array))||(!in_array($op,$m))||(!int_arr($array))) {
        echo 'Некорректные параметры ввода';
    } else {
        
		$str = implode($op, $array);
        eval('$res = ' . $str . ';');
        echo $res;
    }
}


/**/


function task3(){
    $array = func_get_args();
    $op = $array[0];
    unset($array[0]);
    $m = ['+','-','*','/'];
    if((!in_array($op,$m))||(!int_arr($array))){
        echo 'Некорректные параметры';
    } else {
        $str = implode($op, $array);
        eval('$res = ' . $str . ';');
        echo $str.' = '.$res;
    }
}


function task4($num1,$num2){
    $num1 = abs($num1);
    $num2 = abs($num2);
    if(is_numeric($num1)&&is_numeric($num2)&&(!is_float($num1+$num2))){
        echo '<table border = "1">';
        for ($n = 1; $n < $num1 + 1; $n++){
            echo '<tr>';
            for($i = 1; $i < $num2 +1; $i++){
                echo '<td>'.$i.'*'.$n.'='.$i*$n.'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }else{
        echo 'Неверные параметры ввода';
    }
}

function task5($str){
    $str = strtolower($str);
    $str = str_replace(" ","",$str);
	$str1 = strrev($str);
    if($str===$str1){
	    return true;
	} else {
	    return false;
	}
		
}
function task ($result){
    if($result === true){
        echo 'Эта строка палиндром';
    } else {
        echo 'Эта строка не палиндром';
    }
		
}

function task6(){
    $time = getdate();
    echo $time['mday'].'.'.$time['mon'].'.'.$time['year'].' '.$time['hours'].':'.$time['minutes'].'<br>';
    $date = '24.02.2016 00:00:00';
    echo $timestamp = strtotime($date);
}

function task7($str,$symb1,$symb2){
    $str = str_replace($symb1,$symb2,$str);
    return $str;
}
function task8($file){
    readfile($file);

}
function task9($handle, $str){
    file_put_contents($handle, $str);
}
