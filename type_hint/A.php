<?php
declare(strict_types=1);
require_once 'I.php';

class A implements I {
    public function f(): void {
        echo "This is function f from class A.\n";
    }

    public function a1(): void {
        echo "This is function a1 from class A.\n";
    }
}
?>
