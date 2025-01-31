<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Youth Medical Forum (YMF) 2025' }}</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="{{asset('assets/img/icons/icon-48x48.png')}}" />

    <link rel="canonical" href="pages-blank.html" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">
    <!-- Choose your prefered color scheme -->
    <link href="{{asset('assets/css/light.css')}}" rel="stylesheet">
    <!-- BEGIN SETTINGS -->
    <!-- Remove this after purchasing -->
    <link class="js-stylesheet" href="{{asset('assets/css/light.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">
    <style>
        body {
            opacity: 0;
        }
    </style>
    <!-- END SETTINGS -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-10"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-120946860-10', {
            'anonymize_ip': true
        });
    </script>
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <div class="wrapper">
        <livewire:components.side-bar />
        <div class="main">
            <livewire:components.header />

            {{ $slot }}

            <livewire:components.footer />

        </div>
    </div>

    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/datatables.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script src="{{asset('assets/js/sweetalert.js')}}"></script>
    <script>
        document.addEventListener('livewire:init', () => {
           // Listen for Livewire events to trigger the delete confirmation
        Livewire.on('triggerDelete', (id) => {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Call the Livewire delete method if confirmed
                    Livewire.dispatch('deleteConfirmed', id);
                }
            });
        });
        });
    </script>
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('notify', (event) => {
                toastr[event[0].type](event[0].message, event[0].title)
            });
        });
    </script>
</body>

</html>