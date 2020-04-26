
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
            <label for="inputProjectLeader">1. Sebutkan bidang usaha pekerjaan tambahan anda dan statusnya dalam pekerjaan tersebut (bisa memilih lebih dari 1 bidang)</label>
            <div class="row">
                @foreach($bidangusahapekerjaan as $bidang)
                    <div class="form-check col-lg-6">
                        <div class="row">
                            <div class="col-md-7">
                                <input name="idjenisusaha{{$bidang->id}}" id="BU{{$bidang->id}}" value="{{$bidang->id}}"
                                       class="form-group-input" type="checkbox">
                                <label for="BU{{$bidang->id}}" class="form-check-label">{{$bidang->bidangusaha}}</label>
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

<div class="row">
    <div class="col-sm-12">
        <!-- checkbox -->
        <div class="form-group">
            <label for="inputProjectLeader">2. Kepemilikan Aset Usaha</label>
            <div class="row">
                @foreach($asetusaha as $aset)
                    <div class="form-check col-lg-6">
                        <div class="row">
                            <div class="col-md-3">
                                <label>{{$aset->id}}{{'. '}}{{$aset->asetusaha}}</label>
                            </div>
                            <div class="col-md-1">
                                <input name="idjenisusaha{{$aset->id}}" id="AS{{$aset->id}}" value="{{$aset->id}}"
                                class="form-check-input" type="radio">
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-1">
                                <input name="idjenisusaha{{$aset->id}}" id="AS{{$aset->id}}" value="{{$aset->id}}"
                                class="form-check-input" type="radio">
                                <label class="form-check-label">Tidak</label>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="{{$aset->id}}" class="col-sm-6 col-form-label">Jika ya, berapa jumlahnya?</label>
                                    <div class="col-sm-4">
                                    {{ Form::text('aspek',null,[
                                    'class'=>'form-control',
                                    'id' => 'aspek'
                                    ]) }}
                                    </div>
                                    <div class="col-sm-2">
                                        <label>{{$aset->satuan}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="inputDescription">3. Apakah ada sumber daya alam/buatan bukan merupakan usaha utama yang dapat menghasilkan penghasilan tambahan bagi Rumah Tangga? (contoh: pohon mangga dipekarangan, kolam lele, dll) </label>
        <div class="col-md-1">
            <input class="form-group" name="penghasilantambahan" id="penghasilantambahan" value="1" class="form-check-input" type="radio">
            <label class="form-check-label">Ya</label>
        </div>
        <div class="col-md-1">
            <input class="form-group" name="penghasilantambahan" id="penghasilantambahan" value="0" class="form-check-input" type="radio">
            <label class="form-check-label">Tidak</label>
        </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="inputStatus">4. Jika ya, Sebutkan:</label>
            <div class="row">
                <div class="form-check col-lg-6">
                    {{ Form::label('aspek', 'Nama Sumber Daya') }}
                    {{ Form::text('aspek',null,[
                        'class'=>'form-control',
                        'id' => 'aspek'
                    ]) }}
                </div>
                <div class="form-check col-lg-2">
                    {{ Form::label('aspek', 'Berapa kali panen dalam 1 tahun?') }}
                    <div class="input-group">
                    {{ Form::text('aspek',null,[
                    'class'=>'form-control',
                    'id' => 'aspek'
                    ]) }}
                    <div class="input-group-append">
                    <span class="input-group-text">Kali</span>
                </div>
                </div>
                </div>
                <div class="form-check col-lg-4">
                    {{ Form::label('aspek', 'Berapa perkiraan penghasilan per periode panen?') }}
                    <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                    </div>
                    {{ Form::text('aspek',null,[
                    'class'=>'form-control',
                    'id' => 'aspek'
                    ]) }}
                    <!-- <div class="input-group-append">
                    <span class="input-group-text">,00</span>
                </div> -->
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="form-group">
        {{ Form::label('aspek', '5. Berapa rata-rata total penghasilan Kepala Rumah Tangga beserta seluruh anggota keluarga yang bekerja dalam satu bulan?') }}
        <div class="row">
        <div class="form-check col-lg-4">
        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                    </div>
                    {{ Form::text('aspek',null,[
                    'class'=>'form-control',
                    'id' => 'aspek'
                    ]) }}
                    <!-- <div class="input-group-append">
                    <span class="input-group-text">,00</span>
                </div> -->
        </div>
</div>
</div>
</div>

<div class="form-group">
    <label for="inputDescription">6. Apakah usaha anda menggunakan fasilitas perbankan/koperasi/lainnya?</label>
        <div class="col-md-1">
            <input class="form-group" name="perbankan" id="perbankan" value="1" class="form-check-input" type="radio">
            <label class="form-check-label">Ya</label>
        </div>
        <div class="col-md-1">
            <input class="form-group" name="perbankan" id="perbankan" value="0" class="form-check-input" type="radio">
            <label" class="form-check-label">Tidak</label>
        </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <!-- checkbox -->
        <div class="form-group">
            <label for="inputProjectLeader">7. Jika ya, pilih dan isikan jenis serta keterangannya: (bisa mengisi lebih dari satu)</label>
            <div class="row">
                @foreach($perbankan as $bank)
                    <div class="form-check col-lg-12">
                        <div class="row">
                            <div class="col-md-3">
                                <label>{{$bank->id}}{{'. '}}{{$bank->jenisperbankan}}</label>
                            </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <label>Bank</label>
                                        <div class="col-sm-10">
                                            {{ Form::text('aspek',null,[
                                            'class'=>'form-control',
                                            'id' => 'aspek'
                                            ]) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group row">
                                        <label>Alamat/Cabang</label>
                                        <div class="col-sm-10">
                                            {{ Form::text('aspek',null,[
                                            'class'=>'form-control',
                                            'id' => 'aspek'
                                            ]) }}
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    {{ Form::label('id', '7. Jika anda menggunakan fasilitas kredit, pilihlah besaran dan jangka waktu kredit:') }}
    <div class="row">
        <div class="form-check col-lg-3">
            <div class="form-group row">
                <label>&nbsp;&nbsp;&nbsp;&nbsp;Besaran</label>
                    <div class="col-md-10">
                    {{ Form::select('id', $kredit,null,[
                        'class'=>'form-control select2',
                    'id' => 'id'
                    ]) }}
                    </div>
            </div>
        </div>
                                <div class="col-md-5">
                                    <div class="form-group row"> 
                                        <label>Lama kredit</label>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                {{ Form::text('aspek',null,[
                                                    'class'=>'form-control',
                                                    'id' => 'aspek'
                                                    ]) }}
                                                <div class="input-group-append">
                                                <span class="input-group-text">bulan</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    </div>
</div>

