<section>
              <header class="major">
                <h2>Berita Terkini</h2>
              </header>
              <div class="row">
                <?php for($a=0;$a<10;$a++){ ?>
                <div class="col-6 col-12-small">
                  <section class="box">
                    <a href="#" class="image featured"><img src="images/berita/berita.png" alt="" style="height: 272px;" /></a>
                    <header>
                      <h3>Pembagian Sembako dan Halal Bi Halal Dinas Perhubungan Kab. Kampar dalam Menyambut Bulan Suci Ramadhan 1442 H / 2021 M</h3>
                      <p>Posted 45 minutes ago</p>
                    </header>
                    <p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros lorem et blandit adipiscing feugiat phasellus tempus hendrerit, tortor vitae mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos lorem ipsum dolor sit amet.</p>
                    <footer>
                      <ul class="actions">
                         <li><a href="<?=base_url()?>readmore.html/article<?=$a?>-20-01-2021" class="button icon solid fa-file-alt">Continue Reading</a></li>
                        <li><a href="#" class="button alt icon solid fa-comment">33 comments</a></li>
                      </ul>
                    </footer>
                  </section>
                </div>
               <?php }?>
              </div>
            </section>