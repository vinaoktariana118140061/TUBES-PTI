<!DOCTYPE html>
<html>
<head>
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
padding-right: 43px;
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
.img1{
position: absolute;
width: 100%;
height: 100%;
left: 0px;
top: 0px;
margin: auto;
background-size: 80%;

}
.img2{
position: absolute;
width: 100%;
height: 100%;
left: 0px;
top: 0px;
background: rgba(0, 0, 0, 0.7);

}
.i1{
left: 50px;
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
    Stock Barang </button><br>
    
</fieldset>
<fieldset class="layer_top">
    <button type="submit" id="login" value="Login" class="b4">login </button>
    <b>Martabak Anugrah Koga Kedaton</b>
</fieldset>

<div>
<fieldset class="layer_beranda">

<div style="background-image: url('WhatsApp Image 2021-04-03 at 07.41.07.jpeg');" class="img1">
<div class="img2">
<fieldset class="layer_forms">
<div class="f">
<i class="fa fa-home">Forms</i>
</div>
</fieldset>
    <p>Hai, Admin!<br>
    Selamat datang di Inventory management system,<br>
    yakni sebuah sistem yang dapat membantu anda mengerjakan transaksi secara cepat dan mudah.
    </p>
</div>
</div>
</fieldset> 
</div>
</body>
</html>