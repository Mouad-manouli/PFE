<x-master_admin title="Update company">

<div class="container my-5">
    <form action="{{route('update.company',$Entreprise->id)}}" method="POST" class="create_form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-4 py-5">
                <img src="{{asset('storage/Capture_cmp.png')}}" alt="" width="100%" class="image">
            </div>
            <div class="col">
                <div class="row">
                    <div class="col py-3">
                        <h4>Basic Details</h4>
                        <p>Update a company</p><hr>
                    </div>
                </div>
                <br>
                <div class="row mb-3">
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label text-secondary">Activity area</label>
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
                        <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nom_ent" value="{{old('Nom_ent',$Entreprise->Nom_ent)}}" placeholder="Company name">
                        <div id="emailHelp" class="form-text text-danger">
                            @error('Nom_ent')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email',$Entreprise->email)}}" placeholder="Email">
                        <div id="emailHelp" class="form-text text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Ville_ent" value="{{old('Ville_ent',$Entreprise->Ville_ent)}}" placeholder="City">
                        <div id="emailHelp" class="form-text text-danger">
                            @error('Ville_ent')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="AdrPhysique_ent" value="{{old('AdrPhysique_ent',$Entreprise->AdrPhysique_ent)}}" placeholder="Physical Adresse">
                        <div id="emailHelp" class="form-text text-danger">
                            @error('AdrPhysique_ent')
                                {{$message}}
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Tel_ent" value="{{old('Tel_ent',$Entreprise->Tel_ent)}}" placeholder="Tel">
                        <div id="emailHelp" class="form-text text-danger">
                            @error('Tel_ent')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" name="Description_ent" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('Description_ent',$Entreprise->Description_ent)}}" placeholder="Description">
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
                    <div class="col-9"></div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Update Company</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </form>
</div>

    <!-- <h1>Create company</h1>
    <form action="{{route('update.company',$Entreprise->id)}}" method="POST" class="create_form" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div id="create_form">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Company name </label>
                <input type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nom_ent" value="{{old('Nom_ent',$Entreprise->Nom_ent)}}">
                <div id="emailHelp" class="form-text text-danger">
                    @error('Nom_ent')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tel</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Tel_ent" value="{{old('Tel_ent',$Entreprise->Tel_ent)}}">
                <div id="emailHelp" class="form-text text-danger">
                    @error('Tel_ent')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">City</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Ville_ent" value="{{old('Ville_ent',$Entreprise->Ville_ent)}}">
                <div id="emailHelp" class="form-text text-danger">
                    @error('Ville_ent')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="AdrMail_ent" value="{{old('AdrMail_ent',$Entreprise->AdrMail_ent)}}">
                <div id="emailHelp" class="form-text text-danger">
                    @error('AdrMail_ent')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Physical address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="AdrPhysique_ent" value="{{old('AdrPhysique_ent',$Entreprise->AdrPhysique_ent)}}">
                <div id="emailHelp" class="form-text text-danger">
                    @error('AdrPhysique_ent')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Activity area</label>
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
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Password_ent" >
                <div id="emailHelp" class="form-text text-danger">
                    @error('Password_ent')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Confirm password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Password_ent_confirmation" >
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control file"  type="file" id="formFile" name="image">
                <div id="emailHelp" class="form-text text-danger">
                    @error('image')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <textarea type="text" cols="130"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Description_ent" >{{old('Description_ent',$Entreprise->Description_ent)}}</textarea>
                <div id="emailHelp" class="form-text text-danger">
                    @error('Description_ent')
                        {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <a href="{{route('list_company')}}"><button class="btn btn-outline-secondary back">Back</button></a> -->
</x-master_admin>
