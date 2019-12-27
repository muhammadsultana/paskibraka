\

    <!-- Batas Tanda -->

    <!-- End Of Tanda -->

    <!-- TABEL -->
    <div class="data-table-area mg-tb-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
              <div class="sparkline13-hd">
                <div class="main-sparkline13-hd">
                  <h1>Daftar Peserta </h1>
                </div>
              </div>
              <div class="sparkline13-graph">
                <div class="datatable-dashv1-list custom-datatable-overright">

                  <?php 
																																																	foreach ($data_siswa as $key => $row):
																																																?>

                  <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">NISN</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input type="text" name="nisn" value="<?php echo $row["NISN"]; ?>" class="form-control"
                          disabled="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">Email</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input type="text" name="email" class="form-control" value="<?php echo $row["email"]; ?>"
                          disabled />
                      </div>
                    </div>
                  </div>


                  <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">Nomor HP</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input type="text" name="nomorhp" class="form-control" value="<?php echo $row["HP"]; ?>"
                          disabled />
                      </div>
                    </div>
                  </div>
                  <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">Kelas</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input type="text" name="kelas" class="form-control" value="<?php echo $row["Kelas"]; ?>"
                          disabled />
                      </div>
                    </div>
                  </div>

                  <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">Asal Sekolah</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input type="text" name="sekolah" class="form-control" value="<?php echo $row["Sekolah"]; ?>"
                          disabled />
                      </div>
                    </div>
                  </div>

                  <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">Asal Daerah</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input type="text" name="daerah" class="form-control" value="<?php echo $row["Daerah"]; ?>"
                          disabled />
                      </div>
                    </div>
                  </div>
                  <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9">
                        <label class="login2 pull-right pull-right-pro">Jenis Kelamin</label>
                      </div>
                      <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3">
                        <input type="text" name="jeniskelamin" class="form-control" value="<?php echo $row["JK"]; ?>"
                          disabled />
                      </div>
                    </div>
                  </div>
                  <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">Tinggi Badan</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input type="integer" name="tinggibadan" class="form-control" value="<?php echo $row["TB"]; ?>"
                          disabled />
                      </div>
                    </div>
                  </div>
                  <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">Berat Badan</label>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <input type="integer" name="beratbadan" class="form-control" value="<?php echo $row["BB"]; ?>"
                          disabled />
                      </div>
                    </div>
                  </div>

                  <div class="form-group-inner">
                    <div class="row">
                      <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">Surat Delegasi Kabupaten/Kota</label>
                        <input type="integer" name="delegasi" class="form-control"
                          value="<?php echo $row["Delegasi"]; ?>" disabled />
                      </div>
                    </div>
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                          <label class="login2 pull-right pull-right-pro">Surat Keterangan Aktif Sekolah</label>
                        </div>
                        <input type="integer" name="aktif_sekolah" class="form-control"
                          value="<?php echo $row["Aktif_Sekolah"]; ?>" disabled />
                      </div>
                    </div>
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                          <label class="login2 pull-right pull-right-pro">Surat Izin Orang Tua</label>
                        </div>
                        <input type="integer" name="izin_ortu" class="form-control"
                          value="<?php echo $row["Izin_Ortu"]; ?>" disabled />
                      </div>
                    </div>
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                          <label class="login2 pull-right pull-right-pro">Surat Keterangan Sehat</label>
                        </div>
                        <input type="integer" name="surat_sehat" class="form-control"
                          value="<?php echo $row["Surat_Kesehatan"]; ?>" disabled />
                      </div>
                    </div>
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                          <label class="login2 pull-right pull-right-pro">Biodata</label>
                        </div>
                        <input type="integer" name="biodata" class="form-control" value="<?php echo $row["Biodata"]; ?>"
                          disabled />
                      </div>
                    </div>
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                          <label class="login2 pull-right pull-right-pro">Pas Photo</label>
                        </div>
                        <input type="integer" name="foto" class="form-control" value="<?php echo $row["Foto"]; ?>"
                          disabled />
                      </div>
                    </div>

                    <?php endforeach ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Tabel -->
 