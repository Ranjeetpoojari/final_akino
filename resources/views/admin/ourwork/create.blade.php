@extends('admin.layouts.app')
@section('title','Impact | Create')
@section('style')
<link href="{{url('/admin/Content/cleditor/jquery.cleditor.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('/admin/Content/Site.css')}}" rel="stylesheet" type="text/css" />
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
                                    <form class="forms-sample" action="{{ url('/admin/ourwork/store') }}" method="POST" enctype="multipart/form-data"
                                        accept-charset="UTF-8">
                                        @csrf
                                        <input type="hidden" name="ourwork_id" value="{{ isset($ourwork->id) ? $ourwork->id : '' }}">
                                        <div class="form-group">
                                            <label for="ourworktitle">Title</label>
                                            <input type="text" class="form-control" name="title" id="ourworktitle" placeholder="Title"
                                                value="{{ isset($ourwork->title) ? $ourwork->title : '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="ourworkslug">Slug</label>
                                            <input type="text" class="form-control" name="slug" id="ourworkslug" placeholder="Slug"
                                                value="{{ isset($ourwork->slug) ? $ourwork->slug : '' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="ourworkslug">Categories</label>
                                            <select class="form-control" name="category" id="category">
                                                
                                                {{--  <option value="child education" {{ isset($ourwork->category) && $ourwork->category == "child education" ? 'selected' : '' }}>Child education</option>
                                                <option value="disaster management"  {{ isset($ourwork->category) && $ourwork->category == "disaster management" ? 'selected' : '' }}>Disaster Management</option>
                                                <option value="health care" {{ isset($ourwork->category) && $ourwork->category == "health care" ? 'selected' : '' }}>Health Care</option>
                                                <option value="skill development" {{ isset($ourwork->category) && $ourwork->category == "skill development" ? 'selected' : '' }}>Skill Development</option>
                                                <option value="women empowerment" {{ isset($ourwork->category) && $ourwork->category == "women empowerment" ? 'selected' : '' }}>Women Empowerment</option>  --}}
                                                @foreach($subcat as $s)
                                                <option value="{{ $s->name }}" {{ (isset($ourwork->category) && $ourwork->category == $s->name) ? 'selected' : '' }}>
                                                    {{ $s->name }}
                                                </option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="ourworkslug">Total number of help</label>
                                            <input type="text" class="form-control" name="total" id="total" placeholder="Total number of help"
                                                value="{{ isset($ourwork->total) ? $ourwork->total : '' }}" onkeydown="validateInput(event)" required>
                                        </div>
                                     
                                     
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Slogan</label>
                                            <textarea rows="5" class="form-control" name="slogan" style="height: 100px"
                                                placeholder="Description" required>{{ isset($ourwork->slogan) ?$ourwork->slogan : '' }}</textarea>
                                        </div>
                                
                                        <div class="form-group">
                                            <label for="editor">Description</label>

                                            <TEXTAREA  id="editor" class="form-control" name="description"    required>{{ isset($ourwork->description) ? $ourwork->description : '' }}</TEXTAREA> <div class="normaldiv" style="float: right">
                                           
                                                 <div id="txtcode" class="">
                                                     
                                                 </div>
                                                 </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Main image</label>
                                            <input type="file" class="form-control" name="main_image" id="exampleInputUsername1" placeholder="Images">
                                        </div>
                                     
                                        {{--  <div class="form-group">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea rows="5" class="form-control" name="description" style="height: 100px"
                                                placeholder="Description">{{ isset($ourwork->description) ? $ourwork->description : '' }}</textarea>
                                        </div>  --}}
                                  
                                        <div class="form-group">
                                            <label for="is_active">Status</label>
                                            <select class="form-control" name="is_active" id="is_active">
                                                <option value="active" {{ isset($ourwork->is_active) && $ourwork->is_active == "active" ? 'selected' : '' }}>Active</option>
                                                <option value="inactive" {{ isset($ourwork->is_active) && $ourwork->is_active == "inactive" ? 'selected' : '' }}>Inactive</option>
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
            var titleInput = document.getElementById('ourworktitle');
            var slugInput = document.getElementById('ourworkslug');
    
            titleInput.addEventListener('input', function () {
                var title = titleInput.value;
                
                // Convert spaces to hyphens and make lowercase
                var slug = title.replace(/\s+/g, '-').toLowerCase();
    
                // Update the slug field
                slugInput.value = slug;
            });
        });
        function validateInput(event) {
            var allowedKeys = [8, 37, 39, 188]; 
            if ((event.key >= '0' && event.key <= '9') || event.key === ',' || allowedKeys.includes(event.keyCode)) {
                return true; // Allow the key
            } else {
                event.preventDefault(); // Prevent typing the character
                return false;
            }
        }
    </script>
    
    @stop
    @stop