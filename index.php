 <?php
    $heroTitle = 'World news';
    $posts = [
        [
            'title' => 'Blogi 1',
            'date' => 'July 1, 2025',
            'author' => 'Anneli',
            'content' => 'See on minu esimene postitus. Tere tulemast!'
        ],
        [
            'title' => 'Blogi 2',
            'date' => 'July 2, 2025',
            'author' => 'Anneli',
            'content' => 'Täna oli päikseline päev.'
        ],

    ];
    ?>

 <?php include 'partials/header.php' ?>


 <main class="container">

     <?php include 'partials/hero.php' ?>
     <?php include 'partials/featured.php' ?>


     <div class="row g-5">
         <div class="col-md-8">

             <?php include 'partials/posts.php' ?>

         </div>
         <div class="col-md-4">

             <?php include 'partials/sidebar.php' ?>

         </div>
     </div>
 </main>
 <?php include 'partials/footer.php' ?>