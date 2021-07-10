@extends('user.common.main')
@section('mgimg')
    <meta property="og:image:secure_url" content="{{ asset($magazine->cover_pic) }}" />
@endsection
@section('mimg')
    <meta itemprop="image" content="{{ asset($magazine->cover_pic) }}">
@endsection
@section('content')
<div class="wings">
    <div class="container-fluid">
        <div class="row details-page">
            <div class="col-md-4">
                <a href="#" class="_df_custom megazine-details-front" source="{{ $magazine->pdf_url }}">
                    <img id="magImage" src="{{ asset($magazine->cover_pic) }}" alt="{{ $magazine->issue_no }}">
                </a>
            </div>
            <div class="col-md-8">
                <div class="magazine-right-details">
                    <div>
                        <h1 class="heading-text wow fadeInUp">Ekodus<br />A Bimonthly Newsletter</h1>
                        <h2 id="magName" class="sub-heading-text wow fadeInUp">{{ $magazine->issue_no }}</h2>
                    </div>
					<div class="filter-select">
                        <div class="box">
                            <select id="magSlct" name="issue_name" class="wide selectpicker form-control issSlct">
                                <option value="">Select an Edition</option>
                                @foreach($magList as $mgLst)
                                    <option value="{{ $mgLst->emag_slug }}">{{ $mgLst->issue_no }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <span class="sub-span">In this issue</span>
                    </div>
                    <div class=" desc1">
                        <p id="magDesc" class="text-justify wow fadeInUp">{{ $magazine->issue_summary }}</p>
                    </div>
                    <div>
                    	<a href="#" class="read-more _df_custom" source="{{ $magazine->pdf_url }}">Read Details</a>
                    </div>
                </div>
            </div>
	    </div>
	</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    $('.issSlct').on('change', function(e){
        e.preventDefault();
        if(this.value){
            $.ajax({
              type: "POST",
              url: '/e-Magazine/magName',
              headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
              dataType :'json',
              data: {
                slug: this.value
              },
            }).done(function( data ) {
                //jQuery('.loader').fadeOut("slow");
              if(data['msgType']==true){
                $('#magName').empty();
                $('#magName').text(data['data']['magazine']['issue_no']);

                $('#magDesc').empty();
                $('#magDesc').text(data['data']['magazine']['issue_summary']);

                $("#magImage").attr('src',data['data']['magazine']['cover_pic']);

                $('._df_custom').attr("source", data['data']['magazine']['pdf_url']);

                $('#magSlct').empty();
                $('#magSlct').append('<option value="">Select an Edition</option>');
                $.each(data['data']['magList'], function( index, value ) {
                    $('#magSlct').append('<option value="'+value.emag_slug+'">'+value.issue_no+'</option>');
                });
                $('#magSlct').selectpicker('refresh');
              }   
            });
        }
    });
</script>
@endsection