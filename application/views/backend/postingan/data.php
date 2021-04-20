<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <a href="<?=base_url()?>crud/create_berita" class="btn btn-primary btn-sm"><i class="fa fa-plus" ></i> New Post</a>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">judul berita</th>
                        <th scope="col">Headline</th>
                        <th scope="col">Post date</th>
                        <th scope="col">act</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($berita as $post): ?>
                        <tr>
                            <th scope="row"><?=$no?></th>
                            <td><?=$post->judul?></td>
                            <td><small><?=substr($post->isi_konten,0,120)?></small></td>
                            <td><?=lastlogin($post->created)?></td>
                            <td><div class="btn-group">
                                <button type="button" class="btn btn-warning btn-sm" ><i class="fa fa-pencil" ></i> Edit</button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash" ></i> Hapus</button>
                            </div></td>
                        </tr>
                    <?php $no++; endforeach ?>
                    

                </tbody>
            </table>
        </div>
    </div>
</div>