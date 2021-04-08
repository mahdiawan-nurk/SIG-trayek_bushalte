<style type="text/css" media="screen">
.tulisan_login {
  text-align: center;
  /*membuat semua huruf menjadi kapital*/
  text-transform: uppercase;
}

.kotak_login {
  /*width: 350px;*/
  background: white;
  /*meletakkan form ke tengah*/
  margin: 0 auto;
  padding: 30px 20px;
}

label {
  font-size: 11pt;
}

.form_login {
  /*membuat lebar form penuh*/
  box-sizing: border-box;
  width: 100%;
  padding: 10px;
  font-size: 11pt;
  margin-bottom: 20px;
}

.tombol_login {
  background: #46de4b;
  color: white;
  font-size: 11pt;
  width: 100%;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
}

.link {
  color: #232323;
  text-decoration: none;
  font-size: 10pt;
}
input[type=text] {
  border: 2px solid red;
  border-radius: 4px;
}
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
  
</style>
<div class="kotak_login">
  <p class="tulisan_login">Registrasi Akun</p>
<div class="alert" id="alert" style="display: none">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
</div>
  <form action="daftarakun.html" method="post">
    <label>E-mail</label>
    <input type="email" name="email" class="form_login" placeholder=" email ..">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form_login" placeholder="Alamat ..">
    <label>Username</label>
    <input type="text" name="username" class="form_login" placeholder="Username ..">
    <label>Password</label>
    <input type="password" name="password" id="password" class="form_login" placeholder="Password ..">
    <label>Ulangi Password</label>
    <input type="password" name="re_password" id="re_password" class="form_login" placeholder="Password ..">

    <input type="submit" class="tombol_login" value="Registrasi" onclick="return validasi()">

    <br/>
    <br/>
    <center>
      <a class="link" href="home.html">kembali</a>
    </center>
  </form>

</div>
<script>
  function validasi() {
    const password=document.getElementById("password").value;
    const re_password=document.getElementById("re_password").value;
    if (password != re_password) {
      document.getElementById("alert").style.display = "block";
      return false;
    }
    document.getElementById("alert").style.display = "none";
    return true;
  }

</script>