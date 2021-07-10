<div class="row">
    <div class="col-md-12">
        <div class="col-md-6 tal subheader-text">
            <h5 class="m-0">Hello, {{ Auth::user()->name }}</h5>
        </div>
        <div class="col-md-6 tar subheader-text">
            <h5 class="m-0">{{ $slot }}</h5>
        </div>
    </div>
</div>