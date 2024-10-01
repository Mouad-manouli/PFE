
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('storage/icon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Atlasmachine | Create rapport</title>
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
        }
        p{
            font-size: small;
            color: #436b7f;
            text-align: center;
        }
        label{
            color: #9EAAB5;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <section class="mx-auto">
        <div class="div1">
            <img src="{{asset('storage/image_rapport2.png')}}" alt="">
        </div>
        @if (!session('materiels'))
            <form action="{{route('create.rapport_step1')}}" method="POST">
                <a href="/profile/employee">Back 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                    </svg>
                </a>
                @csrf
                    <h2 class="titre1">Step 1</h2><br>
                    <label for="">Choose the company</label>
                    <select name="entreprise_id" class="form-control">
                        @isset($entreprise)
                            <option value="" selected></option>
                            @foreach ($entreprise as $entrs)
                                <option value="{{$entrs->id}}">{{$entrs->Nom_ent}}</option>
                            @endforeach   
                        @endisset
                    </select>
                    <div id="emailHelp" class="form-text text-danger">
                        @error('entreprise_id')
                            {{$message}}
                        @enderror 
                    </div><br>
                    <button type="submit">Validate company</button><br><br>
                    <p> Please fill out this form to submit your report. </p>
            </form>
        @endif
    
        @if(session('materiels')  && session('id_m'))
            <form action="{{route('create.rapport_step2')}}" method="POST">
                <a href="/profile/employee">Back 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                    </svg>
                </a>
                @csrf
                    <h2>Step 2</h2>
                    <label for="">Choose material</label>
                    <select name="machine_id" class="form-control">
                        @foreach (session('materiels') as $index => $materiel)
                            <option value="{{session('id_m')[$index]}}">{{$materiel}}</option> 
                        @endforeach
                    </select>
                    <div id="emailHelp" class="form-text text-danger">
                        @error('machine_id')
                            {{$message}}
                        @enderror 
                    </div><br>
                    
                    <label for="DateDebut">Start date</label><br>
                    <input type="date" name="DateDebut" value="{{ old('DateDebut') }}" class="form-control">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('DateDebut')
                            {{$message}}
                        @enderror 
                    </div><br>
                    
                    <label for="DateFin">End date</label><br>
                    <input type="date" name="DateFin" value="{{ old('DateFin') }}" class="form-control"> 
                    <div id="emailHelp" class="form-text text-danger">
                        @error('DateFin')
                            {{$message}}
                        @enderror 
                    </div><br>
                    
                    <label for="Etat_machine">Machine state</label><br>
                    <input type="text" name="Etat_machine" value="{{ old('Etat_machine') }}" class="form-control">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('Etat_machine')
                            {{$message}}
                        @enderror 
                    </div><br>
                    
                    <label for="Description">Description</label><br>
                    <textarea name="Description" cols="30" rows="0" class="form-control">{{ old('Description') }}</textarea>
                    <div id="emailHelp" class="form-text text-danger">
                        @error('Description')
                            {{$message}}
                        @enderror 
                    </div><br>
                    
                    <button type="submit">Create</button><br><br>
                    <p>Please fill out this form to submit your report.</p>
            </form>
        @endif
    </section>
    
</body>
</html>
