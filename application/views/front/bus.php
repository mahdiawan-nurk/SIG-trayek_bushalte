<section>
	<header class="major">
		<h2>Info Bus</h2>
	</header>
	<div class="row">
		 <?php foreach ($data as $data): ?>
		 	<div class="col-4 col-6-medium col-12-small">
			<section class="box">
				<a href="#" class="image featured"><img src="<?=base_url()?>images/bus/<?=$data->gambar?>" alt="" /></a>
				<header>
					<h3>BUS TNKB : <?=$data->tnkb_bus?></h3>
				</header>
				<p>
					<strong>Info Berangkat</strong><br>
					<?=$data->info_berangkat?>
				</p>
				<p>
					<table>
						<tr>
							<td>TNKB</td>
							<td>: <?=$data->tnkb_bus?></td>
						</tr>
						<tr>
							<td>Pramudi</td>
							<td>: <?=$data->nm_pramudi?></td>
						</tr>
						<tr>
							<td>No HP</td>
							<td>: <?=$data->no_tlp_pramudi?></td>
						</tr>
					</table>
				</p>
				
			</section>
		</div>
		 <?php endforeach ?>
	
		 <div class="col-12">
<?php echo $pagination; ?>

 
    </div>
	</div>
</section>