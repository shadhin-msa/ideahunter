@extends("admin_res.app")

@section('head')
<!-- daterange picker -->
<link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
@endsection

@section('footer')
<script type="text/javascript">
		 //Date picker

		 $('#closing_dateDatepicker').datepicker({
		 	inputs: $('.closing_date_range'),
		 	format: 'yyyy-mm-dd',
		 	startDate: '+3m',
		 	clearBtn: true,
		 	autoclose: true
		 })
		
		 /* Acomplish Session Date */

		</script>
		<!-- CK Editor -->
<!--
<script src="{{ asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>
 <script>
	$(function () {
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.
		CKEDITOR.replace('editor1')
		//bootstrap WYSIHTML5 - text editor
		$('.textarea').wysihtml5()
	})
</script>
-->
@endsection

@section("main-content")


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add New Topic
			<small><!-- for sub title --></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">Editors</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					@include('includes.messages')
					<div class="box-header with-border">
						<h3 class="box-title">New Topic</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="{{ route('topic.store')}}" method="post">
						{{ csrf_field()}}
						<div class="box-body">
							<div class="col-lg-6">
								<div class=""form-group">
									<label for="topic_nameInputText"> Topic Name </label>
									<input type="text" required="required" class="form-control" name="topic_name" value="{{ old('topic_name')}}" id="topic_nameInputText" placeholder="Enter Topic Name">
								</div>

								<div class="form-group">
									<label for="slugInputText">Topic Slug</label>
									<input type="text" value="{{ old('slug')}}"  required="required" class="form-control" name="slug" id="slugInputText" placeholder="Enter Topic Slug">
								</div>

							</div>
							<div class="col-lg-6">

								<div id="closing_dateDatepicker">
									<!-- Date -->
									<div class="form-group col-lg-6">
										<label>Closing Date:</label>

										<div class="input-group date" >
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input type="text" value="{{ old('closing_date')}}"   required="required" name="closing_date" class="form-control pull-right closing_date_range" >
											

										</div>
										<!-- /.input group -->
									</div>
									<!-- /.form group -->

									<!-- Date -->
									<div class="form-group col-lg-6">
										<label>Final Closing Date:</label>
										<div class="input-group date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input type="text"  value="{{ old('final_closing_date')}}"  required="required" name="final_closing_date" class="form-control pull-right closing_date_range" >
										</div>
										<!-- /.input group -->
									</div>
									<!-- /.form group -->
								</div>
								<div class="form-group ">
									<label for="imageInputFile">Add Image</label>
									<input type="file"   name="image" id="imageInputFile">
								</div>

								<div class="checkbox">
									<label>
										<input type="checkbox" name="status"> Publish
									</label>
								</div>
							</div>
							<div class="col-lg-12">
								<label for="topic_descriptionInputTextarea">Topic Description</label>
	
								<textarea  class="textarea" name="topic_description" id="topic_descriptionInputTextarea" placeholder="Place some text here"
								style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ old('topic_description')}}</textarea>
								<div class="box-footer"><button type="submit" class="btn btn-primary">Submit</button> 
									
									<a class="btn btn-warning " href="{{ route('topic.index') }}">Back</a>
								</div>
							</div>

						</div>
					</form>
				</div>

			</div>
			<!-- /.col-->
		</div>
		<!-- ./row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection