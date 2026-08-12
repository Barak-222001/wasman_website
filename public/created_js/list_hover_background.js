
const MylistItems = document.querySelectorAll(".list_options");

MylistItems.forEach(item=>{
    
    item.addEventListener("click",()=>{

        // remove active class from all items
        MylistItems.forEach(i=>i.classList.remove("active"));

        // add active class to the clicked item
        item.classList.add("active")
    })
})