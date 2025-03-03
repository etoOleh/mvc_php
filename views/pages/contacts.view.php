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
        <div class="row">
            <form action="/contacts" method="post" class="form">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" value="test@mail.ru" name="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" value="Name1" name="subject" class="form-control" id="subject">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3">Some message</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</main>
</body>
</html>
