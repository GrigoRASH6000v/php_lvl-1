<?php
/*
//Первое задание
    function sum($arg1, $arg2){
        return $arg1+$arg2;
    }
    function diff($arg1, $arg2){
        return $arg1-$arg2;
    }
    function comp($arg1, $arg2){
        return $arg1*$arg2;
    }
    function div($arg1, $arg2){
        return $arg1/$arg2;
    }
    
    function calc($arg1, $arg2){
        if($arg1>=0 && $arg2>=0){
            return diff($arg1, $arg2);
        }elseif($arg1<0 && $arg2<0){
            return comp($arg1, $arg2);
        }else{
            return sum($arg1, $arg2);
        }
    }   

    echo calc(rand(-100,100),rand(-100,100));
//Второе задание
    $a=rand(0,15);

    switch($a){
        case 0:
            echo $a++."<br>";
        case 1:
            echo $a++."<br>";
        case 2:
            echo $a++."<br>";
        case 3:
            echo $a++."<br>";
        case 4:
            echo $a++."<br>";
        case 5:
            echo $a++."<br>";
        case 6:
            echo $a++."<br>";
        case 7:
            echo $a++."<br>";
        case 8:
            echo $a++."<br>";
        case 9:
            echo $a++."<br>";
        case 10:
            echo $a++."<br>";
        case 11:
            echo $a++."<br>";
        case 12:
            echo $a++."<br>";
        case 13:
            echo $a++."<br>";
        case 14:
            echo $a++."<br>";
        case 15:
            echo $a++."<br>";
    }
    //Третье задание выполнено в первом задании
    //Четвёртое задание
    function mathOperation($arg1, $arg2, $operation){
        switch($operation){
            case "+":
                echo sum($arg1, $arg2);
            break;
            case "-":
                echo diff($arg1, $arg2);
            break;
            case "*":
                echo comp($arg1, $arg2);
            break;
            case "/":
                echo div($arg1, $arg2);
            break;
        }
    }
    //Пятое задание
    // Уже сделано в шаблоне
    // Шестое задание
    
    // function power($val, $pow){
    //     $x=$val*$val;
    //     $pow--;
    //    if($pow==0){
    //        return $x; 
    //    }else{
    //        power($val, $pow);
    //    }
    // }

    
    function power($val, $pow, $x){
            $x+=$val*$val."<br>";
         if($pow==0){
             return $x;   
         }
         power($val, $pow-1, $x);
     }
     $result = power(5, 5, 0);
     echo $result;
    //Шестое задание
    /*
     1 - а
     2 - ы
     3 - ы
     4 - ы
     5 -.
     6-.
     7-.
     8-.
     9-.
     10.

     1-.
     2-а
     3-а
     4-а
     5-ов
     6-ов
     7-ов
     8-ов
     9-ов

    */
    function timeIn(){
        $h="";
        $m="";
        $minut1 = (string)date("i");
        if(date("H")>4){
            $h="ов";
        }elseif(date("H")<5 && date("H")!=1){
            $h="а";
        }
        if($minut1{strlen($minut1)-1}==1){
            $m="а";
        }elseif($minut1{strlen($minut1)-1}>1 && $minut1{strlen($minut1)-1}<5){
            $m="ы";
        }
        return date("H час$h i минут$m");
    }
    echo timeIn();
    // $promo5 = date("i") ;
    // $promo7 = (string)$promo5;

    // echo $promo7{strlen($promo7)-1};
?>