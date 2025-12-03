
<script src="{{ url('public/admin/assets/js/sweetalert.min.js') }}"></script>
 @if(session('delete'))
<script>
    swal("Deleted!", "{{ session('delete') }}", "success");
</script>
@endif

@if(session('status'))
<script>
    swal("Success", "{{ session('status') }}", "success");
</script>
@endif

@if(session('error'))
<script>
    swal("error", "{{ session('error') }}", "error");
</script>
@endif