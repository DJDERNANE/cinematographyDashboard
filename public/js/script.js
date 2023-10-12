
var listbtn = document.getElementById('listbtn');
var navbar = document.getElementById('navbar');


listbtn.addEventListener('click', function(){
    listbtn.classList.toggle('active');
    navbar.classList.toggle('active')
})

function displayimg(e){
    e.classList.add('active')
}
function hideimg(e){
    e.classList.remove('active')
}
