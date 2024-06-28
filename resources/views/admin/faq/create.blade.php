@extends('admin.layouts.app')
@section('title','Country | Akino foundation')
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
                                    <form class="forms-sample" action="{{url('/admin/faq/store')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="faqs_id" value="{{isset($faqs->id)?$faqs->id:''}}">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Question</label>
                                            <input type="text" class="form-control" name="question" id="exampleInputUsername1"
                                                placeholder="Question" value="{{isset($faqs->question)?$faqs->question:''}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Position</label>
                                            <input type="number" class="form-control" name="position" id="exampleInputUsername1"
                                                placeholder="Position" value="{{isset($faqs->position)?$faqs->position:''}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Answer</label>
                                            <textarea rows="5" class="form-control" name="answer" style="height: 150px"
                                                placeholder="Answer">{{isset($faqs->answer)?$faqs->answer:''}}</textarea>
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