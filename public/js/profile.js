const deleteButton = document.querySelectorAll('button.delete');
const meta_data = document.querySelector('meta[name="csrf-token"]').content;
const allLinks = document.querySelectorAll('.profile-controls-links li');

allLinks.forEach(link =>{
    link.addEventListener('click',e=>{
       //e.preventDefault();
        const id = e.target.id;

        if (id === "logout"){
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function (){
                if (xhr.status == 200 && xhr.readyState == 4){

                        window.location.replace('/');

                    console.log(this.responseText);
                }

            };

            xhr.open("post",'/logout');
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send(`_token=${meta_data}`);
        }

    });
})

deleteButton.forEach(btn=>{
    btn.addEventListener('click',e => {
        const storyID = e.target.dataset.id;
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function (){
            if (xhr.readyState == 4 && xhr.status == 200){
              if (this.responseText == "Success"){
                  location.reload();
              }

            }
        }

       xhr.open('post',`/api/story-delete/${storyID}`);
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

         xhr.send(`_token=${meta_data}`);
       // xhr.send();
    })
})
