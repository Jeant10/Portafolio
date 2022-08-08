<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviando ...</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap" rel="stylesheet">
<style>
        html,body {
            height: 100%;
            text-align: center;
        }

         .modal-content{
            border-radius: 1rem;
            margin-block: black;
        }
        
        
        .fa{
            color: #2b84be;
            font-size:90px;
            padding: 30px 0px;
        }
        
        .b1{
            background-color:#2b84be;
            box-shadow: 0px 4px #337095;
            font-size: 17px;
        }
        
        .r3{
            color: #c1c1c1;
            font-weight: 500;
        }
        
        a, a:hover{
            text-decoration: none;
        }

</style>

</head>
<body>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content py-md-5 px-md-4 p-sm-3 p-4">
        <h3>Mensaje enviado con exito!</h3>
            <i class="fa fa-bell "></i>
            <p class="r3 px-md-5 px-sm-1">Recibiras respuesta oportunamente al correo proporcionado</p>
            <p class="r3 px-md-5 px-sm-1">!Gracias por tu tiempo!</p>
            <a class="text-center mb-3" href="{{ url('/') }}"> <button class="btn btn-primary w-50 rounded-pill b1">Volver a la pagina principal</button> </a>
        
        </div>
    </div>
</div>


</body>
</html>