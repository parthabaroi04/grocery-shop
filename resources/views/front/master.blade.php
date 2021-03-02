
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Grocery Shop ||@yield('title') </title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//tags -->
    @include('front.includes.css')

</head>

<body>
@include('front.includes.header')
@yield('body')
@include('front.includes.footer')
<!-- js-files -->
@include('front.includes.script')
<!-- //js-files -->


</body>

</html>
