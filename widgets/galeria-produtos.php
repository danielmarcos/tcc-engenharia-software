<?php
$produtos = $pdo->query("select distinct top 9 cluster, idproduto, url_imagem, produto, valor, categoria from dbo.produtos")->fetchAll(); ?>

<div class="col-lg-9">
    <div class="row g-4 justify-content-center">

        <?php foreach ($produtos as $produto): ?>
        <div class="col-md-6 col-lg-6 col-xl-4">
            <a href="?p=produto&g=<?php echo($produto['idproduto']); ?>">
            <div class="rounded position-relative fruite-item">
                <div class="fruite-img">
                    <img src="<?php echo $produto['url_imagem']; ?>" class="img-fluid w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;"><?php echo $produto['categoria']; ?></div>
                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                    <h4><?php echo $produto['produto']; ?></h4>
<!--                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>-->
                    <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">R$ <?php echo $produto['valor']; ?></p>
                        <!--<a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
                            <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>-->
                    </div>
                </div>
            </div>
            </a>
        </div>
        <?php endforeach; ?>

        <!--<div class="col-12">
            <div class="pagination d-flex justify-content-center mt-5">
                <a href="#" class="rounded">&laquo;</a>
                <a href="#" class="active rounded">1</a>
                <a href="#" class="rounded">2</a>
                <a href="#" class="rounded">3</a>
                <a href="#" class="rounded">4</a>
                <a href="#" class="rounded">5</a>
                <a href="#" class="rounded">6</a>
                <a href="#" class="rounded">&raquo;</a>
            </div>
        </div>-->

    </div>
</div>