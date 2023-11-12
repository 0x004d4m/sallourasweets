<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const offcanvas = document.querySelector('#offcanvasExample');
            const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvas);
            bsOffcanvas.hide();

            const targetId = this.getAttribute('href');

            offcanvas.addEventListener('hidden.bs.offcanvas', function() {
                window.scrollTo(0, document.querySelector(targetId).offsetTop);
            });
        });
    });
</script>
