// video view         ---------------------------------

 let creatV = document.getElementById('creatVideo');
 let contCreatV = document.getElementById('containerCreatVideo');

 function newVideo() {
     contCreatV.style.display = 'flex';
}

 creatV.addEventListener('click',newVideo);

 //article            -----------------------------------



//  boucle for creat article a creepypasta   -----------------------------

let story = document.getElementsByClassName('storyC');
for(let i of story) {
    i.addEventListener('click',function (e) {
      let element = e.target.parentElement.querySelector('.story');
      if(element.style.height !== 'auto')  {
          element.style.height = 'auto';
      }
      else {
          element.style.height = '150px';
      }


    })
}

// function Appears article form

let newArticle = document.getElementById('addAppears');
let formCreat = document.getElementById('formArt');

function Article() {
    formCreat.style.display = 'none';
}

newArticle.addEventListener('click',Article);

