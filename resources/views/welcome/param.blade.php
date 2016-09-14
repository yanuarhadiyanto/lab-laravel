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
        Ini halaman parameter 
        <h1>parameter pertama adalah {{ $x }}</h1>
        <h1>parameter kedua adalah {{ $y or 'data kosong' }}</h1>
        <p>
             {{ '<script>alert("hallo");</script>' }}
        </p>
    </body>
</html>
