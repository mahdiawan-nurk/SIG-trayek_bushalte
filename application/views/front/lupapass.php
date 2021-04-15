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
<div class="kotak_login" >

 <p class="tulisan_login">Reset Password <p>

   <form method="post" action="<?=base_url()?>createforgot.html" style="display: <?=$formforgot?>">
    <label>E-mail</label>
    <input type="text" name="email" class="form_login" placeholder="Username atau email ..">
    <input type="submit" class="tombol_login" value="Kirim">
    <br/>
    <br/>
    <center>
      <a class="link" href="home.html">kembali</a>
    </center>
  </form>
  <form method="post" action="<?=base_url()?>forgotsavenewPass.html" style="display: <?=$formreset?>">
    <input type="hidden" name="email" value="<?=$data->email_users?>">
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
  <div>



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