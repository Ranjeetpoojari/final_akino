@extends('admin.layouts.app')
@section('title','Impact | Create')
@section('style')
<link href="{{url('/admin/Content/cleditor/jquery.cleditor.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('/admin/Content/Site.css')}}" rel="stylesheet" type="text/css" />
{{--  <link href="Content/cleditor/jquery.cleditor.css" rel="stylesheet" type="text/css" />
<link href="Content/Site.css" rel="stylesheet" type="text/css" />  --}}
<style>
    td{
max-width: 300px;
overflow: hidden;
}
.sidebar>.nav {
height: 80vh!important;
overflow: scroll!important;
}
.sidebar .nav::-webkit-scrollbar {
width: 12px;
}

.sidebar .nav::-webkit-scrollbar-track {
background: transparent; 
}

.sidebar .nav::-webkit-scrollbar-thumb {
background: transparent;
}
</style>
@stop
@section('content')


<div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    @include('admin.navigation.navigation')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        @include('admin.navigation.sidebar')
        <!-- partial -->


        <!-- partial -->
        <div class="main-panel" style="margin-left:auto;">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-2 grid-margin stretch-card">
                    </div>
                    <div class="col-lg-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{$text}}</h4>
                                @if (Session::get('status') == "failed")
                                    <span id="password" class="text-danger f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                @if (Session::get('status') == "success")
                                    <span id="password" class="text-success f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                <div class="table-responsive">
                                    <form class="forms-sample" action="{{ url('/admin/blog/store') }}" method="POST" enctype="multipart/form-data"
                                        accept-charset="UTF-8">
                                        @csrf
                                        <input type="hidden" name="blog_id" value="{{ isset($blog->id) ? $blog->id : '' }}">
                                        <div class="form-group">
                                            <label for="blogtitle">Title</label>
                                            <input type="text" class="form-control" name="title" id="blogtitle" placeholder="Title"
                                                value="{{ isset($blog->title) ? $blog->title : '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="blogslug">Slug</label>
                                            <input type="text" class="form-control" name="slug" id="blogslug" placeholder="Slug"
                                                value="{{ isset($blog->slug) ? $blog->slug : '' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editor">Content</label>

                                            <TEXTAREA  id="editor" class="form-control" name="content"    required>{{ isset($blog->content) ? $blog->content : '' }}</TEXTAREA> <div class="normaldiv" style="float: right">
                                           
                                                 <div id="txtcode" class="">
                                                     
                                                 </div>
                                                 </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Main image</label>
                                            <input type="file" class="form-control" name="main_images" id="exampleInputUsername1" placeholder="Images">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">blog Date</label>
                                            <input type="date" class="form-control" name="blog_date" id="exampleInputUsername1"
                                                placeholder="blog Date" value="{{ isset($blog->blog_date) ? $blog->blog_date : '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="is_active">Status</label>
                                            <select class="form-control" name="is_active" id="is_active">
                                                <option value="active" {{ isset($blog->is_active) && $blog->is_active == "active" ? 'selected' : '' }}>Active</option>
                                                <option value="inactive" {{ isset($blog->is_active) && $blog->is_active == "inactive" ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->





            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->


    
    @section('script')
   
    <script src="{{url('/admin/Scripts/jquery-1.6.3.js')}}" type="text/javascript"></script>
    <script src="{{url('/admin/Scripts/jquery.cleditor.js')}}" type="text/javascript"></script>

    <script type="text/javascript">

        $(document).ready(function () {
            var options = {
               
                controls: "bold italic underline strikethrough subscript superscript | font size " +
                        "style | color highlight removeformat | bullets numbering | outdent " +
                        "indent | alignleft center alignright justify | undo redo | " +
                        "rule link image unlink | cut copy paste pastetext | print source"
            };
    
            var editor = $("#editor").cleditor(options)[0];
    
            $("#btnClear").click(function (e) {
                e.preventDefault();
                editor.focus();
                editor.clear();
            });
    
            $("#btnGetHtml").click(function () {
                alert($("#editor").val());
                $("#txtcode").text($("#editor").val());
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
            var titleInput = document.getElementById('blogtitle');
            var slugInput = document.getElementById('blogslug');
    
            titleInput.addEventListener('input', function () {
                var title = titleInput.value;
                
                // Convert spaces to hyphens and make lowercase
                var slug = title.replace(/\s+/g, '-').toLowerCase();
    
                // Update the slug field
                slugInput.value = slug;
            });
        });
    </script>
    
    @stop
    @stop