<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Laravel</title>

    
    </head>
    <body>

        <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->created_at }}</p>

            <p>{{ $post->body }}</p>
            <hr>
    
            
          </div><!-- /.blog-post -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    </body>
</html>