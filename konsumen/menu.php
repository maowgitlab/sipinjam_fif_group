<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="ri ri-home-5-line"></i> Beranda
                        </a>
                    </li>  

                    <li class="nav-item">
                        <a class="nav-link" href="?page=konsumen&aksi=lihat&id_konsumen=<?php echo $konsu['id_konsumen'] ?>">
                            <i class="ri ri-user-line"></i> Profil 
                        </a>
                    </li>   

                    <li class="nav-item">
                        <a class="nav-link" href="?page=permohonan">
                            <i class="ri ri-file-list-3-line "></i> Permohonan 
                        </a>
                    </li>    

                    <li class="nav-item">
                        <a class="nav-link" href="?page=permohonan&aksi=pembayaran">
                            <i class="ri ri-file-list-3-line "></i> Pembayaran 
                        </a>
                    </li>    

                    <li class="nav-item">
                        <a class="nav-link" href="?page=permohonan&aksi=peringatan">
                            <i class="ri ri-file-list-3-line "></i> Peringatan 
                        </a>
                    </li>  

                </ul>
            </div>
        </nav>
    </div>
</div>