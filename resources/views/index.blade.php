<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <base href="/">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Estagiário</title>


        <!-- <style>
            .bg-img {
                    background: url("img/index-image.jpg") no-repeat center center fixed;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                    width: 100%;
                    height: 100%;
                }
        </style> -->

    </head>
    <body>

        <!-- <div class="bg-img"> -->
            <app-root></app-root>
        <!-- </div> -->

        <script src="{{ asset('js/runtime.js') }}" type="module"></script>
        <script src="{{ asset('js/polyfills.js') }}" type="module"></script>
        <script src="{{ asset('js/styles.js') }}" type="module"></script>
        <script src="{{ asset('js/vendor.js') }}" type="module"></script>
        <script src="{{ asset('js/main.js') }}" type="module"></script>
    </body>
</html>
