<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Meera Agriculture, Bd" />
    <meta name="description" content="Meera Website" />
    <link rel="icon" href="assets/images/LOGO.png" type="image/png" sizes="16x16">

    <title>Meeraseed</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="assets/css/custom.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>


    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {

            window.addEventListener('scroll', function () {

                if (window.scrollY > 900) {
                    document.getElementById('navbar_top').classList.add('fixed-top');
                    // add padding top to show content behind navbar
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                    document.getElementById('navbar_top').classList.remove('fixed-top');
                    // remove padding top from body
                    document.body.style.paddingTop = '0';
                }
            });
        });
	// DOMContentLoaded  end
    </script>

    <style type="text/css">
        .fixed-top {
            top: -40px;
            transform: translateY(40px);
            transition: transform .3s;
        }
    </style>
</head>

<body class="bg-meera">

    <!-- ============= COMPONENT ============== -->
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light navbar-meera">
        <div class="container">
            <a class="navbar-brand" href="#">meeraseed</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#seed"> Seed </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> <i class="bi bi-house-fill"></i> </a></li>
                    <li class="nav-item"><a class="nav-link" href="#footer"> <i class="bi bi-journal-bookmark-fill"></i> </a></li>
                </ul>
                <!-- <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#"> <i class="bi bi-house-fill"></i> </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> <i class="bi bi-journal-bookmark-fill"></i> </a></li>
                </ul> -->

            </div> <!-- navbar-collapse.// -->
        </div> <!-- container-fluid.// -->
    </nav>
    <!-- ============= COMPONENT END// ============== -->



    <div class="container">
        <section>
            <main>
                <div class="container">
                    <div class="mt-5">
                        <h2 class="featurette-heading">{{ $category->name }}</h2>
                    </div>
                </div>
                
                <div class="container marketing mt-5 mb-5">
                    <div id="seed">
                        @foreach ($products as $product)
                        <div class="row featurette d-flex">
                            <div class="col-md-6 align-self-center">
                                <h2 class="featurette-heading">{{ $product->name }}</h2>
                                <p>{{ $product->subtitle }}</p>
                                <p class="lead">{{ $product->detail }}</p>
                                <p class="lead">{{ $product->bangla }}</p>
                            </div>
                            <div class="col-md-6">                                
                                <div class="image-size">                                    
                                    <img class="image-size mx-auto d-block"
                                        src="/image/{{ $product->image }}" alt="">
                                </div>
                            </div>
                        </div>
    
                        <hr class="featurette-divider">
                        @endforeach                        
                    </div>
                </div>                
            </main>
            
        </section>
    </div>
    <footer id="footer" class="footer mt-auto py-3 bg-dark text-white">
        <div class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2021  <a href="/">Meera Seed Ltd.</a> &middot;</p>
            <p>4th Floor, Build. No. 2</p>
            <p>6 Natak Sarani, Dhaka-1000, Bangladesh</p>
            <p>Tel: +880 2-41031883, +8802222228430, +88022222220866</p>
        </div>
    </footer>
</body>
</html>
