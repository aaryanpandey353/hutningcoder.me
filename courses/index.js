console.log("Script running...")

document.querySelector('.cross').style.display = 'none';
document.querySelector('.hum').addEventListener("click", ()=>{
    document.querySelector('.sidebar').classList.toggle('sidebarGo'); 
})


