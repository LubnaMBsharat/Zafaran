const hamburger_icon = document.querySelector('#nav-bar .nav-bar .nav-list .hamburger');
const nav_list = document.querySelector('#nav-bar .nav-bar .nav-list');

hamburger_icon.addEventListener('click', () => {
    nav_list.classList.toggle('open');
    hamburger_icon.classList.toggle('active');

});

let a=0;

function show_hide(){

    if(a==0){
        document.getElementById('login-form').style.display="inline";
        return a=1;

    }
    else{
        document.getElementById('login-form').style.display="none";
        return a=0;
    }
}

    <!-- to move between reg and login -->
    var x=document.getElementById('login');
    var y=document.getElementById('register');
    var z=document.getElementById('btn');
    function register() {
        x.style.left='-400px';
        y.style.left='50px';
        z.style.left='110px';
    }
    function login()
    {
        x.style.left='50px';
        y.style.left='450px';
        z.style.left='0px';
    }
function addtocart(){

    alert("Hello! I am an alert box!!");
    let name = document.getElementById('foodname').innerText;


}