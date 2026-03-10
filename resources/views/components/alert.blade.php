@if(session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Berhasil',
    text: '{{ session('success') }}',
});
</script>
@endif


@if(session('error'))
<script>
Swal.fire({
    icon: 'error',
    title: 'Error',
    text: '{{ session('error') }}',
});
</script>
@endif


@if(session('warning'))
<script>
Swal.fire({
    icon: 'warning',
    title: 'Peringatan',
    text: '{{ session('warning') }}',
});
</script>
@endif