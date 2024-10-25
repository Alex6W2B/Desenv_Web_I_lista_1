<?php 
  include "incs/header.php";
  require_once "admin/src/ProdutoDAO.php";

  $produtoDAO = new ProdutoDAO();
  $produto = $produtoDAO->consultarProdutoPorId($_GET['idprodutos']);

?>

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
          Camisetas
        </li>
      </ol>
    </nav>
  </section>


  <!--Compra-->
  <div>
    <section class="container w-75 d-flex justify-content-start pt-1">
      <figure class="col-4">
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
      </figure>
    </div>

    <!-- produtos copy -->
    <section>
      <form action="carrinho.php" method="POST">
        <input type="hidden" name="idprodutos" value="<?=$produto['idprodutos']?>">
        <input type="hidden" name="operacao" value="inserir">
        <div class="container">
          <div class="row mt-5">
            <div class="col-6">
              <img src="data:img/png;base64,<?=base64_encode($produto['imagem'])?>" style="width: 450px">
            </div>

            <div class="col-6 last block mt-5">
              <div class="mb-5">
                <h1 class="titulo fw-bold"><?=$produtos['nome']?></h1>
                <h4><?=$produtos['idtamanho']?></h4>
                <h4><?=$produtos['tecido']?></h4>
              </div>

              <h2 class="valor fw-bold">R$<?=number_format($produtos['valor'],2,',','.')?></h2>
              <button type="submit" class="btn btn-dark w-50">COMPRAR</button>
            </div>
          </div>

          <div class="container">
            <div class="row align-items-start text-center border-bottom mb-3 pb-1">
              <div class="col">
                <h4 class="fw-bold">Editora</h4>
              </div>
              <div class="col">
                <h4 class="fw-bold">Ano de publicação</h4>
              </div>
              <div class="col">
                <h4 class="fw-bold">Idioma</h4>
              </div>
              <div class="col">
                <h4 class="fw-bold">Número de páginas</h4>
              </div>
            </div>

            <div class="row align-items-start text-center mb-5">
              <div class="col">
                <h4><?=$livro['editora']?></h4>
              </div>
              <div class="col">
                <h4><?=$livro['anoPublicacao']?></h4>
              </div>
              <div class="col">
                <h4><?=$livro['idioma']?></h4>
              </div>
              <div class="col">
                <h4><?=$livro ['numPag']?></h4>
              </div>
            </div>
          </div>
        </div>
      </form>

      <!-- p cat -->
      <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
        <?php
          $produtoDAO = new ProdutoDAO();
          $produtos = $produtoDAO->consultarPC($produtos['idcategoria']); // mudar para aparecer os produtos de acordo com a categoria do produto que está sendo visto

          foreach ($produto as $p) {
      
        ?>

        <div class="col mt-5 mb-5">
          <div class="card shadow h-100">
            <img src="data:img/png;base64,<?=base64_encode($lv['imagem'])?>" class="card-img-top">
            <div class="card-body">
              <div style="height: 60px">
                <h5 class="card-titulo"><?=$p['nome']?></h5>
              </div>
              <p class="card-text fs-4"><?=$p['idtamanho']?></p>
              <p class="card-text fs-4 fw-bold">R$<?=number_format($p['valor'],2,',','.')?></p>
              <a href="comprar.php?idprodutos=<?=$p['idprodutos']?>" class="btn btn-dark w-100">Comprar</a>
            </div>
          </div>
        </div>

        <?php
          //FIM DO FOR 
        }
        ?>
      </div>
    </section>

    <!---Inicio produto ale--->
    <article class="conteudo">
          <p class="m-0">Camiseta casual masculina</p>
          <h1>Camieta Chevron Cinza chumbo</h1>
          <h5 class="mt-3">Descrição</h5>
          <p>Camisa Manga Longa 100% algodão. Com corte moderno e o clássico, mas sempre contemporâneo.<br><br>
          Composição: <br>
          70% Algodão 30%poliester <br>
          Referência: 0053536021
        </p>
        </article>
        <article class="preco">
          <strong class="fs-1">
            R$499,99
            <span class="d-blok fs-6">Em até 12x sem juros</span>
          </strong>

          <form action="#">
            <div class="tam">
              <div class="col-3 pb-2 pt-3">
                <label for="quantidade-itens">Quantidade</label>
                <select class="form-control" id="quantidade-itens">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="col-3 pb-2">
                <label for="quantidade-itens">Tamanhos</label>
                <select class="form-control" id="quantidade-itens">
                  <option>PP(XS)</option>
                  <option>P(S)</option>
                  <option>M(M)</option>
                  <option>G(L)</option>
                  <option>GG(XL)</option>
                </select>
              </div>
              <div class="">
                <button type="submit" class="btn btn-success col-9">Comprar</button>
                <button href="pgcarrinho.html" type="submit" class="btn btn-warning col-3 float-end"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                </svg>
              </button>
            </div>
            <div>
              
              </div>
            </div>
          </form>
        </article>
      </section>
    </section>
    
    <section class="col-8 p-4 pt-2">
      <!-- outros produtos -->
      <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
      <?php
        $produtoDAO = new ProdutoDAO();
        $produtos = $produtoDAO->consultarPC($produto['idcategoria']); // mudar para aparecer os produtos de acordo com a categoria do produto que está sendo visto

        foreach ($produtos as $p) {
    
      ?>

      <div class="col mt-5 mb-5">
        <div class="card shadow h-100">
          <img src="data:img/png;base64,<?=base64_encode($lv['foto'])?>" class="card-img-top">
          <div class="card-body">
            <div style="height: 60px">
              <h5 class="card-title fs-4"><?=$lv['titulo']?></h5>
            </div>
            <p class="card-text"><?=$lv['nome']?></p>
            <p class="card-text fs-4 fw-bold">R$<?=number_format($lv['valor'],2,',','.')?></p>
            <a href="comprar.php?idlivros=<?=$lv['idlivros']?>" class="btn btn-dark w-100">Comprar</a>
          </div>
        </div>
      </div>

        <?php
          //FIM DO FOR 
        }
        ?>
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
          <h5 class="card-title fw-bold">Cartao Presente</h5>
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
          <p class="card-text fs-5 text-success">R$269,00</p>
          <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
          </div>
        </div>
      </div>

      <div class="col-2">
        <div class="card">
          <img src="img/Acessorios/CintoDuplaFace1.1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title fw-bold">Cinto Duplaface</h5>
          <p class="card-text text-secondary">Reserva Oficina</p>
          <p class="card-text fs-5 text-success">R$349,00</p>
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
          <p class="card-text fs-5 text-success">R$1999,00</p>
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
            <p class="card-text fs-5 text-success">R$189,00</p>
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
          <p class="card-text fs-5 text-success">R$289,00</p>
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
          <p class="card-text fs-5 text-success">R$199,00</p>
          <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php 
  include "incs/footer.php";
?>