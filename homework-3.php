<?php
    header("Content-Type: text/html; charset=utf-8");
//1е задание

/*
while($i<=100){
    $i++;
    if($i%3==0){
        echo $i.'<br>';
    }
}


//2е задание


$i=0;
do{
    
    if($i==0){
        echo $i." ноль.".'<br>'; 
    }elseif($i%2==0){
        echo $i." четное число.".'<br>';
    }elseif($i%2!=0){
        echo $i." нечетное число.".'<br>';
    }
    $i++;
}while($i<=10)


//3е задание
    $cities = [
        "Амурская область"=>[
            "Алгач",
            "Алексеевка",
            "Амаранка",
            "Амурское",
            "Анновка",
            "Аносовский",
            "Антоновка",
            "Апрельский",
            "Арга",
            "Аркадьевка",
            "Арсентьевка",
            "Архара",
            "БАМ",
            "Безозерное",
            "Беленький",
            "Белогорск"
        ],
        "Брянская область"=>[
            "Азаровка",
            "Акуличи",
            "Аладьино",
            "Алейниково",
            "Алексеева",
            "Алексеевка",
            "Алешенка",
            "Алешенка",
            "Алешенка",
            "Алешковичи",
            "Алтухово",
            "Алымово",
            "Андреевка",
            "Андрейковичи",
            "Антоновка",
            "Ардонь",
            "Аркино"
        ],
    ];
foreach($cities as $subject => $city){
    $str=implode(",",$city);
    echo $subject .": <br>".$str."<br>";
}
*/

//4е задание

$letterTrans = [
    "а"=>"a",
    "б"=>"b",
    "в"=>"v",
    "г"=>"g",
    "д"=>"d",
    "е"=>"e",
    "ё"=>"yo",
    "ж"=>"zh",
    "з"=>"z",
    "и"=>"i",
    "й"=>"j",
    "к"=>"k",
    "л"=>"l",
    "м"=>"m",
    "н"=>"n",
    "о"=>"o",
    "п"=>"p",
    "р"=>"r",
    "с"=>"s",
    "т"=>"t",
    "у"=>"u",
    "ф"=>"f",
    "х"=>"x",
    "ц"=>"c",
    "ч"=>"ch",
    "ш"=>"sh",
    "щ"=>"shch",
    "Ъ"=>"\"",
    "у"=>"u",
    "ь"=>"'",
    "э"=>"e",
    "ю"=>"yu",
    "я"=>"ya"
];
function trans ($wordString, $dictionary){
    $latinVal =[];
    $rusValue =[];
    foreach($dictionary as $key1 => $value1){
        $latinVal[] = $value1;
        $rusValue[] =  $key1;
    }
    return str_ireplace($rusValue, $latinVal, mb_strtolower($wordString));
}

//5е задание

function fix($strTest){
   return str_replace(" ", "_", $strTest);
}

//6е задание 

$menuArr = [
    "Каталог"=>["Бытовая технмка", "Компьютеры", "Телефоны"],
    "Контакты",
    "Блог",
    "О нас"
];

function render($arr){
    $marking .="<ul>";
               
    foreach($arr as $key => $elem){
        if(!is_array($elem)){
            $marking.="<li><a href='#'>$elem</a></li>";
        }else{
            $marking.="<li><a href='#'>".$key.render($elem)."</a></li>";
        }
    }
    return  $marking.="</ul>";
}

//7е задание
//for($i=1; $i<10; print($i++)){}
//9е задание 
//echo trans(fix("съешь еще этих мягких французских булок да выпей чаю"), $letterTrans);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <?php echo render($menuArr)?>
        </nav>
    </header>
</body>
</html>