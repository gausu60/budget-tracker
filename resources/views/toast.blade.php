<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if (Session::has('successMsg'))
        toastr.options = {
            "closeButton": true,
        }
        toastr.success("{{ session('successMsg') }}");
    @endif

    @if (Session::has('errorMsg'))
        toastr.options = {
            "closeButton": true,
        }
        toastr.error("{{ session('errorMsg') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
