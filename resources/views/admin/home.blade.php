@extends('admin.common.main')
@section('content')
<div id="page-content-wrapper">
    <div class="container-fluid">
        @component('components.loggedIn')
        Issue
        @endcomponent
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="board3">
                    <div class="panel panel-primary">
                        <div class="col-md-3 pl-0">
                            <div class="product-image1">
                                <img src="{{ asset($magazine->cover_pic) }}" class="w100">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="col-md-12 tal p-0">
                                <h4 class="mt-0">Ekodus A Bimonthly Newsletter</h4>
                                <span>{{ $magazine->issue_no }}</span>
                            </div>                                    
                            <div class="col-md-12 p-0">
                                <p>{{ $magazine->issue_summary }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <a href="{{ route('admin.addissue') }}" class="btn add-new-blog">ADD NEW</a>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
@endsection