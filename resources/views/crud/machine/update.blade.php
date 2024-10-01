<x-master_admin title="Update machine">
<div class="container my-5">
        <!-- <div class="row">
            <div class="col text-warning">
                <h2>Company: {{session('Nom_ent')}}</h2>
                @if (session()->has('success'))
                    <div class="alert alert-success mx-auto" role="alert">
                        {{session('success')}}
                    </div>
                @endif
            </div>
        </div> -->
    <form action="{{route('update.machine',$Machine->id)}}" method="POST" class="create_machine" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-4 py-5">
                <img src="{{asset('storage/Capture_mach.png')}}" alt="" width="100%" class="image">
            </div>
            <div class="col">
                <div class="row mb-3">
                    <div class="col py-3">
                        <h4>Basic Details</h4>
                        <p>Update a Machine</p><hr>
                    </div>
                </div>
                <br>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Materiel" value="{{old('Materiel',$Machine->Materiel)}}" placeholder="Materiel">
                        <div id="emailHelp" class="form-text text-danger">
                            @error('Materiel')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Model" value="{{old('Model',$Machine->Model)}}" placeholder="Model">
                        <div id="emailHelp" class="form-text text-danger">
                            @error('Model')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Etat" value="{{old('Etat',$Machine->Etat)}}" placeholder="Etat">
                        <div id="emailHelp" class="form-text text-danger">
                            @error('Etat')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="formFile" class="form-label text-secondary">Image:</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                        <div id="emailHelp" class="form-text text-danger">
                            @error('image')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-9"></div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Update Machine</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</x-master_admin>
