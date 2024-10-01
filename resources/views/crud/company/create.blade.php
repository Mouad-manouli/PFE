<x-master_admin title="Create company">

    <div class="container my-5">
    <form action="{{route('create.company')}}" method="POST" class="create_form" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-4 py-5">
            <img src="{{asset('storage/Capture_cmp.png')}}" alt="" width="100%" class="image">
        </div>
        <div class="col">
            <div class="row">
                <div class="col py-3">
                    <h4>Basic Details</h4>
                    <p>Add new Company</p><hr>
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <div class="col">
                    <label for="exampleInputEmail1" class="form-label text-secondary">Activity area</label>
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
                    <div id="emailHelp" class="form-text text-danger">
                        @error('SecteurActivite_ent')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <label for="formFile" class="form-label text-secondary">Image</label>
                    <input class="form-control file"  type="file" id="formFile" name="image">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('image')
                            {{$message}}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nom_ent" value="{{old('Nom_ent')}}" placeholder="Company name">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('Nom_ent')
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

            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Ville_ent" value="{{old('Ville_ent')}}" placeholder="City">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('Ville_ent')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="AdrPhysique_ent" value="{{old('AdrPhysique_ent')}}" placeholder="Physical Adresse">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('AdrPhysique_ent')
                            {{$message}}
                        @enderror
                    </div>
                </div>

            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Tel_ent" value="{{old('Tel_ent')}}" placeholder="Tel">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('Tel_ent')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <input type="text" name="Description_ent" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('Description_ent')}}" placeholder="Description">
                    <div id="emailHelp" class="form-text text-danger">
                        @error('Description_ent')
                            {{$message}}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
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
            <div class="row mt-4">
                <div class="col">
                    <button type="reset" class="btn text-primary">Reset || All</button>
                </div>
                <div class="col-7"></div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Add Company</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    </x-master_admin>
