
<!-- jQuery -->
<script src="{{ asset('assets/registration/js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('assets/registration/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/registration/js/bootstrap.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/registration/js/script.js') }}"></script>
<script src="{{ asset('assets/registration/js/jquery.min.js') }}"></script>

<!-- Slick JS -->
<script src="{{ asset('assets/registration/js/slick.js') }}"></script>

<!-- Sticky Sidebar JS -->
<script src="{{ asset('assets/registration/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
<script src="{{ asset('assets/registration/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>


<!-- Custom JS -->
<script src="{{ asset('assets/registration/js/script.js') }}"></script>

<script src="{{ asset('assets/registration/plugins/slider/js/jquery.min.js') }}"></script> 
<script src="{{ asset('assets/registration/plugins/slider/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('assets/registration/plugins/slider/js/revslider.js') }}"></script> 
<script src="{{ asset('assets/registration/plugins/slider/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('assets/registration/plugins/slider/js/jquery.mobile-menu.min.js') }}"></script>
@if (Route::currentRouteName() == 'user.reservation_date')
<script src="{{ asset('assets/registration/plugins/booking/booking-jquery.js') }}"></script>
<script src="{{ asset('assets/registration/plugins/booking/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/registration/plugins/booking/booking-bootstrap.js') }}"></script>
<script src="{{ asset('assets/registration/plugins/booking/booking-js.js') }}"></script>
@endif

<!-- Select2 JS -->
<script src="{{ asset('assets/registration/plugins/select2/js/select2.min.js') }}"></script>


<script>
    function Time(){
        element = document.getElementsByClassName('select');
        time = document.getElementById('time');
        time.value = element[0].innerText;
    }
</script>

<script>
    jQuery(document).ready(function(){
    jQuery('#rev_slider_4').show().revolution({
        dottedOverlay: 'none',
        delay: 5000,
        startwidth: 1170,
        startheight:650,

        hideThumbs: 200,
        thumbWidth: 200,
        thumbHeight: 50,
        thumbAmount: 2,

        navigationType: 'thumb',
        navigationArrows: 'solo',
        navigationStyle: 'round',

        touchenabled: 'on',
        onHoverStop: 'on',
        
        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,
    
        spinner: 'spinner0',
        keyboardNavigation: 'off',

        navigationHAlign: 'center',
        navigationVAlign: 'bottom',
        navigationHOffset: 0,
        navigationVOffset: 20,

        soloArrowLeftHalign: 'left',
        soloArrowLeftValign: 'center',
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,

        soloArrowRightHalign: 'right',
        soloArrowRightValign: 'center',
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,

        shadow: 0,
        fullWidth: 'on',
        fullScreen: 'off',

        stopLoop: 'off',
        stopAfterLoops: -1,
        stopAtSlide: -1,

        shuffle: 'off',

        autoHeight: 'off',
        forceFullWidth: 'on',
        fullScreenAlignForce: 'off',
        minFullScreenHeight: 0,
        hideNavDelayOnMobile: 1500,
    
        hideThumbsOnMobile: 'off',
        hideBulletsOnMobile: 'off',
        hideArrowsOnMobile: 'off',
        hideThumbsUnderResolution: 0,

        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        startWithSlide: 0,
        fullScreenOffsetContainer: ''
    });
});
</script>