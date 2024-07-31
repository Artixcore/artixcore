<script src="{{ asset('js/app.js') }}"></script>
    @yield('footer_js')
    <script>
        $(document).ready(function() {
            // Check if DataTable is already initialized
            if (!$.fn.DataTable.isDataTable('#datatables-reponsive')) {
                $('#datatables-reponsive').DataTable({
                    responsive: true
                });
            }

            // SweetAlert confirmation for delete
            $('.delete-form').on('submit', function(e) {
                e.preventDefault();
                const form = $(this);
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.off('submit').submit(); // Proceed with form submission
                    }
                });
            });
        });
    </script>
