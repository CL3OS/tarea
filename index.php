<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo y hora</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
    <body>

        <div class="page-content m-0 row justify-content-center align-items-center">
            <div class="col-auto p-5 text-center" >
                
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="p-3 border bg-primary">
                        <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <h2 id="res">Hola mundo, 00:00:00</h2>
                            </div>
                        </div>
                    </div>
                    </div>                    
                </div>
            </div>  
        </div>
       
        <script src="assets/js/jq.js"></script>
        <script type="text/javascript">
            var bucle = setInterval(function(){
                $.ajax({
                    url: "hora.php",
                    type : "GET", 
                    beforeSend: function(){
                        $('#res').show();
                    },
                    success: function(data){
                        $('#res').html("Hola mundo, "+data);
                    }, 
                    error: function(){
                        console.log("EROR");
                    } 
                });
            },1000);
        </script>
</body>

</html>

