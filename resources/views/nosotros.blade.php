<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Consultoría Panamá</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">
    <link href="{{asset('css/agency.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

</head>

<body>
@include('header')
@show
<section>
        <div class="container-fluids">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nosotros</h2>
                    <h3 class="section-subheading text-muted">Conoce nuestra historia</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive size2" src="{{asset('images/mision.png')}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Misión</h4>
                                    <h4 class="subheading"> </h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Contribuir al desarrollo y mejora de las capacidades y competitividad de la industria a través de la difusión del conocimiento de las metodologías, técnicas, modelos y buenas prácticas alineados a modelos de calidad e innovación, reconocidos internacionalmente.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="{{asset('images/vision.jpg')}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Visión</h4>
                                    <h4 class="subheading"></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Ser de las empresas más reconocidas a nivel nacional e internacional por nuestra ​continua ​innovación​ en los servicios que ofrecemos, apoyando al desarrollo de la industria y por la calidad humana y profesional de nuestra gente.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive size2" src="{{asset('images/born.jpg')}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Mayo 2017</h4>
                                    <h4 class="subheading">Creación</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive size2" src="{{asset('images/innovacion.jpg')}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>June 2017</h4>
                                    <h4 class="subheading">Novedades</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
    @show

</body>

</html>