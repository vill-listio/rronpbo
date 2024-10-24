<? 
 $image_path = "C:\xampp\htdocs\Ronpbo\Chihiro.jpg";
         ?>
         

        <img src="<?php echo $image_path; ?>"
        alt="Chihiro.jpg" width="200" style="margin-bottom: 50px;">
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

   </body>
</html>
