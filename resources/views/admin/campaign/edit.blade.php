@extends('admin.layouts.app')
@section('title','Album | Create')
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
                                @if ( Session::get('status') == "failed")
                                    <span id="password" class="text-danger f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                @if ( Session::get('status') == "success")
                                    <span id="password" class="text-success f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                <div class="table-responsive">
                                    <form class="forms-sample" action="{{url('/admin/campaign/update')}}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$campaign->id}}">
                                        <div class="form-group">
                                            <label for="title">Campaign Name</label>
                                            <input type="text" class="form-control" value="{{$campaign->title}}" name="title" id="title" placeholder="Campaign Name" required >
                                        </div>
                                        <div class="form-group">
                                            <label for="short_description">Short Description</label>
                                            <textarea class="form-control" name="short_description" id="short_description" placeholder="Short Description" style="height: 80px" required>{{$campaign->short_description}}
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="editor">Description</label>

                                            <TEXTAREA  id="editor" class="form-control" name="description"    required>{{ isset($campaign->description) ? $campaign->description : '' }}</TEXTAREA> <div class="normaldiv" style="float: right">
                                           
                                                 <div id="txtcode" class="">
                                                     
                                                 </div>
</div>
                                        <div class="form-group">
                                            <label for="main_image">Main Image</label>
                                            <input type="file" class="form-control" name="main_image" id="main_image">
                                        </div>
                                        <div class="form-group">
                                            <label for="campiagn_type">Fund Amount</label>
                                            <input type="number" class="form-control" value="{{$campaign->fund_amount}}" name="fund_amount" id="campiagn_type" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="campiagn_type">Campaign Type</label>
                                            <select name="campiagn_type" id="campiagn_type" class="form-control" required>
                                                <option value=""></option>
                                                @php
                                                $category =DB::select("SELECT * FROM subcategories order by name asc");
                                            @endphp
                                            @foreach ($category as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="is_direct">is Direct Campaign</label>
                                            <select name="is_direct" id="is_direct" class="form-control" required>
                                                <option value="1" @if("1" == $campaign->is_direct) selected @endif>Yes</option>
                                                <option value="0" @if("0" == $campaign->is_direct) selected @endif>No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">is Active</label>
                                            <select name="is_active" id="is_active" class="form-control" required>
                                                <option value="active"  @if("active" == $campaign->is_active) selected @endif>Active</option>
                                                <option value="inactive"  @if("inactive" == $campaign->is_active) selected @endif>Inactive</option>
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

</script>
    @stop
    @stop