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
    /* ========================  N A V B A R    T O G G L E R S  ======================= */
    document.querySelector('.navbar-toggler').addEventListener('click', () => {
        document.querySelector('.navbar-collapse').classList.add('open');
        document.querySelector('.sidebar-overlay').classList.add('open');
    });

    document.querySelector('.sidebar-toggler').addEventListener('click', () => {
        document.querySelector('.navbar-collapse').classList.remove('open');
        document.querySelector('.sidebar-overlay').classList.remove('open');
    });


    document.querySelector('.sidebar-overlay').addEventListener('click', () => {
        document.querySelector('.navbar-collapse').classList.remove('open');
        document.querySelector('.sidebar-overlay').classList.remove('open');
    });


    /* ========================  F O O T E R    D A T E  ======================= */
    var d = new Date();
    document.getElementById("footerYear").textContent = d.getFullYear();  
    
   
    
}