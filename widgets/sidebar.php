<?php
$categorias = $pdo->query("select distinct categoria from dbo.produtos order by categoria asc")->fetchAll(); ?>

<div class="col-lg-3">
    <div class="row g-4">
        <div class="col-lg-12">
            <div class="mb-3">
                <h4>Categories</h4>
                <ul class="list-unstyled fruite-categorie">
                    <?php foreach ($categorias as $categoria): ?>
                        <li>
                            <div class="d-flex justify-content-between fruite-name">
                                <a href="?p=categoria&g=<?php echo strtolower($categoria['categoria']); ?>"><i class="fas fa-apple-alt me-2"></i><?php echo mb_convert_case($categoria['categoria'], MB_CASE_TITLE, "UTF-8");?></a>
                                <!--<span>(5)</span>-->
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!--<div class="col-lg-12">
            <div class="mb-3">
                <h4 class="mb-2">Price</h4>
                <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput" min="0" max="500" value="0" oninput="amount.value=rangeInput.value">
                <output id="amount" name="amount" min-velue="0" max-value="500" for="rangeInput">0</output>
            </div>
        </div>-->
        <!--<div class="col-lg-12">
            <div class="mb-3">
                <h4>Additional</h4>
                <div class="mb-2">
                    <input type="radio" class="me-2" id="Categories-1" name="Categories-1" value="Beverages">
                    <label for="Categories-1"> Organic</label>
                </div>
                <div class="mb-2">
                    <input type="radio" class="me-2" id="Categories-2" name="Categories-1" value="Beverages">
                    <label for="Categories-2"> Fresh</label>
                </div>
                <div class="mb-2">
                    <input type="radio" class="me-2" id="Categories-3" name="Categories-1" value="Beverages">
                    <label for="Categories-3"> Sales</label>
                </div>
                <div class="mb-2">
                    <input type="radio" class="me-2" id="Categories-4" name="Categories-1" value="Beverages">
                    <label for="Categories-4"> Discount</label>
                </div>
                <div class="mb-2">
                    <input type="radio" class="me-2" id="Categories-5" name="Categories-1" value="Beverages">
                    <label for="Categories-5"> Expired</label>
                </div>
            </div>
        </div>-->
        <!--<div class="col-lg-12">
            <h4 class="mb-3">Featured products</h4>
            <div class="d-flex align-items-center justify-content-start">
                <div class="rounded me-4" style="width: 100px; height: 100px;">
                    <img src="assets/img/featur-1.jpg" class="img-fluid rounded" alt="">
                </div>
                <div>
                    <h6 class="mb-2">Big Banana</h6>
                    <div class="d-flex mb-2">
                        <i class="fa fa-star text-secondary"></i>
                        <i class="fa fa-star text-secondary"></i>
                        <i class="fa fa-star text-secondary"></i>
                        <i class="fa fa-star text-secondary"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="d-flex mb-2">
                        <h5 class="fw-bold me-2">2.99 $</h5>
                        <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-start">
                <div class="rounded me-4" style="width: 100px; height: 100px;">
                    <img src="assets/img/featur-2.jpg" class="img-fluid rounded" alt="">
                </div>
                <div>
                    <h6 class="mb-2">Big Banana</h6>
                    <div class="d-flex mb-2">
                        <i class="fa fa-star text-secondary"></i>
                        <i class="fa fa-star text-secondary"></i>
                        <i class="fa fa-star text-secondary"></i>
                        <i class="fa fa-star text-secondary"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="d-flex mb-2">
                        <h5 class="fw-bold me-2">2.99 $</h5>
                        <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-start">
                <div class="rounded me-4" style="width: 100px; height: 100px;">
                    <img src="assets/img/featur-3.jpg" class="img-fluid rounded" alt="">
                </div>
                <div>
                    <h6 class="mb-2">Big Banana</h6>
                    <div class="d-flex mb-2">
                        <i class="fa fa-star text-secondary"></i>
                        <i class="fa fa-star text-secondary"></i>
                        <i class="fa fa-star text-secondary"></i>
                        <i class="fa fa-star text-secondary"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="d-flex mb-2">
                        <h5 class="fw-bold me-2">2.99 $</h5>
                        <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center my-4">
                <a href="#" class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Vew More</a>
            </div>
        </div>-->
        <!--<div class="col-lg-12">
            <div class="position-relative">
                <img src="assets/img/banner-fruits.jpg" class="img-fluid w-100 rounded" alt="">
                <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                    <h3 class="text-secondary fw-bold">Fresh <br> Fruits <br> Banner</h3>
                </div>
            </div>
        </div>-->

    </div>
</div>