<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://localhost:3000/browser-sync/browser-sync-client.js?v=2.18.11'><\/script>".replace("HOST", location.hostname));
//]]></script>
    <style>
      .q {display:none;}
    </style>
    <title>PatricNox Network-Admin</title>
    
</head>

  <body class="bg-light">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand mr-auto mr-lg-0" href="#">Network-Admin</a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" style="font-size:9px;" href="https://Github.com/PatricNox">Made by PatricNox</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search host" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <main role="main" class="container">
      <div class="my-3 p-3 bg-white rounded shadow-sm"  style="margin-top: 15vh !important;">
        <h6 class="border-bottom border-gray pb-2 mb-0">Computers on Network</h6>
        <?php foreach ($NetworkPCList as $name => $ip):?>
            <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark"><?=($name) ?: 'Unknown';?></strong>
                <a href="#">Access</a>
                </div>
                <span class="d-block">@<?=$ip?></span>
            </div>
            </div>
        <?php endforeach;?>
      </div>
    </main>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="nw/inc/script.js"></script>
</body>
</html>