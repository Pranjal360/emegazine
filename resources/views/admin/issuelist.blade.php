@extends('admin.common.main')
@section('content')
<div id="page-content-wrapper">
    <div class="container-fluid">
        @component('components.loggedIn')
        Issue List
        @endcomponent
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-primary">
                    <div class="panel-body todo">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Issue No</th>
                                    <th>Created</th>
                                    <th class="tar">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($magazine)
                                @foreach($magazine as $emag)
                                <tr>
                                    <td>{{ $emag->issue_no }}</td>
                                    <td>{{ $emag->created_at->format('d M Y') }}</td>
                                    <td class="tar"><a href="{{ $emag->pdf_url }}" class="text-level" target="_blank">View Details/ View PDF</a></td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>           
</div>
@endsection