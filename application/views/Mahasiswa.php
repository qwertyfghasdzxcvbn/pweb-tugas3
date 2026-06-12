<div class="card mx-3">
    <div class="card-header justify-content-between d-flex flex-column flex-md-row gap-2 align-items-md-center">
        <h4 class="mb-0 fw-bold">Data Mahasiswa</h4>
        <a href="<?php echo base_url('mahasiswa/add')?>" class="btn btn-primary btn-lg  ">Add</a>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <td>No.</td>
                        <td>Nim</td>
                        <td>Nama</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mahasiswa as $key => $value): ?>
                        <tr>
                            <td>
                                <?php echo $key + 1 ?>
                            </td>
                            <td>
                                <?php echo $value['mahasiswa_nim'] ?>
                            </td>
                            <td>
                                <?php echo $value['mahasiswa_nama'] ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url('mahasiswa/update/' . $value['mahasiswa_id']) ?>" class="btn btn-warning">Edit</a>
                                <a href="<?php echo base_url('mahasiswa/delete/' . $value['mahasiswa_id']) ?>" class="btn btn-danger ">Delete</a>
                            </td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
