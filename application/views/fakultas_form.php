<div class="card">
    <div class="card-header"><?php echo isset($button) && $button === 'Update' ? 'Edit' : 'Add' ?></div>
    <div class="card-body">
        <form action="<?php echo $action ?>" method="post">
            <div class="mb-3">
                <label for="fakultas" class="form-label">Nama Fakultas</label>
                </label>
                <input type="text" name="fakultas" id="fakultas"
                    class="form-control <?php echo form_error('fakultas') ? 'is-invalid' : (isset($_POST['fakultas']) ? 'is-valid' : ''); ?>"
                    value="<?php echo isset($fakultas['fakultas']) ? $fakultas['fakultas'] : '' ?>"
                    placeholder="Masukkan Fakultas">
                    <?php if (form_error('fakultas')): ?>
                    <div class="invalid-feedback"><?php echo form_error('fakultas'); ?></div>
                <?php endif; ?>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-primary" type="submit">Save</button>
                <a href="<?php echo base_url('fakultas') ?>" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
</div>

