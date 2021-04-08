<!DOCTYPE html>
<html>
<head>
<script>"https://code.jquery.com/jquery-3.5.1.js"</script>
<script>"https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.layer_top{
position: absolute;
width: 100%;
height: 79px;
left: 342px;
top: 0px;
background-color: black;
border-color: #CCAC02;

}
.layer_left{
position: absolute;
width: 315px;
height: 100%;
left: 0px;
top: 98px;
background-color: black;
border-color: #CCAC02;
}
.layer_inventory{
position: absolute;
width: 1107px;
height: 79px;
left: 0px;
top: 0px;
background-color: black;
border-color: #CCAC02;
}
.layer_beranda{
position: absolute;
width: 100%;
height: 100%;
left: 341px;
top: 98px;
border-color: #CCAC02;
background-color: #3F3E39;
}
.layer_forms{
position: absolute;
width: 100%;
height: 25px;
left: 0px;
top: 0px;
background-color: #CCAC02;
border-color: #CCAC02;

}
a{
position: absolute;
width: 326px;
height: 65px;
left: 3px;
top: 13px;

font-family: PT Serif;
font-style: normal;
font-weight: normal;
font-size: 45px;
line-height: 60px;
text-align: center;

color: #CCAC02;
}

b{
position: absolute;
width: 920.65px;
height: 60px;
left: 250px;
top: 13px;

font-family: PT Serif;
font-style: normal;
font-weight: normal;
font-size: 40px;
line-height: 53px;
display: flex;
align-items: center;
text-align: center;

color: #CCAC02;
}
p{
position: absolute;
width: 824px;
height: 396px;
left: 200px;
top: 200px;

font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 32px;
line-height: 37px;
display: flex;
align-items: center;

color: #CCAC02;
}

.b1{
width: 316px;
height: 35px;
left: 50px;
font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 23px;
line-height: 27px;
border-radius: 5px;
border-color: white;
background-color: #CCAC02;
padding-right:166px;
}
.b2{
width: 316px;
height: 35px;
left: 50px;
font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 23px;
line-height: 27px;
border-radius: 5px;
border-color: white;
background-color: #CCAC02;
padding-right:100px;
}
.b3{
width: 316px;
height: 35px;
left: 50px;
font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 23px;
line-height: 27px;
border-radius: 5px;
border-color: white;
background-color: #CCAC02;
padding-right:43px;
}
.b4{
width: 78px;
height: 28px;
margin-left: 1100px;
margin-top: 25px;
font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 15px;
line-height: 18px;
border-radius: 15px;
border-color: white;
background-color: #CCAC02;
}
.f{
width: 65.52px;
left: 50px;
top: 5px;

font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 23px;
line-height: 27px;
color: #000000;
}
.sb{
position: absolute;
width: 338px;
height: 42px;
left: 20px;
top: 40px;

font-family: Fira Sans;
font-style: normal;
font-weight: 800;
font-size: 35px;
line-height: 42px;
color: #CCAC02;
}
.b5{
    position: absolute;
width: 190px;
height: 41px;
left: 20px;
top: 110px;

font-family: Fira Sans;
font-style: normal;
font-weight: 800;
font-size: 18px;
line-height: 22px;
border-radius: 5px;
border-color: white;
background-color: #CCAC02;
}
.b6{
    position: absolute;
width: 190px;
height: 41px;
left: 223px;
top: 110px;

font-family: Fira Sans;
font-style: normal;
font-weight: 800;
font-size: 18px;
line-height: 22px;
border-radius: 5px;
border-color: white;
background-color: #B0C673;
}
.DP{
position: absolute;
left: 15px;
top: 6px;
font-family: Fira Sans;
font-style: normal;
font-weight: bold;
font-size: 22px;
line-height: 26px; 
}
.box_DP{
position: absolute;
width: 1168px;
height: 43px;
left: 20px;
top: 170px;

background: #C6E275;
border: 3px solid white;
box-sizing: border-box;
border-radius: 7px;
}
.tabel1{
    position: absolute;
width: 1168px;
height: 30%;
left: 20px;
top: 530px;
background-color: #D1C99B;
border-color: black;
}
.t1{
top: 15px;
}
.tp{
    position: absolute;
width: 763px;
height: 389px;
left: 20px;
top: 100px;
background: #F4EDC5;
border-radius: 7px;
border-color: #CCAC02;
}
.box-TT{
    position: absolute;
width: 242px;
height: 28px;
left: 20px;
top: 25px;
background-color: #ED614E;
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 6px;
}
.TT{
    position: absolute;
width: 217px;
height: 27px;
left: 30px;
top: 0px;

font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 22px;
line-height: 26px;

color: #000000;
}
.label-tanggal{
    position: absolute;
width: 65px;
height: 22px;
left: 20px;
top: 63px;

font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 21px;

color: #000000;
}
.tanggal{
    position: absolute;
width: 281px;
height: 28px;
left: 396px;
top: 63px;
background: rgba(252, 249, 238, 0.92);
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 6px;
}
.label-namabarang{
    position: absolute;
width: 109px;
height: 22px;
left: 20px;
top: 106px;

font-family: Fira Sans;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 22px;
/* identical to box height */


color: #000000;
}
.namabarang{
    position: absolute;
width: 281px;
height: 28px;
left: 396px;
top: 106px;
background: rgba(252, 249, 238, 0.92);
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 6px;
}
.label-pemasok{
    position: absolute;
width: 75px;
height: 22px;
left: 20px;
top: 149px;

font-family: Fira Sans;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 22px;
/* identical to box height */


color: #000000;
}
.pemasok{
    position: absolute;
width: 281px;
height: 28px;
left: 396px;
top: 149px;
background: rgba(252, 249, 238, 0.92);
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 6px;
}
.label-nota{
    position: absolute;
width: 69px;
height: 22px;
left: 20px;
top: 192px;

font-family: Fira Sans;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 22px;
/* identical to box height */


color: #000000;
}
.nota{
    position: absolute;
width: 281px;
height: 28px;
left: 396px;
top: 192px;
background: rgba(252, 249, 238, 0.92);
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 6px;
}
.label-jumlah{
    position: absolute;
width: 200px;
height: 22px;
left: 20px;
top: 235px;

font-family: Fira Sans;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 22px;
/* identical to box height */


color: #000000;
}
.jumlah{
    position: absolute;
width: 281px;
height: 28px;
left: 396px;
top: 235px;
background: rgba(252, 249, 238, 0.92);
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 6px;
}
.label-bayar{
    position: absolute;
width: 200px;
height: 22px;
left: 20px;
top: 278px;

font-family: Fira Sans;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 22px;
/* identical to box height */


color: #000000;
}
.cb1{
    position: absolute;
width: 19.04px;
height: 18px;
left: 404px;
top: 278px;
}
.cb2{
    position: absolute;
width: 19.04px;
height: 18px;
left: 531px;
top: 278px;
}
.tunai{
    position: absolute;
width: 44px;
height: 21px;
left: 436px;
top: 278px;

font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 21px;
/* identical to box height */


color: #000000;
}
.kredit{
    position: absolute;
width: 48px;
height: 21px;
left: 563px;
top: 278px;

font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 21px;
/* identical to box height */


color: #000000;
}
.label-harga{
    position: absolute;
width: 111px;
height: 22px;
left: 20px;
top: 321px;

font-family: Fira Sans;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 22px;
/* identical to box height */


color: #000000;
}
.harga{
    position: absolute;
width: 281px;
height: 28px;
left: 397px;
top: 321px;

background: rgba(252, 249, 238, 0.92);
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 6px;
}
.simpan2{
    position: absolute;
width: 95px;
height: 29px;
left: 582px;
top: 364px;
background: #CCAC02;
border-radius: 6px;
}
</style>
</head>
<body>
<fieldset class="layer_inventory">
    <a>INVENTORY</a>
</fieldset>
<fieldset class="layer_left">
<div>
    <button type="submit" id="Home" value="Home" class="b1">
    <i class="fa fa-home"></i>
    Home </button><br>
    
    </div>
    <button type="submit" id="ManageData" value="ManageData" class="b2">
    <i class="fa fa-tasks"></i>
    Manage Data </button><br>
    <button type="submit" id="TransaksiBarang" value="TransaksiBarang" class="b3">
    <i class="fa fa-exchange"></i>
    Transaksi Barang
    <i class="fa fa-angle-down"></i>
    </button><br>
    <button type="submit" id="StockBarang" value="StockBarang" class="b2">
    <i class="fa fa-cubes"></i>
    Stok Barang </button><br>
</picture>
</fieldset>
<fieldset class="layer_top">
    <button type="submit" id="logout" value="Logout" class="b4">logout </button>
    <b>Martabak Anugrah Koga Kedaton</b>
</fieldset>
<div>

<fieldset class="layer_beranda">
<div class="sb">Transaksi Pembelian</div>
<fieldset class="tp">
<fieldset class="box-TT">
<div class="TT"> Tambah Transaksi</div>
</fieldset>
        
            <label for="tanggal" id="label-tanggal" class="label-tanggal" >Tanggal</label>
            <input type="text" name="user" id="user" class="tanggal">
			<br><br>
            <label for="namabarang" id="label-namabarang" class="label-namabarang">Nama Barang</label>
			<input type="alamat" name="Alamat" id="Alamat" class="namabarang">
			<br><br>
            <label for="pemasok" id="label-pemasok" class="label-pemasok" >Pemasok</label>
            <input type="text" name="user" id="user" class="pemasok">
			<br><br>
            <label for="nota" id="label-nota" class="label-nota" >No Nota</label>
            <input type="text" name="user" id="user" class="nota">
			<br><br>
            <label for="jumlah" id="label-jumlah" class="label-jumlah" >Jumlah Barang</label>
            <input type="text" name="user" id="user" class="jumlah">
			<br><br>
            <label for="bayar" id="label-bayar" class="label-bayar">Cara Bayar</label>
            <input type="radio"  name="optradio" class="cb1">
            <label class="tunai">
            Tunai
            </label>
            <input type="radio" name="optradio" class="cb2">
            <label class="kredit">
                Kredit
            </label>
            <br><br>
            <label for="user" id="label-user" class="label-harga" >Harga Beli Rp</label>
            <input type="text" name="user" id="user" class="harga">
			<br><br>
			<button type="submit" id="simpan" value="simpan" class="simpan2">simpan</button>
</fieldset>
    <table id="example" class="tabel1" border="2">
            <thead>
            <tr></tr>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kategori Barang</th>
                    <th>Pemasok</th>
                    <th>Stok</th>
                    <th>Satuan</th>
                </tr>
            </thead>
            <tbody>
            <?php

for($i = 0; $i < 10; $i++){
    echo "<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>";
}

?>
            </tbody>
        </table>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>      
</fieldset> 
</div>
</body>
</html>