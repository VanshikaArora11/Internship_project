    
 var tabs = document.querySelectorAll(".tabs ul li");
var ediv = document.querySelectorAll(".ediv");
    tabs.forEach(function(tab, tab_index){
    tab.addEventListener("click", function(){
        tabs.forEach(function(tab){
            tab.classList.remove("active");
        })
          tab.classList.add("active");
        ediv.forEach(function(content, content_index){
        if(content_index == tab_index){
            content.style.display="block";
        }
            else{
                content.style.display="none";
            }
        })
  })  
})  

const readMoreBtn = document.querySelector('.read-more-btn');
const text = document.querySelector('.text');

readMoreBtn.addEventListener('click',(e)=>{
    text.classList.toggle('show-more');
    if(readMoreBtn.innerText === 'Read More'){
        readMoreBtn.innerText = 'Read Less';
    }
    else{
        readMoreBtn.innerText = 'Read More';
    }
})
