<?php if ($this->session->flashdata('msg')): ?>
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        <span class="badge badge-pill badge-success">Success</span>
        You successfully read this important alert.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif ?>


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-outline-primary btn-sm" href="<?=base_url()?>crud/create_halte" role="button"><i class="fa fa-plus"></i> New Halte</a>
        </div>
        <div class="card-body">
         <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kordinat</th>
                    <th scope="col">Lokasi Halte</th>
                    <th scope="col">Kondisi</th>
                    <th scope="col">gambar</th>
                    <th scope="col">Act</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach ($halte as $hl): ?>
                <?php $split=explode(';',$hl->kordinat);?>
                <tr>
                    <th scope="row"><?=$no?></th>
                    <td>LONG : <?=$split[0]?> <br>LAT : <?=$split[1]?></td>
                    <td><?=$hl->lokasi_halte?></td>
                    <td><?=$hl->kondisi_halte?></td>
                    <td width="10%">
                       <?php if ($hl->gambar=='-'): ?>
                           -
                       <?php endif ?> 
                        <?php if ($hl->gambar!='-'): ?>
                           <img src="<?=base_url()?>images/halte/<?=$hl->gambar?>" alt="A" style="width: 50%;">
                       <?php endif ?> 
                    </td>
                    <td><a href="<?=base_url()?>crud/edit_halte?id=<?=$hl->id_halte?>" class="btn btn-sm btn-warning">edit</a></td>
                </tr>
                <?php $no++; endforeach ?>


            </tbody>
        </table>
    </div>
</div>
</div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Basic Table</strong>
        </div>
        <div class="card-body">
         <div id="vmap" class="vmap" style="height: 620px;"></div>
     </div>
 </div>
</div>
<script type="text/javascript">

    var map = L.map('vmap').setView([0.3276997819699303, 101.0317325592041], 13.5);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom:17,
        minZoom:1
    }).addTo(map);
    <?php foreach ($halte as $d) {
        $kordinat=explode(';',$d->kordinat);
        ?>
        L.marker([<?=$kordinat[1]?>, <?=$kordinat[0]?>]).addTo(map);
    <?php }?>
</script>