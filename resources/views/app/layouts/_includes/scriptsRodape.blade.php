<!-- jQuery -->
<script src="{{ asset('lib/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('lib/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
<!--slimscroll JavaScript -->
<script src="{{ asset('lib/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('lib/js/waves.js') }}"></script>
<!--Counter js -->
<script src="{{ asset('lib/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ asset('lib/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
<!--Morris JavaScript -->
<script src="{{ asset('lib/plugins/bower_components/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('lib/plugins/bower_components/morrisjs/morris.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('lib/js/custom.min.js') }}"></script>
<script src="{{ asset('lib/js/dashboard1.js') }}"></script>
<script src="{{ asset('lib/plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<!-- Script Função MaskMoney -->
<script src="{{ asset('lib/js/jquery.maskMoney.js') }}"></script>
<!-- Datatables JS-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var $seuCampoCpf = $("#phone");
        $seuCampoCpf.mask('(00) 0000-0000', {
            reverse: true
        });
    });

    $(document).on('keydown', '[data-mask-for-cpf-cnpj]', function(e) {

        var digit = e.key.replace(/\D/g, '');

        var value = $(this).val().replace(/\D/g, '');

        var size = value.concat(digit).length;

        $(this).mask((size <= 11) ? '000.000.000-00' : '00.000.000-00');
    });

    $(function() {
        $("#price").maskMoney({
            symbol: '',
            showSymbol: true,
            thousands: '.',
            decimal: ',',
            symbolStay: true
        });
    })
</script>
