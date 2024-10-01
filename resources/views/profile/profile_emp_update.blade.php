<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('storage/icon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            background-color: #F5F5F5;
        }
        .section{
            width: 60%;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 5px 25px rgba(1, 1, 1, 15%);
            margin-top: 40px;
            padding: 20px 40px;
            margin-bottom: 50px;
        }
        a{
            float: right;
            text-decoration: none;
            color: #9EAAB5;
        }
        .image{
            border-radius: 50%;
            width: 140px;
            height: 140px;
            margin-top: 30px; 
            margin-bottom: 12px;
        }
        .image img{
            border-radius: 50%;
            width: 100%;
            height: 100%;
        }
        h5{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            color: #2A4451;
            font-weight: 600;
        }
        h6{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: small;
        }
        form{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        input[type='text'] ,input[type='email']{
            border: none;
            border-radius: 10px;
            background-color: #dbeff2;
            width: 225px;
            margin-bottom: 20px;
            padding: 10px;
        }
        h1{
            font-size: x-large;
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 20px;
            margin-top: 30px;
            font-weight: 700;
        }
        input[type='file']{
            width: 99%;
            margin-bottom: 20px;
        }
        button{
            width: 250px;
            color: #fff;
            border: none;
            background-color: #2A4451;
            padding: 10px;
            border-radius: 10px;
            margin-left: 250px;
        }
        input:focus{
            outline: none;
            color: #2A4451;
        }
    </style>
</head>
<body>
    <section class="mx-auto section">
        <a href="/profile/employee">Back 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
            </svg>
        </a>
        <div class="image mx-auto"><img src="{{asset('storage/'.$Employé->image)}}" alt=""></div>
        <h5>{{$Employé->Nom_emp}}</h5>
        <h6>{{$Employé->created_at->format('y-m-d')}}</h6>
        <hr>
        <form action="{{route('profile_emp.update',$Employé->id)}}"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" placeholder="Name" name="Nom_emp" value="{{old('Nom_emp',$Employé->Nom_emp)}}">
            <div id="emailHelp" class="form-text text-danger">
                @error('Nom_emp')
                    {{$message}}
                @enderror
            </div>
            <input type="text" placeholder="Age" name="Age" value="{{old('Age',$Employé->Age)}}">
            <div id="emailHelp" class="form-text text-danger">
                @error('Age')
                    {{$message}}
                @enderror 
            </div>
            <input type="text" placeholder="Tel" name="Tel" value="{{old('Tel',$Employé->Tel)}}">
            <div id="emailHelp" class="form-text text-danger">
                @error('Tel')
                    {{$message}}
                @enderror
            </div>
            <input type="text" placeholder="City" name="Ville" value="{{old('Ville',$Employé->Ville)}}">
            <div id="emailHelp" class="form-text text-danger">
                @error('Ville')
                    {{$message}}
                @enderror 
            </div>
            <input type="text" placeholder="Physical address" name="AdrPhysique_emp" value="{{old('AdrPhysique_emp',$Employé->AdrPhysique_emp)}}">
            <div id="emailHelp" class="form-text text-danger">
                @error('AdrPhysique_emp')
                    {{$message}}
                @enderror
            </div>
            <input type="email" placeholder="Email" name="email" value="{{old('email',$Employé->email)}}">
            <div id="emailHelp" class="form-text text-danger">
                @error('email')
                    {{$message}}
                @enderror 
            </div>
            <input type="file"  name="image" class="form-control">
            <div id="emailHelp" class="form-text text-danger">
                @error('image')
                    {{$message}}
                @enderror 
            </div>
            <button type="submit">Update</button>
        </form>
    </section>
</body>
</html>




















