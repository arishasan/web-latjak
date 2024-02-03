@extends('admin.mainlayout')

@section('content')

<div id="content" class="app-content">
    
    {{-- row align-items-center --}}
    {{-- <h1 class="page-header mb-3">
        Hi, User. <small>Don't forget to smile today.</small>
    </h1> --}}

    {{-- <img src="{{ asset('logo.jpeg') }}" alt="" class="img-responsive" style="width: 250px; height: 250px"> --}}
    
    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-6 -->
        <div class="col-xl-12">
            <!-- BEGIN row -->
            <div class="row">

                <div class="col-sm-3">
                    <!-- BEGIN card -->
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-orange" style="min-height: 140px;">
                        <!-- BEGIN card-img-overlay -->
                        {{-- <div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
                            <img src="{{ asset('assets') }}/studio/img/icon/order.svg" alt="" class="ms-auto d-block mb-n3" style="max-height: 105px" />
                        </div> --}}
                        <!-- END card-img-overlay -->
                        
                        <!-- BEGIN card-body -->
                        <div class="card-body position-relative">
                            <h5 class="text-white text-opacity-80 mb-3 fs-16px">Last Active</h5>
                            <h1 class="text-white mt-n1">{{ date('d M Y') }}</h1>
                            {{-- <div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
                                <div class="progrss-bar progress-bar-striped bg-white" style="width: 100%"></div>
                            </div> --}}
                            <div class="text-white text-opacity-80 mb-4"><b>{{ date('H:i:s') }}</b></div>
                            {{-- <div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a></div> --}}
                        </div>
                        <!-- BEGIN card-body -->
                    </div>
                    <!-- END card -->
                </div>

                <div class="col-sm-9">
                    
                    <div class="card border-0" style="min-height: 300px">
                        <div class="card-body">
                            <b class="text-black text-opacity-80">Last Location</b><br/>
                            <br/>
                            <div id="dvMap" style="height: 500px;"></div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- END row -->
        </div>
        <!-- END col-6 -->
    </div>
    <!-- END row -->
    
    <!-- BEGIN row -->
    {{-- <div class="row">
        <!-- BEGIN col-6 -->
        <div class="col-xl-6">
            <!-- BEGIN row -->
            <div class="row">
                <!-- BEGIN col-6 -->
                <div class="col-sm-6 mb-3 d-flex flex-column">
                    <!-- BEGIN card -->
                    <div class="card mb-3 flex-1">
                        <!-- BEGIN card-body -->
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1">
                                    <h5 class="mb-1">Total Users</h5>
                                    <div>Store user account registration</div>
                                </div>
                                <a href="#" data-bs-toggle="dropdown" class="text-muted"><i class="fa fa-redo"></i></a>
                            </div>
                            
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <h3 class="mb-1">184,593</h3>
                                    <div class="text-success fw-600 fs-13px">
                                        <i class="fa fa-caret-up"></i> +3.59%
                                    </div>
                                </div>
                                <div class="w-50px h-50px bg-primary bg-opacity-20 rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa fa-user fa-lg text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <!-- END card-body -->
                    </div>
                    <!-- END card -->
                    
                    <!-- BEGIN card -->
                    <div class="card">
                        <!-- BEGIN card-body -->
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1">
                                    <h5 class="mb-1">Social Media</h5>
                                    <div>Facebook page stats overview</div>
                                </div>
                                <a href="#" data-bs-toggle="dropdown" class="text-muted"><i class="fa fa-redo"></i></a>
                            </div>
                            
                            <!-- BEGIN row -->
                            <div class="row">
                                <!-- BEGIN col-6 -->
                                <div class="col-6 text-center">
                                    <div class="w-50px h-50px bg-primary bg-opacity-20 rounded-circle d-flex align-items-center justify-content-center mb-2 ms-auto me-auto">
                                        <i class="fa fa-thumbs-up fa-lg text-primary"></i>
                                    </div>
                                    <div class="fw-600 text-dark">306.5k</div>
                                    <div class="fs-13px">Likes</div>
                                </div>
                                <!-- END col-6 -->
                                
                                <!-- BEGIN col-6 -->
                                <div class="col-6 text-center">
                                    <div class="w-50px h-50px bg-primary bg-opacity-20 rounded-circle d-flex align-items-center justify-content-center mb-2 ms-auto me-auto">
                                        <i class="fa fa-comments fa-lg text-primary"></i>
                                    </div>
                                    <div class="fw-600 text-dark">27.5k</div>
                                    <div class="fs-13px">Comments</div>
                                </div>
                                <!-- END col-6 -->
                            </div>
                            <!-- END row -->
                        </div>
                        <!-- END card-body -->
                    </div>
                    <!-- END card -->
                </div>
                <!-- END col-6 -->
                
                <!-- BEGIN col-6 -->
                <div class="col-sm-6 mb-3">
                    <!-- BEGIN card -->
                    <div class="card h-100 border-0">	
                        <!-- BEGIN card-body -->
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1">
                                    <h5 class="mb-1">Web Traffic</h5>
                                    <div class="fs-13px">Traffic source and category</div>
                                </div>
                                <a href="#" data-bs-toggle="dropdown" class="text-muted"><i class="fa fa-redo"></i></a>
                            </div>
                            
                            <div class="mb-4">
                                <h3 class="mb-1">320,958</h3>
                                <div class="text-success fs-13px fw-600">
                                    <i class="fa fa-caret-up"></i> +20.9%
                                </div>
                            </div>
                            
                            <div class="progress mb-4" style="height: 10px;">
                                <div class="progress-bar" style="width: 42.66%"></div>
                                <div class="progress-bar bg-teal" style="width: 36.80%"></div>
                                <div class="progress-bar bg-yellow" style="width: 15.34%"></div>
                                <div class="progress-bar bg-pink" style="width: 9.20%"></div>
                                <div class="progress-bar bg-gray-200" style="width: 5.00%"></div>
                            </div>
                            
                            <div class="fs-13px">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-grow-1 d-flex align-items-center">
                                        <i class="fa fa-circle fs-9px fa-fw text-primary me-2"></i> Direct visit
                                    </div>
                                    <div class="fw-600 text-dark">42.66%</div>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-grow-1 d-flex align-items-center">
                                        <i class="fa fa-circle fs-9px fa-fw text-teal me-2"></i> Organic Search
                                    </div>
                                    <div class="fw-600 text-dark">36.80%</div>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-grow-1 d-flex align-items-center">
                                        <i class="fa fa-circle fs-9px fa-fw text-warning me-2"></i> Referral Website
                                    </div>
                                    <div class="fw-600 text-dark">15.34%</div>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-grow-1 d-flex align-items-center">
                                        <i class="fa fa-circle fs-9px fa-fw text-danger me-2"></i> Social Networks
                                    </div>
                                    <div class="fw-600 text-dark">9.20%</div>
                                </div>
                                <div class="d-flex align-items-center mb-15px">
                                    <div class="flex-grow-1 d-flex align-items-center">
                                        <i class="fa fa-circle fs-9px fa-fw text-gray-200 me-2"></i> Others
                                    </div>
                                    <div class="fw-600 text-dark">5.00%</div>
                                </div>
                                <div class="fs-12px text-end">
                                    <span class="fs-10px">powered by </span>
                                    <span class="d-inline-flex fw-600">
                                        <span class="text-primary">G</span>
                                        <span class="text-danger">o</span>
                                        <span class="text-warning">o</span>
                                        <span class="text-primary">g</span>
                                        <span class="text-green">l</span>
                                        <span class="text-danger">e</span>
                                    </span>
                                    <span class="fs-10px">Analytics API</span>
                                </div>
                            </div>
                        </div>
                        <!-- END card-body -->
                    </div>
                    <!-- END card -->
                </div>
                <!-- END col-6 -->
            </div>
            <!-- END row -->
        </div>
        <!-- END col-6 -->
        
        <!-- BEGIN col-6 -->
        <div class="col-xl-6 mb-3">
            <!-- BEGIN card -->
            <div class="card h-100 border-0">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Sales Analytics</h5>
                            <div class="fs-13px">Weekly sales performance chart</div>
                        </div>
                        <a href="#" data-bs-toggle="dropdown" class="text-muted"><i class="fa fa-redo"></i></a>
                    </div>
                    <div id="chart"></div>
                </div>
                <!-- END card-body -->
            </div>
            <!-- END card -->
        </div>	
        <!-- END col-6 -->
    </div> --}}
    <!-- END row -->
    
    <!-- BEGIN row -->
    
    <!-- END row -->
</div>

<div class="modal fade" id="modal_detail">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Detail Lokasi Terakhir</h4>
        </div>
        <div class="modal-body">
  
            <div class="row">
                <div class="col-lg-2">Device ID</div>
                <div class="col-lg-10" id="device_id"></div>
            </div>
            <div class="row">
                <div class="col-lg-2">Nama Hewan</div>
                <div class="col-lg-10" id="nama_hewan">Timmy</div>
            </div>
            <div class="row">
                <div class="col-lg-2">Latitude</div>
                <div class="col-lg-10" id="lok_lat"></div>
            </div>
            <div class="row">
                <div class="col-lg-2">Longitude</div>
                <div class="col-lg-10" id="lok_long"></div>
            </div>
            
            <div class="card">
                <div class="card-body">

                </div>
            </div>
  
        </div>
        <div class="modal-footer">
          <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Tutup</a>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scriptplus')

<script>
    $(function(){

        var map = L.map('dvMap').setView([-6.235929, 106.799224], 15);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYXJpc2hhc2FuNCIsImEiOiJja3lqc2llbjQycThoMm9wbTE3MmozMHlwIn0.TcPh_-wwA2Hu4kTgWWweqw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiYXJpc2hhc2FuNCIsImEiOiJja3lqc2llbjQycThoMm9wbTE3MmozMHlwIn0.TcPh_-wwA2Hu4kTgWWweqw'
        }).addTo(map);

        var marker = L.marker(
        [parseFloat('-6.235929'), parseFloat('106.799224')],
        {
            elevation: 260.0,
            title: 'Timmy'
        }
        ).addTo(map).on("click", function(e) {
            
            $('#device_id').text('1F032DD134');
            $('#nama_hewan').text('Timmy');
            $('#lok_lat').text('-6.235929');
            $('#lok_long').text('106.799224');

        $('#modal_detail').modal('show');
        });

        // var marker2 = L.marker(
        // [parseFloat('-6.221453'), parseFloat('106.803346')],
        // {
        //     elevation: 260.0,
        //     title: 'Kuro'
        // }
        // ).addTo(map).on("click", function(e) {
            
        //     $('#device_id').text('1F032FF102');
        //     $('#nama_hewan').text('Kuro');
        //     $('#lok_lat').text('-6.221453');
        //     $('#lok_long').text('106.803346');

        // $('#modal_detail').modal('show');
        // });

        marker.bindPopup('Timmy').openPopup();
        // marker2.bindPopup('Kuro').openPopup();

    });
</script>

@endsection