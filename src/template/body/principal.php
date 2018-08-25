<?php
echo"
<div id='carouselExampleIndicators' style='margin: 2rem 0 2rem 0;' class='carousel slide' data-ride='carousel'>
        <ol class='carousel-indicators'>
            <li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='1'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='2'></li>
        </ol>
        <div class='carousel-inner'>
            <div class='carousel-item active'>
                <img class='d-block w-100' src='src/img/contador_1.jpg' alt='First slide'>
                <div class='carousel-caption d-none d-md-block'>
                    <h5>Foto 1</h5>
                    <p>...</p>
                </div>
            </div>
            <div class='carousel-item'>
                <img class='d-block w-100' src='src/img/contador_1.jpg' alt='Second slide'>
                <div class='carousel-caption d-none d-md-block'>
                    <h5>Foto 2</h5>
                    <p>...</p>
                </div>
            </div>
            <div class='carousel-item'>
                <img class='d-block w-100' src='src/img/contador_1.jpg' alt='Third slide'>
                <div class='carousel-caption d-none d-md-block'>
                    <h5>Foto 3</h5>
                    <p>...</p>
                </div>
            </div>
        </div>
        <a class='carousel-control-prev' href='#carouselExampleIndicators' role='button' data-slide='prev'>
            <span class='carousel-control-prev-icon' aria-hidden='true'></span>
            <span class='sr-only'>Previous</span>
        </a>
        <a class='carousel-control-next' href='#carouselExampleIndicators' role='button' data-slide='next'>
            <span class='carousel-control-next-icon' aria-hidden='true'></span>
            <span class='sr-only'>Next</span>
        </a>
    </div>
    ";

    // contenido
    echo"
    <!--- CARD---->
    <div class='container'>
        <div class='card-deck'>
            <div class='card' style='width: 18rem;'>
                <img class='card-img-top' src='src/img/fccpv.png' width='100px' height='150px' alt='Card image cap'>
                <div class='card-body'>
                    <h5 class='card-title'>Card title</h5>
                    <p class='card-text'>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class='card' style='width: 18rem;'>
                <img class='card-img-top' src='src/img/fccpv.png' width='100px' height='150px' alt='Card image cap'>
                <div class='card-body'>
                    <h5 class='card-title'>Card title</h5>
                    <p class='card-text'>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class='card' style='width:18rem;'>
                <img class='card-img-top' src='src/img/fccpv.png' width='100px' height='150px' alt='Card image cap'>
                <div class='card-body'>
                    <h5 class='card-title'>Card title</h5>
                    <p class='card-text'>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <!----END CARD---->
    <!----container---->

    <div class='jumbotron jumbotron-fluid fondo' style='margin: 12px 0 0 0; height: 300px;'>
        <div class='container'>
            <h1 class='display-4'>Cursos</h1>
            <p class='lead'>This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>

    <!----- end Container------>
    ";
?>