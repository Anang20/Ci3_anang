                <!-- Begin Page Content -->
                <div class="container-fluid" style="margin-top: 20px">

                    <!-- Page Heading -->
                    <head>
                        <!-- DataTables -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?>
                                <a href="<?= base_url('Home/tambah_data'); ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                                <p><?php $this->session->userdata('auth')['username']; ?></p>
                            </div>
                            <div class="card-body">
                            <?= $this->session->flashdata('pesan'); ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Username</td>
                                                <td>Email</td>
                                                <td>Password</td>
                                                <td style="width: 125px;">Setting</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach ($users AS $user) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $user['username']; ?></td>
                                                <td><?= $user['email']; ?></td>
                                                <td><?= $user['password']; ?></td>
                                                <td>
                                                <a href="<?= base_url('') ?>Home/edit_data/<?= $user['id']; ?>"><i class="fas fa-user-edit fa-2x text-success"></i></a>
                                                <a href="<?= base_url('') ?>Home/hapusData/<?= $user['id']; ?>"><i class="fas fa-user-minus fa-2x text-danger"></i></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->