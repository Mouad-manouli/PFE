<x-master title="Profile employee">
    <div class="body_profile_emp">
        <section class="S_profile_emp mx-auto">
            <div class="detail_profile_emp">
                <a href="/profile_emp/edit/{{$employee->id}}" ><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                </svg></a>
                <div class="mx-auto"><img src="{{asset('storage/'.$employee->image)}}" alt=""></div>
                <h5>{{$employee->Nom_emp}}</h5>
                <span style="margin-left:95px;margin-top:-5px;">{{$employee->created_at->format('y-m-d')}}</span>
                <h6>{{$employee->Type_emp}}</h6>
                <label for="" >Sexe</label>
                <p>{{$employee->Sexe}}</p>
                <label for="">Age</label>
                <p>{{$employee->Age}} years</p>
                <label for="">phone</label>
                <p>+212 {{$employee->Tel}}</p>
                <label for="">City</label>
                <p>{{$employee->Ville}}</p>
                <label for="">Email</label>
                <p>{{$employee->email}}</p>
                <label for="">Physical address</label>
                <p>{{$employee->AdrPhysique_emp}}</p>
                <label for="">Speciality</label>
                <p>{{$employee->Specialite_emp}}</p>
                <a href="/profile_emp/edit/{{$employee->id}}"><button>Edit</button></a>
            </div>
            <div class="tout_rapport_emp">
                <div class="Report_Management">
                    <h6>Report Management</h6>
                    <hr>
                    <p>As an employee, you can add, edit, and delete reports from your profile. Go to "My Reports" to create a new report, edit existing reports by selecting and saving your changes, or delete reports by selecting them and confirming the deletion. These tools make it easy to keep your reports up to date.</p>
                    <a href="/rapport/create/{{$employee->id}}"><button class="btn btn-outline-dark">Add report</button></a><br>
                    @if (session()->has('success'))
                        <h6 style="margin-top:20px;">
                            <svg style="color:green;margin-top:-2px;margin-right:5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            {{session('success')}}
                        </h6>
                    @endif
                </div>
               @foreach ($rapport as $key => $rap )
                   <div class="detail_rapport">
                        <h6>{{$entreprises[$key]}}</h6>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                                <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9z"/>
                                <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1zm1.038 3.018a6 6 0 0 1 .924 0 6 6 0 1 1-.924 0M0 3.5c0 .753.333 1.429.86 1.887A8.04 8.04 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5M13.5 1c-.753 0-1.429.333-1.887.86a8.04 8.04 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1"/>
                            </svg>
                            {{ $rap->DateDebut}} --> {{ $rap->DateFin}}
                        </span>
                        <a href="/rapport/edit1/{{ $rap->id}}" style="float:right;margin-top:-30px;color:#545a60;"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                        </svg></a>
                        <hr>
                        <h5 style="color: #2A4451;">{{$machine[$key]}}</h5>
                        <p style="font-size: 14px;margin-bottom: 25px;">{{$rap->Description}}</p>
                   </div>
               @endforeach
            </div>
        </section>
    </div>
</x-master>