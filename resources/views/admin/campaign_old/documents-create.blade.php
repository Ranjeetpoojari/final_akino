@extends('admin.layouts.app')
@section('title','Album | Create')
@section('style')
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
                                        <form class="forms-sample" action="{{url('/admin/campaign/document/store')}}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
                                            @csrf
                                            <input type="hidden" name="campaign_id" id="campaign_id" value="{{$campaign_id}}">
                                            <div class="form-group">
                                                <label for="name">Document Name</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Document Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="attachment">Attachment</label>
                                                <input type="file" class="form-control" name="attachment[]" id="attachment" multiple accept="image/jpg, image/jpeg" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">is Active</label>
                                                <select name="is_active" id="is_active" class="form-control">
                                                    <option value="active" >Active</option>
                                                    <option value="inactive">Inactive</option>
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

    @stop
    @stop