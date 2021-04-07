<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<style>
    fieldset{
    position: relative;
width: 467px;
height: 290px;
background: #F4EDC5;  
    }
    .label-nama{
        position: absolute;
width: 202px;
height: 21px;
left: 20px;
top: 31px;
font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 21px;
color: #000000;
    }

    .label-alamat{
        position: absolute;
width: 58px;
height: 21px;
left: 20px;
top: 79px;

font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 21px;
color: #000000;
    }

    .nama{
        position: absolute;
width: 214px;
height: 29px;
left: 242px;
top: 27px;
background: #FFFEFC;
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 5px;
    }
    .alamat{
        position: absolute;
width: 214px;
height: 29px;
left: 242px;
top: 78px;

background: #FFFEFC;
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 5px;
    }

    .simpan{
        position: absolute;
width: 119px;
height: 27px;
left: 337px;
top: 188px;
background: #CCAC02;
border-radius: 11px;
font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 21px;
color: #000000;
    }
    .label-kategori{
        position: absolute;
width: 131px;
height: 21px;
left: 20px;
top: 131px;
font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 21px;
color: #000000;
    }
    </style>
</head>
<body>
<fieldset>  
            <label for="user" id="label-user" class="label-nama" >Nama atau Perusahaan</label>
            <input type="text" name="user" id="user" class="nama">
			<br><br>
            <label for="Alamat" id="label-Alamat" class="label-alamat">Alamat</label>
			<input type="alamat" name="Alamat" id="Alamat" class="alamat">
			<br><br>
            <label for="kategori" id="label-Kategori" class="label-kategori">Kategori Barang</label>
			<button type="submit" id="simpan" value="simpan" class="simpan">simpan</button>
</fieldset>
</body>
</html>