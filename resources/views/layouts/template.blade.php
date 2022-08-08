<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portafolio Grupo 5</title>

        <!-- Favicon-->
        <link rel="icon" href="/favicon.ico" type="image/x-icon">


        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>


        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />


        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style>
            
        .card {
            text-align: center;
            width: 220px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px 25px;
            position: relative;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .our-services{
            margin-top: 75px;
            padding-bottom: 30px;
            padding: 0 60px;
            min-height: 198px;
            text-align: center;
            border-radius: 10px;
            background-color: #fff;
            transition: all .4s ease-in-out;
            box-shadow: 0 0 25px 0 rgba(20,27,202,.17)
        }
        
        .our-services .icon{
            margin-bottom: -21px;
            transform: translateY(-50%);
            text-align: center
        }
        
        .our-services:hover h4, 
        .our-services:hover p{
            color: #fff
        }
        
        .ssl:hover{
            box-shadow: 0 0 25px 0 rgba(20,27,201,.05);
            cursor: pointer;
            background-image: linear-gradient(-45deg, #fb0054 0%, #af4b3d 100%)
        }
        
        .settings:hover{
            box-shadow: 0 0 25px 0 rgba(20,27,201,.05);
            cursor: pointer;
            background-image: linear-gradient(-45deg, #34b5bf 0%, #210c59 100%)
        }
        
        .backups:hover{
            box-shadow: 0 0 25px 0 rgba(20,27,201,.05);
            cursor: pointer;
            background-image: linear-gradient(-45deg, #3615e7 0%, #44a2f6 100%)
        }

        .privacy:hover{
            box-shadow: 0 0 25px 0 rgba(20,27,201,.05);
            cursor: pointer;
            background-image: linear-gradient(-45deg, #cfa93e 0%, #eee130 100%)
        }
                
        .speedup:hover{
            box-shadow: 0 0 25px 0 rgba(20,27,201,.05);
            cursor: pointer;
            background-image: linear-gradient(-45deg, #e68a4d 0%, #e6620a 100%)
        }

        .database:hover{
            box-shadow: 0 0 25px 0 rgba(20,27,201,.05);
            cursor: pointer;
            background-image: linear-gradient(-45deg, #27b88d 0%, #22dd73 100%)
        }
  
        .our-team-main{
            width:100%;
            height:auto;
            border-bottom:7px #8B0000 solid;
            background:#fff;
            text-align:center;
            border-radius:10px;
            overflow:hidden;
            position:relative;
            transition:0.5s;
            margin-bottom:28px
        }
        
        .our-team-main img{
            border-radius:50%;
            margin-bottom:20px;
            width: 90px
        }
        
  
        .our-team-main p{
            margin-bottom:0
        }
        
        .team-back{
            width:100%;
            height:auto;
            position:absolute;
            top:0;
            left:0;
            padding:5px 15px 0 15px;
            text-align:left;
            background:#fff
        }
        
        .team-front{
            width:100%;
            height:auto;
            position:relative;
            z-index:10;
            background:#fff;
            padding:15px;
            bottom:0px;
            transition: all 0.5s ease
        }
        
        .our-team-main:hover .team-front{
            bottom:-200px;
            transition: all 0.5s ease
        }
        
        .our-team-main:hover{
            border-color:#FF0000;
            transition:0.5s
        }


        .btn-p{
            width:110px;
            height:45px;
            border-radius:45px;
            cursor:pointer;
            border:none;
            font-weight:bold;
            transition:all 0.3s ease;
        }

        .btn-p:hover
        {
            transform:translateY(7px);
            color:#fff;
        }

        </style>

    </head>

    <body id="page-top">


        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
            <div class="container">

                <a class="navbar-brand" href="#page-top">Jhael Nicolalde</a>

                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Sobre mí</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Proyectos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#services">Servicios</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#habilities">Habilidades</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#references">Referencias</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contáctame</a></li>
                        
                        @if (Route::has('login'))
                            @auth
                            <li class="nav-item mx-0 mx-lg-1">
                                <a href="{{ route('portafolio') }}">
                                    <button class="btn-p bg-primary">
                                        Dashboard
                                    </button>
                                </a>
                            </li>
                        @else
                            <li class="nav-item mx-0 mx-lg-1">
                                <a href="{{ route('login') }}">
                                    <button class="btn-p bg-primary">
                                        Login
                                    </button>
                                </a>
                            </li>
                            @endauth
                        @endif

                    </ul>
                </div>
            </div>
        </nav>



        <!-- Masthead-->
        <header class="masthead text-black text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase text-secondary mb-0">Jhael Nicolalde</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-black">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-black mb-0">Backend Developer - Web Designer - Freelancer</p>
            </div>
        </header>

        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Sobre mí</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">
                        Jhael Nicolalde, nació en Quito-Ecuador el 20 de abril de 2002. 
                        Realizó sus estudios secundarios en el Colegio Unidad Educativa Quito Sur. 
                        En la actualidad realiza sus estudios en la Escuela Politécnica Nacional 
                        en tercer semestre de la carrera de Tecnología Superior en Desarrollo de Software. 
                    </p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">
                        Áreas de interés: desarrollo web, diseño de interfaces, desarrollo frontend.  
                    </p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="mailto:jhael.nicolalde@epn.edu.ec">
                        <i class="fas fa-envelope me-2"></i>
                        jhael.nicolalde@epn.edu.ec
                    </a>
                </div>
            </div>
        </section>

        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Proyectos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                  @yield('content')
                  </div>
                </div>
            </div>
        </section>

        <!-- Service Section-->
        <section class="page-section bg-primary" id="services">
            <div class="container">
                <div class="d-lg-flex">
                    <div class="d-md-flex align-items-center mb-lg-0 mb-md-5">
                        <div class="col1 me-md-4 mb-md-0 mb-5">
                            <div class="card pb-4">
                                <span class="fab fa-envira mt-3"></span>
                                <p class="h4 pt-4">Desarrollo de aplicaciones Web</p>
                                <p class="p1 text-muted">
                                    El Desarrollo de Aplicaciones Web es aquel que permite crear herramientas
                                     a las que los usuarios pueden acceder 
                                    a través de Internet.
                                </p>
                                <a href="#" class="btn btn-primary">
                                    <span class="fas fa-arrow-right">
                                    </span>
                                    Ver más
                                </a>
                            </div>
                        </div>
                        <div class="col2 me-md-4 mb-md-0 mb-5">
                            <div class="card pb-4">
                                <span class="fas fa-cut mt-3"></span>
                                <p class="h4 pt-4">Diseño de Interfaces</p>
                                <p class="p1 text-muted">
                                    El diseñador de interfaces permite definir los lineamientos visuales, aplicando bases teóricas, 
                                    resultados del análisis del comportamiento de los usuarios y buenas prácticas de la usabilidad 
                                    y accesibilidad web
                                </p>
                                <a href="#" class="btn btn-primary">
                                    <span class="fas fa-arrow-right">
                                    </span>
                                    Ver más
                                </a>
                            </div>
                        </div>
                        <div class="col3 me-md-4 mb-md-0 mb-5">
                            <div class="card pb-4">
                                <span class="fas fa-people-carry mt-3"></span>
                                <p class="h4 pt-4">Base de Datos</p>
                                <p class="p1 text-muted">
                                    Una base de datos es una herramienta que nos permitira recopilar datos, organizarlos y relacionarlos, 
                                    para que se pueda hacer una rápida búsqueda y recuperar con ayuda de un ordenador
                                </p>
                                <a href="#" class="btn btn-primary">
                                    <span class="fas fa-arrow-right">
                                    </span>
                                    Ver más
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col6">
                        <div class="content">
                            <h2 class="page-section-heading text-uppercase text-secondary mb-0">Servicios</h2>
                            <br>
                            <p class="mb-4 text-black">
                                A continuación, puedes observar los principales servicios que ofrezco como profesional.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Habilities Section-->
        <section class="page-section" id="habilities">
            <div class="container-fluid mb-5">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Habilidades</h2>
                <div class="text-center mt-5">
                    <p class=" h2 mb-0 text-uppercase text-secondary">Frontend</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services settings">
                                <div class="icon"><span class="iconify" data-icon="vscode-icons:file-type-css" data-width="93" data-height="85"></span></div>
                                <h4>Settings</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services speedup">
                                <div class="icon"><span class="iconify" data-icon="vscode-icons:file-type-html" data-width="93" data-height="85"></span></div>
                                <h4>Speedup</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services privacy">
                                <div class="icon"><span class="iconify" data-icon="logos:javascript" data-width="93" data-height="85"></span></div>
                                <h4>Privacy</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <p class=" h2 mb-0 text-uppercase text-secondary">Backend</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services backups">
                                <div class="icon"><span class="iconify" data-icon="logos:php" data-width="93" data-height="85"></span></div>
                                <h4>Backups</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services ssl">
                                <div class="icon"><span class="iconify" data-icon="logos:laravel" data-width="93" data-height="85"></span></div>
                                <h4>SSL secured</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services database">
                                <div class="icon"><span class="iconify" data-icon="logos:mysql" data-width="93" data-height="85"></span></div>
                                <h4>Database</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- References Section-->
        <section class="page-section bg-primary" id="references">
            <h1 class="text-center">Referencias</h1>
            <br>
            <div class="container">
                <div class="row">
                    <!--team-1-->
                    <div class="col-lg-4">
                        <div class="our-team-main">
                            <div class="team-front"> <img src="https://i.imgur.com/Ur43esv.jpg" class="img-fluid" />
                                <h3>William</h3>
                                <p>Web Designer</p>
                            </div>
                            <div class="team-back"> <span> William is a web designer at Google inc. having 10+ years of experience in web development. William's hobby is to play table tennis and all type of indoor games. </span> </div>
                        </div>
                    </div>
                    <!--team-1-->
                    
                    <!--team-2-->
                    <div class="col-lg-4">
                        <div class="our-team-main">
                            <div class="team-front"> <img src="https://i.imgur.com/8RKXAIV.jpg" class="img-fluid" />
                                <h3>David</h3>
                                <p>Project Manager</p>
                            </div>
                            <div class="team-back"> <span> David is a Project Manager at Apple inc. having 15+ years of experience in Android application development. William's hobby is to play Football and all type of outdoor games. </span> </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="our-team-main">
                            <div class="team-front"> <img src="https://i.imgur.com/J6l19aF.jpg" class="img-fluid" />
                                <h3>Niharika</h3>
                                <p>Hybris Developer</p>
                            </div>
                            <div class="team-back"> <span> Niharika is a Hybris Developer at Google India. having 7+ years of experience in Hybris application development. William's hobby is to travel all around the world and play all type of games. </span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contáctame</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="container mt-5 col-12 col-sm-6">
                    <form method="POST" action="{{route('sugerencias.form')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="data1" class="form-label">Nombre</label>
                            <input type="text" class="form-control @error('nombre')is-invalid @enderror" id="data1" name="nombre"  value="{{ old('nombre')}}">
                            <div class="form-text">Ingrese un nombre válido.</div>
                            @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="data2" class="form-label">Apellido</label>
                            <input type="text" class="form-control @error('apellido')is-invalid @enderror" id="data2" name="apellido"  value="{{ old('apellido')}}">
                            <div class="form-text">Ingrese un nombre válido.</div>
                            @error('apellido')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="data3" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control @error('correo')is-invalid @enderror" id="data3" name="correo"  value="{{ old('correo')}}">
                            <div class="form-text">Ingrese un correo válido.</div>
                            @error('correo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="data4" class="form-label">Asunto</label>
                            <input type="asunto" class="form-control @error('asunto')is-invalid @enderror" id="data4" name="asunto"  value="{{ old('asunto')}}">
                            <div class="form-text">Ingrese un asunto para procesar</div>
                            @error('asunto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control @error('mensaje')is-invalid @enderror" name="mensaje" placeholder="Leave a comment here" value="{{ old('mensaje')}}"></textarea>
                            <label for="floatingTextarea" >Escriba aqui </label>
                            <div id="emailHelp" class="form-text">Ingrese la información</div>
                            @error('mensaje')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                    </form>
                </div>
            </div>
        </section>




        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Ubicacion</h4>
                        <p class="lead mb-0">
                            Av. Ladrón de Guevara 253
                            <br />
                            Quito 170517
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Redes Sociales</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-github"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Sobre un desarrollador web</h4>
                        <p class="lead mb-0">
                            Un desarrollador web crea, diseña y realiza páginas y aplicaciones web
                        </p>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Jhael Nicolalde 2022</small></div>
        </div>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    </body>
</html>

