<?php
    include('include/init.php');
?>
    <link rel='stylesheet' href='style2.css' />
    <h1>All Products</h1>
    <body> 
        <div class = 'container'>
            <?php
                $allPosts = getAllProducts();
                foreach ($allPosts as $posts) {
                    $title = $posts['postingTitle'];
                    $price = $posts['price'];
                    $location = $posts['location'];
                    echoPosts($title, $price, $location);
                }
            ?>
        </div>
    </body>
<?php
    function echoPosts ($title, $price, $location) {
        echo "
                <div class='gallery'>
                    <a target='_blank' href='#'>
                         <img src='images/placeholder.png' width='600' height='400'>
                        <div class='desc'>$title<br>$location<br>$$price</div>
                    </a>
                </div>
        ";

    }
?>