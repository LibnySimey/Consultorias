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

    <!-- Navigation -->
@include('header')
@show

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{asset('images/1.jpg')}}" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="{{asset('images/2.jpg')}}" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="{{asset('images/3.jpg')}}" alt="...">
      <div class="carousel-caption">
        ...
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  <script>
    $('.carousel').carousel({
        interval: 4000 //changes the speed
    })
    </script>
</div>
</div>


    <!-- Page Content -->
    <div class="container-fluids">
            @include('about')
            @show

        <hr>
        <section href="http://localhost/public/servicios" style="padding-top: 35px; padding-bottom: 35px;">
            <div class="row">
            <h2 align="center" style="padding-bottom: 35px">Te ofrecemos</h2>
                <div class="col-sm-4" align="center">
                    <img class="img-circle img-responsive img-center size" src="{{asset('images/pre.png')}}" alt="">
                    <h2>Pre-Diagnóstico</h2>
                    <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
                </div>
                <div class="col-sm-4" align="center">
                    <img class="img-circle img-responsive img-center size" src="{{asset('images/doc.png')}}" alt="">
                    <h2>Diagnóstico</h2>
                    <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                </div>
                <div class="col-sm-4" align="center">
                    <img class="img-circle img-responsive img-center size" src="{{asset('images/sistemas.png')}}" alt="">
                    <h2>Implantación</h2>
                    <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                </div>
            </div>
        </section>

    </div>

        
        <!-- Footer -->
    @include('footer')
    @show
    

</body>

</html>
