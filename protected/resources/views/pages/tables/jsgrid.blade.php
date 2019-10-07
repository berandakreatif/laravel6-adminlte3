@extends('layouts.app')
@section('bodyclass','hold-transition sidebar-mini')
@section('content')  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>jsGrid</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">jsGrid</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">jsGrid</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="jsGrid1"></div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
@section('css')
  <!-- jsGrid -->
  <link rel="stylesheet" href="{{url('assets/')}}/plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="{{url('assets/')}}/plugins/jsgrid/jsgrid-theme.min.css">
@endsection
@section('js')
<!-- jQuery -->
<script src="{{url('assets/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('assets/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jsGrid -->
<script src="{{url('assets/')}}/plugins/jsgrid/demos/db.js"></script>
<script src="{{url('assets/')}}/plugins/jsgrid/jsgrid.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('assets/')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('assets/')}}/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#jsGrid1").jsGrid({
        height: "100%",
        width: "100%",
 
        sorting: true,
        paging: true,
 
        data: db.clients,
 
        fields: [
            { name: "Name", type: "text", width: 150 },
            { name: "Age", type: "number", width: 50 },
            { name: "Address", type: "text", width: 200 },
            { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
            { name: "Married", type: "checkbox", title: "Is Married" }
        ]
    });
  });
</script>
@endsection
