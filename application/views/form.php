<div class="card">
    <div class="card-header"><?php echo isset($button) && $button === 'Update' ? 'Edit' : 'Add' ?></div>
    <div class="card-body">
        <form action="<?php echo $action ?>" method="post">
            <div class="mb-3">
                <label for="mahasiswa_nim" class="form-label">Nim</label>
                </label>
                <input type="text" name="mahasiswa_nim" id="mahasiswa_nim"
                    class="form-control <?php echo form_error('mahasiswa_nim') ? 'is-invalid' : (isset($_POST['mahasiswa_nim']) ? 'is-valid' : ''); ?>"
                    value="<?php echo isset($mahasiswa['mahasiswa_nim']) ? $mahasiswa['mahasiswa_nim'] : '' ?>"
                    placeholder="Masukkan Nim">
                <?php if (form_error('mahasiswa_nim')): ?>
                    <div class="invalid-feedback"><?php echo form_error('mahasiswa_nim'); ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="mahasiswa_nama" class="form-label">Nama</label>
                </label>
                <input type="text" name="mahasiswa_nama" id="mahasiswa_nama"
                    class="form-control <?php echo form_error('mahasiswa_nama') ? 'is-invalid' : (isset($_POST['mahasiswa_nama']) ? 'is-valid' : ''); ?>"
                    value="<?php echo isset($mahasiswa['mahasiswa_nama']) ? $mahasiswa['mahasiswa_nama'] : '' ?>"
                    placeholder="Masukkan Nama">
                <?php if (form_error('mahasiswa_nama')): ?>
                    <div class="invalid-feedback"><?php echo form_error('mahasiswa_nama'); ?></div>
                <?php endif; ?>
            </div>

            <div class="d-flex gap-2">
                <button class="btn btn-primary" type="submit">Save</button>
                <a href="<?php echo base_url('mahasiswa') ?>" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
</div>