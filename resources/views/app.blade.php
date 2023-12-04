<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qwords</title>
    <link rel="shortcut icon" href="aset/img/logoqwordnt.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('aset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('aset/css/responsif.css') }}">
   

</head>
<body>
    <header class="header" id="header">
            @include('file.nav')
    </header>
    <main class="main">
              @yield('konten')      
    </main>

    @include('file.footer')



<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-o7mFbCz03q82lhAVeYlF8Mz9IQraUBva8Fj5q8E00Pge4Lv6C5/O9R2hXMN7Ho1N" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('aset/js/main.js') }}"></script>
</body>
</html>