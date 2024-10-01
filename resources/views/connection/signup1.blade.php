<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('storage/css/login.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Atlasmachine | sign up</title>
</head>
<body class="body">
    <section>
        <div class="section mx-auto">
            <div class="div1">
                <img src="{{asset('storage/logo_footer2.png')}}" alt="">
                <p>Solving IT Problems Anytime</p>
                <h1>Join Us Today for Seamless IT Solutions.</h1>
                <img style="margin-left: 50px;" src="{{asset('storage/login3.png')}}" alt="">
            </div>
            <div class="div2">
                <div style="width:80%;padding-top:40px;" class="mx-auto">
                    <a href="/" class="home">Home
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                        </svg>
                    </a>
                    <h3>Sign up</h3>
                    <form action="{{route('entreprise.post_step_one')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="Nom_ent" placeholder="Company name" value="{{old('Nom_ent')}}"><br>
                        <div class="form-text text-danger" id="basic-addon4">
                            @error('Nom_ent')
                                {{$message}}
                            @enderror 
                        </div>
                        <input type="text" name="Tel_ent" placeholder="Tel" value="{{old('Tel_ent')}}"><br>
                        <div class="form-text text-danger" id="basic-addon4">
                            @error('Tel_ent')
                                {{$message}}
                            @enderror 
                        </div>
                        <input type="text" name="Ville_ent" placeholder="City" value="{{old('Ville_ent')}}"><br>
                        <div class="form-text text-danger" id="basic-addon4">
                            @error('Ville_ent')
                                {{$message}}
                            @enderror
                        </div>
                        <input type="text" name="AdrPhysique_ent" placeholder="Physical address" value="{{old('AdrPhysique_ent')}}"><br>
                        <div class="form-text text-danger" id="basic-addon4">
                            @error('AdrPhysique_ent')
                                {{$message}}
                            @enderror
                        </div>
                        <button type="submit">
                            Next
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                            </svg>
                        </button><br>
                    </form>
                    <div class="signup">
                        <p>Already have an account?</p>
                        <a href="/login">Login</a>
                    </div>
                </div>
            </div>
        </div>   
    </section>
</body>
</html>