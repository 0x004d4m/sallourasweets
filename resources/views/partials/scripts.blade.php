<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.querySelectorAll('.slide').forEach(link => {
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

<script>
    function animateCounter(id, start, end, duration) {
        let range = end - start;
        let current = start;
        let increment = end > start ? 1 : -1;
        let stepTime = duration;
        let obj = document.getElementById(id).getElementsByTagName('h1')[0];

        let timer = setInterval(() => {
            current += increment;
            obj.textContent = current;
            if (current == end) {
                clearInterval(timer);
            }
        }, stepTime);
    }

    let observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter('counter1', 0, {{ $Counters[0]->counter }}, 40);
                animateCounter('counter2', 0, {{ $Counters[1]->counter }}, 90);
                animateCounter('counter3', 0, {{ $Counters[2]->counter }}, 600);
                animateCounter('counter4', 0, {{ $Counters[3]->counter }}, 30);

                observer.unobserve(entry.target);
            }
        });
    });

    let elementToObserve = document.getElementById('observedElement');
    observer.observe(elementToObserve);
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeIn');
                } else {
                    entry.target.classList.remove('animate__animated', 'animate__fadeIn');
                }
            });
        });

        document.querySelectorAll('.animate-on-scroll').forEach((elem) => {
            observer.observe(elem);
        });
    });
</script>
