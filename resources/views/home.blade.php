{{-- permisi pak, tolong memakai /home pak untuk membuka websitenya, terima kasih. Serta untuk menjalankannya harap menggunakan menuliskan "php artisan serve" terlebih dahulu di cmd--}}

@extends('template')

@section('title', 'Honkai Impact 3')

@section('content')
    <body>
        <br>
        <img src="https://freepngimg.com/thumb/youtube/84920-impact-3rd-youtube-machine-battle-honkai-action.png" id="title" alt="">
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
        @switch($valk)
            @case("Flamescion")
            <h3>Valkyrie:</h3>
            <br>
            <div id="ler" style="display: flex; margin-left: 80px;">
                <img class="image" src="https://moewalls.com/wp-content/uploads/2021/10/kiana-kaslana-herrscher-of-flamescion-honkai-impact-3rd-thumb.jpg" height=350px width="400px">
                <div id="ler1" style="display: flex; flex-direction:column; margin-left: 50px; text-align:left; font-size: 28px">
                    <pre>Name       : Kiana Kaslana</pre>
                    <pre>Elements   : Fire</pre>
                    <pre>Weapon     : Great Sword</pre>
                    <pre>Description:</pre>
                    <pre>K-423, also called Kiana Kaslana, is the heroine and the</pre>
                    <pre>initial character in the game "Honkai Impact 3rd". She is a</pre> 
                    <pre>replica of the 2nd Herrscher with DNA of Kiana Kaslana.</pre> 
                </div>
            </div>
                @break
            @case("Thunder")
            <h3>Valkyrie:</h3>
            <br>
            <div id="ler" style="display: flex; margin-left: 80px;">
                <img class="image" src="https://c4.wallpaperflare.com/wallpaper/442/999/816/honkai-impact-3rd-raiden-mei-hd-wallpaper-thumb.jpg" height=350px width="400px">
                <div id="ler1" style="display: flex; flex-direction:column; margin-left: 50px; text-align:left; font-size: 28px">
                    <pre>Name       : Raiden Mei</pre>
                    <pre>Elements   : Thunder</pre>
                    <pre>Weapon     : Sword</pre>
                    <pre>Description:</pre>
                    <pre>Since the beginning of primary school, she has been</pre>
                    <pre>outstanding in performance, as a student leader,</pre> 
                    <pre>and widely supported among students. Her noble beauty</pre> 
                    <pre>is the object of countless boys' dreams, combined with</pre>
                    <pre>a natural cool temperament, and is called the "Queen of</pre>
                    <pre>Thunder".</pre>
                </div>
            </div>
                @break
            @case("Human")
            <h3>Valkyrie:</h3>
            <br>
            <div id="ler" style="display: flex; margin-left: 80px;">
                <img class="image" src="https://pbs.twimg.com/media/FamKYieaAAAKtHg?format=jpg&name=4096x4096" height=350px width="400px">
                <div id="ler1" style="display: flex; flex-direction:column; margin-left: 50px; text-align:left; font-size: 28px">
                    <pre>Name       : Elysia</pre>
                    <pre>Elements   : Ice</pre>
                    <pre>Weapon     : Bow</pre>
                    <pre>Description:</pre>
                    <pre>Elysia is an elegant, cheerful, and sweet lady</pre>
                    <pre>who's described as someone who "enjoys everything".</pre> 
                    <pre>She likes to flatter Mei for her looks and</pre> 
                    <pre>constantly praises Eden's beauty. Elysia</pre>
                    <pre>enjoys interacting with people and is very good at it.</pre>
                </div>
            </div>
          @break
          @case("Reason")
            <h3>Valkyrie:</h3>
            <br>
            <div id="ler" style="display: flex; margin-left: 80px;">
                <img class="image" src="https://wallpapercave.com/wp/wp8793657.png" height=350px width="400px">
                <div id="ler1" style="display: flex; flex-direction:column; margin-left: 50px; text-align:left; font-size: 28px">
                    <pre>Name       : Bronya Zaychik</pre>
                    <pre>Elements   : Ice</pre>
                    <pre>Weapon     : Heavy</pre>
                    <pre>Description:</pre>
                    <pre>Bronya was quickly adopted into the family, and had</pre>
                    <pre>a close relationship with a girl named Seele Vollerei.</pre> 
                    <pre>The two had even promised to go to the beach together.</pre> 
                </div>
            </div>
          @break
          @case("Hua")
            <h3>Valkyrie:</h3>
            <br>
            <div id="ler" style="display: flex; margin-left: 80px;">
                <img class="image" src="https://www.hdwallpapers.in/download/fu_hua_hd_honkai_impact_3rd-1920x1080.jpg" height=350px width="400px">
                <div id="ler1" style="display: flex; flex-direction:column; margin-left: 50px; text-align:left; font-size: 28px">
                    <pre>Name       : Fu Hua</pre>
                    <pre>Elements   : Physical</pre>
                    <pre>Weapon     : Glove</pre>
                    <pre>Description:</pre>
                    <pre>Fu Hua looks like a 17 year old girl of average</pre>
                    <pre>height, contrary to her actual age. She has</pre> 
                    <pre>bluish-purplish hair, pale skin, and blue eyes.</pre> 
                    <pre>When in her MANTIS form, her eyes turn red and</pre>
                    <pre>her hair becomes a mix of white and red.</pre>
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

    #title{
        width: 30%;
        margin-left: 37%;
        margin-bottom: -3%;
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