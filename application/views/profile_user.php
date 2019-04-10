<div class="row">
    <div class="col-md-3">
        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" alt="User profile picture">

                <h3 class="profile-username text-center"><?php echo $userdata->nama; ?></h3>

                <p class="text-muted text-center">Produsen</p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Username</b> <a class="pull-right"><?php echo $userdata->username; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#settings" data-toggle="tab">Pengaturan Akun</a></li>
                <!-- <li><a href="#profil" data-toggle="tab">Pengaturan Profil</a></li> -->
                <li><a href="#password" data-toggle="tab">Ubah Password</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="settings">
                    <form class="form-horizontal" action="<?php echo base_url('Profile_User/update') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputUsername" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id=placeholder="Username" name="username" value="<?php echo $userdata->username; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputNama" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Name" name="nama" value="<?php echo $userdata->nama; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputFoto" class="col-sm-2 control-label">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" placeholder="Foto" name="foto">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Selesai</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- <div class="active tab-pane" id="profil">
                    <form class="form-horizontal" action="<?php echo base_url('Profile_User/update_profil') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputNPWP" class="col-sm-2 control-label">NPWP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id=placeholder="NPWP" name="npwp" value="<?php echo $userdata->npwp; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputNama" class="col-sm-2 control-label">Nama Perusahaan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Nama Perusahaan" name="nama_perusahaan" value="<?php echo $dataUser->nama_perusahaan; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPimpinan" class="col-sm-2 control-label">Nama Pimpinan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Nama Pimpinan" name="pimpinan" value="<?php echo $userdata->pimpinan; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAlamat" class="col-sm-2 control-label">Alamat Perusahaan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Alamat Perusahaan" name="alamat_perusahaan" value="<?php echo $userdata->alamat_perusahaan; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputJenis" class="col-sm-2 control-label">Jenis Usaha</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Jenis Usaha" name="jenis_usaha" value="<?php echo $userdata->jenis_usaha; ?>">
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Selesai</button>
                            </div>
                        </div>
                    </form>
                </div> -->



                <div class="tab-pane" id="password">
                    <form class="form-horizontal" action="<?php echo base_url('Profile_User/ubah_password') ?>" method="POST">
                        <div class="form-group">
                            <label for="passLama" class="col-sm-2 control-label">Password Lama</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Password Lama" name="passLama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="passBaru" class="col-sm-2 control-label">Password Baru</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Password Baru" name="passBaru">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="passKonf" class="col-sm-2 control-label">Konfirmasi Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Konfirmasi Password" name="passKonf">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Selesai</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="msg" style="display:none;">
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
</div>