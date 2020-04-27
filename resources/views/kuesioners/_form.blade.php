<div class="row">
    <div class="col-sm-12">
        <!-- checkbox -->
        <div class="form-group">
            <label for="inputProjectLeader">1. Sebutkan bidang usaha pekerjaan tambahan anda dan statusnya dalam
                pekerjaan tersebut (bisa memilih lebih dari 1 bidang)</label>
            <div class="row">
                @foreach($bidangusahapekerjaan as $bidang)
                    <div class="form-check col-lg-6">
                        <div class="row">
                            <div class="col-md-7">
                                <input onclick="check()" name="bu{{$bidang->id}}" id="bu{{$bidang->id}}"
                                       value="{{$bidang->id}}"
                                       class="form-group-input" type="checkbox">
                                <label for="bu{{$bidang->id}}" class="form-check-label">{{$bidang->bidangusaha}}</label>
                            </div>
                            <div id="div{{$bidang->id}}" class="col-md-3" style="display: none">
                                <select id="idstatuspekerjaan{{$bidang->id}}" name="idstatuspekerjaan{{$bidang->id}}"
                                        class="col-lg-12">
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
                                <input name="idjenisusaha{{$aset->id}}" id="AS{{$aset->id}}" value="1"
                                       class="form-check-input" type="radio">
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-1">
                                <input name="idjenisusaha{{$aset->id}}" id="AS{{$aset->id}}" value="0"
                                       class="form-check-input" type="radio">
                                <label class="form-check-label">Tidak</label>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="{{$aset->id}}" class="col-sm-6 col-form-label">Jika ya, berapa
                                        jumlahnya?</label>
                                    <div class="col-sm-4">
                                        {{ Form::text('jumlahaset'.$aset->id,null,[
                                        'class'=>'form-control',
                                        'id' => 'jumlahaset'.$aset->id
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
    <label for="inputDescription">3. Apakah ada sumber daya alam/buatan bukan merupakan usaha utama yang dapat
        menghasilkan penghasilan tambahan bagi Rumah Tangga? (contoh: pohon mangga dipekarangan, kolam lele,
        dll) </label>
    <div class="col-md-1">
        <input class="form-group" name="penghasilantambahan" id="penghasilantambahan" value="1" class="form-check-input"
               type="radio">
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input class="form-group" name="penghasilantambahan" id="penghasilantambahan" value="0" class="form-check-input"
               type="radio">
        <label class="form-check-label">Tidak</label>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="inputStatus">4. Jika ya, Sebutkan:</label>
            <div class="row">
                <div class="form-check col-lg-6">
                    {{ Form::label('namasumberdaya', 'Nama Sumber Daya') }}
                    {{ Form::text('namasumberdaya',null,[
                        'class'=>'form-control',
                        'id' => 'namasumberdaya'
                    ]) }}
                </div>
                <div class="form-check col-lg-2">
                    {{ Form::label('panenpertahun', 'Berapa kali panen dalam 1 tahun?') }}
                    <div class="input-group">
                        {{ Form::text('panenpertahun',null,[
                        'class'=>'form-control',
                        'id' => 'panenpertahun'
                        ]) }}
                        <div class="input-group-append">
                            <span class="input-group-text">Kali</span>
                        </div>
                    </div>
                </div>
                <div class="form-check col-lg-4">
                    {{ Form::label('hasilperpanen', 'Berapa perkiraan penghasilan per periode panen?') }}
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                    {{ Form::text('hasilperpanen',null,[
                    'class'=>'form-control',
                    'id' => 'hasilperpanen'
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
    {{ Form::label('penghasilan', '5. Berapa rata-rata total penghasilan Kepala Rumah Tangga beserta seluruh anggota keluarga yang bekerja dalam satu bulan?') }}
    <div class="row">
        <div class="form-check col-lg-4">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                </div>
            {{ Form::text('penghasilan',null,[
            'class'=>'form-control',
            'id' => 'penghasilan'
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
        <label class="form-check-label">Tidak</label>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <!-- checkbox -->
        <div class="form-group">
            <label for="inputProjectLeader">7. Jika ya, pilih dan isikan jenis serta keterangannya: (bisa mengisi lebih
                dari satu)</label>
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
                                        {{ Form::text('namabank',null,[
                                        'class'=>'form-control',
                                        'id' => 'namabank'
                                        ]) }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group row">
                                    {{ Form::label('cabang', 'Alamat/cabang') }}
                                    <div class="col-sm-10">
                                        {{ Form::text('cabang',null,[
                                        'class'=>'form-control',
                                        'id' => 'cabang'
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
                {{ Form::label('idbesaran', 'Besaran') }}
                <div class="col-md-10">
                    {{ Form::select('id', $kredit,null,[
                        'class'=>'form-control select2',
                    'id' => 'idbesaran'
                    ]) }}
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group row">
                {{ Form::label('jangkawaktu', 'Lama Kredit') }}
                <div class="col-md-3">
                    <div class="input-group">
                        {{ Form::text('jangkawaktu',null,[
                            'class'=>'form-control',
                            'id' => 'jangkawaktu'
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

