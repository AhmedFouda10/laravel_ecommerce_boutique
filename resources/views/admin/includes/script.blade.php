<!-- latest jquery-->
<script src="{{ asset('backend/assets/js/jquery-3.3.1.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- feather icon js-->
<script src="{{ asset('backend/assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/icons/feather-icon/feather-icon.js') }}"></script>

<!-- Sidebar jquery-->
<script src="{{ asset('backend/assets/js/sidebar-menu.js') }}"></script>

{{-- <!-- Dropzone js-->
<script src="{{ asset('backend/assets/js/dropzone/dropzone.js') }}"></script>
<script src="{{ asset('backend/assets/js/dropzone/dropzone-script.js') }}"></script>

<!-- Table Row Delete js -->
<script src="{{ asset('backend/assets/js/table-row-delete.js')}}"></script> --}}

<!--chartist js-->
<script src="{{ asset('backend/assets/js/chart/chartist/chartist.js') }}"></script>

<!--chartjs js-->
<script src="{{ asset('backend/assets/js/chart/chartjs/chart.min.js') }}"></script>

<!--ck editor-->
<script src="{{ asset('backend/assets/js/editor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('backend/assets/js/editor/ckeditor/ckeditor.custom.js') }}"></script>

<!-- lazyload js-->
<script src="{{ asset('backend/assets/js/lazysizes.min.js') }}"></script>

<!--copycode js-->
<script src="{{ asset('backend/assets/js/prism/prism.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom-card/custom-card.js') }}"></script>

<!--counter js-->
<script src="{{ asset('backend/assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/counter/counter-custom.js') }}"></script>

<!--peity chart js-->
<script src="{{ asset('backend/assets/js/chart/peity-chart/peity.jquery.js') }}"></script>

<!-- Apex Chart Js -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<!--sparkline chart js-->
<script src="{{ asset('backend/assets/js/chart/sparkline/sparkline.js') }}"></script>

<!--Customizer admin-->
<script src="{{ asset('backend/assets/js/admin-customizer.js') }}"></script>

<!--dashboard custom js-->
<script src="{{ asset('backend/assets/js/dashboard/default.js') }}"></script>

<!--right sidebar js-->
<script src="{{ asset('backend/assets/js/chat-menu.js') }}"></script>

<!--height equal js-->
<script src="{{ asset('backend/assets/js/height-equal.js') }}"></script>

<!-- lazyload js-->
<script src="{{ asset('backend/assets/js/lazysizes.min.js') }}"></script>

<!--script admin-->
<script src="{{ asset('backend/assets/js/admin-script.js') }}"></script>

<script>
    // $('<ul class="custom-theme"><li class="demo-li"><a href="../front-end/index.html" target="_blank">Front end</a></li><li class="btn-rtl">RTL</li><li class="btn-dark-setting">Dark</li></ul>').appendTo($('body'));
    // $('body').appendTo(
    //     "<ui class='custom-theme'>"
    //     "<li class='btn-rtl'>"
    //     'RTL'
    //     "</li>"
    //     "</ui>"
    // )

    @if (app()->getLocale() == 'ar')
            $(this).toggleClass('rtl');
            $('.btn-rtl').addClass('rtl')
            $('.btn-rtl').text('LTR');
            $('body').addClass('rtl');
            $("html").attr("dir", "rtl");
    @elseif (app()->getLocale() == 'en')
            $(this).toggleClass('rtl');
            $('.btn-rtl').removeClass('rtl')
            $('.btn-rtl').text('RTL');
            $('body').removeClass('rtl');
            $("html").attr("dir", "");
    @endif

</script>
</body>

</html>
