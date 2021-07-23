/* ========================  P R E L O A D E R  ======================= */

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('preloader').classList.add('loaded');
        auth()
    });
} else {
    auth()
} 


function auth() {
/* ========================  P A S S W O R D     V I S I B I L I T Y     T O G G L E  ======================= */
    // State monitor Declaration
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











}