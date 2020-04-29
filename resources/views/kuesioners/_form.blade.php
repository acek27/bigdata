<div class="row">
    <div class="col-sm-12">
        <!-- checkbox -->
        <div class="form-group">
            <label for="inputProjectLeader">1. Sebutkan bidang usaha pekerjaan tambahan anda dan statusnya dalam
                pekerjaan tersebut (bisa memilih lebih dari 1 bidang)</label>
            <div class="row">
                @php($i= 1)
                @foreach($bidangusahapekerjaan as $bidang)
                    <div class="form-check col-lg-6">
                        <div class="row">
                            <div class="col-md-7">
                                <input onclick="check()" name="bu{{$i}}" id="bu{{$i}}"
                                       value="{{$bidang->id}}"
                                       class="form-group-input" type="checkbox">
                                <label for="bu{{$i}}"
                                       class="form-check-label">{{$bidang->id}}{{'. '}}{{$bidang->bidangusaha}}</label>
                            </div>
                            <div id="div{{$i}}" class="col-md-3" style="display: none">
                                <select id="idstatuspekerjaan{{$i}}" name="idstatuspekerjaan{{$i}}"
                                        class="col-lg-12">
                                    <option value="">pilih</option>
                                    @foreach($statuspekerjaan as $status)
                                        <option value="{{$status->id}}">{{$status->statuspekerjaan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    @php($i++)
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
                @php($i= 1)
                @foreach($asetusaha as $aset)
                    <div class="form-check col-lg-6">
                        <div class="row">
                            <div class="col-md-3">
                                <input onclick="checkaset()" name="idasetusaha{{$i}}" id="idasetusaha{{$i}}"
                                       value="{{$aset->id}}"
                                       class="form-group-input" type="checkbox">
                                <label for="idasetusaha{{$i}}"
                                       class="form-check-label">{{$aset->id}}{{'. '}}{{$aset->asetusaha}}</label>
                            </div>
                            <div id="divaset{{$i}}" style="display: none" class="col-md-6">
                                <div class="form-group row">
                                    <label>Berapa jumlahnya?</label>
                                    <div class="col-sm-4">
                                        {{ Form::text('jumlahaset'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'jumlahaset'.$i
                                        ]) }}
                                    </div>
                                    <div class="col-sm-2">
                                        <label>{{$aset->satuan}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php($i++)
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
        <input onclick="checksda(this.value)" class="form-group" name="penghasilantambahan" id="penghasilantambahan"
               value="1" class="form-check-input"
               type="radio">
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input onclick="checksda(this.value)" class="form-group" name="penghasilantambahan" id="penghasilantambahan"
               value="0" class="form-check-input"
               type="radio">
        <label class="form-check-label">Tidak</label>
    </div>
</div>

<div id="divsda" class="row">
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
            {{ Form::text('pendapatanperbulan',null,array('required' => 'required'),[
            'class'=>'form-control',
            'id' => 'pendapatanperbulan'
            ]) }}
            <!-- <div class="input-group-append">
                    <span class="input-group-text">,00</span>
                </div> -->
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="inputDescription">6. Apakah usaha anda menggunakan fasilitas perbankan/koperasi/kredit/lainnya?</label>
    <div class="col-md-1">
        <input onclick="checkbank(this.value)" class="form-group" name="perbankan" id="perbankan" value="1"
               class="form-check-input" type="radio">
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input onclick="checkbank(this.value)" class="form-group" name="perbankan" id="perbankan" value="0"
               class="form-check-input" type="radio">
        <label class="form-check-label">Tidak</label>
    </div>
</div>

<div id="divbank" class="row">
    <div class="col-sm-12">
        <!-- checkbox -->
        <div class="form-group">
            <label for="inputProjectLeader">7. Jika ya, pilih dan isikan jenis serta keterangannya: (bisa memilih dan
                mengisi lebih
                dari satu)</label>
            <div class="row">
                @php($i= 1)
                @foreach($perbankan as $bank)
                    <div class="form-check col-lg-12">
                        <div class="row">
                            <div class="col-md-3">
                                <input onclick="checkjenisbank()" name="idjenisperbankan{{$i}}"
                                       id="idjenisperbankan{{$i}}" value="{{$bank->id}}"
                                       class="form-group-input" type="checkbox">
                                <label>{{$bank->id}}{{'. '}}{{$bank->jenisperbankan}}</label>
                            </div>
                            <div id="divnamabank{{$i}}" style="display: none" class="col-md-3">
                                <div class="form-group row">
                                    <label>Bank</label>
                                    <div class="col-sm-10">
                                        {{ Form::text('namabank'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'namabank'.$i
                                        ]) }}
                                    </div>
                                </div>
                            </div>
                            <div id="divalamatbank{{$i}}" style="display: none" class="col-md-5">
                                <div class="form-group row">
                                    {{ Form::label('cabang'.$i, 'Alamat/cabang') }}
                                    <div class="col-sm-10">
                                        {{ Form::text('cabang'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'cabang'.$i
                                        ]) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php($i++)
                @endforeach
            </div>
        </div>
    </div>
</div>

<div id="divkredit" class="form-group">
    {{ Form::label('id', '8. Jika anda menggunakan fasilitas kredit, pilihlah besaran dan jangka waktu kredit:') }}
    <div class="row">
        <div class="form-check col-lg-3">
            <div class="form-group row">
                {{ Form::label('idbesarankredit', '&nbsp;&nbsp;&nbsp;&nbsp;Besaran') }}
                <div class="col-md-10">
                    {{ Form::select('idbesarankredit', $kredit,null,[
                        'class'=>'form-control select2','placeholder' => 'Pilih',
                    'id' => 'idbesarankredit'
                    ]) }}
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group row">
                {{ Form::label('lamakredit', 'Lama Kredit') }}
                <div class="col-md-3">
                    <div class="input-group">
                        {{ Form::text('lamakredit',null,[
                            'class'=>'form-control',
                            'id' => 'lamakredit'
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

