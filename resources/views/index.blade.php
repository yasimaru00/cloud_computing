<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Image Manga And Background Manga </title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>

  <div class="container" style="margin-top: 50px;">

    <h3 class="text-center text-success"><b>Laravel Image Manga And Background Manga </b> </h3> <br><br>
    <a href="/create" class="btn btn-outline-success">Tambah Data Manga</a> <br><br>

    <table class="table table-dark">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul Manga</th>
          <th>Pembuat Manga</th>
          <th>Keterangan Manga</th>
          <th>Sampul Manga</th>
          <th>Perbaharui</th>
          <th>Hapus</th>
        </tr>
      </thead>
      <tbody>


        @foreach ($posts as $post)
        <tr>
          <th scope="row">{{ $post->id }}</th>
          <td>{{ $post->title }}</td>
          <td>{{ $post->author }}</td>
          <td>{{ $post->body }}</td>
          <td><img src="cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
          <td><a href="/edit/{{ $post->id }}" class="btn btn-outline-primary">Perbaharui</a></td>
          <td>
            <form action="/delete/{{ $post->id }}" method="post">
              <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Hapus</button>
              @csrf
              @method('delete')
            </form>
          </td>

        </tr>
        @endforeach

      </tbody>
    </table>
  </div>

  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">© Galiley Singgang M.Y TI-3G </span>
      </div>
    </footer>
  </div>


</body>

</html>