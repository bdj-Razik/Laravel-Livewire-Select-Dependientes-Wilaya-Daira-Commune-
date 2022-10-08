<div class="row">


    <div class="col-md-4 mb-3">
        <label for="wilaya">Wilaya</label>
        <select class="form-select" id="wilaya" name="wilaya" wire:model="WilayaID">
            <option selected>Choisir wilaya</option>
            @foreach ($wilayas as $row)
                <option value="{{ $row->id }}">
                    {{ $row->name_en }}</option>
            @endforeach
        </select>
    </div>


    <div class="col-md-4 mb-3" wire:ignore.self>
        <label for="diara">Diara</label>
        <select class="form-select" id="diara" name="diara" wire:model="DiaraID">
            <option selected>Choisir Diara</option>
            @foreach ($daiars as $row)
                <option value="{{ $row->id }}">
                    {{ $row->name_en }}</option>
            @endforeach
        </select>
    </div>



    <div class="col-md-4 mb-3">
        <label for="commune">Commune</label>
        <select class="form-select" id="commune" name="commune">
            <option selected>Choisir Commune</option>
            @foreach ($communes as $row)
                <option value="{{ $row->id }}">
                    {{ $row->name_en }}</option>
            @endforeach
        </select>
    </div>


</div>
