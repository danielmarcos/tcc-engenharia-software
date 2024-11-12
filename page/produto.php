<?php include('widgets/topo.php'); ?>

<?php
$idGet = $_GET['g'];
$produto = $pdo->query("select * from dbo.produtos where idproduto = $idGet")->fetchAll(); ?>

    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Shop Detail</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Shop Detail</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

<!-- Single Product Start -->
<div class="container-fluid py-5 mt-5">
    <div class="container py-5">
        <div class="row g-4 mb-5">
            <div class="col-lg-8 col-xl-9">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="border rounded">
                            <a href="#">
                                <img src="<?php echo $produto[0]['url_imagem']; ?>" class="img-fluid rounded" alt="Image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h4 class="fw-bold mb-3"><?php echo $produto[0]['produto']; ?></h4>
                        <p class="mb-3">Category: <?php echo $produto[0]['categoria']; ?></p>
                        <h5 class="fw-bold mb-3">R$ <?php echo $produto[0]['valor']; ?></h5>
                        <a href=" <?php echo $produto[0]['url_produto']; ?>" target="_blank" class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ir para o mercado</a>
                    </div>
                </div>

                <!--=========================-->
                <style>
                    .wrapper {
                        margin-top: 30px
                    }

                    .card {
                        border: 1px solid #eee;
                        cursor: pointer
                    }

                    .weight {
                        margin-top: -65px;
                        transition: all 0.5s
                    }

                    .weight small {
                        color: #e2dede
                    }

                    .buttons {
                        /*padding: 10px;*/
                        background-color: #d6d4d44f;
                        border-radius: 4px;
                        position: relative;
                        margin-top: 7px;
                        opacity: 0;
                        transition: all 0.8s
                    }

                    .dot {
                        /*height: 14px;*/
                        width: 14px;
                        background-color: green;
                        border-radius: 50%;
                        position: absolute;
                        left: 27%;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-size: 8px;
                        color: #fff;
                        opacity: 0
                    }

                    .cart-button {
                        height: 48px
                    }

                    .cart-button:focus {
                        box-shadow: none
                    }

                    .cart {
                        position: relative;
                        height: 48px !important;
                        width: 50px;
                        margin-right: 8px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        background-color: #fff;
                        padding: 11px;
                        border-radius: 5px;
                        font-size: 14px;
                        transition: 1s ease-in-out;
                        overflow: hidden
                    }

                    .cart-button.clicked span.dot {
                        animation: item 0.3s ease-in forwards
                    }

                    @keyframes item {
                        0% {
                            opacity: 1;
                            top: 30%;
                            left: 30%
                        }

                        25% {
                            opacity: 1;
                            left: 26%;
                            top: 0%
                        }

                        50% {
                            opacity: 1;
                            left: 23%;
                            top: -22%
                        }

                        75% {
                            opacity: 1;
                            left: 19%;
                            top: -18%
                        }

                        100% {
                            opacity: 1;
                            left: 14%;
                            top: 28%
                        }
                    }

                    .card:hover .buttons {
                        opacity: 1
                    }

                    .card:hover .weight {
                        margin-top: 10px
                    }

                    .card:hover {
                        transform: scale(1.04);
                        z-index: 2;
                        overflow: hidden
                    }
                </style>
                <?php $clt = $produto[0]['cluster']; ?>
                <?php $cat = $produto[0]['categoria']; ?>
                <?php $clusters = $pdo->query("select top 4 * from dbo.produtos where cluster = '$clt' ")->fetchAll(); ?>
                <?php $gclusters = $pdo->query("select distinct top 10 cluster from dbo.produtos where categoria = '$cat' ")->fetchAll(); ?>


                <div class="wrapper" style="margin-top: 40px;">
                    <div class="container">
                        <div class="row g-1">

                            <?php foreach( $clusters as $cluster ):?>
                            <div class="col-md-3">
                                <div class="card p-3">
                                    <div class="text-center"> <img src="<?php echo $cluster['url_imagem']?>" width="200"> </div>
                                    <div class="product-details"> <span class="font-weight-bold d-block">R$ <?php echo $cluster['valor']?></span> <span><?php echo $cluster['produto']?></span>
                                        <div class="buttons d-flex flex-row">
                                            <div class="cart"><i class="fa fa-shopping-cart"></i></div>
                                            <a href="<?php echo $cluster['url_produto']?>" target="_blank" class="btn btn-success cart-button btn-block"><span class="dot">1</span>Ir ao mercado </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
                <!--=========================-->
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="row g-4 fruite">
                    <div class="col-lg-12">
                        <!--<div class="input-group w-100 mx-auto d-flex mb-4">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>-->
                        <div class="mb-4">
                            <h4>Clusters</h4>
                            <ul class="list-unstyled fruite-categorie">
                                <?php foreach( $gclusters as $gcluster ):?>
                                <li>
                                    <div class="d-flex justify-content-between fruite-name">
                                        <a href="?p=pesquisa&termo=<?php echo $gcluster['cluster']?>"><i class="fas fa-apple-alt me-2"></i><?php echo $gcluster['cluster']?></a>
                                    </div>
                                </li>
                                <?php  endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="fw-bold mb-0">Produtos relacionados</h1>
        <?php $relacionados = $pdo->query("select top 6 * from dbo.produtos where categoria = '$cat'")->fetchAll(); ?>

        <div class="vesitable">
            <div class="owl-carousel vegetable-carousel justify-content-center">

                <?php foreach ($relacionados as $relacionado): ?>
                <div class="border border-primary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/vegetable-item-6.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;"><?php echo $relacionado['cluster']; ?></div>
                    <div class="p-4 pb-0 rounded-bottom">
                        <h4><?php echo $relacionado['produto']; ?></h4>
<!--                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
-->                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold">R$ <?php echo $relacionado['valor']; ?></p>
                            <a href="<?php echo $relacionado['url_produto']; ?>" target="_blank" class="btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ir no mercado</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>
<!-- Single Product End -->

<?php include('widgets/rodape.php'); ?>