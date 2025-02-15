<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
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
   
        {{$slot}}

    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/datatables.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('notify', (event) => {
                toastr[event[0].type](event[0].message, event[0].title)
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            setTimeout(function() {
                if (localStorage.getItem('popState') !== 'shown') {
                    window.notyf.open({
                        type: "success",
                        message: "Get access to all 500+ components and 45+ pages with AdminKit PRO. <u><a class=\"text-white\" href=\"https://adminkit.io/pricing\" target=\"_blank\">More info</a></u> 🚀",
                        duration: 10000,
                        ripple: true,
                        dismissible: false,
                        position: {
                            x: "left",
                            y: "bottom"
                        }
                    });

                    localStorage.setItem('popState', 'shown');
                }
            }, 15000);
        });
    </script>

</body>

</html>