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
  <p class="tulisan_login">Silahkan login</p>

  <form action="autentikasi.html" method="post">
    <label>Username</label>
    <input type="text" name="email" class="form_login" placeholder="Username atau email ..">

    <label>Password</label>
    <input type="text" name="password" class="form_login" placeholder="Password ..">
    <span style="float: right;margin-bottom: 20px"><a class="link" href="lupapass.html" style="color:blue;font-size: 16px;">Lupa Password?</a></span>
    
    <input type="submit" class="tombol_login" value="LOGIN">

    <br/>
    <br/>
    <center>
      <a class="link" href="home.html">kembali</a>
      <a class="link" href="home.html">kembali</a>
    </center>
  </form>

</div>