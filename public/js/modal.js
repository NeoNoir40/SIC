const showModalButton = document.querySelector(".modal_button");
const modalDeleteButtons = document.querySelectorAll(".modal_button_delete");
const modalEditButtons = document.querySelectorAll(".modal_button_edit");
const modals = document.querySelector('.modal');
const modalDeleteModals = document.querySelectorAll('.modal_delete');
const modalEditModals = document.querySelectorAll('.modal_edit');
const closeModals = document.querySelectorAll('.close_modal');


showModalButton.addEventListener('click', (e) => {
    e.preventDefault();
    modals.classList.add('modal--show');
});

  modalDeleteButtons.forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault();
      const modalId = button.dataset.target;
      const modal = document.querySelector(modalId);
      modal.classList.add('modal--show');
    });
  });
  
  modalEditButtons.forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault();
      const modalId = button.dataset.target;
      const modal = document.querySelector(modalId);
      modal.classList.add('modal--show');
    });
  });
  
  closeModals.forEach(closeModal => {
    closeModal.addEventListener('click', (e) => {
      e.preventDefault();
      const modal = closeModal.closest('.modal--show');
      modal.classList.remove('modal--show');
    });
  });
