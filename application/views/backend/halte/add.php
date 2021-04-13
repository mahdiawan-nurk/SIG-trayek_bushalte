<?php if ($this->session->flashdata('msg')): ?>
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
    <span class="badge badge-pill badge-danger">Success</span>
    You successfully read this important alert.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif ?>
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body card-block">
            <form action="<?=base_url()?>crud/save_halte" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-email" class=" form-control-label">Kordinat Longitude</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="longitude" name="longitude" placeholder="" class="form-control" >
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-email" class=" form-control-label">Kordinat Latitude</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="latitude" name="latitude" placeholder="" class="form-control" >
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-email" class=" form-control-label">Lokasi Halte</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="lokasi" name="lokasi" placeholder="" class="form-control" required="">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-email" class=" form-control-label">kondisi Halte</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="kondisi" name="kondisi" placeholder="" class="form-control" required="">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-email" class=" form-control-label">Gambar Halte</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="gambar" name="gambar" placeholder="" class="form-control" on >
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
                <button type="button" class="btn btn-warning btn-sm" onclick="cek();">
                    <i class="fa fa-map-marker"></i> Cek Lokasi
                </button>
            </div>
        </form>
    </div>
</div>

<div class="col-lg-6">
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <div id="vmap" class="vmap" ></div>
        </div>

    </div>
</div>
<script type="text/javascript">
    var map = L.map('vmap').setView([0.3276997819699303, 101.0317325592041], 13.5);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom:25,
        minZoom:1
    }).addTo(map);
    map.on('click', function(e) {
  // console.log(e.latlng.lat,e.latlng.lng);
  var marker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);

  map.on('click', function () {
    map.removeLayer(marker);
});
  document.getElementById("longitude").value = e.latlng.lng; 
  document.getElementById("latitude").value = e.latlng.lat; 

  
});
    function cek() {
       var lat=document.getElementById("latitude").value;
       var lng=document.getElementById("longitude").value;
       var marker = L.marker([lat, lng]).addTo(map);
     // map.removeLayer(marker);
 }
</script>