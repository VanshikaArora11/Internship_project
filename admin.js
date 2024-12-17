const tabs =document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab =>{
    tab.addEventListener('click', () => { 
        const target = document.querySelector(tab.dataset.tabTarget)
        tabContents.forEach(tabContent =>{ tabContent.classList.remove('active')
                            
                            })
        target.classList.add('active')
    })
})
 function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);

function validation()
        {
            var id=document.f1.user.value;
            var ps=document.f1.pass.value;
            if(id.length=="" && ps.length==""){
                alert("User name and Password fields are empty");
            return false;
            }
        
        else{
            if(id.length==""){
                alert("User name is empty");
                return false;
            }
            if(ps.length==""){
                alert("Password field is empty");
                return false;
            }
                }
        }



        