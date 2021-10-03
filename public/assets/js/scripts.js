/*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
      const sectionHeight = current.offsetHeight,
            sectionTop = current.offsetTop - 50,
            sectionId = current.getAttribute('id');

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)

/*==================== CHANGE BACKGROUND HEADER ====================*/ 
function scrollHeader(){
   const header = document.getElementById('header')
   // When the scroll is greater than 80 viewport height, add the scroll-header class to the header tag
   if(this.scrollY >= 80) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)



/* =========== GSAP ANIMATION ===========*/
//NAV
gsap.from('.nav__menu', {opacity: 0, duration: .8, delay: 1.5, y:30, stagger: 0.2})
gsap.from('.nav__logo, .nav__toggle', {opacity: 0, duration: 1, delay: .5, y:10})
gsap.from('.nav__item', {opacity: 0, duration: 1, delay: 1, y:30, stagger: 0.2})

//HOME
gsap.from('.section__title', {opacity: 0, duration: 1, delay: 1.6, y:30})