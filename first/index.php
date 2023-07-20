<?php
//echo "Hello world!";

//$_first = 15;
//echo $_first ;
//$First = 15; //case senstive
//echo $First;

//concatination

//$fName="Praveen";
//$LName=" Bhardwaj";
//echo $fName.$LName." Hello!"; //raw string also concanated
 

//oprator in php

//1 arthmatic oprator

//addition

//$a=5;
//$b=10;
//$add =$a+$b;
//echo "addition :".$add;

// subtraction

//$a=10;
//$b=7;
//$sub =$a-$b;
//echo " \n subtration :".$sub;

//multiplication

//$a=10;
//$b=7;
//$mul =$a*$b;
//echo "\n multiply :".$mul;

//division

//$a=10;
//$b=7;
//$div =$a/$b;
//echo "\r division :".$div;  

//modules

//$a=20;
//$b=9;
//$mod =$a%$b;
//echo "\r modulus :".$mod;

//increiment

//$mod++;
//echo "\n incriment of mod  :". $mod;

//decreiment

//$mod--;
//echo "\n decriment of mod  :". $mod;

//2 Comparision oprator

//equal

//$x=5;
//$y=6;
//var_dump($x==$y);

//not equal

//$x=6;
//$y=6;
//var_dump($x!=$y);


//greater than

//$x=7;
//$y=9;
//var_dump($x>$y);

//less than

//$x=7;
//$y=9;
//var_dump($x<$y);

//greaterthan equal to

//$x=10;
//$y=10;
//var_dump($x>=$y);

//less then equal to

//$x=1;
//$y=1;
// var_dump($x<=$y);


//3 logical oprator

//AND oprator

//$a=1;//true
//$b=0;//false
//$c=$a && $b;
//var_dump($c);

//OR oprator

//$a=1;
//$b=0;//
//$c=$a || $b;
//var_dump($c);

// complimentry

//$a=1;//true
//$c=!$a;
//var_dump($c);//always give opposite answer

//ternary oprator

//$a=5;
//$a <7 ? $flag="yes" : $flag="no";
//var_dump($flag);

//4  assigenment oprator

//simple assignment

//$a=5;
//$b=6;
//echo $a."\n";
//$a += $b;
//echo $a."\n";

//subtarct assigin
//$a=9;
//$b=7;
//echo $a."\n";
//$a -= $b;
//echo $a."\n";

//multiplicaton assigne
//$a=9;
//$b=7;
//echo $a."\n";
//$a *= $b;
//echo $a."\n";

//division assign
//$a=9;
//$b=7;
//echo $a."\n";
//$a /= $b;
//echo $a."\n";

// mode assigne

//$a=9;
//$b=7;
//echo $a."\n";
//$a %= $b;
//echo $a."\n";


//condional statement

//if  condition

//$age=10;
//if($age>=18){
  //  echo "Yes you can vote";
    
//}else{
  //  echo"No you dont vote";
//}

//nested if else

// $age=1;
// if($age >=18){
//     echo"you can Vote";
// }else if($age==17){
//     echo"Wait for 1 more year";

// }else if($age==16){
//     echo"Wait for 2 more year";
// }else{
//     echo"No you dont vote";
// }


//nested if

// $age=65;
// if($age>=18){
//     if($age<=65){
//         echo"Yoc can vote";
//     }else{
//         echo"Yoc cannot vote anymore";
//     }
// }else{
//     echo"you don't vote";
// }

  
//index array

// $arr1= array("car1","car2","car3");
// $arr1[3]="car4";//append one more data on the array
// echo"<pre>";
// print_r($arr1);
// echo"<\pre>"; 

//echo $arr1[2];//accces singal string from array

//associat array

//  $arr2=array('Name' => 'Praveen Bharadwaj',
//              'College' => 'Bansal institute of engineering and technology',
//               'Age'=> 22,
//               'Stutus'=> true,  
//               'Contact'=> array('1234567890', '121314151617'),//multidimenssion array
// );

// $arr2['Test']='Testing';
// echo"<pre>";
// print_r($arr2);
// echo"<\pre>"; 

// //second way of create an array
// $arr3=[1,2,3,4=>[41,42,43=> [431,432,433],] //multi dimention array with assosiative array
// ,5];
// print_r($arr3);

//function

// function greet(){
//     echo"Hello World!";
    //return;
// }
// greet();

//function with return type

// function greet(){
//     return "Hello World!";
// }
// echo greet();



//pre definde array fun implimentation

// $arr1=array(
//             "A"=>"Car1",
//             "B"=>"Car2",
//             "C"=>"Car3",
//             "D"=>"Car4",
//             "E"=>"Car5",
//             "F"=>"Car6",
//             "G"=>"Car6",
//             "H"=>"Car6",
// );

// // echo array_search('Car4', $arr1);//search
// echo"<pre>";
// print_r($arr1);

// "</pre>";

//check array hai ki nahi

// if(is_array($arr1)){
//     echo"Yes, this is array";
// }else{
//     echo"No this not Array";
// }


//slicing in array
// print_r(array_slice($arr1, 1));


//chuked array


//echo"<pre>";
// $chunked = array_chunk($arr1,2);
// print_r($chunked);

//echo"</pre>";

//pop function
// echo"<pre>";
// $poped=array_pop($arr1);
// echo $poped;
// echo"</pre>";

//pup function



// array_push($arr1,"Car7");

// echo"<pre>";
// print_r($arr1);
// echo"</pre>";


//keys function

// echo"<pre>";
// print_r(array_keys($arr1));
// echo"</pre>";


// key exist

// var_dump(array_key_exists("H", $arr1));


//count funtion

// echo count($arr1);


//count c=values
//print_r(array_count_values($arr1));


//merge function (two array merge)


// $car1=array(
//     "Car1",
//     "Car2",
//     "Car3",
//     "Car4",
//     "Car5",
   
// );
// echo"<pre>";
//  print_r($car1);
//  echo"</pre>";

// $car2=array(
//     "Car6",
//     "Car7",
//     "Car8",
//     "Car9",
//     "Car10",
   
// );
// echo"<pre>";
//  print_r($car2);
//  echo"</pre>";

//  $cars=array_merge($car1,$car2);//merge function apply
//  echo"<pre>";
//  print_r($cars);
//  echo"</pre>";


//user definde function

// function p($data){
//   echo"<pre>";
//   print_r($data);
//   echo"</pre>";
// }
// $x=array(
//       "Car1",
//       "Car2",
//       "Car3",
//       "Car4",
//       "Car5",
     
//   );
//   p($x);

//   $y=array(
//     "Car11",
//     "Car22",
//     "Car33",
//     "Car44",
//     "Car55",
   
// );
// p($y);

//lop in php

//1->while looop

// $i=1;
// $num=2;
// while($i<=10){
//   //echo"Hello!<br/>";
//   echo $num."*". $i. "=". $i*$num."<br/>";
//   $i++;
// }
// echo"loop ends";


//1->for looop

// for($i=0; $i<=10;$i++){
//   echo $i."<br/>";
// }

//1->do while looop

// $i=0;
// do{
//   echo $i."<br/>";
//   $i++;
// }while($i<1);{

// }


//4-> for each looop

// $arr=["HTML" => 1000,
//       "CSS"=> 1200,
//       "JS"=>1500,
//       "PHP"=>2000,
//       "LARABELL"=>2000];

//       echo "<pre>";
//       print_r($arr);
//       echo "</pre>";

//       foreach($arr as $course=> $fees){
//         echo"The fees of $course is Rs $fees <br/>";
//       };

//break statement



// $i=1;
// while($i<10){
//   if($i==5){
//     break;
//   }
//   echo $i."<br/>";
//   $i++;
// }
// echo "Loops ends";

//sum number
// $sum=0;
// $i=1;
// while($i<10){
//   $sum+=$i;
//   if($sum >10){
//     break;
//   }
//   echo $i."<br/>";
//   $i++;
// }
// echo $sum;


//continue statement

//skip even number
// $count=0;
// for($i=0; $i<=10;$i++){
//   if($i%2 !=0){
//     continue;
//   }
//   $count++;
//   echo $i."<br/>";  
  
// }
// echo"----------</br>";
//   echo $count;

// switch statement

// $age=8 8;

// switch($age){
//   case ($age>=18 && $age<=65):
//     echo"Yes , you can vote";
//     break;

//     default:
//     echo"No, You Don't Vote";
//     break;
// }


//recursson in function

// function countNum($start){
 
//   if($start <10){
//     echo "$start<br/>";
//     $start++;
//     countNum($start);
//   }else{
//     return;
//   }
// }
// countNum(1);



//Implodae and explode methode in php


//Implodae
//eg 1
// $arr=['1','2','3','4'];

// $str=implode(" ", $arr);
// echo $str;

//eg2
// $arr=["Hello","Everyone","How","are","you!!"];
// echo"<pre>";
// print_r($arr);
// echo"<pre>";

// $str= implode(" ", $arr);
// // $str= implode("-", $arr); 
// // $str= implode("+", $arr);
// echo $str;

//explode
//eg 1
// $str="A,B,C,D";
// echo "$str <br/>";
// echo "<pre>";
// $arr= explode(',', $str);
// print_r($arr);

//eg 2
// $str="hello Everyone  How are you!";
// echo "$str <br/>";
// echo "<pre>";
// $arr= explode(' ', $str,3);
// print_r($arr);




//CASE CHANGING METHOD IN PHP

//conver all string in lowercse

// $str="Hello guyS i M PRAVEEN";
// echo strtolower($str);//return all strng in small

//conver all string in uppercse

// $str="Hello guyS i m praveen";
// echo strtoupper($str);

//first letter lower case 
// $str="Hello guyS i m praveen";
// echo lcfirst($str);


//first letter upper case
// $str="hello guyS i m praveen";
// echo ucfirst($str);

//all wor having first lettter upper
// $str="hello guys i m praveen";
// echo ucwords($str);

//replace method

// $str="Praveen Bhardwaj";
// echo "$str<br/>";
// echo str_replace('Bhardwaj',' ', $str);

//reverse string method

// $str="Praveen Bhardwaj";
// echo strrev($str);
// echo strrev("HELLO");


// sub strin in php

// $demo ="HELLO WORLD!
// Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore, facilis quasi laudantium, dolorem earum dicta distinctio repellendus quia vel cum, reprehenderit exercitationem fugiat id. Reprehenderit exercitationem sit a quis minima.";
// echo substr($demo, 0,140);

// echo "<br/>".$demo;


// $demo="My name is Praven bhardwaj";
// echo "word in string=". str_word_count($demo)."<br/>";//count word

// echo "lettter in string=". strlen($demo);
// echo str_repeat("hello",10);//repeat function


//random function in php

// echo rand(100, 1020);


//CEIL and FLOOR method in php

// $a=6/5;
// echo "original answer= ".$a."<br/>";
// echo "by ceil= ". ceil($a)."<br/>";//push upper side
// echo "by floor= ".floor($a);//push lower side


//POW AND SQRT function in php


//pow function
// echo pow(2,2);

//sqrt function
// echo sqrt(1024);

//date set and get function in php
// date_default_timezone_set("ASIA/KOLKATA");
// echo "<pre>";
// print_r(getdate());
// $d=getdate();
// echo $d['minutes'];

//date and time function in php

// echo time()/60/60/24/365;//retuen answer in second and calculate from 01/01/1970
// date_default_timezone_set("ASIA/KOLKATA");
// echo date('d-D-M-Y-h:i:s:a');

  
// include function








?>