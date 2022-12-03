<?php
    class siswa{
        public $nama;
        private const kelas = '11';
        public static $jurusan;

        function __construct($jurusan){
            self::$jurusan = $jurusan;
        }
        public function setNamaSiswa($nama){
            $this->nama = $nama;
        }
        public function getNamaSiswa(){
            return $this->nama;
        }
        function __destruct(){
            echo 'Nama : ' . $this->nama . '<br>';
            echo 'Kelas : ' . self::kelas . '<br>';
            echo 'Jurusan : ' . self::$jurusan . '<br>';
        }
        
    }
?>