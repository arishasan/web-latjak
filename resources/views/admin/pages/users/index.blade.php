@extends('admin.mainlayout')

@section('content')

<div id="content" class="app-content">
    
    <section id="header">
        <div class="row align-items-center mb-2">
            <div class="col-lg-6">
                <h2>
                Manage Users
                </h2>
            </div>
            <div class="col-lg-6 text-end">
                <ol class="breadcrumb float-end">
                    <li class="breadcrumb-item"><a href="#">Users</a></li>
                    <li class="breadcrumb-item active">Manage</li>
                </ol>
            </div>
        </div>
    </section>

    @include('admin.parts.feedback')

    <div>

        <div class="accordion mb-3" id="accordionPanelsStayOpenExample" hidden>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  Filter
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label for="instansi">Instansi</label>
                            <select name="instansi" id="" class="form-control">
                                <option value="">All</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="wilayah">Wilayah</label>
                            <select name="wilayah" id="" class="form-control">
                                <option value="">All</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="branch">Branch</label>
                            <select name="branch" id="" class="form-control">
                                <option value="">All</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label for="jabatan">Jabatan</label>
                            <select name="jabatan" id="" class="form-control">
                                <option value="">All</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control">
                                <option value="">All</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="status">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="">All</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-light btn-sm">Terapkan</button>
                            <button class="btn btn-light btn-sm">Reset</button>
                        </div>
                    </div>

                </div>
              </div>
            </div>
          </div>

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-6 align-items-center">
                        Users Data
                    </div>
                    <div class="col-lg-6" style="text-align: right">
                        <button class="btn btn-sm btn-outline-success">Tambah User</button>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="10%">ID User</th>
                            <th>Nama User</th>
                            <th><center>List Peliharaan & Device ID</center></th>
                            <th width="15%"><center>Status</center></th>
                            <th width="15%"><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody id="body_data">

                        <tr>
                            <td>USER001</td>
                            <td>
                                <span class="text-primary detail_karyawan" data-id="" style="cursor: pointer"><b>Admin Test</b> <i class="fa fa-info-circle"></i></span>
                            </td>
                            <td><center>-</center></td>
                            <td><center><b class="text-success">Aktif</b> <br/> <small class="text-primary"><b>ADMIN</b></small></center></td>
                            <td>
                                <center>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </center>
                            </td>
                        </tr>

                        <tr>
                            <td>USER001</td>
                            <td>
                                <span class="text-primary detail_karyawan" data-id="" style="cursor: pointer"><b>Mu'tashim</b> <i class="fa fa-info-circle"></i></span>
                            </td>
                            <td>
                                <center>
                                    <ol>
                                        <li>Timmy <b>(1F032DD134)</b></li>
                                        {{-- <li>Kuro <b>(1F032FF102)</b></li> --}}
                                    </ol>
                                </center>
                            </td>
                            <td><center><b class="text-success">Aktif</b> <br/> <small class="text-warning"><b>USER</b></small></center></td>
                            <td>
                                <center>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </center>
                            </td>
                        </tr>


                    </tbody>
                    <tfoot>
                        <tr>
                            <th width="10%">ID User</th>
                            <th>Nama User</th>
                            <th><center>List Peliharaan & Device ID</center></th>
                            <th width="15%"><center>Status</center></th>
                            <th width="15%"><center>Aksi</center></th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>

    </div>
    

</div>

@endsection

@section('scriptplus')

<script>
    $(function(){

        $('#table').DataTable({
            responsive: true,
        });

    });
</script>

@endsection