<?php
    require_once('php/createdb.php');
    require_once('./php/component.php');

    //Create instance of create db class
    $database = new createdb(dbname:'Productdb', tablename:'Producttb');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping cart</title>
    
    <!-- font-awosom cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel = 'stu'
</head>
<body>
    
    <div class="container">
        <div class="row text-center py-5">
        <?php
            component('Paper', 40, "assets/img/portfolio/papers.jpg", 'Amazing');
            component('Painting', 40, "assets/img/portfolio/paint_color.jpeg" , 'Amazing');
            component('Make your mark', 40, "assets/img/portfolio/make_fun.jpeg.jpeg ", 'Amazing');
            component('Textile', 40, "assets/img/portfolio/textiles.jpeg.jpeg", 'Amazing');
            component('Stringing & Beading', 40, "assets/img/portfolio/Stringing&Beading.jpg.jpeg", 'Amazing');
            component('Printing', 40, "assets/img/portfolio/printing.jpeg", 'Amazing');
            component('Tools', 40, "assets/img/portfolio/tools.jpg.jpeg", 'Amazing');
            component('Fun to Have', 40, "assets/img/portfolio/fun_to_have1.jpeg", 'Amazing');
            
        ?>
        
    
    </div>
</div>
<!-- js bootsrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
