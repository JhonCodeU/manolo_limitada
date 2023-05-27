@if (session('success'))
    <div id="success-alert" class="bg-green-500 text-white px-4 py-2 mb-4">
        {{ session('success') }}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successAlert = document.getElementById('success-alert');

            if (successAlert) {
                setTimeout(function() {
                    successAlert.style.display = 'none';
                }, 3000);
            }
        });
    </script>
@endif

@if (session('error'))
    <div id="error-alert" class="bg-red-500 text-white px-4 py-2 mb-4">
        {{ session('error') }}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var errorAlert = document.getElementById('error-alert');

            if (errorAlert) {
                setTimeout(function() {
                    errorAlert.style.display = 'none';
                }, 2000);
            }
        });
    </script>
@endif

@if (session('info'))
    <div id="info-alert" class="bg-blue-500 text-white px-4 py-2 mb-4">
        {{ session('info') }}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var infoAlert = document.getElementById('info-alert');

            if (infoAlert) {
                setTimeout(function() {
                    infoAlert.style.display = 'none';
                }, 2000);
            }
        });
    </script>
@endif
