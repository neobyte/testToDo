<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Laravel</title>

        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <script src="https://use.fontawesome.com/b6fdea85b9.js"></script>


        {{--        <script src="/js/manifest.js"></script>--}}
{{--        <script src="/js/vendor.js"></script>--}}

    </head>
    <body class="antialiased bg-gray-100 ">
        <div class="flex items-top justify-center h-screen bg-gray-100 dark:bg-gray-900 ">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="flex flex-col justify-between max-w-6xl mx-auto bg-red-400 h-full   lg:w-1/4">
                <div class="flex bg-gray-100 h-56 pt-8 sm:justify-start sm:pt-0">
                    &nbsp;
                </div>
                <div class="flex-grow bg-blue-900 dark:bg-gray-800 ">
                    <div class="h-full" id="app"></div>
                </div>

                <div class="flex justify-center bg-gray-100 p-10 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">


                            <span class="ml-1">
                                @2021
                            </span>



                            <a href="https://neobytesolutions.com" target="_blank" class="ml-1 underline">
                                Neobyte Solutions
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
