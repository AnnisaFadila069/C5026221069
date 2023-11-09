<!DOCTYPE html>
<html>
<head>
    <title>Responsive Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
function validateForm() {
  //let x = document.forms["myForm"]["fname"].value;
  var x= document.getElementById("fname");
  var nrp = document.getElementById("nrp");
  //yang di cek cukup yang invalid yang valid tidak perlu
  //lakukan per jenis validasi supaya user tau kesalahannya apa. misal NRP invalid jika angka tidak = 10
  if (x.value == "") { //isian kosong berarti text box nbya ga diisi apa2
    alert("Nama harus diisi..");
    x.focus();//buat kursor berpindah ke tempat yang invalid
    return false; //fungsi ini ada return value, bukan void. jika false maka stop ga dikirim ke server
  }
  if (nrp.value == "") { //.value artinya yabg diambil cukup value yang ada
    alert("NRP harus diisi..");
    nrp.focus();//buat kursor berpindah ke tempat yang invalid
    return false; //fungsi ini ada return value, bukan void. jika false maka stop ga dikirim ke server
  }
  if (isNaN(nrp.value) == true) {
    alert("NRP harus berupa angka");
    nrp.value = "";
    nrp.focus();
    return false;
  }
  if (nrp.value.length != 10){ //NaN = bukan angka
    alert("Jumlah digit harus 10, Anda memasukkan " + nrp.value.length + " digit!" );
    nrp.value= "";
    nrp.focus();//buat kursor berpindah ke tempat yang invalid
    return false;
  }

  return true; //bersifat opsional, karena default system adalah true. pencegahan nilai ke false berfungsi supaya tidak dikirimkan
}
</script>
</head>
<body>

<h2>JavaScript Validation</h2>

<form name="myForm" action="https://google.com" onsubmit="return validateForm()" method="post">
  <label for="fname"> Name:</label> 
  <input type="text" id="fname" name="fname" class="form-control">
  <label for="fname"> NRP:</label> 
  <input type="text" id="nrp" name="nrp" class="form-control"> 
  <input type="submit" value="Submit" class="btn btn-primary"> 
  <input type="reset" value="Kosongi" class="btn btn-warning"> 
</form>

</body>
</html>
