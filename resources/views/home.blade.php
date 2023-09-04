@if (Auth::user()->hasRole('admin'))
<script>
    window.location= "/admin/";
</script>
@else
<script>
    window.location = "/";
</script>
@endif
