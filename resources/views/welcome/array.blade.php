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
        <h1>Daftar Hari</h1>
        <ul>
            @foreach($hari as $h)
            <li>{{ $h }}</li>
            @endforeach
        </ul>
        
        Daftar Hari for else's
        <ul>
            @forelse($hari as $h)
            <li>{{ $h }}</li>
            @empty
            <li>Data tidak tersedia</li>
            @endforelse
        </ul>
        
        Menggunakan If Else
        <ul>
            @if(count($hari) > 2)
                @foreach($hari as $h)
                <li>{{ $h }}</li>
                @endforeach
            @elseif( count($hari) > 0 ) 
                <li>ada {{ count($hari) }} data</li>
            @else
                <li>data tidak ada</li>
            @endif
        </ul>
    </body>
</html>
