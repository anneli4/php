 <?php include 'partials/header.php' ?>
 <main class="container">
<h1>Form</h1>
<?php if($name && $age): ?>
   <h2>Your name is <?=$name?> and you are <?=$age?> years old.</h2>
<?php endif ?>
    <a href="/formanswer?name=Kalev$age=25&id=25&page=2&order=asc&sort=name">Get link</a>

   <form action="/formanswer?name=Kalev&id=25" method="POST">
        <input name="firstname" type="text"> 
        <input name="age" type="number"> 
        <input type="submit">
        <!--<button>Submit</button>-->
    </form>
 </main>
 <?php include 'partials/footer.php' ?>