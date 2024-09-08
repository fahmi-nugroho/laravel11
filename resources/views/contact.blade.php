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
  <h1>Halaman About</h1>
  <h3>Owner: {{ $contacts->name }}</h3>
  <h3>Email: {{ $contacts->email }}</h3>
  <h3>Github: {{ $contacts->github }}</h3>
  <h3>Linkedin: {{ $contacts->linkedin }}</h3>
</body>
</html>