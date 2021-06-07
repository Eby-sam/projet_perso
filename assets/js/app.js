 //article            -----------------------------------

// function Appears addArticle form

let newArticle = document.getElementById('addAppears');
let formCreat = document.getElementById('formArt');

 function Article() {
     formCreat.style.display = 'block';
 }

newArticle.addEventListener('click',Article);


//  boucle for creat article a creepypasta   -----------------------------

let story = document.getElementsByClassName('storyC');
for(let i of story) {
    i.addEventListener('click',function (e) {
      let element = e.target.parentElement.parentElement.querySelector('.story');
        console.log(element);
      if(element.style.height !== 'auto')  {
          element.style.height = 'auto';
      }
      else {
          element.style.height = '150px';
      }
    })
}

