<x-master_profile_company title='Profile Company' :company='$company' :contrat='$contrat'>
    <div style="display: flex;flex-wrap: wrap;">
        @foreach ($machines as $machine)
            <div class="card-container" >
                <div class="card">
                    <div class="img-content">
                        <img src="{{asset('storage/'.$machine->image)}}" alt="">
                    </div>
                    <div class="content">
                        <p class="heading">{{$machine->Materiel}}</p>
                        <p ><strong>Model :</strong> {{$machine->Model}}</p>
                        <p><strong>State :</strong> {{$machine->Etat}}</p>
                        <div style="display: flex;">
                            <a href="/machine_u/edit/{{$machine->id}}"><button  class="btn btn-outline-dark" style="margin-right: 15px;">Update</button></a>
                            <a href="/machine_u/destroy/{{$machine->id}}"><button  class="btn btn-outline-dark" onclick="return confirm('validate the deletion')">Delete</button></a>
                        </div> 
                    </div>
                </div>
            </div>   
        @endforeach
    </div>
</x-master_profile_company> 