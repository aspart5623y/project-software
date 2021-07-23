/* ========================  P R E L O A D E R  ======================= */

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('preloader').classList.add('loaded');
        forgotpassFunction()
    });
} else {
    forgotpassFunction()
}


function forgotpassFunction() {
    /* ========================  F O O T E R    D A T E  ======================= */
    var d = new Date();
    document.getElementById("footerYear").textContent = d.getFullYear();  
    
    




    /* ========================  P A S S W O R D     V I S I B I L I T Y     T O G G L E  ======================= */
    
    // State monitor Declaration
    document.querySelector('.fa-eye').style.display = 'block';
    document.querySelector('.fa-eye-slash').style.display = 'none';
    let toggleOn = false;

    // Onclick Event
    document.getElementById('passTog').addEventListener('click',
    () => {
        // Variable Declaration
        let myPass = document.getElementById('myPass')
        let see = document.querySelector('.fa-eye')
        let hide = document.querySelector('.fa-eye-slash')


        // First State Check
        if (toggleOn === false) {
            // change to text 
            myPass.setAttribute('type', 'text');
            // change Icon
            see.style.display = 'none';
            hide.style.display = 'block';
            // Update State
            toggleOn = true;

        // Second State Check
        } else if (toggleOn === true) {
            // change back to password
            myPass.setAttribute('type', 'password');
            // change Icon
            see.style.display = 'block';
            hide.style.display = 'none';
            // Update state
            toggleOn = false;
        }

    })



    /* ========================    M U L T I S T E P     F O R M   ======================= */
    document.querySelector('.email-auth button').addEventListener('click', () => {
        document.querySelector('.email-auth').classList.remove('active')
        document.querySelector('.code-auth').classList.add('active')
    })

    document.querySelector('.code-auth button').addEventListener('click', () => {
        document.querySelector('.code-auth').classList.remove('active')
        document.querySelector('.password-auth').classList.add('active')
    })

    

    document.querySelector('.email-auth a').addEventListener('click', () => {
        window.history.back()
    })

    document.querySelector('.code-auth a').addEventListener('click', () => {
        document.querySelector('.email-auth').classList.add('active')
        document.querySelector('.code-auth').classList.remove('active')
    })

    document.querySelector('.password-auth a').addEventListener('click', () => {
        document.querySelector('.code-auth').classList.add('active')
        document.querySelector('.password-auth').classList.remove('active')
    })





    document.querySelector('form').addEventListener('submit', () => {
        alert("Password Updated!")
        
    })





    
}