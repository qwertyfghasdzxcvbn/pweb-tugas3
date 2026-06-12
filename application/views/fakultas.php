<div class="card mx-3">
    <div class="card-header justify-content-between d-flex flex-column flex-md-row gap-2 align-items-md-center">
        <h4 class="mb-0 fw-bold">Data Fakultas</h4>
        <a href="<?php echo base_url('fakultas/add')?>" class="btn btn-primary btn-lg  ">Add</a>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <td>No.</td>
                        <td>Nama Fakultas</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fakultas as $key => $value): ?>
                        <tr>
                            <td>
                                <?php echo $key + 1 ?>
                            </td>
                            <td>
                                <?php echo $value['fakultas'] ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url('fakultas/update/' . $value['fakultas_id']) ?>" class="btn btn-warning">Edit</a>
                                <a href="<?php echo base_url('fakultas/delete/' . $value['fakultas_id']) ?>" class="btn btn-danger ">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
