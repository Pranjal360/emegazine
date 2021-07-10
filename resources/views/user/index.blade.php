@extends('user.common.main')
@section('content')
<div class="wings">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            
                <a href="#" class="_df_custom megazine-front" source="{{ $magazine->pdf_url }}">
                	<img src="{{ asset($magazine->cover_pic) }}" alt="{{ $magazine->issue_no }}">
                </a>
            </div>
            <div class="col-md-9">
                <div class="magazine-right">
                    <div>
                        <h1 class="heading-text wow fadeInUp">Ekodus<br />A Bimonthly Newsletter</h1>
                        <h2 class="sub-heading-text wow fadeInUp">{{ $magazine->issue_no }}</h2>
                    </div>
                    
                    <div>
                        <span class="sub-span">In this issue</span>
                    </div>
                    
                    <div class="desc">
                        <p class="text-justify wow fadeInUp">{{ $magazine->issue_summary }}</p>
                        
                    </div>
                    
                    <div class="read-cover"> <a href="#" class="read-more _df_custom" source="{{ $magazine->pdf_url }}">Read Details</a></div>
                </div>
            </div>
        </div>
        @if(count($recent)>0)
        <div class="row mt-40">
            <div class="col-md-10">
                <h4><span id="yr" class="sub-span">Recent</span> issues</h4>
            </div>
            <div class="col-md-2">
                <div class="box">
                    <select name="isum" class="wide selectpicker form-control yrBtn">
                        	<option value="" hidden>Select Year</option>
                        @foreach($years as $year)
                        	<option value="{{ $year }}">{{ $year }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <ul id="magLst" class="list-inline e-magazine-list">
                	@foreach($recent as $rec)
                		<li>
                			<a href="{{ url('/'.$rec->emag_slug) }}">
                				<img src="{{ asset($rec->cover_pic) }}" alt="{{ $rec->issue_no }}" class="w100">
                            	<p class="mt-10 mb-0 text-center">{{ $rec->issue_no }}</p>
	                        </a>
	                    </li>
                	@endforeach
                </ul>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
@section('scripts')

<script type="text/javascript">
	$('.yrBtn').on('change', function(e){
		e.preventDefault();
		if(this.value){
    		var APP_URL = {!! json_encode(url('/')) !!};
    		//console.log(APP_URL);
    		$.ajax({
              type: "POST",
              url: '/e-Magazine/year',
              headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
              dataType :'json',
              data: {
                emagYear: this.value
              },
            }).done(function( data ) {
                //jQuery('.loader').fadeOut("slow");
              if(data['msgType']==true){
              	$('#yr').empty();
              	$('#yr').text(data['data']['year']);
              	$('#magLst').empty();
              	$.each(data['data']['magazines'], function( index, value ) {
    			  //console.log( "maglist-> " + value.issue_no );
    				$('#magLst').append('<li>'+
    				'<a href="'+value.emag_slug+'">'+
    				'<img src="'+value.cover_pic+'" alt="" class="w100">'+
    				'<p class="mt-10 mb-0 text-center">'+value.issue_no+'</p>'+
    				'</a>'+
    				'</li>');
    			});
              }   
            });
		}
	});
</script>
@endsection