<style type="text/css" media="screen">
 .now {
  background-color: #666;
color: white;
}  
</style>
<section>
  <header class="major">
    <h2>Berita Terkini</h2>
  </header>
  <div class="row">
    <?php foreach ($data as $data): ?>
       <div class="col-6 col-12-small">
        <section class="box">
          <a href="#" class="image featured"><img src="<?=base_url()?>images/berita/<?=$data->gambar?>" alt="" style="height: 272px;" /></a>
          <header>
            <h3><?=$data->judul?></h3>
            <p>Posted 45 minutes ago</p>
          </header>
          <p><?=substr($data->isi_konten,0,250)?></p>
          <footer>
            <ul class="actions">
             <li><a href="<?=base_url()?>readmore.html/<?=$data->url_linked?>" class="button icon solid fa-file-alt">Continue Reading</a></li>
             <!-- <li><a href="#" class="button alt icon solid fa-comment">33 comments</a></li> -->
           </ul>
         </footer>
       </section>
     </div>
    <?php endforeach ?>
     

   <div class="col-12">
<?php echo $pagination; ?>

 
    </div>
  </div>
</section>