let creatV = document.getElementById('creatVideo');
let contCreatV = document.getElementById('containerCreatVideo');

function newVideo() {
    contCreatV.style.display = 'block' && 'flex';
}

creatV.addEventListener('click',newVideo);