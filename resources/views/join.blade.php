@extends('layouts.main')

@section('content')
        <!-- Contact Form Section -->
        <section class="contact-form-section">
            <div class="auto-container">
              <!-- Sec Title -->
              <div class="sec-title centered">
                <div class="title">Join With Us</div>
                <h2>
                  <span>We’re Ready To Help You</span> <br />
                  Personal Data
                </h2>
              </div>
      
              <div class="inner-container">
                <!-- Contact Form -->
                <div class="contact-form">
                  <!-- Contact Form -->
                  <form method="POST" action="/store" id="contact-form">
                    @csrf
                    <div class="row clearfix">
                      <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                        <div class="mb-3 form-group">
                          <label for="noKtp" class="form-label">No. KTP</label>
                          <input class="form-control" type="number" name="nik" placeholder="No. KTP" id="noKtp" required />
                        </div>
                      </div>
      
                      <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                        <div class="mb-3 form-group">
                          <label for="" class="form-label">No. KK</label>
                          <input class="form-control" type="number" name="nokk" placeholder="No. KK" required />
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                        <div class="mb-3 form-group">
                          <label for="" class="form-label">Kode PC</label>
                          <input class="form-control" type="number" name="kodepc" placeholder="Kode PC" required />
                        </div>
                      </div>
      
                      <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                        <div class="mb-3 form-group">
                          <label for="cabang" class="form-label">Cabang</label>
                          <select class="form-select" aria-label="Default select example" name="cabang">
                            <option selected>Pilih Cabang</option>
                            <option value="JAKARTA">Jakarta</option>
                            <option value="BANDUNG">Bandung</option>
                            <option value="SURABAYA">Surabaya</option>
                            <option value="LAMPUNG">Lampung</option>
                          </select>
                        </div>
                      </div>
      
                      <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                        <div class="mb-3 form-group">
                          <label for="sponsor" class="form-label">Sponsor</label>
                          <select class="form-select" aria-label="Default select example" name="kd_sponsor">
                            <option selected>Pilih Sponsor</option>
                            <option value="S001BDG">S001BDG</option>
                            <option value="1234">1234</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                        <div class="mb-3 form-group">
                          <label for="tujuanNegara" class="form-label">Negara Tujuan</label>
                          <select class="form-select" aria-label="Default select example" id="tujuanNegara" name="tujuan">
                            <option selected>Pilih Negara</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Qatar">Singapore</option>
                            <option value="Hongkong">Hongkong</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Brunei">Brunei Darussalam</option>
                            <option value="SaudiArab">Saudi Arabia</option>
                            <option value="UnitedArabEmirates">United Arab Emirates</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Oman">Oman</option>
                            <option value="UnitedKingdom">United Kingdom</option>
                            <option value="UnitedStates">United States</option>
                            <option value="Poland">Poland</option>
                            <option value="NewZeland">New Zeland</option>
                          </select>
                        </div>
                      </div>
      
      
                      <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="inputNama" class="form-label">Nama</label>
                          <input type="text" class="form-control" name="nama" placeholder="Nama*" id="inputNama"
                            value="{{ old('nama') }}">
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                          <input type="text" class="form-control" name="tmp_lahir" placeholder="Tempat Lahir*"
                            id="tempatLahir" value="{{ old('tmp_lahir') }}">
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                          <input type="date" class="form-control-custom" name="tgl_lahir" placeholder="Tanggal Lahir*"
                            id="tanggalLahir" value="{{ old('tgl_lahir') }}">
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="inputJenisKelamin" class="form-label">Jenis Kelamin</label>
                          <select name="jnkel" class="form-select" id="inputJenisKelamin">
                            <option value="">Pilih Jenis Kelamin*</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                          </select>
                        </div>
                      </div>
      
                      <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="inputPengalamanKerja" class="form-label">Pengalaman Kerja</label>
                          <select name="pengalaman" class="form-select" id="inputPengalamanKerja">
                            <option value="">Pilih Pengalaman Kerja*</option>
                            <option value="EX">EX TKI</option>
                            <option value="NON">NON</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="inputPendidikanTerakhir" class="form-label">Pendidikan Terakhir</label>
                          <select name="pendidikan" class="form-select" id="inputPendidikanTerakhir">
                            <option value="">Pilih Pendidikan Terakhir*</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="tinggiBadan" class="form-label">Tinggi Badan</label>
                          <input type="number" class="form-control" name="cm_badan" placeholder="Tinggi Badan*"
                            id="tinggiBadan" value="{{ old('cm_badan') }}">
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="beratBadan" class="form-label">Berat Badan</label>
                          <input type="number" class="form-control" name="kg_badan" placeholder="Tinggi Badan*"
                            id="beratBadan" value="{{ old('kg_badan') }}">
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="jumlahAnak" class="form-label">Jumlah Anak</label>
                          <input type="number" class="form-control" name="jml_anak" placeholder="Jumlah Anak*" id="jumlahAnak"
                            value="{{ old('jml_anak') }}">
                        </div>
                      </div>
      
                      <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="namaSuamiIstri" class="form-label">Nama Suami/Istri</label>
                          <input type="text" class="form-control" name="nm_pasangan" placeholder="Nama Suami/Istri*"
                            id="namaSuamiIstri" value="{{ old('nm_pasangan') }}">
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="namaBapak" class="form-label">Nama Bapak</label>
                          <input type="text" class="form-control" name="nm_ayah" placeholder="Jumlah Anak*" id="namaBapak"
                            value="{{ old('nm_ayah') }}">
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="namaIbu" class="form-label">Nama Ibu</label>
                          <input type="text" class="form-control" name="nm_ibu" placeholder="Nama Ibu*" id="namaIbu"
                            value="{{ old('nm_ibu') }}">
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="namaKakek" class="form-label">Nama Kakek</label>
                          <input type="text" class="form-control" name="nm_kakek" placeholder="Jumlah Anak*" id="namaKakek"
                            value="{{ old('nm_kakek') }}">
                        </div>
                      </div>
      
                      <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="inputAlamat" class="form-label">Alamat</label>
                          <input type="text" class="form-control" name="al_lain" placeholder="Alamat*" id="inputAlamat"
                            value="{{ old('al_lain') }}">
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="inputRTRW" class="form-label">RT/RW</label>
                          <input type="text" class="form-control" name="al_rtrw" placeholder="RT/RW*" id="inputRTRW"
                            value="{{ old('al_rtrw') }}">
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="inputKelurahan" class="form-label">Kelurahan</label>
                          <input type="text" class="form-control" name="al_kel" placeholder="Kelurahan*" id="inputKelurahan"
                            value="{{ old('al_kel') }}">
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                        <div class="form-group">
                          <label for="inputKecamatan" class="form-label">Kecamatan</label>
                          <input type="text" class="form-control" name="al_kec" placeholder="Kecamatan*" id="inputKecamatan"
                            value="{{ old('al_kec') }}">
                        </div>
                      </div>
      
                      <div class="col-lg-6 col-md-12 col-sm 12 mb-4">
                        <div class="form-group">
                          <label for="inputKabupaten" class="form-label">Kota/Kabupaten</label>
                          <input type="text" class="form-control" name="al_kotakab" placeholder="Kota/Kabupaten*"
                            id="inputKabupaten" value="{{ old('al_kotakab') }}">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12 col-sm 12 mb-4">
                        <div class="form-group">
                          <label for="inputProvinsi" class="form-label">Provinsi</label>
                          <input type="text" class="form-control" name="al_prop" placeholder="Provinsi*" id="inputProvinsi"
                            value="{{ old('al_prop') }}">
                        </div>
                      </div>

                      <div class="col-lg-12 col-md-12 col-sm 12 mb-4">
                        <div class="form-group">
                          <label for="inputHslWwc" class="form-label">HSL WWC</label>
                          <input type="text" class="form-control" name="hsl_wwc" placeholder="HSL WWC*" id="inputHslWwc"
                            value="{{ old('hsl_wwc') }}">
                        </div>
                      </div>
      
                      <div class="col-lg-6 col-md-12 col-sm 12 mb-4">
                        <div class="form-group">
                          <label for="inputPengalaman" class="form-label">Pengalaman</label>
                          <textarea name="png_kerja" id="inputPengalaman" cols="30" rows="3" placeholder="Pengalaman*"
                            value="{{ old('png_kerja') }}"></textarea>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12 col-sm 12 mb-4">
                        <div class="form-group">
                          <label for="inputCatatan" class="form-label">Catatan</label>
                          <textarea name="catatan" id="inputCatatan" cols="30" rows="3" placeholder="Catatan*"
                            value="{{ old('catatan') }}"></textarea>
                        </div>
                      </div>
      
                      <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                        <button class="theme-btn btn-style-two">
                          <span class="txt">Send <i class="fa fa-angle-right"></i></span>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
                <!--End Comment Form -->
              </div>
            </div>
          </section>
          <!-- End Contact Form Section -->
@endsection