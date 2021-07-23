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
    
    

/* ========================  P A S S W O R D     V I S I B I L I T Y     T O G G L E  ======================= */
    // State monitor Declaration
    document.querySelector('.fa-eye').style.display = 'block';
    document.querySelector('.fa-eye-slash').style.display = 'none';
    let toggleOn = false;

    // Onclick Event
    let myPass = document.querySelectorAll('.myPass')
    document.getElementById('passTog').addEventListener('click',
        () => {
        // Variable Declaration
        let see = document.querySelector('.fa-eye')
        let hide = document.querySelector('.fa-eye-slash')

            myPass.forEach((elem) => {
                if (toggleOn === false) {
                // change to text 
                elem.setAttribute('type', 'text');
                // change Icon
                see.style.display = 'none';
                hide.style.display = 'block';
                // Update State 
                toggleOn = true;
                

                // Second State Check
                } else if (toggleOn === true) {
                    // change back to password
                    elem.setAttribute('type', 'password');
                    // change Icon
                    see.style.display = 'block';
                    hide.style.display = 'none';
                    // Update state
                    toggleOn = false;
                }
            });
        
            // // First State Check
            // if (toggleOn === false) {
            //     // change to text 
            //     for (i = 0; i <= myPass.length; i++) {
            //         myPass[i].setAttribute('type', 'text');
            //         // change Icon
            //         see.style.display = 'none';
            //         hide.style.display = 'block';
            //         // Update State 
            //         toggleOn = true;
            //     }

            // // Second State Check
            // } else if (toggleOn === true) {
            //     // change back to password
            //     for (let i = 0; i <= myPass.length; i++) {
            //         myPass[i].setAttribute('type', 'password');
            //         // change Icon
            //         see.style.display = 'block';
            //         hide.style.display = 'none';
            //         // Update state
            //         toggleOn = false;
            //     }
            // }














        
    })




    
}