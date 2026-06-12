<!-- Footer -->
                <footer class="text-center text-muted pt-3 border-top mt-auto">
                    <small>&copy; 2026 Pemrograman Web &mdash; Universitas Bumigora</small>
                </footer>

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    window.addEventListener("load", function() {
        <?php if ($this->session->flashdata('swal_title')): ?>
            Swal.fire({
                icon: '<?php echo $this->session->flashdata("swal_icon") ? $this->session->flashdata("swal_icon") : "info"; ?>',
                title: '<?php echo addslashes($this->session->flashdata("swal_title")); ?>',
                text: '<?php echo addslashes($this->session->flashdata("swal_text")); ?>',
                
                <?php if ($this->session->flashdata('swal_icon') === 'success'): ?>
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true
                <?php else: ?>
                    confirmButtonColor: '#3085d6'
                <?php endif; ?>
            });
        <?php endif; ?>
    });
</script>
</body>
</html>