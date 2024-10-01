<x-master_admin title='detail employee'>
    <div class="container border mt-5">
        <div class="row">
            <div class="col-4 py-5 ">
                <img src="{{asset('storage/dtl_emp.png')}}" alt="" width="100%" class="image">
            </div>
            <div class="col">
                <div class="row">
                    <div class="col py-3">
                        <h3>{{$Employé->Nom_emp}}</h3>
                        <h4>{{$Employé->Type_emp}}</h4><hr>
                    </div>
                    <div class="col-3">
                        <img src="{{asset('storage/'.$Employé->image)}}" alt="" width="150px" height="150px" id="pr_emp">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col" >
                        <table>
                            <!-- <tr>
                                <h2 colspan="2">{{$Employé->Nom_emp}}</h2>
                            </tr> -->
                            <tr class="row">
                                <th class="col">Speciality. </th>
                                <td class="col">{{$Employé->Specialite_emp}}</td>
                            </tr>
                            <tr class="row">
                                <th class="col">Email. </th>
                                <td class="col">{{$Employé->email}}</td>
                            </tr>
                            <tr class="row">
                                <th class="col">Tel. </th>
                                <td class="col"> {{$Employé->Tel}}</td>
                            </tr>
                            <tr class="row">
                                <th class="col">City. </th>
                                <td class="col"> {{$Employé->Ville}}</td>
                            </tr>
                            <tr class="row">
                                <th class="col">Adresse. </th>
                                <td class="col"> {{$Employé->AdrPhysique_emp}}</td>
                            </tr>
                            <tr class="row">
                                <th class="col">Age. </th>
                                <td class="col"> {{$Employé->Age}} years</td>
                            </tr>
                            <tr class="row">
                                <th class="col">Sexe. </th>
                                <td class="col">{{$Employé->Sexe}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10"></div>
                    <div class="col">
                        {{$Employé->created_at->format('d-m-y')}}
                        <img src="{{asset('storage/date_limite.png')}}" alt="" width="30px">

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master_admin>
