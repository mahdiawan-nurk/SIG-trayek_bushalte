<section>
	<header class="major">
		<h2>Info Bus</h2>
	</header>
	<div class="row">
		 <?php for($a=0;$a<9;$a++){ ?>
		<div class="col-4 col-6-medium col-12-small">
			<section class="box">
				<a href="#" class="image featured"><img src="<?=base_url()?>images/bus/bus01.png" alt="" /></a>
				<header>
					<h3>BUS TNKB <?=$a?></h3>
				</header>
				<p>
					<strong>Info Berangkat</strong><br>
					Berangkat Dari Dishub menuju Ke polkam Jam 07:00
				</p>
				<p>
					<table>
						<tr>
							<td>TNKB</td>
							<td>: 7076 F</td>
						</tr>
						<tr>
							<td>Pramudi</td>
							<td>: Fake name</td>
						</tr>
						<tr>
							<td>No HP</td>
							<td>: 08XXXXX</td>
						</tr>
					</table>
				</p>
				
			</section>
		</div>
		 <?php }?>
	</div>
</section>