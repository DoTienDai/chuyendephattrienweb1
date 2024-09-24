<?php
declare(strict_types=1);

require_once 'A.php'; 
require_once 'B.php'; 
require_once 'C.php'; 
require_once 'I.php'; 

class Demo {
    
    public function typeXReturn($x, $y): string {
        $result = "";

        if ($x instanceof I) {
            $result .= "X implements interface I. ";
            $x->f(); 
        } else {
            $result .= "X is not an instance of I. ";
        }

        if ($y instanceof A) {
            $result .= "Y is an instance of class A. ";
            $y->a1(); 
        } elseif ($y instanceof B) {
            $result .= "Y is an instance of class B. ";
            $y->b1();
        } elseif ($y instanceof C) {
            $result .= "Y is an instance of class C. ";
            $y->f(); 
        } else {
            $result .= "Y is not an instance of A, B, or C. ";
        }

        return $result;
    }
}

$demo = new Demo();

$aObj = new A();
$bObj = new B();
$cObj = new C();
$nullObj = null; 

$objects = [
    'A' => $aObj,
    'B' => $bObj,
    'C' => $cObj,
    'I' => new class implements I { 
        public function f(): void { 
            echo "This is function f from interface I.\n"; 
        } 
    },
    'Null' => $nullObj
];

$results = [];

foreach ($objects as $xKey => $xObj) {
    foreach ($objects as $yKey => $yObj) {
      
        $result = $demo->typeXReturn($xObj, $yObj);
        $results[] = [$xKey, $yKey, $result];
    }
}


foreach ($results as $result) {
    echo "X: {$result[0]}, Y: {$result[1]}, Result: {$result[2]}\n";
}
?>
