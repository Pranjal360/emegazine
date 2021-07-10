<footer>
        <div class="container-fluid">
            <div class="row footer-bot">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <p class="m-0">Copyright &copy; 2020 <a href="http://ekodus.com">Ekodus.com</a> All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="{{URL::asset('user/js/jquery-1.11.3.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('user/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('user/js/wow.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('user/js/bootstrap-select.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <!-- Flipbook main Js file -->
    <script type="text/javascript" src="{{URL::asset('user/js/dflip.js')}}"></script>
    @yield('scripts')
</body>

</html>