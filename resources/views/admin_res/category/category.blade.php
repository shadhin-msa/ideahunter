@extends("admin_res.app")

@section('head')
<!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('footer')

<!-- DataTables -->
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection

@section("main-content")


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Category
			<small><!-- sub title --></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">Editors</li>
		</ol>
	</section>
	<!-- Main Content -->

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					@include('includes.messages')
					<div class="box-header 	with-border">
						<h3 class="box-title">Add New Category</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="{{ route('category.store')}}" method="post">
						{{ csrf_field()}}
						<div class="box-body">
							<div class="col-lg-10 col-lg-offset-2 ">
								<div class="col-lg-4 ">
									<div class="form-group">
										<label for="nameInputText">Category Name</label>
										<input type="text" required="required" value="{{old('name')}}" class="form-control" name="name" id="nameInputText" placeholder="Enter Name">
									</div>
								</div>
								<div class="col-lg-4   ">
									<div class="form-group">
										<label for="slugInputText">Category Slug</label>
										<input type="text" required="required" value="{{old('slug')}}" class="form-control" name="slug" id="slugInputText" placeholder="Enter  Slug">
									</div>

								</div>
								<div class="col-lg-2   ">
									<div class="form-group">
										<label for="nameInputText" style="opacity: 0">submit</label><br>
										<button type="submit" class="btn btn-primary">Submit
										</button>
									</div>

								</div>
							</div>

						</div>
					</form>
				</div>
				<!-- /.box -->

				<div class="box">
					<div class="box-header">
						<h3 class="box-title">All Categories</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Name</th>
									<th>Slug</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($categories as $category)
									<tr>
										<td>{{$loop->index+1}}</td>
										<td>{{$category->name}}</td>
										<td>{{$category->slug}}</td>
										<td><a href="{{ route('category.edit',$category->id) }}" class="text-info"> <span class=" glyphicon glyphicon-edit"></span></a></td>
										<td><a href="{{ route('category.destroy',$category->id) }}" class="text-danger"><span class="	glyphicon glyphicon-trash"></span></a></td>
									</tr>
								@endforeach
							</tbody>
							<tfoot>
								<tr>
									<th>S.No</th>
									<th>Name</th>
									<th>Slug</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</section>

		</div>
		<!-- /.col-->
	</div>
	<!-- ./row -->
	




	
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection