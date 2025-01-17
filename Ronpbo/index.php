<?php 
 
 $image_path = "Chihiro.jpg"; // Nama file gambar
 ?>
 <h1> Nama : Imron Sulistio
    Nim : 42423007
 </h1>
 <img src="<?php echo htmlspecialchars($image_path); ?>" 
      alt="Gambar Chihiro" 
      width="200" 
      style="margin-bottom: 50px;">
 <br>
 

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PBO</title>
<head>
    <title>Pemrograman Berorientasi Objek</title>
    <style>
        table {
            width: 25%;
            border-collapse: collapse;
            margin: 15px 0;
        }

        table, th, td {
            border: 1px solid black;
        }

        th {
            padding: 5px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    
    <h1 align="left">Pemrograman Berorientasi Objek</h1>
    <p>Jika Anda pernah mendengar istilah ini tapi belum benar-benar paham apa maksudnya, Anda berada di tempat yang
        tepat. PBO adalah salah satu pendekatan paling populer dan efektif dalam pemrograman, terutama ketika kita
        berbicara tentang pengembangan perangkat lunak skala besar dan kompleks.
    </p>

    <h1 align="left">Pengertian</h1>
    <p>Pemrograman Berorientasi Objek (PBO) atau Object-Oriented Programming (OOP) adalah paradigma pemrograman yang
        menggunakan "objek" sebagai unit dasar dari program yang dikembangkan. Paradigma ini dirancang untuk
        menyederhanakan pemodelan sistem perangkat lunak yang kompleks dengan cara memetakan konsep dunia nyata ke dalam
        program komputer.
    </p>

    <h1 align="left">Bahasa Pemrograman yang Mendukung</h1>
    <p>Macam-Macam Bahasa Pemrograman Terbaik untuk Dipelajari:</p>
    <ul>
        <li>Python</li>
        <li>C#</li>
        <li>C++</li>
        <li>JavaScript</li>
        <li>PHP</li>
        <li>Swift</li>
        <li>Java</li>
        <li>Go</li>
        <li>SQL</li>
        <li>Ruby</li>
    </ul>

    <h1>Membuat Tabel Kategori Produk</h1>

    <table>
        <tr>
            <th>NO</th>
            <th>KATEGORI PRODUK</th>
            <th>NAMA PRODUK</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Bumbu dapur</td>
            <td>Garam</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Bumbu dapur</td>
            <td>Cabe</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bumbu dapur</td>
            <td>Lengkuas</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Bumbu dapur</td>
            <td>Terasi</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Sembako</td>
            <td>Beras</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Sembako</td>
            <td>Minyak goreng</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Sembako</td>
            <td>Gula pasir</td>
        </tr>
    </table>

    <h1>Membuat Tabel Produk</h1>

    <table>
        <tr>
            <th>NO</th>
            <th>PRODUK</th>
            <th>STOCK</th>
            <th>HARGA</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Garam</td>
            <td>10</td>
            <td>7000</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Cabe</td>
            <td>10</td>
            <td>25000</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Lengkuas</td>
            <td>10</td>
            <td>12000</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Terasi</td>
            <td>10</td>
            <td>35000</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Beras</td>
            <td>10</td>
            <td>13000</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Minyak goreng</td>
            <td>10</td>
            <td>15000</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Gula pasir</td>
            <td>10</td>
            <td>13000</td>
        </tr>
    </table>
    <?php
    ?>
    <h1>Pertemuan ke 2</h1>
    <?php
// pertemuan ke-2
class buah {
    //properties
    public $nama;
    public $warna;

    // methods
    function set_name($nama){

        $this->nama = $nama;
    }
    function get_name(){
        return $this->nama;
    }
}

$apel = new buah();
$pisang = new buah();
$apel -> set_name('apel');
$pisang -> set_name('pisang');

echo $apel->get_name();
echo "<br>";
echo $pisang->get_name();
echo "<br>";
?>
    <h1>Pertemuan ke 3</h1>
    <?php
// pertemuan ke-3
class mobil {
    // Properties
    public $nama;
    public $warna;

    // Methods
    function set_name($nama) {
        $this->nama = $nama;
    }

    function get_name() {
        return $this->nama;
    }

    function set_warna($warna) {
        $this->warna = $warna;
    }

    function get_warna() {
        return $this->warna;
    }
}

// Membuat objek dari kelas mobil
$toyota = new mobil();

// Mengatur nama
$toyota->set_name('toyota');
$toyota->set_warna('Biru Metalik');

// Menampilkan nama 
echo "Nama : " . $toyota->get_name();
echo "<br>";
echo "Warna : " . $toyota->get_warna();
echo "<br>";

class nama {
    public $nama;
    public $tinggi;
    public $kulit;

    function __construct($nama, $tinggi, $kulit) {
        $this->nama = $nama;
        $this->tinggi = $tinggi;
        $this->kulit = $kulit;
    }
    function __destruct() {
       echo "Mahasiswa tersebut bernama {$this->nama}, Tinggi Badan {$this->tinggi}, dan Warna kulit {$this->kulit}."; 
    }
}
$nama = new nama("Imron Sulistio", "161 cm", "Sawo Matang");
echo "<br>";
$nama = new nama("Seva Khairul Rohman","164", "Sawo Matang");
echo "<br>";
$nama = new nama("Ian Gerald Putra Manlimas","163", "Sawo Matang");
echo "<br>";
?>
<?php 
?>
<h1>Constructor dan Destructor</h1>
<?php
// Constructor
// Constructor adalah method khusus yang dijalankan secara otomatis saat sebuah objek dibuat (misalnya, saat perintah new dijalankan). Biasanya digunakan untuk:

// Memberi nilai awal pada properti.
// Memanggil method internal.
// Melakukan proses lain untuk mempersiapkan objek


class Mahasiswa {
    public $namam;
    public $tinggis;
    public $warnaKulitt;

    // Constructor
    public function __construct($namam, $tinggis, $warnaKulitt) {
        $this->nama = $namam;
        $this->tinggi = $tinggis;
        $this->warnaKulit = $warnaKulitt;
    }

    public function tampilkanInfo() {
        echo "Mahasiswa tersebut bernama {$this->nama}, Tinggi Badan {$this->tinggi} cm, dan Warna Kulit {$this->warnaKulit}.<br>";
    }
}

// Membuat objek dengan constructor
$namam1 = new Mahasiswa("Ahmad Sulistiyo", 170, "Sawo Matang");
$namam2 = new Mahasiswa("Angga", 165, "Kuning Langsat");
$namam3 = new Mahasiswa("Farel", 175, "Putih");

$namam1->tampilkanInfo();
$namam2->tampilkanInfo();
$namam3->tampilkanInfo();

//Destructor
//Destructor adalah method khusus yang dijalankan secara otomatis saat sebuah objek dihapus, atau saat halaman PHP selesai diproses. Dalam PHP, destructor ditulis dengan method __destruct().


class Mahasiswaw {
    public $namak;

    // Constructor
    public function __construct($namamk) {
        $this->nama = $namamk;
        echo "Objek {$this->nama} telah dibuat.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Objek {$this->nama} telah dihapus.<br>";
    }
}

// Membuat dan menghancurkan objek
$namamk = new Mahasiswaw("Ahmad Sulistiyo");
unset($namamk); // Menghapus objek secara manual
?>
<?php

// Fungsi CRUD
echo "<br>";
?>
<h1> Fungsi CRUD</h1>

<img src="screenshot (2).png" alt="CRUD">
<img src="screenshot (3).png" alt="CRUD">
<img src="screenshot (4).png" alt="CRUD">
<img src="screenshot (5).png" alt="CRUD">
<img src="screenshot (6).png" alt="CRUD">
<img src="screenshot (7).png" alt="CRUD">
<img src="screenshot (8).png" alt="CRUD">
<img src="screenshot (9).png" alt="CRUD">
<img src="screenshot (10).png" alt="CRUD">
<img src="screenshot (11).png" alt="CRUD">
<img src="screenshot (12).png" alt="CRUD">
<img src="screenshot (13).png" alt="CRUD">
<img src="screenshot (14).png" alt="CRUD">
<img src="screenshot (15).png" alt="CRUD">
<img src="screenshot (16).png" alt="CRUD">
<img src="screenshot (17).png" alt="CRUD">
<img src="screenshot (18).png" alt="CRUD">
<img src="screenshot (19).png" alt="CRUD">
   </body>
</html>
