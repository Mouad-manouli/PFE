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
        <div class="section_et2 mx-auto" >
            <div class="div2 mx-auto">
                <div style="width:80%;padding-top:40px;" class="mx-auto">
                    <a href="/" class="home">Home
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                        </svg>
                    </a>
                    <h3 style="margin-bottom: 25px;">Sign up</h3>
                    <form action="{{route('entreprise.post_step_two')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <select class="form-select" aria-label="Default select example" name="SecteurActivite_ent">
                            <option selected>{{old('SecteurActivite_ent')}}</option>
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
                        <div class="form-text text-danger" id="basic-addon4">
                            @error('SecteurActivite_ent')
                                {{$message}}
                            @enderror 
                        </div>
                        <input type="file" class="form-control" name="image" >
                        <div class="form-text text-danger" id="basic-addon4">
                            @error('image')
                                {{$message}}
                            @enderror 
                        </div><br>
                        <textarea class="form-control" name="Description_ent" id="" cols="" rows="" >{{old('Description_ent')}}</textarea>
                        <div class="form-text text-danger" id="basic-addon4">
                            @error('Description_ent')
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