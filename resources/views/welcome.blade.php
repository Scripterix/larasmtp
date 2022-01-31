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
        <h1 class="display-5">Contact Form Laravel</h1>
        <form action="{{route('send.email')}}" method="POST">
            @csrf
            <div class="row">
                <div class=" col-md-6">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group my-2">
                    <label for="message">Your Message</label>
                    <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Enter Your Message"></textarea>
                </div>
                <input type="submit" value="Send Message" class="ms-2 btn btn-primary btn-lg w-50">
            </div>
        </form>

    </div>






</body>

</html>