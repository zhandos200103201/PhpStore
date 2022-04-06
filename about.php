<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Contact form</title>
  </head>
  <body>
    <?php require "php/header.php" ?>
    <div class="container mt-2">
      <h2>Contact form</h2><br>
      <form action="/check.php" method="post">
        <input class="form-control" type="email" name="email" placeholder="E-mail"><br>
        <textarea name="message" class="form-control" placeholder="Write your message: "></textarea><br>
        <button type="submit" name="send" class="btn btn-success">Send</button>
      </form>
    </div>
    <?php require "php/footer.php" ?>
  </body>
</html>
