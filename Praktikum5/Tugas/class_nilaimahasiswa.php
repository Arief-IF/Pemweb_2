<<<<<<< HEAD
<?php
class NilaiMahasiswa {
    public $matakuliah;
    public $nilai;
    public $nim;

    // Construct
    function __construct($matakuliah, $nilai, $nim) {
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    // Method hasil ujian
    function hasilujian() {
        if ($this->nilai >= 0 && $this->nilai <= 35) {
            return 'E';
        } else if ($this->nilai > 35 && $this->nilai <= 55) {
            return 'D';
        } else if ($this->nilai > 55 && $this->nilai <= 69) {
            return 'C';
        } else if ($this->nilai > 69 && $this->nilai <= 84) {
            return 'B';
        } else if ($this->nilai > 84 && $this->nilai <= 100) {
            return 'A';
        } else {
            return 'SALAH INPUT';
        }
    }

    // Method grade
    function grade() {
        if ($this->nilai >= 0 && $this->nilai <= 56) {
            return 'TIDAK LULUS';
        } else if ($this->nilai > 56 && $this->nilai <= 100) {
            return 'LULUS';
        } else {
            return 'SALAH INPUT';
        }
    }

}

?>
=======
<?php
class NilaiMahasiswa {
    public $matakuliah;
    public $nilai;
    public $nim;

    // Construct
    function __construct($matakuliah, $nilai, $nim) {
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    // Method hasil ujian
    function hasilujian() {
        if ($this->nilai >= 0 && $this->nilai <= 35) {
            return 'E';
        } else if ($this->nilai > 35 && $this->nilai <= 55) {
            return 'D';
        } else if ($this->nilai > 55 && $this->nilai <= 69) {
            return 'C';
        } else if ($this->nilai > 69 && $this->nilai <= 84) {
            return 'B';
        } else if ($this->nilai > 84 && $this->nilai <= 100) {
            return 'A';
        } else {
            return 'SALAH INPUT';
        }
    }

    // Method grade
    function grade() {
        if ($this->nilai >= 0 && $this->nilai <= 56) {
            return 'TIDAK LULUS';
        } else if ($this->nilai > 56 && $this->nilai <= 100) {
            return 'LULUS';
        } else {
            return 'SALAH INPUT';
        }
    }

}

?>
>>>>>>> 07b8eaeebec8dea3be910399a48989fa0c3cf2e0
