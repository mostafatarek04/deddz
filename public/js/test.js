const allButtons = document.querySelectorAll('button');
const meta_data = document.querySelector('meta[name="csrf-token"]').content;
allButtons.forEach(btn=>{
    btn.addEventListener('click',e=>{
        const targetID = e.target.id;
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function (){
            if(xhr.status == 200 && xhr.readyState == 4){
                console.log(xhr.responseText);
            }
        }
        xhr.open("POST",'/manytomany');
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send(`_token=${meta_data}&aID=${targetID}`);
    })
})
