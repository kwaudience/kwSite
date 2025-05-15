

    let items = document.querySelectorAll('.carrousel .card');
    let next = document.getElementById('nextBtn');
    let prev = document.getElementById('prevBtn');
    const carousel = document.getElementById("carrousel");
    console.log(items);

    let active = 1;
    console.log(active);
    function loadShow(){
        let stt = 0;
        const offset = items[active].offsetWidth * active;
        carousel.scrollTo({ left: offset, behavior: "smooth" });
        // for (let i = 0; i < items.length; i++) {
        //     items[i].style.transform = 'scale(1.1) translateX(0)'; // Agrandissement + déplacement nul
        //     items[i].style.zIndex = '2'; // Priorité visuelle
        //     items[i].style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.3)'; // Ombre
        //     items[i].style.transition = 'transform 0.3s ease, box-shadow 0.3s ease'; // Animation fluide
        //   }
        items.forEach((item, index) => {
            if (index === active) {
              item.style.transform = 'scale(1.1) translateX(0)';
              item.style.zIndex = '2';
              item.style.boxShadow = '0 10px 5px rgba(0, 0, 0, 0.3)';
              item.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
            } else {
              item.style.transform = 'scale(1)';
              item.style.zIndex = '1';
              item.style.boxShadow = 'none';
            }
          });

        // items.forEach(item => item.classList.remove('active'));
        // items[active].classList.add('active');
      
        // const carouselWidth = carousel.offsetWidth;
        // const itemWidth = items[0].offsetWidth;
        // const scrollLeft = itemWidth * active - (carouselWidth - itemWidth) / 2;
      
        // carousel.scrollTo({ left: scrollLeft, behavior: 'smooth' });

    }
    loadShow();
    next.onclick = function(){
        active = active + 1 < items.length ? active + 1 : active;
        loadShow();
    }
    prev.onclick = function(){
        active = active - 1 >= 0 ? active - 1 : active;
        loadShow();
    }
    window.addEventListener("resize", loadShow);
