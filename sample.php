<?php
class Person {
    public $firstName;
    public $lastName;

    public static $count = 0;
    
    public function __construct($hoge, $fuga){
        $this->firstName = $hoge;
        $this->lastName = $fuga;
        Person::$count++;
    }
    
    public function fullName(){
        return $this->firstName . "・" . $this->lastName;
    }
    
    public static function resetCount(){
        Person::$count = 0;
    }
}

echo Person::$count;
echo "\n";

$var1 = new Person("Taro", "Tanaka");
$var2 = new Person("Jiro", "Sato");
$var3 = new Person("Jiro", "Yoshi");

echo Person::$count;
echo "\n";

Person::resetCount();
echo Person::$count;
echo "\n";

// echo $var1->fullName();
// echo "\n";
// echo $var2->fullName();
// echo "\n";




class And_ {
  
  public function And($array1,$array2){
    foreach ($array1 as $value1) {
      foreach ($array2 as $value2) {
        if ($value1 == $value2) {
          echo $value1 . ",";
        }
      }
    }
  }
  
  public function notAnd($array1,$array2){
    $uniqueValues1 = array_diff($array1, $array2); // $array1にのみ含まれる値を取得する
    $uniqueValues2 = array_diff($array2, $array1); // $array2にのみ含まれる値を取得する

    $diffValues = array_merge($uniqueValues1, $uniqueValues2); // 2つの配列をマージする

    foreach ($diffValues as $value) {
      echo $value . ",";
    }
  }
}

$a = new And_;

$a->And([1,2,3,4,5],[4,5,6,7]);
echo "\n";
$a->notAnd([1,2,3,4,5],[4,5,6,7]);

