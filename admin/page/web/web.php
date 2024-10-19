<?php 
$id_meta = $_GET['id_meta'];
$ambil  = $con->query("SELECT * FROM meta WHERE id_meta ='$_GET[id_meta]'");
$pecah  = $ambil->fetch_assoc();    
?>

<div class="row">

    <div class="col-3"></div>
    
    <div class="col-6">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Website 
                    <div class="float-end">
                        <a href="?page=web&aksi=ubah&id_meta=<?php echo $pecah['id_meta'] ?>" class="btn btn-success btn-sm waves-effect waves-light">Ubah</a>  
                    </div>
                </h4> <hr>

                <div class="card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="userpage-content"></div>
                        <div class="p-4">
                            <div class="userpage-user-img">
                                <img src="assets/gambar/<?php echo $pecah['logo_meta'] ?>" alt="" class="avatar-lg rounded-circle img-thumbnail">
                            </div>
                            <h5 class="mt-3 mb-1"><?php echo $pecah['judul_meta'] ?></h5> 
                            <p><?php echo $pecah['alamat_meta'] ?></p>

                            <table class="table table-borderless table-sm align-middle mb-0">
                                <tbody> 
                                    <tr>
                                        <th class="ps-0" scope="row">Telepon</th>
                                        <td class="text-dark text-end"><?php echo $pecah['telp_meta'] ?></td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Email</th>
                                        <td class="text-dark text-end"><?php echo $pecah['email_meta'] ?></td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">Pimpinan</th>
                                        <td class="text-dark text-end"><?php echo $pecah['pimpinan_meta'] ?></td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Singkat</th>
                                        <td class="text-dark text-end"><?php echo $pecah['singkat_meta'] ?></td>
                                    </tr>  
                                </tbody>
                            </table>  

                        </div>
                    </div>
                </div> 

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->

    <div class="col-3"></div>
                        
</div>