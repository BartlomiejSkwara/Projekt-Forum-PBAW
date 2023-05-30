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
  const recipient = button.getAttribute('data-bs-whatever');
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  const modalBody = exampleModal.querySelector('.modal-category-name-title')
  const modalCategoryHref = exampleModal.querySelector('.modal-body input')
    
  modalBody.textContent = ` ${recipient}`;
  
  modalBody.setAttribute("href", "xyz.php");
  modalBodyInput.value = recipient
  console.log("s");
})