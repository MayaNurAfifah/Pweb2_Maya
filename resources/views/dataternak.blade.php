<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Data Ternak</h1>

    <div class="main-content">
      <section class="section">
      <a href="/tambahternak" class="btn btn-success">Tambah +</a>
    <div class="row">
      @if ($message = Session::get('succcess'))
      <div class="alert alert-success" role="alert">
        {{ $message}}
      </div>    
      @endif
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">tanggal</th>
          <th scope="col">umur</th>
          <th scope="col">pakan</th>
          <th scope="col">mati</th>
          <th scope="col">Dibuat</th>
          <th scope="col">aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
        $no = 1;
       @endphp
        @foreach ($data as $row)
        <tr>
          <th scope="row">{{$no++}}</th>
          <td>{{$row->tanggal}}</td>
          <td>{{$row->umur}}</td>
          <td>{{$row->pakan}}</td>
          <td>{{$row->mati}}</td>
          <td>{{$row->created_at->format('D M Y')}}</td> 
          <td>
            <a href="/tampilternak/{{$row->id}}"class="btn btn-info">Edit</a>
            <a href="/deletedataternak/{{$row->id}}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach 
      </tbody>
    </table>
  </div>
</div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>