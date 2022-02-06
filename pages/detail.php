<?php include ("header.php")?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($details as $element) {?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $element['image']  ?>" alt="" class="card-img-top" />
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $element['title'] ?></h2>
                            <h4>Price: <?php echo  $element['price'] ?></h4>
                            <h4>brand: <?php echo  $element['brand'] ?></h4>
                            <h4>category: <?php echo  $element['category'] ?></h4>
                            <h4>Description: <?php echo  $element['description'] ?></h4>
                        </div>
                    </div>

                </div>
            <?php }?>
        </div>
    </div>

</section>

<?php include ("footer.php")?>

