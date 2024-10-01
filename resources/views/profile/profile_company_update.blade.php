
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('storage/icon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Atlasmachine | Update account</title>
    <style>
        body{
            background-color: #F5F5F5;
        }
        section{
            width: 90%;
            margin-top: 50px;
            display: flex;
        }
        .div1{
            width: 45%;
        }
        form{
            width: 45%;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 5px 25px rgba(1,1,1,15%);
            padding: 20px 40px;
        }
        a{
            float: right;
            text-decoration: none;
            color: #9EAAB5;
        }
        select{
            width: 100%;
        }
        h2{
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 40px;
            color: #2A4451;
        }
        .titre1{
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 90px;
            color: #2A4451;
        }
        button{
            width: 250px;
            padding: 10px;
            background-color: #436b7f;
            border-radius: 10px;
            margin-left: 110px;
            border: none;
            color: #fff;
            margin-top: 30px;
        }
        p{
            font-size: small;
            color: #436b7f;
            text-align: center;
        }
        label{
            color: #9EAAB5;
            font-size: 14px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <section class="mx-auto">
        <div class="div1">
            <img src="{{asset('storage/image_update1.png')}}" alt="">
        </div>
        <form action="{{route('update.compte.company',$Entreprise->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <a href="/profile/company">Back 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                </svg>
            </a>
            <h2>Update account</h2>
            <label for="exampleInputEmail1">Activity area</label><br>
            <select class="form-select" aria-label="Default select example" name="SecteurActivite_ent">
                <option selected>{{old('SecteurActivite_ent',$Entreprise->SecteurActivite_ent)}}</option>
                <option value="Information technology and technology companies">Information technology and technology companies</option>
                <option value="Telecommunications companies">Telecommunications companies</option>
                <option value="Manufacturing and engineering companies">Manufacturing and engineering companies</option>
                <option value="Medical and pharmaceutical companies">Medical and pharmaceutical companies</option>
                <option value="Production and manufacturing companies">Production and manufacturing companies</option>
                <option value="Financial services companies">Financial services companies</option>
                <option value="Retail companies">Retail companies</option>
                <option value="Entertainment and media companies">Entertainment and media companies</option>
                <option value="Transportation and logistics companies">Transportation and logistics companies</option>
                <option value="Research and development companies">Research and development companies</option>
            </select>
            <div id="emailHelp" class="form-text text-danger">
                @error('SecteurActivite_ent')
                    {{$message}}
                @enderror
            </div>
            <label for="formFile">Image</label><br>
            <input class="form-control file"  type="file" id="formFile" name="image">
            <div id="emailHelp" class="form-text text-danger">
                @error('image')
                    {{$message}}
                @enderror
            </div>
            <label for="formFile">Company name</label><br>
            <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" name="Nom_ent" value="{{old('Nom_ent',$Entreprise->Nom_ent)}}" placeholder="Company name">
            <div id="emailHelp" class="form-text text-danger">
                @error('Nom_ent')
                    {{$message}}
                @enderror
            </div>
            <label for="formFile">Email</label><br>
            <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email',$Entreprise->email)}}" placeholder="Email">
            <div id="emailHelp" class="form-text text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </div>
            <label for="formFile">City</label><br>
            <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" name="Ville_ent" value="{{old('Ville_ent',$Entreprise->Ville_ent)}}" placeholder="City">
            <div id="emailHelp" class="form-text text-danger">
                @error('Ville_ent')
                    {{$message}}
                @enderror
            </div>
            <label for="formFile">Physical address</label><br>
            <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" name="AdrPhysique_ent" value="{{old('AdrPhysique_ent',$Entreprise->AdrPhysique_ent)}}" placeholder="Physical Adresse">
            <div id="emailHelp" class="form-text text-danger">
                @error('AdrPhysique_ent')
                    {{$message}}
                @enderror
            </div>
            <label for="formFile">Phone</label><br>
            <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" name="Tel_ent" value="{{old('Tel_ent',$Entreprise->Tel_ent)}}" placeholder="Tel">
            <div id="emailHelp" class="form-text text-danger">
                @error('Tel_ent')
                    {{$message}}
                @enderror
            </div>
            <label for="formFile">Description</label><br>
            <input type="text" class="form-control"  name="Description_ent" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('Description_ent',$Entreprise->Description_ent)}}" placeholder="Description">
            <div id="emailHelp" class="form-text text-danger">
                @error('Description_ent')
                    {{$message}}
                @enderror
            </div>
            <label for="formFile">Password</label><br>
            <input class="form-control"  type="password" id="exampleInputEmail1" aria-describedby="emailHelp" name="password" placeholder="Password">
            <div id="emailHelp" class="form-text text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </div>
            <label for="formFile">Confirm password</label><br>
            <input class="form-control"  type="password" id="exampleInputEmail1" aria-describedby="emailHelp" name="password_confirmation" placeholder="Confirme password">
            <button type="submit" >Update Company</button>
        </form>
    </section>
    
</body>
</html>


 
