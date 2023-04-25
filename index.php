<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FactorTeck</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenido-header">
    </div>
    <nav class="navbar navbar-expand-lg navbar-white bg-white menu2">
            <div class="col-4 px-0 mx-0" id="imagenFactor">
                <img src="img/display/factor.png" width="210px" height= "80px" alt="">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-8 px-0 mx-0">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                FINACIAL SOlUTIONS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">REFERRALS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">GET STARTED</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
   
    <div class="container">
        <img src="img/background.jpg" alt="Imagen de fondo" class="img-fluid" id="bgImage">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
                <form action="procesar_formulario.php" method="post">
                    <!-- Campo de texto "Names" -->
                    <div class="mb-3">
                        <label for="names" class="form-label">Names</label>
                        <input type="text" class="form-control" id="names" name="names" required>
                    </div>

                    <!-- Campo de texto "Company Names" -->
                    <div class="mb-3">
                        <label for="companyNames" class="form-label">Company Names</label>
                        <input type="text" class="form-control" id="companyNames" name="companyNames" required>
                    </div>

                    <!-- Campo de texto "Phone Number" -->
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                    </div>

                    <!-- Campo de texto "Company Email" -->
                    <div class="mb-3">
                        <label for="companyEmail" class="form-label">Company Email</label>
                        <input type="email" class="form-control" id="companyEmail" name="companyEmail" required>
                    </div>

                    <!-- Opciones de selección "Solution Type" -->
                    <div class="mb-3">
                        <label class="form-label">Solution Type</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="solutionType[]" value="factoring" id="factoring">
                            <label class="form-check-label" for="factoring">
                                Factoring
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="solutionType[]" value="fluer" id="fluer">
                            <label class="form-check-label" for="fluer">
                                Fluer
                            </label>
                        </div>
                    </div>
                        <!-- Opciones de selección "Refere" -->
                <div class="mb-3">
                    <label for="refere" class="form-label">Refere</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="refere" id="refere_yes" value="yes">
                        <label class="form-check-label" for="refere_yes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="refere" id="refere_no" value="no">
                        <label class="form-check-label" for="refere_no">No</label>
                    </div>
                </div>

                <!-- Campo de texto "Comentarios" -->
                <div class="mb-3">
                    <label for="comentarios" class="form-label">Comentarios</label>
                    <textarea class="form-control" id="comentarios" name="comentarios" rows="3"></textarea>
                </div>

                <!-- Botón de envío -->
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
  </div>

    <main class="container">
        <a name=Pnosotros></a>
        <div class="row nosotros justify-content-center">
            <div class="col-12 text-center">
                <h2 class="subtitulo"><span>¿Quienes somos?</span></h2>
                <h3 class="titulo">Nuestra pasion por las piedras exóticas y la elegancia.</h3>
                <p>
                    Nos convierte en la tienda ideal para los amantes de las joyas, la elegancia y el glamur, somos
                    una tienda comprometidad a sastisfacer las nesecidades del cliente y estar con los estandares mas 
                    altos de la industria. Diseñamos joyas a la medida de las necesidades de nuestros clientes. 
                    Nuestros técnicos especializados siempre están dispuestos a asesorarlos con la actitud de cálida.
                </p>
                <a href="menu.php" class="enlace">Envia peticiones, quejas o reclamos</a>
            </div>
        </div>

        <div class="row productos">
            <a name=Aproducto></a>
            <article class="col-12 text-center">
                <h2 class="subtitulo"><span>Lo que ofrecemos</span></h2>
                <p class="titulo">Nuestros productos</p>
                <p>
                    
                    Entre los productos que puedes encontrar en nuestra tienda tenemos anillos de matrimonio, dijes
                    aretes, anillos, cadenas, pulseras, collares y relojes.
                </p>
            </article>
            <div class="col-12">
                <div class="row justify-content-center">
                    <article class="col-6 col-lg-3 py-1">
                        <figure class="producto">
                            <img src="img/products/piece-01.jpg" class="img-fluid" alt="">
                            <figcaption class="overlay">
                                <p class="overlay-texto">Descripción:
                                    Anillo en oro amarillo de 18 kilates, con diamante central de 1.01 ct
                                </p>
                            </figcaption>
                        </figure>
                    </article>

                    <article class="col-6 col-lg-3 py-1">
                        <figure class="producto">
                            <img src="img/products/piece-02.jpg" class="img-fluid" alt="">
                            <figcaption class="overlay">
                                <p class="overlay-texto">Descripción:
                                    Aretes en oro blanco de 18 kilates, con 2 esmeraldas centrales de 0.80 ct
                                </p>
                            </figcaption>
                        </figure>
                    </article>

                    <article class="col-6 col-lg-3 py-1">
                        <figure class="producto">
                            <img src="img/products/piece-03.jpg" class="img-fluid" alt="">
                            <figcaption class="overlay">
                                <p class="overlay-texto">Descripción:
                                    Pulsera en oro amarillo de 18 kilates, 19 cm. de largo, 2 mm. de ancho
                                </p>
                            </figcaption>
                        </figure>
                    </article>

                    <article class="col-6 col-lg-3 py-1">
                        <figure class="producto">
                            <img src="img/products/piece-04.jpg" class="img-fluid" alt="">
                            <figcaption class="overlay">
                                <p class="overlay-texto">Descripción:
                                    Gargantilla en oro blanco de 18 kilates, rolo, con esmeralda central de 0.38 ct
                                </p>
                            </figcaption>
                        </figure>
                    </article>
                    <form action="matrimonio.html">
                        <button type="submit" class="d-block btn-productos">Todos los productos</button>
                    </form>
                </div>
            </div>
        </div>
    </main> 

    <div class="separador text-center text-white">
        <p><q>El amor es la alegría de los buenos, la reflexión de los sabios y el asombro de los incrédulos</q></p>
    </div>

    <div class="container">
        <div class="row acerca-de justify-content-around">
            <article class="col-10 col-sm-5">
                <figure class="text-center">
                    <img src="img/icons/icon-mision.png" alt="">
                    <figcaption>
                        <p>
                            <strong class="mb-2">Mision</strong>
                            <div class="w-100"></div>
                            Hacer que los momentos más importantes de nuestros clientes se conviertan en recuerdos inolvidables a través de las mejores colecciones de joyería, 
                            argollas de matrimonio, anillos de compromiso y las marcas más reconocidas de relojes.
                        </p>
                    </figcaption>
                </figure>
            </article>

            <article class="col-10 col-sm-5">
                <figure class="text-center">
                    <img src="img/icons/icon-vision.PNG" alt="">
                    <figcaption>
                        <p>
                            <strong class="mb-2">Vison</strong>
                            <div class="w-100"></div>
                            Para el año 2050 ampliaremos nuestra presencia en el país con 30 joyerías en 15 ciudades, siendo reconocida 
                            como la joyeria que por excelencia acompaña a los colombianos en sus mejores momentos.
                        </p>
                    </figcaption>
                </figure>
            </article>
        </div>
    </div>

    <div class="container-fluid px-0 galeria">
        <div class="row justify-content-center mx-0 px-0">
            <div class="col-4 px-0 mx-0">
                <img src="img/display/img-01.jpeg" alt="">
            </div>
            <div class="col-4 px-0 mx-0">
                <img src="img/display/img-02.jpg" alt="">
            </div>
            <div class="col-4 px-0 mx-0">
                <img src="img/display/img-03.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <a name=Acontacto></a>
        <section class="contacto row justify-content-center">
            <div class="col-12 col-md-9 text-center">
                <h2 class="subtitulo"><span>Contactanos</span></h2>
            </div>

            <iframe  class="col-12 col-md-9" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1931.5684065173648!2d-74.1113806579501!3d4.711687562299986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ecf217f4b9d%3A0xeb17cde969504cb2!2sCentro%20Comercial%20Portal%2080!5e0!3m2!1ses!2sco!4v1604359878616!5m2!1ses!2sco" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            <div class="w-100 mb-4"></div>
            <div>
                <p class="border-bottom border-top">
                    <img src="img/icons/icon-cellphone.png" alt="">Tel:9260435
                </p>
            </div>
        </section>

        <footer class="row justify-content-center redes-sociales">
            <div class="col-auto">
                <a href="#">
                    <img src="img/icons/facebook.PNG" alt="">
                    <img src="img/icons/instagram.PNG" alt="">
                    <img src="img/icons/twiter.PNG" alt="">
                    <img src="img/icons/whatssap.PNG" alt="">
                    <img src="img/icons/Youtube.PNG" alt="">
                </a>
            </div>
        </footer>
    </div>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>