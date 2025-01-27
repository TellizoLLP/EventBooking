<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{ $slot }}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('alert', data => {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: data[0].message,
                    showConfirmButton: false,
                    timer: 1500,
                });
            });
        });
    </script>
</body>

</html>