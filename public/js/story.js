const submitButton = document.querySelector('.submit');
const parentContainer = document.querySelector('.all-stories-container')
const searchInput = document.querySelector('.search-form-input');
const meta_data = document.querySelector('meta[name="csrf-token"]').content;

const  storyContainer = document.querySelector('.all-stories-container-child');
submitButton.addEventListener('click',e=>{
    //e.preventDefault()

    // const input = searchInput.value;
    //preformAjaxCall(input);
})


function preformAjaxCall(input){
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        if(this.status == 200 && this.readyState == 4){
            console.log(this.responseText)
            updateContainer(JSON.parse(this.responseText));
        }
    }

    xhr.open('post','/searchstories');
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(`_token=${meta_data}&search=${input}`);

}

function updateContainer(response){
   parentContainer.innerHTML = '';



   response.forEach(story=>{
       console.log('www')
       const newElement = document.createElement('div');
       newElement.classList.add('all-stories-container-child');
       const innerHtml = `<h4>ffff</h4>`
       // newElement.innerHTML = innerHtml;
       parentContainer.insertAdjacentHTML('beforeend','<p>jjjj</p>');
      // parentContainer.textContent= 'sssss';
   });
}
