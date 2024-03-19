<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './static/head.php'; ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <?php include './static/spinner.php'; ?>
        <?php include './components/Contact/Menu.php'; ?>
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Contacto Para Cualquier Consulta</h1>
                    <p class="mb-1">Que esperas para poder formar tu propio proyecto con nosotros, contacta con nosotros y pronto tendrás soluciones.</p>
                </div>
                <div class="row g-5">
                    <div class="col-lg-7 col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Objetivo</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Mensaje</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Enviar Mensaje</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="section-title position-relative mx-auto mb-4 pb-4">
                            <h3 class="fw-bold mb-0">Atención al cliente</h3>
                        </div>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Plaza Alta, Local 4. Los Altos Residencial 28864</p>
                        <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>314-165-5251</p>
                        <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@ecotecnologiasdelpacifico.com</p>
                        <div class="border rounded text-center p-4 mt-4">
                            <h3 class="fw-bold mb-4">Necesita ayuda?</h3>
                            <a class="btn btn-primary py-3 px-5" href="https://api.whatsapp.com/send?phone=5213141655251&text=Hola%20acabo%20de%20ver%20tu%20sitio%20web%20y%20quiero%20saber%20m%C3%A1s%20acerca%20de%20tus%20servicios">Charlemos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './static/footer.php'; ?>
    </div>
</html>