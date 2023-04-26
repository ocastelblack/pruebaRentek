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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    <div class="imagenFondo">
        <div class="row justify-content-center">
            <div class="col-4 px-0 mx-0 tituloF">
                <p>
                    <h2><b>BUILD BY TRUCKERS FOR TRUCKERS.</b></h2>
                    <b>FactorTeck talkes the extra mile to ensure our
                        factoring services stands out from the rest
                        Unlike our competitors that come from the 
                        banking world we were truckers, yes you
                        heard right we were truckers.</b>
                </p>
            </div>
            <div class="col-4 text-left formulario">
                <form action="procesar_formulario.php" id="formulario" method="post"
                    onsubmit="return validarFormulario()">
                    <!-- Campo de texto "Names" -->
                    <div class="mb-3">
                        <label for="names" class="form-label">Names</label>
                        <input type="text" class="form-control" id="names" placeholder="First & Last"
                        name="names" required>
                    </div>

                    <!-- Campo de texto "Company Names" -->
                    <div class="mb-3">
                        <label for="companyNames" class="form-label">Company Names</label>
                        <input type="text" class="form-control" id="companyNames" placeholder="First Legal Name"
                        name="companyNames" required>
                    </div>

                    <!-- Campo de texto "Phone Number" -->
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                         <input type="tel" class="form-control" id="phoneNumber" placeholder="000 000 0000"
                         name="phoneNumber" pattern="[0-9]+" required>
                    </div>

                    <!-- Campo de texto "Company Email" -->
                    <div class="mb-3">
                        <label for="companyEmail" class="form-label">Company Email</label>
                        <input type="email" class="form-control" id="companyEmail" placeholder="name@company.com"
                         name="companyEmail" required>
                    </div>

                    <!-- Opciones de selección "Solution Type" -->
                    <div class="mb-3">
                        <label class="form-label">Solution Type</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Type" id="Type_factoring" value="factoring">
                            <label class="form-check-label" for="Type_factoring">Factoring</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Type" id="Type_Fluer" value="Fluer">
                            <label class="form-check-label" for="Type_Fluer">Fluer</label>
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
                        <div class="mb-3">
                            <input type="text" class="form-control" id="NameRefere" placeholder="Who did refer you?"
                            name="NameRefere">
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
        <div class="row justify-content-center flujo">
            <div class="col-12 text-center">
                <h4 class="titulo"><spn>Don´t let your cash flow stop you</spn></h4>
                <p>
                    Turn your oustanding invoices into cash quickly and easy
                </p>
            </div>
        </div>
        <div class="col-12">
            <div class="row" style="margin-top: 10px; margin-left: 20px;">
                  <article class="col-8 col-lg-6 py-1">
                    <div>
                        <img src="img/display/export.jpg" style="float:left;width: 50%;"> 
                        <div style="float:right;width: 50%;">
                            <p><b>Funding for exporters and importers</b></p>
                            <ul>
                              <li>Invoice factoring</li>
                              <li>International factoring</li>
                              <li>Supply chain finance</li>
                            </ul>
                        </div> 
                    </div>
                  </article>
                  <article class="col-8 col-lg-6 py-1">
                    <div>
                        <img src="img/display/finanzas.jpg" style="float:left;width: 50%;"> 
                        <div style="float:right;width: 50%;">
                            <p><b>Funding for owner-operators and fleet</b></p>
                            </n>
                            <p>Freight factoring</p>
                            <ul>
                              <li>Transparent fees and terms</li>
                              <li>Fuel advences</li>
                              <li>Tms</li>
                              <li>Express funding</li>
                            </ul>
                        </div> 
                    </div>
                  </article>
            </div>
        </div>
    </main> 

    <div class="separador text-center text-white">
        <p><q>The benefits of factoring with FactorTeck</q></p>
    </div>

    <div class="container">
        <div class="row productos">
            <article class="col-12 text-center">
                <p>
                    Get an advance on your outsatnding involces. The cash flow you need when you need it.
                </p>
            </article>
            <div class="col-12">
                <div class="row justify-content-center">
                    <article class="col-6 col-lg-3 py-1">
                        <figure class="producto">
                            <h3><b>Manage your cashflow</b></h3>
                            <img src="img/display/flujoEfectivo.jpg" class="img-fluid" alt="">
                            <figcaption class="overlay">
                                <p class="overlay-texto">
                                    Do not wait to have the cash you
                                    need to continue operating
                                    trasnform your accounts
                                    receivable into money
                                </p>
                            </figcaption>
                        </figure>
                    </article>

                    <article class="col-6 col-lg-3 py-1" style="width: max-content;">
                        <figure class="producto">
                            <h3><b>Forget collections</b></h3>
                            <img src="img/display/tratos.jpg" style="width: max-content;" class="img-fluid" alt="">
                            <figcaption class="overlay">
                                <p class="overlay-texto">
                                   Streamline the collection of your
                                   portfolio eliminating administration
                                   and collection costs
                                </p>
                            </figcaption>
                        </figure>
                    </article>

                    <article class="col-6 col-lg-3 py-1" >
                        <figure class="producto">
                            <h3><b>Debt free</b></h3>
                            <img src="img/display/libredeudas.jpg" class="img-fluid" alt="">
                            <figcaption class="overlay">
                                <p class="overlay-texto">
                                    The funds you need 
                                    without debit
                                </p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <section class="contacto row justify-content-center">
            <iframe  class="col-12 col-md-9" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15906.493138391423!2d-74.0566965!3d4.6610753!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9be6d52e0f2d%3A0xfcb95bce092feb3b!2sRentek%20SAS!5e0!3m2!1ses!2sco!4v1682452412028!5m2!1ses!2sco" 
            width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="w-100 mb-4"></div>
        </section>
    </div>

    <footer class="row justify-content-center redes-sociales">
        <div class="col-auto">
            <p>Follow Us:</p>
            <a href="#">
                <img src="img/icons/Logo_de_Facebook.png" alt="">
                <img src="img/icons//instagram-logo-png.png" alt="">
                <img src="img/icons/logoTwiter.png" alt="">
                <img src="img/icons/logowhatsap.png" alt="">
                <img src="img/icons/Youtube_logo.png" alt="">
            </a>
        </div>
    </footer>
    <footer class="row footer2">
        <article class="col-6 col-lg-3 py-1">
            <p>Financial solutions</p>
            <a href="#">Freight factoring</a>
            <a href="#">Internacional factoring</a>
            <a href="#">Factoring</a>
            <a href="#">Supply chain finance</a>
        </article>
        <article class="col-6 col-lg-3 py-1">
            <p>Company</p>
            <a href="#">About us</a>
            <a href="#">Referrals</a>
        </article>
        <article class="col-6 col-lg-3 py-1">
            <p>Resoursces</p>
            <a href="#">FAQS</a>
        </article>
        <article class="col-6 col-lg-3 py-1">
            <p>Contact us</p>
            <p>175 SW 7th St. Miami FL 33130 EE.UU</p>
            <p>(786) 206-3672</p>
            <p>(786) 206-3674</p>
        </article>
    </footer>

    <!-- Modal de éxito -->
        <div class="modal fade" id="modal-exito" tabindex="-1" aria-labelledby="modal-exito-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-exito-label">Formulario enviado exitosamente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    Gracias por su mensaje. Nos pondremos en contacto con usted lo antes posible.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
        </div>

    <!-- Modal de error -->
    <div class="modal fade" id="modal-error" tabindex="-1" aria-labelledby="modal-error-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-error-label">Error al enviar el formulario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <p id="mensaje"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>