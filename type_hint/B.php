<?php
declare(strict_types=1);
require_once 'I.php';

class B implements I {
    public function f(): void {
        echo "This is function f from class B.\n";
    }

    public function b1(): void {
        echo "This is function b1 from class B.\n";
    }
}
?>
