<?php

use App\Application\Config\Config;
use App\Application\Views\View;

?>
<!doctype html>
<html lang="<?=Config::get('app.lang')?>">
<head>
    <?php View::component('head');?>
    <title><?=$title;?></title>
</head>
<body>

<?php View::component('nav');?>

<main>
    <div class="container">
        <div class="row mt-3">
            <h3>Register</h3>
        </div>
        <div class="row mt-3">
            <form action="/register" method="post" class="form">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" value="" name="email" class="form-control" id="email" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" value="" name="name" class="form-control" id="name" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" value="" name="password" class="form-control" id="subject">
                </div>
                <div class="mb-3">
                    <label for="password_confirm" class="form-label">Password confirm</label>
                    <input type="password" value="" name="password_confirm" class="form-control" id="subject">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</main>
</body>
</html>
