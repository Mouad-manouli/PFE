<x-master_admin title="Create employee">

    <div class="container  my-5">
    <form action="{{route('create')}}" method="POST" class="create_form" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-4 py-5">
            <img src="{{asset('storage/Capture_emp.png')}}" alt="" width="100%" class="image">
        </div>
        <div class="col">
            <div class="row">
                <div class="col py-3">
                    <h4>Basic Details</h4>
                    <p>Add new employee</p><hr>
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nom_emp"  value="{{old('Nom_emp')}}" placeholder="Name">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('Nom_emp')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}" placeholder="Email">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('email')
                            {{$message}}
                        @enderror
                    </div>

                </div>
                <div class="col">
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Tel" value="{{old('Tel')}}" placeholder="Tel">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('Tel')
                            {{$message}}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text"  id="exampleInputEmail1" aria-describedby="emailHelp" name="Age" value="{{old('Age')}}" placeholder="Age">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('Age')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Ville" value="{{old('Ville')}}" placeholder="City">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('Ville')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="AdrPhysique_emp" value="{{old('AdrPhysique_emp')}}" placeholder="Physical address">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('AdrPhysique_emp')
                            {{$message}}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="exampleInputEmail1" class="form-label text-secondary">Sex</label>
                    <select class="form-select" aria-label="Default select example" name="Sexe">
                        <option selected>{{old('Sexe')}}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <div id="emailHelp" class="form-text text-danger">
                        @error('Sexe')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <label for="exampleInputEmail1" class="form-label text-secondary">Type</label>
                    <select class="form-select" aria-label="Default select example" name="Type_emp">
                        <option selected>{{old('Type_emp')}}</option>
                        <option value="Computer science">Computer science</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Telecommunications">Telecommunications</option>
                        <option value="Audiovisual">Audiovisual</option>
                        <option value="Home automation">Home automation</option>
                    </select>
                    <div id="emailHelp" class="form-text text-danger">
                        @error('Type_emp')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <label for="formFile" class="form-label text-secondary">Image</label>
                    <input type="file"  class="form-control"  id="formFile" name="image">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('image')
                            {{$message}}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Specialite_emp" value="{{old('Specialite_emp')}}" placeholder="Speciality">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('Specialite_emp')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <input type="password" id="exampleInputEmail1" aria-describedby="emailHelp" name="password" placeholder="Password">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('password')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <input type="password" id="exampleInputEmail1" aria-describedby="emailHelp" name="password_confirmation" placeholder="Confirme password">
                </div>
            </div>
            <br><br>
            <div class="row mt-4">
                <div class="col ">
                    <button type="reset" class="btn text-primary">Reset || All</button>
                </div>
                <div class="col-7"></div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" width="100%">Add employe </button>
                </div>
            </div>
        </div>
    </div>
    </form>
    </div>
    <!-- <a href="{{route('list_employee')}}"><button class="btn btn-outline-secondary back">Back</button></a> -->

</x-master_admin>
