<<<<<<< HEAD
<?php

class Lingkaran {
    // Property
    private $jari;
    const PHI = 3.14;

    // Method
    function __construct($r){
        $this->jari = $r;
    }

    function getLuas(){
        return self::PHI * $this->jari * $this->jari;
    }

    function getkeliling(){
        return 2 * self::PHI * $this->jari;
    }
}

// Instance Object
$lingkaran1  = new Lingkaran(10);
echo 'Luas Lingkaran1 = ' . $lingkaran1->getLuas();
echo '<br> Keliling Lingkaran1 = ' . $lingkaran1->getkeliling();
=======
<?php

class Lingkaran {
    // Property
    private $jari;
    const PHI = 3.14;

    // Method
    function __construct($r){
        $this->jari = $r;
    }

    function getLuas(){
        return self::PHI * $this->jari * $this->jari;
    }

    function getkeliling(){
        return 2 * self::PHI * $this->jari;
    }
}

// Instance Object
$lingkaran1  = new Lingkaran(10);
echo 'Luas Lingkaran1 = ' . $lingkaran1->getLuas();
echo '<br> Keliling Lingkaran1 = ' . $lingkaran1->getkeliling();
>>>>>>> 07b8eaeebec8dea3be910399a48989fa0c3cf2e0
?>