<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Font Awesome Iconography -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>
<body>
    @include('inc.nav')
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
<?php if(Auth::check()){ ?>
    <script>
function saveToDB(){
let content1 = $('#cnt_' + {{$c->id}}).html(); 
let dw = document.getElementById("dw").value;
let dh = document.getElementById("dh").value;
let id = {{$c->id}};
    $.ajax({
        url: "/save_content/" + id,
        type: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            "content1": content1,
            "dw": dw,
            "dh": dh,
        },              
        success:function (data) {
            //Display Confirmation to user
            //document.getElementById("user_messages").innerHTML = "Saved Successfully";
            window.setTimeout(function(){
                window.location.href = "/view_all";
            }, 1000);
        }, error: function (data){
            console.log(data);
        }
    });   
};        
</script>

<?php } ?>
</body>
</html>
