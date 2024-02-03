<meta charset="utf-8" />
<title>Latjak Admin | {{ @ucwords(str_replace("/", " ", str_replace("_", " ", Request::path()))) }}</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />


<!-- ================== BEGIN core-css ================== -->
<link href="{{ asset('assets') }}/studio/css/vendor.min.css" rel="stylesheet" />
<link href="{{ asset('assets') }}/studio/css/app.min.css" rel="stylesheet" />
<!-- ================== END core-css ================== -->

<link rel="stylesheet" href="{{ asset('assets') }}/studio/plugins/sweetalert2/sweetalert2.css">
<link rel="stylesheet" href="{{ asset('assets') }}/studio/plugins/select2/css/select2.min.css">
<link href="{{ asset('assets') }}/studio/plugins/summernote/dist/summernote-bs5.css" rel="stylesheet" />
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets') }}/studio/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/studio/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/studio/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
{{-- <link rel="stylesheet" href="{{ asset('assets') }}/studio/plugins/datatables-fixedheader/css/fixedHeader.bootstrap4.min.css"> --}}
<link rel="stylesheet" href="{{ asset('assets') }}/studio/plugins/datatables-fixedcolumns/css/fixedColumns.bootstrap4.min.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
crossorigin=""/>

<style>
	.select2-container--open {
		z-index: 9999999
	}

	.scrollable{
		overflow-y: scroll; height:400px;
	}

	.note-group-select-from-files {
		display: none;
	}
</style>