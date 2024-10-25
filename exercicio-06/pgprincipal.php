<?php
  include "incs/header.php";
?>
  <main> 
    <!--Carroussel-->
    <div id="carouselExampleFade" class="carousel slide carousel-fade container mt-4 shadow p-0" data-bs-ride="carousel">
      <div class="">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner slide  rounded">
          <div class="carousel-item active">
            <img src="img/Fundo/fashion-2561754.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item slide  rounded">
            <img src="img/Fundo/man-6065000.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item slide  rounded">
            <img src="img/Fundo/watch-3886739.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!--PRODUTOS-->
    <section class="container w-75">
      <section id="produt" class="sec1 container w-75 pt-5 pb-3 bg-secondary">
        <h1>Produtos em Promoção</h1>
        <p>Aproveite!!</p>
      </section>

      <div class="row row justify-content-start g-3 pb-3">

        <?php
          $produtoDAO = new ProdutoDAO();
          $produtos = $produtoDAO->consultarProdutosPromocao();
          
          foreach($produtos as $p){
            
        ?>

          <div class="col">
            <div class="card">
              <img src="data:image/png;base64,<?=base64_encode($p['imagem'])?>" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title fw-bold"><?=$p['nome']?> <br> <?=$p['marca']?></h5>
              <p class="card-text fs-5 text-success">R$ <?=number_format($p['valor'],2,',','.')?></p>
              <a href="pgproduto.html" class="btn btn-outline-dark border-info w-100">Visitar</a>
            </div>
          </div>
        </div>

        <?php
          }
        ?>

      </div>
    </section>

    <section class="container w-75">
      <section id="produt" class="sec1 container w-75 pt-5 pb-3">
        <h1>Produtos em destaque</h1>
        <p>New collection</p>
      </section>

      <div class="row row justify-content-start g-3 pb-3">
          <?php
            $produtoDAO = new ProdutoDAO();
            $produtos = $produtoDAO->consultarLimite1();
            
            foreach($produtos as $p){
              
          ?>

            <div class="col">
              <div class="card">
                <img src="data:image/png;base64,<?=base64_encode($p['imagem'])?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title fw-bold"><?=$p['nome']?> <br> <?=$p['marca']?></h5>
                <p class="card-text fs-5 text-success">R$ <?=number_format($p['valor'],2,',','.')?></p>
                <a href="pgproduto.html" class="btn btn-outline-dark border-info w-100">Visitar</a>
              </div>
            </div>
          </div>

          <?php
            }
          ?>
      </div>

      <!--//Fim do Produto linha 1-->

      <section id="produt" class="sec1 container w-75 pt-5 pb-3">
        <h1>Produtos em Promoção</h1>
        <p>Garanta o seu agora</p>
      </section>
      <div class="row row justify-content-start g-3 pb-3">
        <div class="col-3">
          <div class="card">
            <img src="img/Produtos/CashmereGolaC1.1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title fw-bold">Suéter Cashmere Gola C</h5>
            <p class="card-text">Cashmere</p>
            <p class="card-text fs-5 text-success">R$50,00</p>
            <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="img/Produtos/Islandia1.1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title fw-bold">Suéter Islandia</h5>
            <p class="card-text">Islandia</p>
            <p class="card-text fs-5 text-success">R$50,00</p>
            <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="img/Produtos/NewYork1.1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title fw-bold">Suéter New York</h5>
            <p class="card-text">New York</p>
            <p class="card-text fs-5 text-success">R$50,00</p>
            <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="img/Produtos/Oslo1.1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title fw-bold">Suéter Oslo Azul</h5>
            <p class="card-text">Oslo</p>
            <p class="card-text fs-5 text-success">R$50,00</p>
            <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
            </div>
          </div>
        </div>
      </div>


      <section id="produt" class="sec1 container w-75 pt-5 pb-3">
        <h1>Produtos Mais vendidos</h1>
        <p>Coleção casual</p>
      </section>
      <div class="row row justify-content-start g-3 pb-4">
        <div class="col-4">
          <div class="card">
            <img src="img/Produtos/ChinoCinza1.1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title fw-bold">Camisa Chino Cinza</h5>
            <p class="card-text">Chino</p>
            <p class="card-text fs-5 text-success">R$399,00</p>
            <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="img/Produtos/Oxford1.1.jpg" class="img-card card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title fw-bold">Camisa Oxford</h5>
            <p class="card-text">Oxford</p>
            <p class="card-text fs-5 text-success">R$469,00</p>
            <a href="#" class="btn btn-outline-dark border-info w-100">Visitar</a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="img/Produtos/RomaLinho1.1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title fw-bold">Camisa Roma Linho </h5>
            <p class="card-text">Roma Linho</p>
            <p class="card-text fs-5 text-success">R$250,00</p>
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