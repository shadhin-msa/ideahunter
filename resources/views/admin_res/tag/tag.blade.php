@extends("admin_res.app")

@section('footer')

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
      Tag
      <small><!-- sub title --></small>
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
          <h3 class="box-title">Add New Tag</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('tag.store')}}" method="post">
            {{ csrf_field()}}
          <div class="box-body">

          <div class="col-lg-10 col-lg-offset-2 ">
           <div class="col-lg-4">
            <div class="form-group">
              <label for="nameInputText">Tag Name</label>
              <input type="text" required="required" class="form-control" value="{{old('name')}}" name="name" id="nameInputText" placeholder="Enter Name">
            </div>
</div><div class="col-lg-4">
            <div class="form-group">
              <label for="slugInputText">Tag Slug</label>
              <input required="required" type="text" class="form-control" value="{{old('slug')}}" name="slug" id="slugInputText" placeholder="Enter  Slug">
            </div>
          </div><div class="col-lg-2">
            <div class="form-group">
              <label for="nameInputText" style="opacity: 0">submit</label><br/>
              <button type="submit" class="btn btn-primary">Submit
              </button>
            </div>

          </div>
        </div>

        </div>
      </form>
    </div>
    <!-- /.box-primary -->
    <!-- /.box -->

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">All Tags</h3>
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
                @foreach ($tags as $tag)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$tag->name}}</td>
                    <td>{{$tag->slug}}</td>
                    <td><a href="{{ route('tag.edit',$tag->id) }}" class="text-info"> <span class=" glyphicon glyphicon-edit"></span></a></td>
                    <td><a href="{{ route('tag.destroy',$tag->id) }}" class="text-danger"><span class=" glyphicon glyphicon-trash"></span></a></td>
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

  </div>
  <!-- /.col-->
</div>
<!-- ./row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection