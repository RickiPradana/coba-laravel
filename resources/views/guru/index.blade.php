@extends('layouts.main')

@section('container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Guru
                {{-- <small>Control panel</small> --}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Guru</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                            
                    <!-- general form elements -->
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Guru</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                {{-- <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#basicModal">Tambah</a> --}}
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModalTambah">
                                    <i class="bi bi-file-plus"></i> Tambah
                                </button>
                                <button type="button" class="btn btn-sm btn-light">
                                    <i class="bi bi-file-earmark-pdf"></i> Export PDF
                                </button>
                                <button type="button" class="btn btn-sm btn-light">
                                    <i class="bi bi-file-earmark-excel"></i> Export Excel
                                </button>
                                {{-- <a href="/exportsiswapdf" target="_blank" class="btn btn-sm btn-light" type="button">
                                    <i class="bi bi-file-earmark-pdf"></i> Export PDF
                                </a>
                                <a href="/exportsiswaexcel" target="_blank" class="btn btn-sm btn-light">
                                    <i class="bi bi-file-earmark-excel"></i> Export Excel
                                </a> --}}
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-upload"></i> Import Excel
                                </button>
                                <a href="/siswa" class="btn btn-sm btn-success">
                                    <i class="bi bi-arrow-repeat"></i> Refresh
                                </a>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-2">
                                <Label>Filter Tanggal Lahir</Label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-2">
                                    <h5>Start Date <span class="text-danger"></span></h5>
                                    <input type="date" name="start_date" id="start_date" class="form-control datepicker-autoclose" placeholder="Please select start date">
                                </div>
                                <div class="form-group col-md-2">
                                    <h5>End Date <span class="text-danger"></span></h5>
                                    <input type="date" name="end_date" id="end_date" class="form-control datepicker-autoclose" placeholder="Please select end date">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-2">
                                    <button type="text" id="btnFiterSubmitSearch" class="btn btn-google btn-sm">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Table Guru</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12 table-responsive table-responsive-sm">
                                    <br>
                                    <table class="table table-bordered" id="table_guru">
                                        <thead>
                                        <tr class="tr bg-red">
                                            <th>ID</th>
                                            {{-- <th>Wali Kelas</th> --}}
                                            <th>Nama</th>
                                            {{-- <th>Jenis Kelamin</th> --}}
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            {{-- <th>Agama</th> --}}
                                            {{-- <th>Alamat</th> --}}
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    {{-- </div> --}}
                </section>
                <!-- /.Left col -->
            </div>
            <!-- /.row (main row) -->
        </section>
        <!-- /.content -->
    </div>
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Basic Modal</h4>
                </div>
                <div class="modal-body">
                    <h3>Modal Body</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ajax-product-modal" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title" id="productCrudModal"></h4>
        </div>
        <div class="modal-body">
        <form id="productForm" name="productForm" class="form-horizontal">
        <input type="hidden" name="product_id" id="product_id">
        <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-12">
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Tilte" value="" maxlength="50" required="">
        </div>
        </div> 
        <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Product Code</label>
        <div class="col-sm-12">
        <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Enter Tilte" value="" maxlength="50" required="">
        </div>
        </div>
        <div class="form-group">
        <label class="col-sm-2 control-label">Description</label>
        <div class="col-sm-12">
        <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" value="" required="">
        </div>
        </div>
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save changes
        </button>
        </div>
        </form>
        </div>
        <div class="modal-footer">
        </div>
        </div>
        </div>
        </div>
    @include('layouts.datatables')
    <script>
        $(document).ready( function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#table_guru').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('guru') }}",
                    type: 'GET',
                    data: function (d) {
                        d.start_date = $('#start_date').val();
                        d.end_date = $('#end_date').val();
                    }
                    },
                columns: [
                            { data: 'id', name: 'id' },
                            { data: 'nama_guru', name: 'nama_guru' },
                            // { data: 'nama', name: 'nama' },
                            // { data: 'jenis_kelamin', name: 'jenis_kelamin' },
                            { data: 'tempat_lahir', name: 'tempat_lahir' },
                            { data: 'tgl_lahir', name: 'tgl_lahir' },
                            // { data: 'alamat', name: 'alamat' },
                            // { data: 'agama', name: 'agama' },
                            // {"mRender": function ( data, type, row ) {
                            // return '<a href=add.html?id="'+row[0]+'">Edit</a>';
                            // return ' <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalTambah" data-id="' + row.id + '">Edit</button>';
                            // }},
                            { data: 'action', name: 'action', orderable: false },

                        ],
                        order: [[0, 'desc']],
            });
        });
        
    /* When click edit user */
    $('body').on('click', '.edit-product', function () {
    var product_id = $(this).data('id');
    $.get('product-list/' + product_id +'/edit', function (data) {
    $('#title-error').hide();
    $('#product_code-error').hide();
    $('#description-error').hide();
    $('#productCrudModal').html("Edit Product");
    $('#btn-save').val("edit-product");
    $('#ajax-product-modal').modal('show');
    $('#product_id').val(data.id);
    $('#title').val(data.title);
    $('#product_code').val(data.product_code);
    $('#description').val(data.description);
    })
    });
    if ($("#productForm").length > 0) {
    $("#productForm").validate({
    submitHandler: function(form) {
    var actionType = $('#btn-save').val();
    $('#btn-save').html('Sending..');
    $.ajax({
    data: $('#productForm').serialize(),
    url: SITEURL + "product-list/store",
    type: "POST",
    dataType: 'json',
    success: function (data) {
    $('#productForm').trigger("reset");
    $('#ajax-product-modal').modal('hide');
    $('#btn-save').html('Save Changes');
    var oTable = $('#laravel_datatable').dataTable();
    oTable.fnDraw(false);
    },
    error: function (data) {
    console.log('Error:', data);
    $('#btn-save').html('Save Changes');
    }
    });
    }
    })
    }
        $('#btnFiterSubmitSearch').click(function(){
            $('#table_guru').DataTable().draw(true);
        });
    </script>
    {{-- <script>
        var SITEURL = '{{URL::to('/')}}';
    $(document).ready( function () {
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $('#laravel_datatable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
    url: SITEURL + "guru",
    type: 'GET',
    },
    columns: [
    {data: 'id', name: 'id'},
    // {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false},
    { data: 'nama_guru', name: 'nama_guru' },
    { data: 'tempat_lahir', name: 'tempat_lahir' },
    { data: 'tgl_lahir', name: 'tgl_lahir' },
    // { data: 'created_at', name: 'created_at' },
    {data: 'action', name: 'action', orderable: false},
    ],
    order: [[0, 'desc']]
    });
    /*  When user click add user button */
    $('#create-new-product').click(function () {
    $('#btn-save').val("create-product");
    $('#product_id').val('');
    $('#productForm').trigger("reset");
    $('#productCrudModal').html("Add New Product");
    $('#ajax-product-modal').modal('show');
    });
    /* When click edit user */
    $('body').on('click', '.edit-product', function () {
    var product_id = $(this).data('id');
    $.get('product-list/' + product_id +'/edit', function (data) {
    $('#title-error').hide();
    $('#product_code-error').hide();
    $('#description-error').hide();
    $('#productCrudModal').html("Edit Product");
    $('#btn-save').val("edit-product");
    $('#ajax-product-modal').modal('show');
    $('#product_id').val(data.id);
    $('#title').val(data.title);
    $('#product_code').val(data.product_code);
    $('#description').val(data.description);
    })
    });
    $('body').on('click', '#delete-product', function () {
    var product_id = $(this).data("id");
    if(confirm("Are You sure want to delete !")){
    $.ajax({
    type: "get",
    url: SITEURL + "product-list/delete/"+product_id,
    success: function (data) {
    var oTable = $('#laravel_datatable').dataTable(); 
    oTable.fnDraw(false);
    },
    error: function (data) {
    console.log('Error:', data);
    }
    });
    }
    }); 
    });
    if ($("#productForm").length > 0) {
    $("#productForm").validate({
    submitHandler: function(form) {
    var actionType = $('#btn-save').val();
    $('#btn-save').html('Sending..');
    $.ajax({
    data: $('#productForm').serialize(),
    url: SITEURL + "product-list/store",
    type: "POST",
    dataType: 'json',
    success: function (data) {
    $('#productForm').trigger("reset");
    $('#ajax-product-modal').modal('hide');
    $('#btn-save').html('Save Changes');
    var oTable = $('#laravel_datatable').dataTable();
    oTable.fnDraw(false);
    },
    error: function (data) {
    console.log('Error:', data);
    $('#btn-save').html('Save Changes');
    }
    });
    }
    })
    }
    </script> --}}
    {{-- Modal Tambah --}}
    {{-- <div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Siswa</h4>
                </div>
                <form action="{{ url('/siswa/tambah') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama"
                            required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" required>
                                <option>Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir"
                            required>
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir"
                            required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat" placeholder="Alamat"
                            required>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <input class="form-control" type="text" name="agama" id="agama" placeholder="Agama"
                            required>
                        </div>
                        <div class="form-group">
                            <label>Wali Kelas</label>
                            <select class="form-control" data-live-search="true" name="guru_id" required>
                                <option>-Pilih-</option>
                                @foreach ($guru as $item_guru)
                                <option value="{{ $item_guru->id }}">{{ $item_guru->nama_guru }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    {{-- end modal --}}

<!-- Modal edit-->
{{-- @foreach ($siswa as $siswaedit)
<div class="modal fade" id="ModalEdit-{{ $siswaedit->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h1 class="modal-title fs-5">Edit Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('/siswa/update/'.$siswaedit->id) }}" method="post">
            @method('patch')
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama"
                    value="{{ $siswaedit->nama }}" required autofocus>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" required>
                        <option value="{{ $siswaedit->jenis_kelamin }}">{{ $siswaedit->jenis_kelamin }}</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="date" name="ttl" id="ttl" placeholder="TAnggal Lahir"
                    value="{{ $siswaedit->ttl }}" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" type="text" name="alamat" id="alamat" placeholder="Alamat"
                    value="{{ $siswaedit->alamat }}" required>
                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <input class="form-control" type="text" name="agama" id="agama" placeholder="Agama"
                    value="{{ $siswaedit->agama }}" required>
                </div>
                <div class="form-group">
                    <label>Wali Kelas</label>
                    <select class="form-control" name="guru_id" required>
                        <option value="{{ $siswaedit->guru->id }}">{{ $siswaedit->guru->nama_guru }}</option>
                        @foreach ($guru as $item_guru)
                        <option value="{{ $item_guru->id }}">{{ $item_guru->nama_guru }}</option>                            
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </div>
        </form>
    </div>
    </div>
</div>
@endforeach --}}
{{-- end --}}

<!-- Modal Hapus-->
{{-- @foreach ($siswa as $siswaedit)
<div class="modal fade" id="ModalHapus-{{ $siswaedit->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
        <h1 class="modal-title fs-5">Hapus Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('/siswa/delete/'.$siswaedit->id) }}" method="post">
            @method('delete')
            @csrf
            <div class="modal-body">
                <h6>Yakin akan menghapus data {{ $siswaedit->nama }}?</h6>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">Ok</button>
            </div>
        </form>
    </div>
    </div>
</div>
@endforeach --}}
{{-- end --}}

<!-- Modal Import Data -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Import Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    <form action="/importsiswaexcel" method="post" enctype="multipart/form-data">
    @csrf
        <div class="modal-body">
            <div class="form-group">
                <input type="file" name="file" required>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Import</button>
        </div>
    </div>
    </form>
    </div>
</div> --}}

{{-- Sweet Alert Delete --}}
{{-- <script>
    $('.delete').click(function(){
        var siswaid = $(this).attr('data-id');
        var siswanamadepan = $(this).attr('data-name');
        swal({
        title: "Yakin?",
        text: "Anda akan menghapus data siswa dengan nama "+siswanamadepan+"!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            // window.location="/siswa/tambah/"+siswaid+""
            window.location="/home/siswa/delete/"+siswaid+"";
        } else {
            swal("Data tidak jadi dihapus!");
        }
        });
    });
</script> --}}
{{-- end --}}

{{-- Toastr --}}
{{-- <script>
    toastr.success('Have fun storming the castle!', 'Miracle Max Says')
</script> --}}
{{-- Search --}}
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.3.4/css/searchBuilder.dataTables.min.css">
<script src="https://cdn.datatables.net/searchbuilder/1.3.4/js/dataTables.searchBuilder.min.js"></script>
<script>
    $('#myTable').DataTable( {
    dom: 'Qfrtip'
    } );
</script> --}}
{{-- end --}}

{{-- Datatable --}}
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function ()
    {
        $('#myTable').DataTable();
    } );
</script> --}}
{{-- end --}}
@endsection