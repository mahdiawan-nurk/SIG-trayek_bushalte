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
  
</style>
<div class="kotak_login">
  <p class="tulisan_login">Registrasi Akun</p>

  <form>
    <label>E-mail</label>
    <input type="email" name="username" class="form_login" placeholder=" email ..">
    <label>Alamat</label>
    <input type="text" name="username" class="form_login" placeholder="Alamat ..">
    <label>Username</label>
    <input type="text" name="username" class="form_login" placeholder="Username ..">
    <label>Password</label>
    <input type="password" name="password" class="form_login" placeholder="Password ..">
    <label>Ulangi Password</label>
    <input type="password" name="password" class="form_login" placeholder="Password ..">

    <input type="submit" class="tombol_login" value="Registrasi">

    <br/>
    <br/>
    <center>
      <a class="link" href="home.html">kembali</a>
    </center>
  </form>

</div>