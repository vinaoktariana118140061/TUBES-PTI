<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<style>
    .managepopup{
        position: absolute;
width: 642px;
height: 413px;
left: 600px;
top: 200px;

background: #F4EDC5;
border: 2px solid #CCAC02;
box-sizing: border-box;
border-radius: 11px;
    }
    .label-namakeluar{
        position: absolute;
width: 201px;
height: 29px;
left: 40px;
top: 36px;

font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 23px;

color: #000000;
    }


    .namakeluar{
        position: absolute;
width: 299px;
height: 38px;
left: 287px;
top: 34px;

background: #FFFEFC;
border-radius: 5px;
    }
    

    .simpan3{
        position: absolute;
width: 95px;
height: 29px;
left: 488px;
top: 339px;

background: #CCAC02;
border-radius: 11px;
font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 21px;

    }
    .label-kategori2{
        position: absolute;
width: 179px;
height: 28.66px;
left: 40px;
top: 90.81px;

font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 23px;

color: #000000;
    }
    .r1{
        position: absolute;
width: 19.04px;
height: 18px;
left: 302px;
top: 97.29px;
    }
    .r2{
        position: absolute;
width: 19.04px;
height: 18px;
left: 434px;
top: 100.29px;
    }
    .peralatankeluar{
        position: absolute;
width: 77px;
height: 20.75px;
left: 330px;
top: 96.31px;

font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 21px;
/* identical to box height */


color: #000000;
    }
    .bahankeluar{
        position: absolute;
width: 51px;
height: 20.75px;
left: 462px;
top: 98.31px;

font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 21px;
/* identical to box height */


color: #000000;
    }
    .batal{
        position: absolute;
width: 95px;
height: 29px;
left: 386px;
top: 339px;

background: #9BD1D1;
border-radius: 11px;
font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 21px;
    }
    .label-tanggalkeluar{
        position: absolute;
width: 201px;
height: 23px;
left: 40px;
top: 245px;

font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 23px;

color: #000000;
    }
    .tanggalkeluar{
        position: absolute;
width: 299px;
height: 40.53px;
left: 287px;
top: 239px;
background: #FFFEFC;
border-radius: 5px;
    }
    .label-jumlahbarang{
        position: absolute;
width: 135px;
height: 23px;
left: 40px;
top: 190px;

font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 23px;

color: #000000;
    }
    .jumlahbarang{
        position: absolute;
width: 299px;
height: 39.53px;
left: 287px;
top: 182px;
background: #FFFEFC;
border-radius: 5px;
    }
    .label-satuan{
        position: absolute;
width: 78px;
height: 28.66px;
left: 40px;
top: 141px;

font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 23px;

color: #000000;
    }
    .s1{
        position: absolute;
width: 19.04px;
height: 18px;
left: 304px;
top: 146px;
    }
    .s2{
        position: absolute;
width: 19.04px;
height: 18px;
left: 372px;
top: 146px;  
    }
    .s3{
        position: absolute;
width: 19.04px;
height: 18px;
left: 447px;
top: 147px;  
    }
    .s4{
        position: absolute;
width: 19.04px;
height: 18px;
left: 517px;
top: 148px;   
    }
    .Kg{
        position: absolute;
width: 22px;
height: 21px;
left: 329px;
top: 144px;

font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 21px;
/* identical to box height */


color: #000000;
    }
    .gram{
        position: absolute;
width: 44px;
height: 21px;
left: 397px;
top: 144px;

font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 21px;
/* identical to box height */


color: #000000;
    }
    .ons{
        position: absolute;
width: 32px;
height: 21px;
left: 471px;
top: 146px;

font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 21px;
/* identical to box height */


color: #000000;
    }
    .pcs{
        position: absolute;
width: 30px;
height: 21px;
left: 544px;
top: 146px;

font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 21px;
/* identical to box height */


color: #000000;
    }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<fieldset class="managepopup">  
            <label for="user" id="label-user" class="label-namakeluar" >Nama Barang Keluar</label>
            <input type="text" name="user" id="user" class="namakeluar">
			<br><br>
            
            <label for="kategori" id="label-Kategori" class="label-kategori2">Kategori Barang</label>
            <input type="radio"  name="optradio" class="r1">
            <label class="peralatankeluar">
            Peralatan
            </label>
            <input type="radio" name="optradio" class="r2">
            <label class="bahankeluar">
                Bahan
            </label>
           <br><br>
           <label for="kategori" id="label-Kategori" class="label-satuan">Satuan</label>
            <input type="radio"  name="optradio" class="s1">
            <label class="Kg">
            Kg
            </label>
            <input type="radio" name="optradio" class="s2">
            <label class="gram">
                Gram
            </label>
            <input type="radio" name="optradio" class="s3">
            <label class="ons">
                Ons
            </label>
            <input type="radio" name="optradio" class="s4">
            <label class="pcs">
                Pcs
            </label>
           <br><br>
           <label for="Alamat" id="label-Alamat" class="label-jumlahbarang">Jumlah Barang</label>
			<input type="alamat" name="Alamat" id="Alamat" class="jumlahbarang">
			<br><br>
            <label for="Alamat" id="label-Alamat" class="label-tanggalkeluar">Tanggal Keluar Barang</label>
			<input type="alamat" name="Alamat" id="Alamat" class="tanggalkeluar">
			<br><br>
            <button type="submit" id="simpan" value="simpan" class="batal">batal</button>
			<button type="submit" id="simpan" value="simpan" class="simpan3">Simpan</button>
</fieldset>
</body>
</html>