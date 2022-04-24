const allButtons = document.querySelectorAll('button');
const meta_data = document.querySelector('meta[name="csrf-token"]').content;
allButtons.forEach(btn=>{
    btn.addEventListener('click',e=>{
        if (e.target.id === "Sub"){
            console.log('www');
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function (){
                if (this.status == 200 && this.readyState ==4){
                     console.log('Success added')
                     window.location.reload();
                }
            }
            xhr.open('post','/subscribe');
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send(`_token=${meta_data}&id=${e.target.dataset.id}`);
            //xhr.send();
        }
    })
})
