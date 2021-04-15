<section>
	<header class="major">
		<h2>Peta Trayek Dan halte</h2>
	</header>
	<div class="row">
		<div class="col-12 col-6-medium col-12-small">
			<!-- <section class="box"> -->
				<div id="vmap" class="vmap" style="height: 620px;"></div>
			<!-- </section> -->
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
    var marker = L.marker([0.31740026257466575, 101.03310585021973]).addTo(map);
    marker.bindPopup("<b>DISHUB</b><br>KAMPAR").openPopup();
</script>