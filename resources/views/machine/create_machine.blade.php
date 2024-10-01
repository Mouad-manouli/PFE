<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('storage/icon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Atlasmachine | Create machine</title>
    <style>
        body{
            background-color: #F5F5F5;
        }
        section{
            width: 90%;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(1,1,1,15%);
            margin-top: 40px;
            margin-bottom: 30px;
        }
        .header{
            width: 100%;
            height: 80px;
            box-shadow: 0 2px 5px rgba(1,1,1,15%);
        }
        .form{
            width: 100%;
            display: flex;
        }
        .form_générale{
            width: 60%;
        }
        .image_bg{
            width: 40%;
        }
        .header img{
            height: 140px;
            margin-top: -30px;
        }
        a{
            text-decoration: none;
            color: #9EAAB5;
            float: right;
            margin-right: 40px;
            margin-top: 30px;
        }
        .form_générale{
            width: 40%;
            margin-top: 40px;
        }
        h1{
            margin-bottom: 30px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 700;
            color: #2A4451;
        }
        button{
            width: 100%;
            border: none;
            border-radius: 10px;
            color: #fff;
            background-color: #2A4451;
            padding: 10px;
            margin-bottom: 20px;
        }
        .image_bg img{
            height: 450px;
        }
    </style>
</head>
<body>
    <section class="mx-auto">
        <div class="header">
            <img src="{{asset('storage/logo1.png')}}" alt="">
            <a href="/profile/company">Back 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                </svg>
            </a>
        </div>
        <div class="form">
            <div class="form_générale mx-auto">
                <form action="{{route('create.machine_u')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1>Create machine</h1>
                        <input class="form-control" type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Materiel" value="{{old('Materiel')}}" placeholder="Materiel">
                        <div id="emailHelp" class="form-text text-danger">
                            @error('Materiel')
                                {{$message}}
                            @enderror
                        </div><br>
                        <input class="form-control" type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Model" value="{{old('Model')}}" placeholder="Model">
                        <div id="emailHelp" class="form-text text-danger">
                            @error('Model')
                                {{$message}}
                            @enderror
                        </div><br>
                        <input class="form-control" type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Etat" value="{{old('Etat')}}" placeholder="Etat">
                        <div id="emailHelp" class="form-text text-danger">
                            @error('Etat')
                                {{$message}}
                            @enderror
                        </div><br>
                        <input class="form-control" type="file" id="formFile" name="image">
                        <div id="emailHelp" class="form-text text-danger">
                            @error('image')
                                {{$message}}
                            @enderror
                        </div><br>
                        <button type="submit">Add Machine</button>
                </form>
            </div>
            <div class="image_bg">
                <img src="{{asset('storage/create_machine1.png')}}" alt="">
            </div>
        </div>
    </section>
    
</body>
</html>




