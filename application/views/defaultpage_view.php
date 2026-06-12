<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class=".container-fluid">
        <div class="">
            <div class="row g-0">
                <div class="col-12 bg-dark text-white p-3">
                    <div class="justify-content-between align-items-center d-flex ">
                        <div class="fs-4 fw-bold">Tugas</div>
                        <div>
                            <ul class="list-unstyled d-flex m-0 gap-2">
                                <li><a href="" class=" btn btn-light fw-bold">Profile</a></li>
                                <li><a href="<?php echo base_url('Auth/logout') ?>" class="btn btn-light fw-bold">Log
                                        Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0 min-vh-100">
                <div class="col-md-2 bg-secondary text-white p-3 ">
                    <div class="flex-column d-flex align-items-center" style="border-bottom: 1px solid #fff;">
                        <img src="https://cdn.pixabay.com/photo/2023/02/18/11/00/icon-7797704_640.png" alt=""
                            style="width: 120px; border-radius: 50%;">
                        <p class="pt-3">Anggana Dwi Maris Putra</p>
                        <p>24010110023</p>
                    </div>

                    <ul class="d-flex flex-column gap-2 list-unstyled p-4">
                        <li><a class="nav-link fs-5 <?php echo $this->uri->segment(1) == '' || $this->uri->segment('defaultpage') == 'defaultpage' ||$this->uri->segment(1) == 'dashboard' ? 'text-white fw-bold' : 'text-white-50 fw-semibold' ?>"
                                href="<?php echo base_url() ?>">Dashboard</a></li>
                        <li><a href="<?php echo base_url('mahasiswa') ?>"
                                class="nav-link fs-5 <?php echo $this->uri->segment(1) == 'mahasiswa' ? 'text-white fw-bold' : 'text-white-50 fw-semibold' ?>">Mahasiswa</a>
                        </li>
                        <li><a href="<?php echo base_url('fakultas') ?>"
                                class="nav-link fs-5 <?php echo $this->uri->segment(1) == 'fakultas' ? 'text-white fw-bold' : 'text-white-50 fw-semibold' ?>">Fakultas</a>
                        </li>
                        <li><a href="<?php echo base_url('prodi') ?>"
                                class="nav-link fs-5 <?php echo $this->uri->segment(1) == 'prodi' ? 'text-white fw-bold' : 'text-white-50 fw-semibold' ?>">Prodi</a>
                        </li>

                    </ul>
                </div>
                <main class="col-md-10 p-4 bg-light">
                    <h4 class="mb-4 text-secondary text-uppercase tracking-wide fw-bold">
                        <?php echo isset($title) ? $title : ''; ?>
                    </h4>
      
        




</body>

</html>