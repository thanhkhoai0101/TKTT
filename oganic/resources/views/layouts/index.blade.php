<?php
$url = explode('/',$_SERVER['REQUEST_URI']);
if(str_contains($url[1],'?')){
    $url = explode('?',$url[1]);
}
else{
    $url[0]=$url[1];
}
if ($url[0]=='')
$url[0]='Home';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | <?=$url[0]?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <!-- CSS only -->
<!--    Boostrap-->
    <!-- JavaScript Bundle with Popper -->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>-->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->
</head>
<style>
    a{
        text-decoration: none;
    }
    a:hover{
        color: green !important;
    }
    #page svg{
        width: 50px;
    }
</style>
<body>

    <!-- Header Section Begin -->
    @include('partial.header')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    @yield('hero')
    <!-- Hero Section End -->

    <!--Slider-->
    @yield('slider')

    <!--Content-->
    @yield('content')

    <!-- Footer Section Begin -->
    @include('partial.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            var availableTags = [

            ];
            $.ajax({
                type: "GET",
                url: "/cc/product/list",

                success: function(response) {

                    startAutoComplete(response)
                }
            });

            function startAutoComplete(availableTags) {
                $("#search-input").autocomplete({
                    source: availableTags
                });
            }

        });
    </script>



</body>

</html>
