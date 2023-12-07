<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center py-3">
                                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                    <img src="<?php echo base_url() ?>assets/img/sepatu2.png" class="w-1 px-1 rounded-circle mb-1" id="system-logo">
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <!-- message nama flashdata yang menampung pesan -->
                                <form class="user" method="POST" action="<?= base_url('Welcome/login'); ?>">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <!-- <div class="text-center">
                                    <a class="small" href="<?= base_url('Welcome/register'); ?>">Create an Account!</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
