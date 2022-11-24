<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Readerstacks Share URL on social media like Facebook, Whatsapp, Twitter, LinkedIn in Laravel </title>

  <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.1/css/all.min.css" integrity="sha512-9my9Mb2+0YO+I4PUCSwUYO7sEK21Y0STBAiFEYoWtd2VzLEZZ4QARDrZ30hdM1GlioHJ8o8cWQiy8IAb1hy/Hg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="antialiased">
  <div class="container">
    <!-- main app container -->
    <div class="readersack">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h3>  Share URL on social media like Facebook, Whatsapp, Twitter, LinkedIn in Laravel  - Readerstacks</h3>
          
           {!!Share::page('https://readerstacks.com', 'Share title',["target"=>"_blank"])
            ->facebook()
            ->twitter()
            ->linkedin('Extra linkedin summary can be passed here')
            ->whatsapp();
          !!}
             
          </div>
        </div>
      </div>
    </div>
    <!-- credits -->
    <div class="text-center">
      <p>
        <a href="#" target="_top"> Share URL on social media like Facebook, Whatsapp, Twitter, LinkedIn in Laravel  - Readerstacks</a>
      </p>
      <p>
        <a href="https://readerstacks.com" target="_top">readerstacks.com</a>
      </p>
    </div>
  </div>
</body>
</html>