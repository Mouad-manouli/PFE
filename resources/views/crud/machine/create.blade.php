<x-master_admin title="Create machine">
    <div class="container my-5">
        <!-- <div class="row">
            <div class="col text-info">
                <h2>Company: {{session('Nom_ent')}}</h2>
                @if (session()->has('success'))
                    <div class="alert alert-success mx-auto" role="alert">
                        {{session('success')}}
                    </div>
                @endif
            </div>
        </div> -->
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert" style="margin-top: 20px;">
                {{session('success')}}
            </div>
        @endif
    <form action="{{route('create.machine')}}" method="POST" class="create_machine" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-4 py-5">
                <img src="{{asset('storage/Capture_mach.png')}}" alt="" width="100%" class="image">
            </div>
            <div class="col">
                <div class="row mb-3">
                    <div class="col py-3">
                        <h4>Basic Details</h4>
                        <p>Add new Machine</p><hr>
                    </div>
                </div>
                <br>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Materiel" value="{{old('Materiel')}}" placeholder="Materiel">
                        <div id="emailHelp" class="form-text text-danger">
                            @error('Materiel')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Model" value="{{old('Model')}}" placeholder="Model">
                        <div id="emailHelp" class="form-text text-danger">
                            @error('Model')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="Etat" value="{{old('Etat')}}" placeholder="Etat">
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
                    <div class="col">
                        <button type="reset" class="btn text-primary">Reset || All</button>
                    </div>
                    <div class="col-7"></div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Add Machine</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</x-master_admin>
