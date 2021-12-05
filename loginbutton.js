function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function closeForm2() {
  document.getElementById("newForm").style.display = "none";
}

function newUserForm() {
  closeForm();
  document.getElementById("newForm").style.display = "block";
}

function updateName() {
  document.getElementById("name").innerHTML = "<?php $name; ?>";
}
