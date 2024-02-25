const showModal = document.querySelector(".modal_button");
const modal = document.querySelector('.modal')
const showModalDelete = document.querySelector(".modal_button_delete");
const modalDelete = document.querySelector('.modal_delete')
const showModalEdit = document.querySelector(".modal_button_edit");
const modalEdit = document.querySelector('.modal_edit')


showModal.addEventListener('click',(e)=>{
  e.preventDefault()
  modal.classList.add('modal--show')
});


showModalDelete.addEventListener('click',(e)=>{
  e.preventDefault()
  modalDelete.classList.add('modal--show')
  console.log('modalDelete')

});


showModalEdit.addEventListener('click',(e)=>{
  e.preventDefault()
  modalEdit.classList.add('modal--show')
  console.log('modalEdit')
})




