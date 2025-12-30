document.addEventListener('DOMContentLoaded', () => {

    const testimonials = [
        {
            text: "Pelayanan sangat profesional! Team kami sangat puas dengan program corporate trip ke Thailand. Semua berjalan lancar dari awal hingga akhir.",
            name: "Rini Handayani",
            role: "Corporate Client",
            avatar: "RH"
        },
        {
            text: "Liburan keluarga kami ke Malaysia sangat berkesan. Tour guide ramah dan tour operator sangat responsif. Highly recommended!",
            name: "Budi Santoso",
            role: "Family Traveler",
            avatar: "BS"
        },
        {
            text: "Program study tour untuk siswa kami sangat terorganisir dengan baik. Edukatif dan aman untuk anak-anak. Terima kasih Ero Tour!",
            name: "Siti Nurhaliza",
            role: "School Teacher",
            avatar: "SN"
        }
    ];
    
    let currentTestimonial = 0;
    let autoPlayInterval;
    
    function showTestimonial(index) {
        const testimonial = testimonials[index];
        document.getElementById('testimonialText').textContent = `"${testimonial.text}"`;
        document.getElementById('testimonialName').textContent = testimonial.name;
        document.getElementById('testimonialRole').textContent = testimonial.role;
        document.getElementById('testimonialAvatar').textContent = testimonial.avatar;

        // Update indicators
        document.querySelectorAll('.indicator-dot').forEach((dot, i) => {
            if (i === index) {
                dot.classList.add('bg-[var(--orange-main)]', 'w-8');
                dot.classList.remove('bg-[var(--orange-main)]/40');
            } else {
                dot.classList.remove('bg-[var(--orange-main)]', 'w-8');
                dot.classList.add('bg-[var(--orange-main)]/40');
            }
        });
    }

    function nextTestimonial() {
        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        showTestimonial(currentTestimonial);
        resetAutoPlay();
    }
    
    function prevTestimonial() {
        currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
        showTestimonial(currentTestimonial);
        resetAutoPlay();
    }

    function startAutoPlay() {
        autoPlayInterval = setInterval(() => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(currentTestimonial);
        }, 3000);
    }

    function resetAutoPlay() {
        clearInterval(autoPlayInterval);
        startAutoPlay();
    }

    // Initialize first testimonial
    showTestimonial(0);
    startAutoPlay();

    document.getElementById('nextTestimonial').addEventListener('click', nextTestimonial);
    document.getElementById('prevTestimonial').addEventListener('click', prevTestimonial);

    // Add click handlers to indicators
    document.querySelectorAll('.indicator-dot').forEach(dot => {
        dot.addEventListener('click', () => {
            currentTestimonial = parseInt(dot.dataset.index);
            showTestimonial(currentTestimonial);
            resetAutoPlay();
        });
    });
})
