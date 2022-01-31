<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container my-4">
        <div class="row">
            <div class="col-md-6 col-sm-6 my-2"><a class="btn btn-secondary btn-sm" href="/">Home</a></div>
            <div class="col-md-6 col-sm-6 my-2"><a class="btn btn-secondary btn-sm" href="/howtosendmail">How To Send Mail</a></div>
        </div>
    </div>

    <div class="container my-4">
        <h1 class="display-5">How to make send mail </h1>
        <p class="lead">This wideo is very simple <a href="https://youtu.be/TTk9pjLmJ40">Check it out</a></p>

        <ol>
            <li>laravel new contact-mail</li>
            <li>cdn css bootstrap</li>
            <li>php artisan make:controller ContactController</li>
            <li>route for contact-form</li>
            <li>controller data set</li>
            <li>this should give the error not supporten POST method so add:</li>
            <li>"@{{route('send.email')}}"</li>
            <li>the end on <a href="https://youtu.be/TTk9pjLmJ40?t=352">5.52</a></li>
            <li>Making Mail Class <span class="text-danger">php artisan make:mail ContactMail</span></li>
            <li>Making ContactMail.php and sending data</li>
            <li>the end on <a href="https://youtu.be/TTk9pjLmJ40?t=521">8.41</a></li>

        </ol>

    </div>

</body>

</html>