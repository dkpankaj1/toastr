@if (Session::has('message'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: "toast-top-right",
                timeOut: "5000"
            };

            var type = "{{ Session::get('type', 'info') }}";
            toastr[type]("{{ Session::get('message') }}");
        });
    </script>
@endif