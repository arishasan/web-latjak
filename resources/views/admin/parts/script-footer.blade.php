<!-- ================== BEGIN core-js ================== -->
<script src="{{ asset('assets') }}/studio/js/vendor.min.js"></script>
<script src="{{ asset('assets') }}/studio/js/app.min.js"></script>
<!-- ================== END core-js ================== -->


<script src="{{ asset('assets') }}/studio/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="{{ asset('assets') }}/studio/plugins/select2/js/select2.full.min.js"></script>

<script src="{{ asset('assets') }}/studio/plugins/summernote/dist/summernote-bs5.js"></script>

<!-- DataTables  & Plugins -->
<script src="{{ asset('assets') }}/studio/plugins/datatables/jquery.dataTables.min.js"></script>
{{-- <script src="{{ asset('assets') }}/studio/plugins/datatables-fixedheader/js/dataTables.fixedHeader.js"></script>
<script src="{{ asset('assets') }}/studio/plugins/datatables-fixedheader/js/fixedHeader.bootstrap4.js"></script> --}}

<script src="{{ asset('assets') }}/studio/plugins/datatables-fixedcolumns/js/dataTables.fixedColumns.min.js"></script>
<script src="{{ asset('assets') }}/studio/plugins/datatables-fixedcolumns/js/fixedColumns.bootstrap4.min.js"></script>

<script src="{{ asset('assets') }}/studio/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/studio/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('assets') }}/studio/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/studio/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('assets') }}/studio/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/studio/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('assets') }}/studio/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('assets') }}/studio/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('assets') }}/studio/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('assets') }}/studio/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('assets') }}/studio/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/locales/de_DE.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/germanyLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/fonts/notosans-sc.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="//cdn.amcharts.com/lib/5/themes/Responsive.js"></script>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>

<!-- ================== BEGIN page-js ================== -->
{{-- <script src="{{ asset('assets') }}/studio/plugins/apexcharts/dist/apexcharts.min.js"></script> --}}
{{-- <script src="{{ asset('assets') }}/studio/js/demo/dashboard.demo.js"></script> --}}
<!-- ================== END page-js ================== -->

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function callAlert(type, text){
        
        if(type == 'error'){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: text,
            });
        }else if(type == 'success'){
            Swal.fire({
                icon: 'success',
                title: 'Success...',
                text: text,
            });
        }

    }

    function callLoading(){
        Swal.fire({
            title: 'Memuat..',
            allowEscapeKey: false,
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            },
        });
    }

    function closeLoading(){
        Swal.close();
    }
    
    $(function(){

        $('.select2').select2(
            { width: '100%' }
        );

    });
</script>