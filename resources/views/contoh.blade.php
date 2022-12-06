@extends('layouts.main')

@section('container')
<div class="container">
    <div class="card-header border-left"><h3><strong> Customer overview</strong></h3></div>
<br>

    <div class="row">
        <div class="col-md text-right">
            <button type="button" class="btn btn-success" data-toggle="modal" href="javascript:void(0)" id="createNewcustomer">Create Record</button>
        </div>
    </div>

    {{-- Modal --}}
    <div id="customermodal" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times</span></button></div>
                <div class="modal-body">

                    <form id="customerForm" name="customerForm" class="form-horizontal">
                        <input type="hidden" name="customerid" id="customerid">

                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">Customer Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="" maxlength="50" required="">
                            </div>
                        </div>

                       <div class="form-group">
                            <label class="col-sm-6 control-label">Customer Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="chiname" name="chiname" placeholder="Customer Name" value="" maxlength="50" required="">
                            </div>
                        </div>

                       <div class="form-group">
                            <label class="col-sm-6 control-label">Contract type</label>
                           <div class="col-sm-12">
                                    <select name="type" id="type" class="form-control">
                                            <option value="" disabled>Type</option>
                                            <option value="Government">Government Contract</option>
                                            <option value="Private">Private Contract</option>
                                    </select>
                           </div></div>

                        <br>
                        <div class="col-sm text-right">
                            <button type="submit" class="btn btn-outline-secondary" id="saveBtn" value="create">Save changes</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Table --}}
<br>
    <div class="row">
        <br/>
        <br/>
        <div class="form-group col-md-12 align-content-center">
            <table class="table-fluid center-block" id="customertable">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>ChiName</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

var table = $('#customertable').DataTable({
        processing: true,
        serverSide: true,
        dom: 'B<"top"frli>tp',
        ajax: {
            url: "{{ route('customer.index') }}", //Accessing server for data
        columns: [
            {data: 'id'}, //data refers to DB column name
            {data: 'name'}, 
            {data: 'chiname'}, 
            {data: 'type'}, 
            {data: 'action'}, //this is an addColumn item from Controller
        ]
    });

$('#createNewcustomer').click(function () {
        $('#saveBtn').val("create customer");
        $('#customerid').val('');
        $('#customerForm').trigger("reset");
        $('#modelHeading').html("Create New Customer");
        $('#customermodal').modal('show');
    });

//Control the modal behavior when clicking the edit button.
    $('body').on('click', '.editcustomer', function () {
        var customerid = $(this).data('id');
        $.get("{{ route('customer.index') }}" +'/' + customerid +'/edit', function (data) {
            $('#modelHeading').html("Edit Customer");
            $('#saveBtn').val("edit-user");
            $('#customermodal').modal('show');
            $('#customerid').val(data.id);
            $('#name').val(data.name);
            $('#chiname').val(data.chiname);
            $('#type').val(data.type);
        })
    });

//Create a brand-new record
$('#createNewcustomer').click(function () {
        $('#saveBtn').val("create customer");
        $('#customerid').val('');
        $('#customerForm').trigger("reset");
        $('#modelHeading').html("Create New Customer");
        $('#customermodal').modal('show');
    });

//Update
    $('body').on('click', '.editcustomer', function () {
        var customerid = $(this).data('id');
        $.get("{{ route('customer.index') }}" +'/' + customerid +'/edit', function (data) {
            $('#modelHeading').html("Edit Customer");
            $('#saveBtn').val("edit-user");
            $('#customermodal').modal('show');
            $('#customerid').val(data.id);
            $('#name').val(data.name);
            $('#chiname').val(data.chiname);
            $('#type').val(data.type);
        })
    });

//Save
$('#saveBtn').click(function (e) {
    e.preventDefault();
    $(this).html('Sending..');
    $.ajax({
        data: $('#customerForm').serialize(),
        url: "{{ route('customer.store') }}",
        type: "POST",
        dataType: 'json',
        success: function (data) {
            $('#customerForm').trigger("reset");
            $('#customermodal').modal('hide');
            table.draw();
            },
        error: function (data) {
            console.log('Error:', data);
            $('#saveBtn').html('Error');}
    });
});

//Delete
$('body').on('click', '.deletecustomer', function () {
    var id = $(this).data("id");
    confirm("Are You sure?");
    $.ajax({
        type: "DELETE",
        url: "{{ route('customer.store') }}"+'/'+id,
        success: function (data) {
            table.draw();
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
});
</script>
@endsection
