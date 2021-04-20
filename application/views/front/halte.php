<style type="text/css" media="screen">
	
</style>
<header class="major">
	<h2>Lokasi Halte</h2>
</header>
<div class="container">
	<div class="row">
		<div class="col-8 col-12-medium">

			<!-- Content -->
			<article class="box post" style="padding: 0.75em 0.75em 0.75em 0.75em;">
				<div id="vmap" class="vmap" style="height: 620px;"></div>
			</article>

		</div>
		<div class="col-4 col-12-medium">

			<!-- Sidebar -->
			<?php foreach ($data as $data): ?>
				<?php $titik=explode(';',$data->kordinat);?>
				<section class="box" style="    margin-bottom: 0.5em;">
					<a href="#" class="image featured">
						<img src="<?=base_url()?>images/halte/<?=$data->gambar?>" alt="a" />
					</a>
					<header>
						<h3><?=$data->nama_halte?></h3>
					</header>
					<p>
						Halte yang terletak Di <?=$data->lokasi_halte?> dengan kordinat <b><?=$data->kordinat?></b>, dengan memiliki kondisi halte yang <?=$data->kondisi_halte?>
					</p>
					<footer>
						<button class="button alt" onclick="look_location(<?=$titik[1]?>,<?=$titik[0]?>,'<?=$data->nama_halte?>')">Lihat titik Lokasi</button>
					</footer>
				</section>
			<?php endforeach ?>
			
			<section>
				<?php echo $pagination; ?>
			</section>
			

		</div>
	</div>
</div>
</section>
<script>
	var map = L.map('vmap').setView([0.31740026257466575, 101.03310585021973], 13);

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
		maxZoom:17,
		minZoom:1
	}).addTo(map);
	var markers=[
	<?php foreach ($halte as $d) {
		$kordinat=explode(';',$d->kordinat);
		?>
		[ <?=$kordinat[1]?>, <?=$kordinat[0]?>, "<?=$d->nama_halte?>" ],
		<?php }?>
		];

		for (var i = 0; i < markers.length; i++) {
			marker = new L.marker([markers[i][0],markers[i][1]])
				.bindPopup(markers[i][2])
				.addTo(map);
		}


	// var marker = L.marker([0.31740026257466575, 101.03310585021973]).addTo(map);
	// 

	function look_location(lat,lang,tag) {
		// var map = L.map('vmap').setView([lat, lang], 17);
	// L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	// 	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
	// 	maxZoom:17,
	// 	minZoom:1
	// }).addTo(map);

	var marker = L.marker([lat, lang]).addTo(map);
    marker.bindPopup(tag).openPopup();
    map.flyTo([lat, lang], 17);
    // alert(lat+' '+lang+' '+tag);
	}
</script>