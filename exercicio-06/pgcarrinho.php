<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/carrinho.css">
        <link rel="shortcut icon" href="img/icons - I.png">
        <title>Carrinho de compras</title>
    </head>
    <body>
        <header class="header">
            <!--<img src="" alt="">-->

            <div class="container w-75 d-flex justify-content-between py-2 pe-0">
                
                <div>
                    <a href="home.html"><img src="img/Williams - 2.png" width="180px" class="img" alt="Imagem Logo"></a>
                </div>

                

                <!--Lado direito-->
                <div class="d-inline-flex">
                    <a href="" class="d-flex mx-2 b"><img src="svg/question-circle-fill (1).svg" width="30px" alt=""></a>
                    <a href="pgcarrinho.php" class="d-flex mx-2 b"><img src="svg/cart3 (1).svg" width="30px" alt=""></a>
                    <a href="pglogin.php" class="d-flex mx-2 b"><img src="svg/person-circle (1).svg" width="30px" alt=""></a>
                </div>

            </div>

            <!-- NAVBAR -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
              <div class="container p-0 w-75">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                  <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Infantil</a></li>
                        <li><a class="dropdown-item" href="#">Adulto</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Inferior</a></li>
                        <li><a class="dropdown-item" href="#">Superior</a></li>
                        <li><a class="dropdown-item" href="#">Acessórios</a></li>
                      </ul>
                    </li>
                  </ul>
                  
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tamanhos
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">PP(XS)</a></li>
                        <li><a class="dropdown-item" href="#">P(S)</a></li>
                        <li><a class="dropdown-item" href="#">M(M)</a></li>
                        <li><a class="dropdown-item" href="#">G(L)</a></li>
                        <li><a class="dropdown-item" href="#">GG(XL)</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Edite seu tamanho!</a></li>
                      </ul>
                    </li>
                  </ul>
                  
                  <div >
                    <form class="d-flex" role="search">
                      <button class="btn btn-outline-primary me-2" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search " viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg>
                      </button>
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                  </div>
                  
                </div>
              </div>
            </nav>
            
        </header>
        <main>

          <!--top-->
          <section class="container w-75 pt-4">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="home.php" class=" text-muted text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="pgprincipal.php" class="text-muted text-decoration-none">Página Inicial</a>
                </li>
                <li class="breadcrumb-item active" arial-current="pace">
                    <a href="pgproduto.php" class="text-muted text-decoration-none">Camiseta</a>
                </li>
                <li class="breadcrumb-item active" arial-current="pace">
                    Carrinho
                </li>
              </ol>
            </nav>
          </section>
          <!--Compra-->

            <section class="container w-75 d-flex justify-content-start pt-1 text-center">
                <div class="container col-3">
                    <h4 class="border-bottom mb-3 pb-1">Produto</h4>
                </div>
                <div class="container col-3">
                    <h4 class="border-bottom mb-3 pb-1">Preço</h4>
                </div>
                <div class="container col-3">
                    <h4 class="border-bottom mb-3 pb-1">Quantidade/Tamanho</h4>
                </div>
                <div class="container col-2">
                    <h4 class="border-bottom mb-3 pb-1">Valor Total</h4>
                </div>
                <div class="container col-1">
                    <h4 class="border-bottom mb-3 pb-1">Excluir</h4>
                </div>
            </section>
                

            <section class="container w-75 d-flex justify-content-start pt-1 dados">

                <figure class="col-3 mt-2">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/Produtos/Chevron.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Produtos/Chevron1.1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Produtos/Chevron1.3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <p class="m-0 text-secondary">Camiseta casual masculina</p>
                    <h5 class="m-0">Camieta Chevron Cinza chumbo</h5>

                    <div class="stars text-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </div>
                </figure>

                <section class="col-3 mt-2 align-self-center">
                    <div class="container text-center">
                        <strong class="fs-3 p-0">
                            R$499,99
                        </strong>
                    </div>
                </section>
                <section class="col-3 mt-2 align-self-center text-center">
                    <div>
                        <article class="container text-center">
                            
                            <form action="#">
                                    <div class="col-3 pb-2 pt-3 tam">
                                        <label for="quantidade-itens">Quantidade</label>
                                        <select class="form-control" id="quantidade-itens">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-3 pb-3 tam">
                                        <label for="quantidade-itens">Tamanhos</label>
                                        <select class="form-control" id="quantidade-itens">
                                            <option>PP(XS)</option>
                                            <option>P(S)</option>
                                            <option>M(M)</option>
                                            <option>G(L)</option>
                                            <option>GG(XL)</option>
                                        </select>
                                    </div>
                            </form>
                        </article>
                    </div>
                </section>
                <section class="col-2 mt-2 align-self-center">
                    <div class="container text-center">
                        <strong class="fs-3 p-0">
                            R$499,99
                        </strong>
                    </div>
                </section>
                <section class="col-1 mt-2 align-self-center text-center">
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" fill="currentColor" class="bi bi-x-circle-fill text-muted" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                      </svg></a>
                </section>
            </section>
            <section class="container w-75 d-flex justify-content-center pt-3">
                <div class="col-4 text-center p-3 dados">
                    <p><b>VALOR TOTAL:</b> R$499,99
                            <span class="d-blok fs-6 text-warning"><br>Ou em 12x sem juros</span></p>
                    <p><b>CUPOM DE DESCONTO:</b> #</p>
                    
                    <a href="pgpagamento.php" class="text-decoration-none"><p>Formas de pagamento aqui.</p></a>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-outline-dark border-dark">Comprar</button>
                        <button type="button" class="btn btn-outline-dark border-dark">Continuar comprando</button>
                    </div>
                </div>
            </section>

          <!--PRODUTOS-->

            <!--Acessórios-->
          <section class="container w-75">
            <section id="produt" class="sec1 container w-75 pt-5 pb-3">
              <h1>Você também pode gostar</h1>
              <p>Acessórios - Parceria ReservaOficina</p>
            </section>

            <div class="row row justify-content-start g-3 pb-3">
              <div class="col-2">
                <div class="card">
                  <img src="img/Acessorios/CapaAirpod.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h5 class="card-title fw-bold">Capa de Airpod</h5>
                  <p class="card-text text-secondary">Reserva Oficina</p>
                  <p class="card-text fs-5 text-success">R$149,00</p>
                  <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
                  </div>
                </div>
              </div>

              <div class="col-2">
                <div class="card">
                  <img src="img/Acessorios/CarregadorIndução.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h5 class="card-title fw-bold">Por Indução</h5>
                  <p class="card-text text-secondary">Reserva Oficina</p>
                  <p class="card-text fs-5 text-success">R$169,00</p>
                  <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
                  </div>
                </div>
              </div>

              <div class="col-2">
                <div class="card">
                  <img src="img/Acessorios/CartaoPresenteAmor.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h5 class="card-title fw-bold">Presente</h5>
                  <p class="card-text text-secondary">Reserva Oficina</p>
                  <p class="card-text fs-5 text-success">R$25,00</p>
                  <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
                  </div>
                </div>
              </div>

              <div class="col-2">
                <div class="card">
                  <img src="img/Acessorios/CintoCouroLona.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h5 class="card-title fw-bold">Cinto Lona </h5>
                  <p class="card-text text-secondary">Reserva Oficina</p>
                  <p class="card-text fs-5 text-success">R$149,00</p>
                  <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
                  </div>
                </div>
              </div>

              <div class="col-2">
                <div class="card">
                  <img src="img/Acessorios/CintoDuplaFace1.1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h5 class="card-title fw-bold">Cinto Duplo</h5>
                  <p class="card-text text-secondary">Reserva Oficina</p>
                  <p class="card-text fs-5 text-success">R$149,00</p>
                  <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
                  </div>
                </div>
              </div>

              <div class="col-2">
                <div class="card">
                  <img src="img/Acessorios/MalaParis.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h5 class="card-title fw-bold">Mala Paris</h5>
                  <p class="card-text text-secondary">Reserva Oficina</p>
                  <p class="card-text fs-5 text-success">R$149,00</p>
                  <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
                  </div>
                </div>
              </div>

            </div>

            <!--Produtos2-->
            <section id="produt" class="sec1 container w-75 pt-5 pb-3">
              <h1>Mais pedidos</h1>
              <p>Coleção pessoal</p>
            </section>
            <div class="row row justify-content-start g-3 pb-4">
              <div class="col-4">
                <div class="card">
                  <img src="img/Acessorios/CopoKouda.jpg" class="img-card card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">Copo Kouda</h5>
                    <p class="card-text text-secondary">Reserva Oficina</p>
                    <p class="card-text fs-5 text-success">R$469,00</p>
                    <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card">
                  <img src="img/Acessorios/Carteira.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h5 class="card-title fw-bold">Carteira Couro</h5>
                  <p class="card-text text-secondary">Reserva Oficina</p>
                  <p class="card-text fs-5 text-success">R$399,00</p>
                  <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
                  </div>
                </div>
              </div>
                <div class="col-4">
                    <div class="card">
                        <img src="img/Acessorios/GarrafaKouda.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Garrafa Kouda</h5>
                            <p class="card-text text-secondary">Reserva Oficina</p>
                            <p class="card-text fs-5 text-success">R$250,00</p>
                            <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <footer class="footer">
            <div class="container w-75 text-light">
                <div class="row justify-content-start">
  
                    <div class="col-12 text-center pt-4 pb-2 a">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-facebook b icon" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-instagram b text-light icon" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                          </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-twitter b icon" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                          </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="bi bi-linkedin b icon" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                          </svg></a>
                    </div>

                    <div class="col-3 pt-4">
                        <img src="img/Williams - 2.png" class="img" width="250px" alt="">
                        <p><br>Agradecemos a sua visita (◠‿◠✿)</p>
                    </div>

                    <div class="col-5 ps-4 pt-4 pb-0">
                        <h3>AJUDE OS DESENVOLVEDORES</h3>
                        <p class="mb-0">(*/ω＼*)</p>
                        <p class="text-light m-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                              <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                              <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                              <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                              <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                              <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                            </svg>
                        </p>
                    </div>

                    <div class="col-4 ps-4 pt-4" >
                        <h3>ENDEREÇO</h3>
                        <p>Rua Pedro Giacomini 103</p>
                        <p>Salto Veloso - Santa Catarina</p>
                        <p>89595-000</p>
                    </div>

                    <div class="col-4">

                    </div>

                    <div class="col-12 pt-4">
                        <h3 class="">CONTATO</h3>
                        <p class="m-0 mb-1">(49) 99841-1099</p>
                        <p id="menor" class="m-0 mb-1">Envie-nos seu melhor E-mail para sempre receber novidades</p>
                        <div class="mb-3">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="ednaldopereira@gmail.com">
                                
                                <div class="mb-3">
                                    <p></p>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Como podemos melhorar?" rows="2"></textarea>
                                </div>

                                <button class="btn btn-primary mb-3">
                                    Enviar
                                </button>
                        </div>
                    </div>
                </div>
            </div>
  
            <div class="footer2 p-2">
                <div class="">
                    <div class="">
                        <div class="col-12 text-center fs-5 text-light-50">
                            <p class="p-0 m-0"><b>Todos os direitos reservados &copy; 2022</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>