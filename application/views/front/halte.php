<style type="text/css" media="screen">
	.pagination {
		display: inline-block;
		margin-left: 13px;
	}

	.pagination a {
		color: black;
		float: left;
		padding: 8px 16px;
		text-decoration: none;
		background-color: #ffffff;
		margin:3px;
		border-bottom: solid 1px #ccc;
	}
</style>
<header class="major">
	<h2>My Portfolio</h2>
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
			<section class="box" style="    margin-bottom: 0.5em;">
				<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
				<header>
					<h3>Sed etiam lorem nulla</h3>
				</header>
				<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
				<footer>
					<a href="#" class="button alt">Lihat titik Lokasi</a>
				</footer>
			</section>
			<section>
				<div class="pagination">
				<a href="#">&laquo;</a>
				<a href="#" class="current">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">&raquo;</a>
			</div>
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
	var marker = L.marker([0.31740026257466575, 101.03310585021973]).addTo(map);
	marker.bindPopup("<b>DISHUB</b><br>KAMPAR").openPopup();
</script>