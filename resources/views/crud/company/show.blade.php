<x-master_admin title='Company detail'>
    <section style="width: 100%;">
        <div style="width: 90%;" class="mx-auto">
            <div class="nom_entr">
                <h3>{{ $Entreprise->Nom_ent }}</h3>
            </div>
            <div class="desc_entr">
                <p>{{ $Entreprise->Description_ent }}</p>
            </div>
            <div id="cards_entr">
                <div class="info_entr">
                    <h5>{{ $Entreprise->Nom_ent }}</h5>
                    <p>{{ $Entreprise->created_at->format('y-m-d') }}</p>
                    <hr>
                    <strong><p>Email</p></strong>
                    <p>{{ $Entreprise->email }}</p>
                    <strong><p>City</p></strong>
                    <p>{{ $Entreprise->Ville_ent }}</p>
                    <strong><p>Tel</p></strong>
                    <p>{{ $Entreprise->Tel_ent }}</p>
                    <strong><p>Physical Address</p></strong>
                    <p>{{ $Entreprise->AdrPhysique_ent }}</p>
                    <strong><p>Activity</p></strong>
                    <p>{{ $Entreprise->SecteurActivite_ent }}</p>
                </div>
                <div class="info_matr mx-auto">
                    @foreach ($machines as $machine)
                        <div class="machine">
                            <img src="{{ asset('storage/'.$machine->image) }}" alt="">
                            <p><strong>Materiel:</strong> {{ $machine->Materiel }}</p>
                            <p><strong>Model:</strong> {{ $machine->Model }}</p>
                            <p><strong>State:</strong> {{ $machine->Etat }}</p>
                            <a href="/machine/edit/{{ $machine->id }}">
                                <button class="btn btn-success">Update</button>
                            </a>
                            <a href="/machine/destroy/{{ $machine->id }}" onclick="return confirm('validate the deletion')">
                                <button class="btn btn-danger me-4">Delete</button>
                            </a>
                        </div>
                    @endforeach
                    <a href="/machine/create" class="add_machine">
                        <button class="btn btn-primary">Create machine</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @php
    session()->put('id_en', $Entreprise->id);
    @endphp
</x-master_admin>