
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>API Perguruan Tinggi</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="#">Perguruan Tinggi</a>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">Pencarian Perguruan Tinggi</h1>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="negara" placeholder="Masukkan Negara  " aria-label="Recepient's Username"/>
                    <button class="btn btn-outline-secondary" type="button" id="search-button" onclick="cekUni();">Search</button>
                </div>
            </div>
        </div>

        <hr>

        <div class="row" id="hasil">
            
        </div>
    </div>


    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    function cekUni() {
          var country = document.getElementById("negara").value;
          
          var xmlhttp = new XMLHttpRequest();
          
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("hasil").innerHTML = this.responseText;
            }
          };
          
          xmlhttp.open("GET", "http://localhost/Universitas/negara.php?country="+country,  true);
          xmlhttp.send();
      }
    </script>
  </body>
</html>

