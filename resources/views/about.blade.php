<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang saya</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar">
        <a href="/">Home</a>
        <a href="/about" class="active">About</a>
        <a href="/blog">Blog</a>
        <a href="/contact">Contact</a>
    </nav>

    <main class="container">
        <h1>ABOUT</h1>

        <h3>Nama : {{ $nama }}</h3>
        <h3>Angkatan : {{ $angkatan }}</h3>
        <h3>Jurusan : {{ $jurusan }}</h3>

    </main>
</body>
</html>