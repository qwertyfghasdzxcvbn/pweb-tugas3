<div class="card shadow-sm border-0">
    <!-- Judul card dinamis menyesuaikan nilai variabel $button dari controller -->
    <div class="card-header bg-white py-3 fw-bold text-secondary">
        <?php echo (isset($button) && $button === 'Perbarui') ? 'Edit' : 'Add' ?> Program Studi
    </div>
    <div class="card-body">
        <form action="<?php echo $action ?>" method="post">
            <div class="mb-3">
                <label for="fakultas_id" class="form-label fw-semibold">Fakultas</label>
                <select name="fakultas_id" id="fakultas_id"
                    class="form-select <?php echo form_error('fakultas_id') ? 'is-invalid' : (isset($_POST['fakultas_id']) ? 'is-valid' : ''); ?>">
                    <option value="">Fakultas</option>
                    <?php foreach ($fakultas as $f): ?>
                        <option value="<?php echo $f['fakultas_id']; ?>" <?php echo set_select('fakultas_id', $f['fakultas_id'], (isset($prodi['fakultas_id']) && $prodi['fakultas_id'] == $f['fakultas_id'])); ?>>
                            <?php echo $f['fakultas']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <?php if (form_error('fakultas_id')): ?>
                    <div class="invalid-feedback"><?php echo form_error('fakultas_id'); ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="prodi_name" class="form-label fw-semibold">Nama Prodi</label>
                <input type="text" name="prodi_name" id="prodi_name"
                    class="form-control <?php echo form_error('prodi_name') ? 'is-invalid' : (isset($_POST['prodi_name']) ? 'is-valid' : ''); ?>"
                    value="<?php echo set_value('prodi_name', isset($prodi['prodi_name']) ? $prodi['prodi_name'] : '') ?>"
                    placeholder="Masukkan nama prodi">
                <?php if (form_error('prodi_name')): ?>
                    <div class="invalid-feedback"><?php echo form_error('prodi_name'); ?></div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Strata</label>
                <div>
                    <?php
                    $strata_options = ['D3', 'S1', 'S2'];
                    foreach ($strata_options as $s): ?>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input <?php echo form_error('prodi_strata') ? 'is-invalid' : (isset($_POST['prodi_strata']) ? 'is-valid' : ''); ?>"
                                type="radio" name="prodi_strata" id="strata_<?php echo $s; ?>" value="<?php echo $s; ?>"
                                <?php echo set_radio('prodi_strata', $s, (isset($prodi['prodi_strata']) && $prodi['prodi_strata'] === $s)); ?>>
                            <label class="form-check-label" for="strata_<?php echo $s; ?>"><?php echo $s; ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php if (form_error('prodi_strata')): ?>
                    <div class="text-danger small mt-1"><?php echo form_error('prodi_strata'); ?></div>
                <?php endif; ?>
            </div>
            <!-- Tombol Aksi Submit Form -->
            <div class="d-flex gap-2 justify-content-end">
                <a href="<?php echo base_url('prodi') ?>" class="btn btn-light border px-4">Back</a>
                <button class="btn btn-primary px-4"
                    type="submit"><?php echo isset($button) ? $button : 'Save' ?></button>
            </div>
        </form>
    </div>
</div>