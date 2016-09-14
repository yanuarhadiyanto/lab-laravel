<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <image src="/gambar/kakatua.jpg" alt="gambar kakatua"/>
        {!! HTML::image('gambar/kakatua.jpg','Gambar Kakaktua') !!}
            @yield('judul')
        <h1>ini adalah bagian awal template</h1>
            @yield('konten')
        <h1>ini adalah bagian akhir template</h1>
    </body>
</html>
