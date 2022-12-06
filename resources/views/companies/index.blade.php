@extends('layouts.main')

@section('container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Company
                {{-- <small>Control panel</small> --}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Company</li>
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
                            <h3 class="box-title">Company</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                {{-- <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#basicModal">Tambah</a> --}}
                                <a class="btn btn-success btn-sm" href="{{ route('companies.create') }}"> Create Company</a>
                                {{-- <button type="button" class="btn btn-sm btn-light">
                                    <i class="bi bi-file-earmark-pdf"></i> Export PDF
                                </button>
                                <button type="button" class="btn btn-sm btn-light">
                                    <i class="bi bi-file-earmark-excel"></i> Export Excel
                                </button> --}}
                                {{-- <a href="/exportsiswapdf" target="_blank" class="btn btn-sm btn-light" type="button">
                                    <i class="bi bi-file-earmark-pdf"></i> Export PDF
                                </a>
                                <a href="/exportsiswaexcel" target="_blank" class="btn btn-sm btn-light">
                                    <i class="bi bi-file-earmark-excel"></i> Export Excel
                                </a> --}}
                                <!-- Button trigger modal -->
                                {{-- <button type="button" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-upload"></i> Import Excel
                                </button>
                                <a href="/siswa" class="btn btn-sm btn-success">
                                    <i class="bi bi-arrow-repeat"></i> Refresh
                                </a> --}}
                            </div>
                            {{-- <div class="row mb-0">
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
                            </div> --}}
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
                                    <table class="table table-bordered" id="datatable-crud">
                                      <thead>
                                        <tr>
                                          <th>Id</th>
                                          <th>Name</th>
                                          <th>Email</th>
                                          <th>Address</th>
                                          <th>Created at</th>
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    @include('layouts.datatables')
    <script type="text/javascript">
      $(document).ready( function () {
      $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
      });
      $('#datatable-crud').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ url('companies') }}",
      columns: [
      { data: 'id', name: 'id' },
      { data: 'name', name: 'name' },
      { data: 'email', name: 'email' },
      { data: 'address', name: 'address' },
      { data: 'created_at', name: 'created_at' },
      {data: 'action', name: 'action', orderable: false},
      ],
      order: [[0, 'desc']]
      });
      $('body').on('click', '.delete', function () {
      if (confirm("Delete Record?") == true) {
      var id = $(this).data('id');
      // ajax
      $.ajax({
      type:"POST",
      url: "{{ url('delete-company') }}",
      data: { id: id},
      dataType: 'json',
      success: function(res){
      var oTable = $('#datatable-crud').dataTable();
      oTable.fnDraw(false);
      }
      });
      }
      });
      });
    </script>
@endsection
