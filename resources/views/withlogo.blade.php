<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid justify-content-start">
    <a class="navbar-brand" href="#">
      <h2>QR-Generator</h2>
    </a>
  </div>
</nav>


        

    <div class="collapse" id="collapseWithLogo" data-parent="#myGroup">
         
    </div>
</div>

<div class="container mt-3">
<ul class="nav nav-pills justify-content-center" id="myTab">
    <li class="nav-item">
        <a class="nav-link" href="/standard">Standard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="/withlogo">With Logo</a>
    </li>
</ul>


        <div class="row mt-1">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card-body text-center mt-2">
                                <?php  
                                $data = $url;
                                ?>
                                <h3>Create your own QR!!!</h3>
                            </div>
                            <form action="/create_w" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="mx-2 mt-2">
                                    <label class="form-label">Name</label>
                                    <input class='form-control @error('name') is-invalid  @enderror' type="text" name="name" class="form-control" value="{{ $name }}" placeholder="Name" >
                                    @error('name')
                                        <div class="text-start invalid-feedback">
                                            Please fill the name
                                        </div>
                                        @enderror
                                </div>
                                <div class="mx-2 mt-2">
                                    <label class="form-label">Your Link</label>
                                    <input class='form-control @error('url') is-invalid  @enderror' type="text" name="url" class="form-control" value="{{ $url }}" placeholder="Link">
                                    @error('url')
                                        <div class="text-start invalid-feedback ms-4">
                                            Please fill the link
                                        </div>
                                        @enderror
                                </div>
                                <div class="mx-2 mt-2">
                                    <label class="form-label">Your Logo</label>
                                    <input class="form-control" type="file" id="logo" name="logo">
                                    @error('url')
                                        <div class="text-start invalid-feedback ms-4">
                                            Please fill the link
                                        </div>
                                        @enderror
                                </div>
                                <div class="mx-2">
                                    <button type="submit" class="btn btn-primary float-end mx-2 my-2">Create</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4 mt-4">
                            <div class="card-body text-center ms-auto pb-2">
                            {!! QrCode::size(300)->format('png')->merge('../storage/app/logo/tokped.png',.3, true)->generate($url, '../storage/app/qrcode/'.$name.'.png') !!}
                            {!! QrCode::size(300)->format('svg')->merge('../storage/app/logo/tokped.png',.3, true)->generate($url, '../storage/app/qrcode/'.$name.'.svg') !!}
                            {!! QrCode::size(300)->format('eps')->merge('../storage/app/logo/tokped.png',.3, true)->generate($url, '../storage/app/qrcode/'.$name.'.eps') !!}
                            <img src="data:image/png;base64,{{ base64_encode(QrCode::size(300)->format('png')->merge('../storage/app/logo/tokped.png',.3, true)->generate($url) ) }}">
                            </div>
                            <div class="row justify-content-center" >
                                <div class="btn-group" style="width: 17rem;">
                                <a href="/downloadpng/{{ $name }}" class="btn btn-primary {{ ($url === "http://aerotech.com/") ? 'disabled' : '' }}">.PNG</a>
                                <a href="/downloadsvg/{{ $name }}" class="btn btn-success {{ ($url === "http://aerotech.com/") ? 'disabled' : '' }}">.SVG</a>
                                <a href="/downloadeps/{{ $name }}" class="btn btn-danger {{ ($url === "http://aerotech.com/") ? 'disabled' : '' }}">.EPS</a>
                                </div> 
                            </div>  
                        </div>
                    </div>
                </div>  
            </div> 
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>