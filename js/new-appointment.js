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











    
    /* ========================  A J A X     F O R M     C O N T R O L ======================= */
    document.getElementById('news').addEventListener('submit', loadDate)

    function loadDate(e) {
        var xhr = new XMLHttpRequest()
        xhr.open('GET', 'new-appointment - success.html', true)

        xhr.onload = function () {
            if (this.status == 200) {
                // alert("Loading Date Portal")
                document.querySelector('.appointment-page').innerHTML = this.responseText
            }
        }
        xhr.send()

        e.preventDefault()
    }












    



    /* ========================  A P P O I N T M E N T    D A T E  ======================= */
    // let date = new Date();
    // let y = date.getFullYear(); 
    // let m = date.getMonth();  
    // let day = date.getDate(); 
    // document.getElementById("apptDate").value = `${m + 1}/${day}/${y}`;
    // document.getElementById("papptDate").textContent = `${m + 1} / ${day} / ${y}`;





    
}