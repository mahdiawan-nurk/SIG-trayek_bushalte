<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus" ></i> New Bus</button>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">TNKB Bus</th>
                        <th scope="col">Pramudi</th>
                        <th scope="col">Sumber Bus</th>
                        <th scope="col">Info Berangkat</th>
                        <th scope="col">No HP Pramudi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">act</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach  ($data as $r): ?>
                     <tr>
                        <th scope="row"><?=$no?></th>
                        <td><?=$r->tnkb_bus?></td>
                        <td><?=$r->nm_pramudi?></td>
                        <td><?=$r->sumber_bus?></td>
                        <td><?=$r->info_berangkat?></td>
                        <td><?=$r->no_tlp_pramudi?></td>
                        <td width="20%"><img src="<?=base_url()?>images/bus/<?=$r->gambar?>" alt="" ></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning btn-sm" ><i class="fa fa-pencil" ></i> Edit</button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash" ></i> Hapus</button>
                            </div>
                        </td>
                    </tr>   
                    <?php $no++; endforeach ?>
                    
                   
                </tbody>
            </table>
        </div>
    </div>
</div>