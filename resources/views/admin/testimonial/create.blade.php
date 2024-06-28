@extends('admin.layouts.app')
@section('title','Testimonial | Create')
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
                                    <form class="forms-sample" action="{{url('/admin/testimonial/store')}}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
                                        @csrf
                                        <input type="hidden" name="testimonial_id" value="{{isset($faqs->id)?$faqs->id:''}}">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Name</label>
                                            <input type="text" class="form-control" name="name" id="exampleInputUsername1"
                                                placeholder="Name" value="{{isset($faqs->name)?$faqs->name:''}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Email</label>
                                            <input type="email" class="form-control" name="email" id="exampleInputUsername1"
                                                placeholder="Email" value="{{isset($faqs->email)?$faqs->email:''}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Mobile</label>
                                            <input type="number" class="form-control" name="mobile" id="exampleInputUsername1"
                                                placeholder="Mobile" value="{{isset($faqs->mobile)?$faqs->mobile:''}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Images</label>
                                            <input type="file" class="form-control" name="images" id="exampleInputUsername1"
                                                placeholder="Images">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Message</label>
                                            <textarea rows="5" class="form-control" name="message" style="height: 100px"
                                                placeholder="Message">{{isset($faqs->message)?$faqs->message:''}}</textarea>
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