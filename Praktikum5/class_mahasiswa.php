<<<<<<< HEAD
<?php

class Mahasiswa {
    //Property
    public $ipk;
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;

    //Method
    function __construct($_nim, $_nama){
        $this->nim = $_nim;
        $this->nama = $_nama;
    }

    function predikat_ipk(){
        if($this->ipk < 2.0){
            return 'CUKUP';
        }
        elseif($this->ipk >= 2.0 && $this->ipk < 3.0){
            return 'BAIK';
        }
        elseif($this->ipk >= 3.0 && $this->ipk < 3.75){
            return 'MEMUASKAN';
        }
        elseif($this->ipk >= 3.75 && $this->ipk <= 4.0){
            return 'CUM LAUDE';
        }
        else {
            return 'NILAI DILUAR JANGKAUAN';
        }
    }

}   

// Instance Object Mahasiswa
$mahasiswa1 = new Mahasiswa('0110223262', 'Arief Ichwan Fanani');
$mahasiswa1->ipk = 4.0;
$mahasiswa1->prodi = 'Teknik Informatika';
$mahasiswa1->angkatan = 2023;
$predikat = $mahasiswa1->predikat_ipk();

=======
<?php

class Mahasiswa {
    //Property
    public $ipk;
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;

    //Method
    function __construct($_nim, $_nama){
        $this->nim = $_nim;
        $this->nama = $_nama;
    }

    function predikat_ipk(){
        if($this->ipk < 2.0){
            return 'CUKUP';
        }
        elseif($this->ipk >= 2.0 && $this->ipk < 3.0){
            return 'BAIK';
        }
        elseif($this->ipk >= 3.0 && $this->ipk < 3.75){
            return 'MEMUASKAN';
        }
        elseif($this->ipk >= 3.75 && $this->ipk <= 4.0){
            return 'CUM LAUDE';
        }
        else {
            return 'NILAI DILUAR JANGKAUAN';
        }
    }

}   

// Instance Object Mahasiswa
$mahasiswa1 = new Mahasiswa('0110223262', 'Arief Ichwan Fanani');
$mahasiswa1->ipk = 4.0;
$mahasiswa1->prodi = 'Teknik Informatika';
$mahasiswa1->angkatan = 2023;
$predikat = $mahasiswa1->predikat_ipk();

>>>>>>> 07b8eaeebec8dea3be910399a48989fa0c3cf2e0
?>