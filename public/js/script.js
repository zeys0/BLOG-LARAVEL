const activeElements = document.getElementsByClassName('active')[0]

activeElements.addEventListener('click', function(){
    
    this.style.color = "yellow"
});



// for(let i = 0; i<activeElements.length; i++){
//     activeElements[i].addEventListener('onClick', function(){
//         this.style.color = "blue";
        
//     });
// }