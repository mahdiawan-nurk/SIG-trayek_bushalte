 <div class="col-sm-12">
            
                <marquee   scrolldelay="100"> 
                    <div class="alert alert-primary" role="alert">
                        <h3>SELAMAT DATANG DI SIG TRAYEK BUS & HALTE BUS CBD BANGKINANG</h3>
                    </div>
                </marquee>
            </div>

            <div class="col-lg-6 col-md-6">
                <aside class="profile-nav alt">
                    <section class="card">
                        <div class="card-header user-header alt bg-dark">
                            <div class="media">
                                <a href="#">
                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                                </a>
                                <div class="media-body">
                                    <h2 class="text-light display-6">Administrator</h2>
                                    <p>Admin</p>
                                </div>
                            </div>
                        </div>


                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="#"> <i class="fa fa-envelope-o"></i> E-mail <span class="badge badge-primary pull-right">administrator@maproject.site</span></a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"> <i class="fa fa-tasks"></i> Username <span class="badge badge-danger pull-right">Administrator</span></a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"> <i class="fa fa-bell-o"></i> Alamat <span class="badge badge-success pull-right">Jl.Tuanku Tambusai KM 4 No 12</span></a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"> <i class="fa fa-comments-o"></i> Last Login <span class="badge badge-warning pull-right r-activity">senin, 5 April 2021 14:09 </span></a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"> <i class="fa fa-cog"></i> Settings</a>
                            </li>
                        </ul>

                    </section>
                </aside>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Active Projects</div>
                                <div class="stat-digit">770</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Active Projects</div>
                                <div class="stat-digit">770</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Active Projects</div>
                                <div class="stat-digit">770</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>World</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap" class="vmap" style="height: 620px;"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
<script type="text/javascript">
    
    var map = L.map('vmap').setView([0.3157265896953983, 101.0339480638504], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom:17,
        minZoom:1
    }).addTo(map);
   var xlng = 0.000256;
var xlat = 0.000200;

map.on('click', function(e) {
  console.log(e.latlng.lat,e.latlng.lng);
  L.marker([e.latlng.lat,e.latlng.lng]).addTo(map);
  //var c = L.circle([e.latlng.lat,e.latlng.lng], {radius: 15}).addTo(map);
  // L.polygon([
  //   [e.latlng.lat-xlat,e.latlng.lng-xlng],
  //   [e.latlng.lat+xlat,e.latlng.lng-xlng],
  //   [e.latlng.lat-xlat,e.latlng.lng+xlng],
  //   [e.latlng.lat+xlat,e.latlng.lng+xlng],
  // ]).addTo(map);
  
  //   L.polyline([
  //   [e.latlng.lat,e.latlng.lng-xlng],
  //   [e.latlng.lat,e.latlng.lng+xlng]
  // ]).addTo(map);
  
});
</script>