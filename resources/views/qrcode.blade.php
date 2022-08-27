<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>QR-Q</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
            
            <!--
            <div class="card">
                <div class="card-header">
                    <h2>Color QR Code</h2>
                </div>
                <div class="card-body">
                    {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-8') !!}
                </div>
            </div>
        -->
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                QR-Generator
              </a>
            </div>
          </nav>
          <div class="container-fluid">
            <ul class="nav justify-content-center mt-5">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Standar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">With Logo</a>
              </li>
            </ul>
            <div class="row mt-5">
              <div class="row justify-content-center">
                <div class="col-lg-12">
                  <div class="row justify-content-center">
                    <div class="col-lg-6">
                      <div class="card-body text-center mt-3">
                        <?php  
                        $data = $url;
                        ?>
                        <h1>Create your own QR!!!</h1>
                      </div>
                      <form action="/create" method="post">
                        @csrf
                        <div class="mx-2 mt-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $name }}" placeholder="Name" >
                        </div>
                        <div class="mx-2">
                            <label class="form-label">Your Link</label>
                            <input type="text" name="url" class="form-control" value="{{ $url }}" placeholder="Link">
                        </div class="mx-2">
                        <button type="submit" class="btn btn-secondary float-end mx-2 my-2">Create</button>
                      </form>
                    </div>
                    <div class="col-lg-4 mt-5">
                      <div class="card-body text-center ms-auto pb-2">
                        {!! QrCode::size(300)->format('png')->generate($url, '../storage/app/qrcode/'.$name.'.png') !!}
                        {!! QrCode::size(300)->format('svg')->generate($url, '../storage/app/qrcode/'.$name.'.svg') !!}
                        {!! QrCode::size(300)->format('eps')->generate($url, '../storage/app/qrcode/'.$name.'.eps') !!}
                        {!! QrCode::size(300)->generate($url) !!}
                      </div>
                    <div class="row justify-content-center mx-5" >
                      <div class="btn-group">
                        <a href="/downloadpng/{{ $name }}" class="btn btn-primary">.PNG</a>
                        <a href="/downloadsvg/{{ $name }}" class="btn btn-success">.SVG</a>
                        <a href="/downloadeps/{{ $name }}" class="btn btn-danger">.EPS</a>
                      </div> 
                    </div>  
                  </div>
                </div>
                </div>  
              </div> 
            </div>             
          </div>
        </div>


   
</body>
</html>

