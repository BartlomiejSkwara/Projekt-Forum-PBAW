/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */


const exampleModal = document.getElementById('deleteModal')
    console.log("s");


    exampleModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        const url = button.getAttribute('data-bs-url');
        const id = button.getAttribute('data-bs-id');
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        //const modalBody = exampleModal.querySelector('.modal-category-name-title')
        const modalYesButton = exampleModal.querySelector('.modal-button-accept')

        //modalBody.textContent = ` ${id}`;
        modalYesButton.setAttribute("href", url.concat('/').concat(id));


    }
)