<script src="{{ asset('asset/js/plugins.js') }}"></script>
<script src="{{ asset('asset/js/designesia.js') }}"></script>
<script src="{{ asset('asset/js/swiper.js') }}"></script>
<script src="{{ asset('asset/js/custom-swiper-3.js') }}"></script>

<script src="{{ asset('asset/js/jquery.event.move.js') }}"></script>
<script src="{{ asset('asset/js/jquery.twentytwenty.js') }}"></script>

<script>
    $(window).on("load", function() {
        $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({
            default_offset_pct: 0.5
        });
        $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({
            default_offset_pct: 0.5,
            orientation: 'vertical'
        });
    });
</script>

