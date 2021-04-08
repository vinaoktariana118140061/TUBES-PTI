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
height: 70%;
left: 20px;
top: 100px;
background-color: #D1C99B;
border-color: black;
}
.t1{
top: 15px;
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
<div class="sb">Stok Barang</div>

    <table id="example" class="tabel1" border="2">
            <thead>
            <tr></tr>
                <tr>
                    <th>No</th>
                    <th>Tanggal Masuk</th>
                    <th>Pemasok</th>
                    <th>Alamat</th>
                    <th>Kategori Barang</th>
                    <th>Active</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php

for($i = 0; $i < 20; $i++){
    echo "<tr>
    <td></td>
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