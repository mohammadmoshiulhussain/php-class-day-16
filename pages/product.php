<?php include 'header.php'?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) { ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top"/>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $product['name']; ?></h4>
                                <h5><?php echo $product ['brand']; ?></h5>
                                <h6><?php echo $product ['price']; ?></h6>
                                <hr/>
                                <a href="" class="btn btn-outline-success">Read More</a>
                            </div>
                            <div class="card-footer">
                                <h6 class="card-title"><?php echo $product ['description']; ?></h6>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>


<?php include 'footer.php'?>