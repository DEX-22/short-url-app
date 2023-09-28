<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Short url</title>
</head>
<body class="h-100 d-flex flex-row justify-content-center align-items-center">
  <div class="card ">
  <div class="card-header">
    Insert a url to short
  </div>
  <div class="card-body ">
    <input id="input-url" class="input" type="text">
    <button onClick="showText()" class="btn btn-danger"> click aqui </button>
 
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <a class="h3" id="response-url"></a>
      
    </li>
  </ul>
  </div>

    <script>

      const url = document.getElementById('input-url')
      const response = document.getElementById('response-url')
      


      
      function showText(){
        
        const hostname = url.value.split('.')[1]

        response.innerText = hostname
        response.href = url.value

      }
    </script>
    
</body>
</html>