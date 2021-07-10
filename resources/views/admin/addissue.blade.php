@extends('admin.common.main')
@section('content')
<div id="page-content-wrapper">
    <div class="container-fluid">

        @component('components.loggedIn')
            Add Issue
        @endcomponent

        <div class="row">
        	@if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="board3">
                    <div class="panel panel-primary">
                        <div class="col-md-3 pl-0">
                            <form action="{{ route('admin.createIssue') }}" method="post" enctype="multipart/form-data">
                            	{{ csrf_field() }}
                                <div class="form-group">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" name="issue_cover" accept=".png, .jpg, .jpeg" />
                                        </div>
                                        <div class="avatar-preview1">
                                            <div id="imagePreview" style="background-image: url('{{ asset('admin/images/placeholder.png') }}');">
                                            </div>
                                        </div>
                                    </div>
                                    <label for="imageUpload" class="imageup1">UPLOAD COVER IMAGE</label>
                                </div>
                            
                        </div>
                        <div class="col-md-9">
                            
                                <div class="form-group col-md-6">
                                    <label>Issue No.</label>
                                    <input type="text" name="issue_no"class="form-control" />
                                </div>
                                <!-- <div class="form-group col-md-4">
                                    <label>Issue Name</label>
                                    <input type="text" name="name" class="form-control" />
                                </div> -->
                                <div class="form-group col-md-6">
                                    <label>Issue Upload</label>
                                    <input type="file" name="issue_pdf" class="form-control" accept=".pdf" />
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Issue Summary</label>
                                    <textarea class="form-control" rows="4" id="summary" placeholder="Type Here...." name="summary"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <div class="tar">
                                        <button type="submit" class="btn btn-login1">ADD</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
</script>
@endsection