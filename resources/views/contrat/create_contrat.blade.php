<x-master_profile_company title='Create contract'  :company='$company' :contrat='$contrat'>
    <form class="contrat_form mx-auto" action="{{route('valide_contrat')}}" method="POST">
        @csrf
        <h1 style="text-align: center;color:#2A4451;">Create contract</h1>
        <label for="">Start date</label><br>
        <input class="form-control" type="date" name="DateDebut_cnt" value="{{old('DateDebut_cnt')}}">
        <div id="emailHelp" class="form-text text-danger">
                @error('DateDebut_cnt')
                    {{$message}}
                @enderror
        </div><br>
        <label for="">End date</label><br>
        <input class="form-control" type="date" name="DateFin_cnt" value="{{old('DateFin_cnt')}}">
        <div id="emailHelp" class="form-text text-danger">
                @error('DateFin_cnt')
                    {{$message}}
                @enderror
            </div><br>
        <label for="">Control date</label><br>
        <select class="form-control" name="DateControle_cnt" >
            <option value=""></option>
            <option value="Every 2 weeks">Every 2 weeks</option>
            <option value="Each month">Each month</option>
        </select>
        <div id="emailHelp" class="form-text text-danger">
            @error('DateControle_cnt')
                {{$message}}
            @enderror
        </div>
        <button type="submit">valide</button>
    </form>
</x-master_profile_company>
