<!DOCTYPE html>
<html>
<head>
    <title>INFINITY.ID</title>
    <style type="text/css">
        .wrap {
            width: 1200px;
            margin: 35px 85px;
        }
        /*Awal Header*/
        .wrap .logo{
            background : black;
            height: 140px;
            width: 250px;
            border-style: groove;
            border-width: 2px;
            float: left;
        }
        .wrap .header{
            background : darkMagenta;
            height: 140px;
            width: 900px;
            border-style: groove;
            border-width: 2px;
            float: left;
        }
        .tanggal{
            color: white;
            text-align: right;
            padding-right: 20px;
        }
        /*Akhir Header*/
        /*Awal Body*/
        .wrap .sidebar{
            background : #00FFF7;
            padding-top: 50px;
            height: 400px;
            width: 250px;
            border-style: groove;
            border-width: 2px;
            float: left; 
        }
        .wrap .sidebar ul li{ 
            padding: 10px;
        }
        .wrap .content{
            background : white;
            padding-top: 50px;
            height: 400px;
            width: 900px;
            border-style: groove;
            border-width: 2px;
            float: left;
            overflow-y:auto;
            overflow-x:scroll;
        }
        /*Akhir Body*/
        /*Awal Footer*/
        .wrap .footer{
            background : #36FF00;
            padding-left: 20px;
            padding-top: 5px;
            height: 30px;
            width: 1135px;
            border-style: groove;
            border-width: 2px;
            float: left;
        }
        /*Akhir Footer*/
        img{
            height: 150px;
            width: 200px;
            padding-left: 20px;
        }
        h1{
            padding-left: 300px;
            font-size: 40px;
            padding-top: 10px;
            color: white;
            font-family: monospace;
        }
        
    </style>
</head>
<body background="background.jfif">
    <div class="wrap">
        <div class="logo">          
            <img src="Unity.png">
        </div>
        <div class="header">          
            <h1>INFINITY.ID</h1>
            <div class="tanggal">
                <?php
                    // Tanggal hari ini
                    echo date('d F Y');
                ?> 
            </div> 
        </div>         
        <div class="sidebar">
            <ul>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=beranda">Home</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=pendaftaran">Pendaftaran</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=idealBB">Mengukur Berat Badan Ideal</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=usia">Menghitung Kategori Usia</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=persegiPanjang">Menghitung Persegi Panjang</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=segitiga">Menghitung Segi Tiga</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=daftarMhs">Daftar Mahasiswa</a></li>              
            </ul>
        </div>
        <div class="content"><center>
            <?php
            // Bagian Home By : Wahyu Aditya
            if (@$_GET['op'] == "beranda")
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <h2>Welcome To INFINITY.ID</h2>
            <table>
                <tr><td>Nama</td><td>:</td><td>Wahyu Adi Tya</td></tr>
                <tr><td>NIM</td><td>:</td><td>11180910000030</td></tr>
                <tr><td>Prodi</td><td>:</td><td>Teknik Informatika (3B)</td></tr>
                <tr><td></a></td></tr>
                </table>
                <p>Thank You :)</p> 
            </form>

            <?php
            }
            // Bagian Pendaftaran By : Wahyu Aditya
            else if (@$_GET['op'] == "pendaftaran")
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=pendaftaran">
                <table border="1" cellpadding="10px">
                  <tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama" size="30"></td></tr>
                  <tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="tempat" size="30"></td></tr>
                  <tr><td>Tanggal Lahir</td><td>:</td>
                    <td>
                      <select name="tanggal">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                      <select name="bulan">
                        <option value="Januari">01</option>
                        <option value="Februari">02</option>
                        <option value="Maret">03</option>
                        <option value="April">04</option>
                        <option value="Mei">05</option>
                        <option value="Juni">06</option>
                        <option value="Juli">07</option>
                        <option value="Agustus">08</option>
                        <option value="September">09</option>
                        <option value="Oktober">10</option>
                        <option value="November">11</option>
                        <option value="Desember">12</option>
                      </select>
                      <select name="tahun">
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                      </select>
                    </td>
                  </tr>
                  <tr><td>Alamat</td><td>:</td><td><textarea name="alamat" rows="10" cols="20"></textarea></td></tr>
                  <tr><td>Jenis Kelamin</td><td>:</td><td><input type="radio" name="sex" value="Laki-laki">Laki-laki<input type="radio" name="sex" value="Perempuan">Perempuan</td></tr>
                  <tr><td>Asal Sekolah</td><td>:</td><td><input type="text" name="sekolah" size="30"></td></tr>
                  <tr><td>Nilai UAN</td><td>:</td><td><input type="text" name="nilai" size="30"></td></tr>
                </table>
                <input type="reset" name="reset" value="Hapus"><input type="submit" name="submit" value="Submit">
            </form>
             
            <?php
            }
            // Bagian mengukur berat badan ideal By : Wahyu Aditya
            else if (@$_GET['op'] == "idealBB")
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=idealBB">
            <table>
				<h2>Silahkan Cek Berat Badan Anda Di Sini</h2>
                <tr><td>Masukkan Tinggi Badan Anda</td><td>:</td><td><input type="text" name="tb"></td><td>Cm</td></tr>
                <tr><td>Masukkan Berat Badan Anda</td><td>:</td><td><input type="text" name="bb"></td><td>Kg</td></tr>
                <tr><td></td><td></td><td><input type="submit" name="Submit" value="Submit"></td></tr>
            </table>
            </form>

            <?php
            }
            // Bagian menghitung kategori usia By : Wahyu Aditya
            else if (@$_GET['op'] == "usia")
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=usia">
                <table>
				<h2>Ketahui Kategori Usia Anda Di Sini</h2>
                    <tr><td>Usia Anda</td><td>:</td><td><input type="text" name="yo"></td><td>Tahun</td></tr>
                    <tr><td></td><td></td><td><input type="submit" name="Submit" value="Submit"></td></tr>
                </table>
            </form>

            <?php
            }
            // Bagian menghitung persegi panjang By : Wahyu Aditya
            else if (@$_GET['op'] == "persegiPanjang")
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=persegiPanjang">
                <table>
				<h2>Cara Mudah Menghitung Luas Persegi Panjang</h2>
                  <tr><td>Masukkan Panjang Persegi Panjang</td><td>:</td><td><input type="text" name="panjang"></td></tr>
                  <tr><td>Masukkan Lebar Persegi Panjang</td><td>:</td><td><input type="text" name="lebar"></td></tr>  
                </table>
                <input type="reset" name="reset" value="Reset"> <input type="submit" name="submit" value="Submit"> 

            </form>

            <?php
            }
            // Bagian menghitung segitiga By : Wahyu Aditya
            else if (@$_GET['op'] == "segitiga")
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=segitiga">
                <table>
				<h2>Cara Mudah Menghitung Luas Segitiga</h2>
                  <tr><td>Masukkan Alas Segitiga</td><td>:</td><td><input type="text" name="alas"></td></tr>
                  <tr><td>Masukkan Tinggi Segitiga</td><td>:</td><td><input type="text" name="tinggi"></td></tr>  
                </table>
                <input type="reset" name="reset" value="Reset"> <input type="submit" name="submit" value="Submit"> 

            </form>

            <?php
            }
            // Bagian menampilkan table database By : Wahyu Aditya
            else if (@$_GET['op'] == "daftarMhs")
            {
            ?>
             
            <?php
                $servername = "localhost";
                $username = "admin";
                $password = "qwerty";
                $dbname = "universitas";
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                if (!$connection){
                        die("Connection Failed:".mysqli_connect_error());
                    }
                $query = mysqli_query($connection,"SELECT * FROM mahasiswa");
                ?>

                <form action="" method="post">
                    <table border="1" cellpadding="0" cellspacing="0">
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jurusan</th>
                            <th>IPK</th>
                        </tr>
                        <?php if(mysqli_num_rows($query)>0){ ?>
                        <?php
                            $no = 1;
                            while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $data["nim"];?></td>
                            <td><?php echo $data["nama"];?></td>
                            <td><?php echo $data["tempat_lahir"];?></td>
                            <td><?php echo $data["tanggal_lahir"];?></td>
                            <td><?php echo $data["jurusan"];?></td>
                            <td><?php echo $data["ipk"];?></td>
                        </tr>
                        <?php $no++; } ?>
                        <?php } ?>
                    </table>
                </form>
             
            <?php
            }
            //Dibawah ini berisi data dan proses untuk setiap bagian By : Wahyu Aditya
            if (@$_GET['show'] == "idealBB")
            { 
              $tinggi=$_POST['tb'];
                $berat=$_POST['bb'];
                $persen=($tinggi-100)*0.1;
                $ideal=($tinggi-100)-$persen;
                    if($berat <= $ideal+2 && $berat >= $ideal-2)
                    {
                    echo "<p>Berat Badan Anda Ideal.</p>";
                    }else
                    {
                    echo "<p>Berat Badan Anda Tidak Ideal.</p>";
                    }
            }elseif (@$_GET["show"] == "usia") {
                $usia=$_POST['yo'];
                    if($usia >= 0 && $usia <= 5.5)
                    {
                        echo "<p>Status : Balita.</p>";
                    }else if($usia > 5.5 && $usia <= 16.5)
                    {
                        echo "<p>Status : Anak-anak.</p>";
                    }else if($usia > 16.5 && $usia <= 50.5)
                    {
                        echo "<p>Status : Dewasa.</p>";
                    }else if($usia > 50.5)
                    {
                        echo "<p>Status : Lansia.</p>";
                    }else
                    {
                        echo "<p>Status usia tidak di temukan!</p>";
                    }
            }elseif (@$_GET["show"] == "pendaftaran") {
                $namaLengkap = $_POST['nama'];  // membaca input dari komponen nama
                $tempatLahir = $_POST['tempat'];
                $tanggalLahir = $_POST['tanggal'];
                $bulanLahir = $_POST['bulan'];
                $tahunLahir = $_POST['tahun'];
                $alamatAnda = $_POST['alamat'];  // membaca input dari komponen alamat
                $kelaminAnda = $_POST['sex'];  // membaca input dari komponen jk
                $asalSekolah = $_POST['sekolah'];
                $nilaiUAN = $_POST['nilai'];
                $tbtLahir;
                echo "<table>";
                echo "<tr><td>Terima Kasih $namaLengkap Sudah Mengisi Form Pendaftaran</tr></td>";
                echo "<tr><td>Nama Lengkap</td><td>:</td><td>".$namaLengkap."</td></tr>";
                echo "<tr><td>Tempat Lahir</td><td>:</td><td>".$tempatLahir."</td></tr>";
                echo "<tr><td>Tanggal Lahir</td><td>:</td><td>".$tanggalLahir."-".$bulanLahir."-".$tahunLahir."</td></tr>";
                echo "<tr><td>Alamat Rumah</td><td>:</td><td>".$alamatAnda."</td></tr>";
                echo "<tr><td>Jenis Kelamin</td><td>:</td><td>".$kelaminAnda."</td></tr>";
                echo "<tr><td>Asal Sekolah</td><td>:</td><td>".$asalSekolah."</td></tr>";
                echo "<tr><td>Nilai UAN</td><td>:</td><td>".$nilaiUAN."</td></tr>";
                echo "</table>";
            }elseif (@$_GET["show"] == "persegiPanjang") {
                function luas_persegiPanjang($panjang,$lebar)
                {
                  $hasil = $panjang*$lebar;
                  echo "<p>Panjang Persegi Panjang adalah <b>".$panjang."</b> </p>";
                  echo "<p>Lebar Persegi Panjang adalah <b>".$lebar."</b> </p>";
                  echo "<p>Luas Persegi Panjang adalah <b>".$hasil."</b> </p>";
                }
                  $panjang = $_POST['panjang'];
                  $lebar = $_POST['lebar'];
                  luas_persegiPanjang($panjang, $lebar);
            }elseif (@$_GET["show"] == "segitiga") {
                function luas_segitiga($alas,$tinggi)
                {
                  $hasil = ($alas/2)*$tinggi;
                  echo "<p>Alas Segitiga adalah <b>".$alas."</b> </p>";
                  echo "<p>Tinggi Segitiga adalah <b>".$tinggi."</b> </p>";
                  echo "<p>Luas Segitiga adalah <b>".$hasil."</b> </p>";
                }
                  $alas = $_POST['alas'];
                  $tinggi = $_POST['tinggi'];
                  luas_segitiga($alas, $tinggi);
            }
            ?>
        </center></div>
        <div class="footer">
            Copyright 2019 By Wahyu Aditya
        </div>
    </div>
</body>
</html>