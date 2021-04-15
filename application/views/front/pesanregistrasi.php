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
  <?php if ($type=='forgottrue'): ?>
 <h2 style="text-align: center;">Successs Send Token</h2>
  <p style="text-align: center;">
    Silahkan Cek Email Anda 
    <br>
    Untuk Melakukan Reset Password Anda
  </p>
  <?php endif ?>
  <?php if ($type=='forgotfalse'): ?>
 <h2 style="text-align: center;">OOUuuppsss!!!</h2>
  <p style="text-align: center;">
    E-mail Yang Anda Masukan Tidak Terdaftar
    <br>
    
  </p>
  <?php endif ?>
  <?php if ($type=='registrue'): ?>
   <h2 style="text-align: center;">Terima kasih Telah Bergabung</h2>
   <p style="text-align: center;">
    Silahkan Cek pesan Email Anda, jika tidak ada di pesan silahkan cek di spam
    <br>
    Dan lakukan Verifikasi Email Anda Sebelum Login Ke Sistem Kami
  </p>
<?php endif ?>
<?php if ($type=='regisfalse'): ?>
   <h2 style="text-align: center;">Ooouppss??</h2>
  <p style="text-align: center;">
    E-mail Yang Anda Gunakan Tidak valid
    <br>
    Silahkan Gunakan E-mail yang valid
  </p>
<?php endif ?>
<?php if ($type=='forgotnew'): ?>
   <h2 style="text-align: center;">Success Reset password</h2>
  <p style="text-align: center;">
    Sandi Anda Berhasil Di Ganti silahkan Login menggunakan Sandi Baru Anda
    
  </p>
<?php endif ?>

</div>