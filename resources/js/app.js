require('./bootstrap');

import * as Bootstrap from "bootstrap";

let exampleModal = document.getElementById('exampleModal')
const btn_calendar = document.querySelectorAll('.btn-calendar');

exampleModal.addEventListener('show.bs.modal', function (event) {
  let button = event.relatedTarget

  let form_id = button.getAttribute('data-bs-data')
  let title = button.getAttribute('data-bs-title')

  let modalContent = exampleModal.querySelector('#modal_body_content')
  let btn_submit = exampleModal.querySelector('#btn_submit')

  btn_submit.addEventListener("click", () => {
    document.querySelector(`#${form_id}`).submit()
  })

  modalContent.innerHTML = `Are you sure you want to delete <span class="fw-bold text-decoration-underline text-danger">${title}</span>`
})


btn_calendar.forEach(btn => {

  btn.addEventListener("click", () => {
    document.querySelector("html").classList.toggle("sidebar-toggled")
  })

})
