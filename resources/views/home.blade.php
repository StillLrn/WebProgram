{{-- permisi pak, tolong memakai /home pak untuk membuka websitenya, terima kasih. Serta untuk menjalankannya harap menggunakan menuliskan "php artisan serve" terlebih dahulu di cmd --}}

@extends('template')

@section('title', 'Honkai Impact 3')

@section('content')
    <body>
        <br>
        <div id="teks1"><center>Honkai Impact 3</center></div>
        <br>
        <div id="container">
            <div id="teks2" style="color: white; font-weight:bold;">
                <center>Choose Your Valkyrie:</center>
            </div>
        </div>
        <br>
        <center>
        <form action = "<?php $_PHP_SELF ?>" method = "GET" style="color: white; font-weight:bold;">
            Choose Valkyrie (Upper Case, then lower ["Flamescion", "Thunder", "Human", "Reason", "Hua"]): <br><input type = "text" name = "valk" />
            <input type = "submit" />
        
         </form>
         <br>
        @switch($valk=$_GET["valk"])
            @case("Flamescion")
            <h3>Valkyrie:</h3>
            <br>
            <div id="ler" style="display: flex; margin-left: 80px;">
                <img class="image" src="https://moewalls.com/wp-content/uploads/2021/10/kiana-kaslana-herrscher-of-flamescion-honkai-impact-3rd-thumb.jpg" height=350px width="400px">
                <div id="ler1" style="display: flex; flex-direction:column; margin-left: 50px; text-align:left; font-size: 28px">
                    <br><br><br>
                    <pre>Name    : Kiana Kaslana</pre>
                    <pre>Elements: Fire</pre>
                    <pre>Weapon  : Great Sword</pre>
                </div>
            </div>
                @break
            @case("Thunder")
            <h3>Valkyrie:</h3>
            <br>
            <div id="ler" style="display: flex; margin-left: 80px;">
                <img class="image" src="https://c4.wallpaperflare.com/wallpaper/442/999/816/honkai-impact-3rd-raiden-mei-hd-wallpaper-thumb.jpg" height=350px width="400px">
                <div id="ler1" style="display: flex; flex-direction:column; margin-left: 50px; text-align:left; font-size: 28px">
                    <br><br><br>
                    <pre>Name    : Raiden Mei</pre>
                    <pre>Elements: Thunder</pre>
                    <pre>Weapon  : Sword</pre>
                </div>
            </div>
                @break
            @case("Human")
            <h3>Valkyrie:</h3>
            <br>
            <div id="ler" style="display: flex; margin-left: 80px;">
                <img class="image" src="https://pbs.twimg.com/media/FamKYieaAAAKtHg?format=jpg&name=4096x4096" height=350px width="400px">
                <div id="ler1" style="display: flex; flex-direction:column; margin-left: 50px; text-align:left; font-size: 28px">
                    <br><br><br>
                    <pre>Name    : Elysia</pre>
                    <pre>Elements: Ice</pre>
                    <pre>Weapon  : Bow</pre>
                </div>
            </div>
          @break
          @case("Reason")
            <h3>Valkyrie:</h3>
            <br>
            <div id="ler" style="display: flex; margin-left: 80px;">
                <img class="image" src="https://wallpapercave.com/wp/wp8793657.png" height=350px width="400px">
                <div id="ler1" style="display: flex; flex-direction:column; margin-left: 50px; text-align:left; font-size: 28px">
                    <br><br><br>
                    <pre>Name    : Bronya Zaychik</pre>
                    <pre>Elements: Ice</pre>
                    <pre>Weapon  : Heavy</pre>
                </div>
            </div>
          @break
          @case("Hua")
            <h3>Valkyrie:</h3>
            <br>
            <div id="ler" style="display: flex; margin-left: 80px;">
                <img class="image" src="https://www.hdwallpapers.in/download/fu_hua_hd_honkai_impact_3rd-1920x1080.jpg" height=350px width="400px">
                <div id="ler1" style="display: flex; flex-direction:column; margin-left: 50px; text-align:left; font-size: 28px">
                    <br><br><br>
                    <pre>Name    : Fu Hua</pre>
                    <pre>Elements: Physical</pre>
                    <pre>Weapon  : Glove</pre>
                </div>
            </div>
          @break
            @default
        @endswitch
        <br><br>
    </center>
    </body>
    
@endsection

<style>
    body {
    background-image: url(https://images.hdqwalls.com/wallpapers/honkai-impact-3rd-bronya-zaychik-4k-vg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
    h3{
        color: orange;
    }

    pre{
        color: white;
    }

    #teks1{
        font-size: 110px;
        color: yellow;
        font-weight: bold;
    }

    #teks2{
        font-size: 30px;
        color: white;
    }
</style>
