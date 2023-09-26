@extends('layouts.app')

@section('content')
<body id="page-top">
        <!-- Navigation-->

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Library!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            </div>
        </header>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Books</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row justify-content-center">
                    @foreach($books as $book) :
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{$book['id']}}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="http://[::1]:5173/public/images/{{$book['photo']}}" style="height: 250px;width:100%" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$book['name']}}</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="portfolio-modal modal fade" id="portfolioModal{{$book['id']}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="http://[::1]:5173/resources/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Book title</h2>
                                    <p class="item-intro text-muted">{{$book['name']}}</p>
                                    <img class="img-fluid d-block mx-auto" src="http://[::1]:5173/public/images/{{$book['photo']}}" style="width: 200px;" alt="..." />
                                    <p></p>
                                    <a class="btn btn-primary btn-xl text-uppercase" href="/borrow/{{$book['id']}}">
                                        <i class="fas fa-edit me-1"></i>
                                        borrow
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->



@endsection
