
/* ========================  P R E L O A D E R  ======================= */

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('preloader').classList.add('loaded');
        ready()
    });
} else {
    ready()
}


function ready() {
    /* ========================  S I D E B A R    T O G G L E R  ======================= */
    document.querySelector('#navbar-toggler').addEventListener('click', function() {
        document.querySelector('.admin-panel').classList.toggle('active');
    });
   


    /* ========================  F O O T E R    D A T E  ======================= */
    var d = new Date();
    document.getElementById("footerYear").textContent = d.getFullYear();  
    
   
    document.querySelector('.new1 button').addEventListener('click', () => {
        document.querySelector('.new1').classList.remove('active')
        document.querySelector('.new2').classList.add('active')
    })

    document.querySelector('.new2 button').addEventListener('click', () => {
        document.querySelector('.new2').classList.remove('active')
        document.querySelector('.new3').classList.add('active')
    })

    document.querySelector('.new2 a').addEventListener('click', () => {
        document.querySelector('.new2').classList.remove('active')
        document.querySelector('.new1').classList.add('active')
    })

     document.querySelector('.new3 a').addEventListener('click', () => {
        document.querySelector('.new3').classList.remove('active')
        document.querySelector('.new2').classList.add('active')
    })



    
}