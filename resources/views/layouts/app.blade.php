<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <title>@yield('page-title')</title>
        <link rel="icon" type="image/png" href="assets/favicon.svg">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

        <!-- Custom Styling -->
        <style>
            * {
                box-sizing: border-box;
            }

            html {
                scroll-behavior: smooth;
            }
        </style>

        <!-- TailwindCSS Config -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            dark: '#1F1E1E',
                            black: '#180101',
                            primary: ' #049805',
                            grey: '#D9D9D980',
                            blue: '#3771C8',
                            gray1: '#FCFCFC',
                            gray2: '#F0F0F0'
                        }
                    },
                    fontFamily: {
                        'sans': [ '"Open Sans"', 'ui-sans-serif', 'system-ui' ]
                    }
                }
            }
        </script>   
    </head>

   @yield('content')

</html>