@if (App::getLocale() != 'en')
    <script src="{{ asset ('vendor/crudbooster/assets/adminlte/plugins/datepicker/locales/bootstrap-datepicker.'.App::getLocale().'.js') }}" charset="UTF-8"></script>
@endif
<script type="text/javascript">
    var lang = '{{App::getLocale()}}';
    $(function() {
        $('.input_date').datepicker({
            format: 'yyyy-mm-dd',
            viewMode: 'years',
            autoclose: true,
            startDate: '1990-01-01',
            @if (App::getLocale() == 'ar')
            rtl: true,
            @endif
            language: lang
        });
        
        $('.open-datetimepicker').click(function() {
			  $(this).next('.input_date').datepicker('show');
		});
        
    });

</script>
