
{{--<div class="form-group">--}}
{{--    {{ Form::label('aspek', 'ASPEK') }}--}}
{{--    {{ Form::text('aspek',null,[--}}
{{--        'class'=>'form-control',--}}
{{--        'id' => 'aspek'--}}
{{--    ]) }}--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--    {{ Form::label('id', 'Sebutkan bidang usaha tambahan (bisa memilih lebih dari 1 bidang)') }}--}}
{{--    {{ Form::select('id', $bidangusahapekerjaan,null,[--}}
{{--        'class'=>'form-control select2',--}}
{{--        'id' => 'id'--}}
{{--    ]) }}--}}
{{--</div>--}}

<div class="row">
    <div class="col-sm-12">
        <!-- checkbox -->
        <div class="form-group">
            <label for="inputProjectLeader">Sebutkan bidang usaha tambahan (bisa memilih lebih dari 1 bidang)</label>
            <div class="row">
                @foreach($bidangusahapekerjaan as $bidang)
                    <div class="form-check col-lg-6">
                        <div class="row">
                            <div class="col-md-9">
                                <input name="idjenisusaha{{$bidang->id}}" id="{{$bidang->id}}" value="{{$bidang->id}}"
                                       class="form-check-input" type="checkbox">
                                <label for="{{$bidang->id}}" class="form-check-label">{{$bidang->bidangusaha}}</label>
                            </div>
                            <div class="col-md-3">
                                <select id="idstatuspekerjaan" name="idstatuspekerjaan" class="col-lg-12">
                                    <option value="">pilih status</option>
                                    @foreach($statuspekerjaan as $status)
                                        <option value="{{$status->id}}">{{$status->statuspekerjaan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
<div class="form-group">
    <label for="inputDescription">Project Description</label>
    <textarea id="inputDescription" class="form-control" rows="4"></textarea>
</div>
<div class="form-group">
    <label for="inputStatus">Status</label>
    <select class="form-control custom-select">
        <option selected="" disabled="">Select one</option>
        <option>On Hold</option>
        <option>Canceled</option>
        <option>Success</option>
    </select>
</div>
<div class="form-group">
    <label for="inputClientCompany">Client Company</label>
    <input type="text" id="inputClientCompany" class="form-control">
</div>
<div class="form-group">
    <label for="inputProjectLeader">Project Leader</label>
    <input type="text" id="inputProjectLeader" class="form-control">
</div>
