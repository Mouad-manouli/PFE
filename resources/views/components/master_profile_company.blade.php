@props(['title','company','contrat'])
<x-master :title="$title">
    <section class="section_profile_com">
        <div class="detail_company">
            <div class="mx-auto info_company">
                <a href="/Company/edit_compte/{{$company->id}}" style=""><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                </svg></a>
                <div class="mx-auto"><img src="{{asset('storage/'.$company->image)}}" alt=""></div>
                <h5>{{$company->Nom_ent}}</h5>
                <h6>{{$company->SecteurActivite_ent}}</h6>

                <label for="">phone</label>
                <p>+212 {{$company->Tel_ent}}</p>
                <label for="">City</label>
                <p>{{$company->Ville_ent}}</p>
                <label for="">Email</label>
                <p>{{$company->email}}</p>
                <label for="">Physical address</label>
                <p>{{$company->AdrPhysique_ent}}</p>
                <a href="/machine_u/create"><button>Create machine</button></a> 
            </div>
        </div>
        <div class="button_slot">
            <div class="button_com">
                <h6>Report Management</h6>
                <hr>
                <p>As the owner of the company , you can create, edit, and delete machines, as well as create contracts from your profile. The company can view the dashboard to access machine reports. Go to "My Machines" to add a new machine, edit existing machines by selecting and saving your changes, or delete machines by selecting them and confirming the deletion. You can also create new contracts. These tools make it easy to manage and update your machines and contracts.</p>
                <a href="/profile/company" ><button class="btn btn-outline-dark {{ Request::is('profile/company') ? 'active-link' : '' }}"> Machine</button></a>
                <a href="/profile/company_report" ><button class="btn btn-outline-dark {{ Request::is('profile/company_report') ? 'active-link' : '' }}">Report</button></a>
                {{-- <a href="/profile/company_contrat" ><button class="btn btn-outline-dark {{ Request::is('profile/company_contrat') ? 'active-link' : '' }}">Contract</button></a> --}}
                @if ($contrat <= 0)
                    <a href="/profile/company_contrat"><button class="btn btn-outline-dark {{ Request::is('profile/company_contrat') ? 'active-link' : '' }}">Contract</button></a>
                @endif
                @if (session()->has('success'))
                    <h6 style="margin-top:20px;">
                        <svg style="color:green;margin-top:-2px;margin-right:5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                        {{session('success')}}
                    </h6>
                @endif
            </div>
            <div class="slot_com">{{$slot}}</div>
        </div>
    </section>
</x-master>