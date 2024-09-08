<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman About</title>
</head>
<body>
  <a href="/">Home</a>
  <a href="/about">About</a>
  <a href="/blog">Blog</a>
  <a href="/contact">Contact</a>
  @foreach ($articles as $article)
    <div>
      <h1>{{ $article->title }}</h1>
      <p>{{ $article->text }}</p>
    </div>
  @endforeach
</body>
</html>