<?php  $title = 'Terranova'; include 'header.php'; ?>

<section class="hero">
    <div class="hero-content container">
        <div class="span-6">
            <h1>Propiedad destacada</h1>
            <p>conócelo</p>
            <span class="button"></span>
        </div>
        <div class="shift-1 span-4 framed">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="Logo Image" class="hero-logo">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni modi doloremque excepturi laudantium maxime explicabo cumque deleniti voluptate deserunt.</p>
        </div>
    </div>
</section>


<section id="destacados" class="row container">
    <div class="span-6">
        <h3>Lo más buscado</h3>
        <div class="span-4"><span class="imgBox featuredBox"></span></div>
        <div class="span-4"><span class="imgBox featuredBox"></span></div>
        <div class="span-4 omega"><span class="imgBox featuredBox"></span></div>
    </div>
    <div class="span-6 omega">
        <h3>Últimas oportunidades</h3>
        <div class="span-4"><span class="imgBox featuredBox"></span></div>
        <div class="span-4"><span class="imgBox featuredBox"></span></div>
        <div class="span-4 omega"><span class="imgBox featuredBox"></span></div>
    </div>
</section>

<section id="leaderboard-home" class="row container">
    <span class="imgBox adBox leaderboard-full">Anuncio</span>
</section>

<section id="contact-box" class="row imgBox">
    <div class="container">
        <h1>Contacta un asesor <br /> <span> y disfruta de nuestra exclusiva atención personalizada</span></h1>
        <form class="shift-2 span-8">
            <input type="email" placeholder="Ingresa un correo o número telefónico">
            <input type="button" value="CONTÁCTENME">
        </form>
    </div>
</section>

<section id="recientes" class="row container">
    <h3 class="span-12">Lo más reciente</h3>
    <div class="row">
        <div class="span-1">&nbsp;<span class="arrow-left"></span></div>
        <div class="span-10">
            <div class="span-4"><span class="imgBox featuredBox"></span></div>
            <div class="span-4"><span class="imgBox featuredBox"></span></div>
            <div class="span-4 omega"><span class="imgBox featuredBox"></span></div>
        </div>
        <div class="span-1 omega">&nbsp;<span class="arrow-right"></span></div>
    </div>
</section>


<?php include("footer.php"); ?>