                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">Paket Data</h4>
                            <a href="#" class="btn btn-primary shadow-sm rounded-0" data-toggle="modal" data-target="#addpaket"><i
                                class="fas fa-plus fa-sm text-white-500"></i>Tambah paket</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="">
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Nama Paket</th>
                                            <th>Harga</th>

                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            $kode = '';
                                            $n_paket = count($data_paket);
                                            if ($n_paket == 0) {
                                                $kode = 'P000';
                                            } else {
                                                $last_id = (int) substr($data_paket[$n_paket-1]->paket_id, 3, 1);
                                                $kode = 'P00'.($last_id + 2);
                                            }
                                            foreach ($user_posts as $paket) {
                                            
                                        ?>
                                        <tr>
                                            <th><?php echo $no++ ?></th>
                                            <td><?php echo $paket->paket_id ?></td>
                                            <td><?php echo $paket->nama_paket?></td>
                                            <td><?php echo $paket->harga?></td>
                                            <td class="action-icons text-center">
                                                <a href="#" data-toggle="modal" data-target="#editpaket<?php echo $paket->paket_id ?>"> 
                                                    <i title="ubah" class="fas fa-edit text-lg text-info"></i>
                                                </a>
                                                <a href="<?php echo base_url().'paket/delete/'.$paket->paket_id?>"> 
                                                    <i title="hapus" class="fas fa-trash text-lg text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Modal for adding new data -->
            <div class="modal fade" id="addpaket" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddpaket" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formAddpaketLabel">Customer Data Input</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_add_mahasiswa" action="<?php echo base_url().'paket/add' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body"> 
                                <div class="form-group">
                                    <label class="control-label ">ID</label>
                                    <input type="text" class="form-control" placeholder="Customer ID" autofocus name="paket_id" required readonly value="<?php echo $kode ?>">
                                </div>
                                <div class="form-group">
                                    <label class="control-label ">Customer's Name</label>
                                    <input type="text" class="form-control" title="Fill in the customer's name with letters" placeholder='Customers Name'  name="nama_paket" pattern="[A-Za-z ]{1,50}" required>
                                    <div class="invalid-feedback">
                                    Fill in the customer's name with letters! (max. 50 letters)
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Harga</label>
                                    <input type="text"  class="form-control" placeholder='harga' name="harga"  required>
                                    <div class="invalid-feedback">
                                    Masukan Harga Paket!
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer d-flex">
                                <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal for editing existing data -->
            <?php
                foreach ($data_paket as $paket) {
            ?>
            <div class="modal fade" id="editpaket<?php echo $paket->paket_id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formEditpaket" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formEditpaketLabel">Change Customer Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_edit_mahasiswa" action="<?php echo base_url().'paket/edit' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body"> 
                                <div class="form-group">
                                    <label class="control-label ">ID</label>
                                    <input type="text" class="form-control" placeholder="Customer ID" autofocus name="paket_id" value="<?php echo $paket->paket_id ?>" readonly>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <label class="control-label ">Customer's Name</label>
                                    <input type="text" class="form-control" title="Fill in the customer's name with letters" placeholder='Customers Name'  name="nama_paket" pattern="[A-Za-z ]{1,50}" value="<?php echo $paket->nama_paket ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in the customer's name with letters! (max. 50 letters)
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Harga</label>
                                    <input type="text"  class="form-control" placeholder='harga' name="harga"  value="<?php echo $paket->harga ?>" required>
                                    <div class="invalid-feedback">
                                    Masukan Harga Paket!
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer d-flex">
                                <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>

            

            