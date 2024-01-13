// Variáveis para referenciar os elementos do DOM
const mainPage = document.querySelector('.main-page');
const editProfile = document.querySelector('.edit-profile');
const editForm = document.getElementById('edit-form');
const emailDisplay = document.getElementById('display-email');
const cepDisplay = document.getElementById('display-cep');
const photoDisplay = document.getElementById('display-photo');
const btnEdit = document.querySelector('.btn-edit');

// Exibição da página de perfil principal
function showMainPage() {
  mainPage.style.display = 'block';
  editProfile.style.display = 'none';
}

// Exibição da página de edição de perfil
function showEditProfile() {
  mainPage.style.display = 'none';
  editProfile.style.display = 'block';
}

// Manipulação do envio do formulário
editForm.addEventListener('submit', function(event) {
  event.preventDefault();

  // Obter os valores dos campos do formulário
  const emailValue = document.getElementById('edit-email').value;
  const cepValue = document.getElementById('edit-cep').value;
  const photoFile = document.getElementById('photo').files[0];

  // Exibir os valores atualizados na página principal
  emailDisplay.textContent = emailValue;
  cepDisplay.textContent = cepValue;

  // Exibir a foto do usuário
  if (photoFile) {
    const reader = new FileReader();
    reader.onload = function(event) {
      photoDisplay.src = event.target.result;
    };
    reader.readAsDataURL(photoFile);
  }

  // Voltar para a página principal
  showMainPage();
});

// Evento de clique no botão "Editar Perfil"
btnEdit.addEventListener('click', function(event) {
  event.preventDefault();
  showEditProfile();
});

// Exibição da página de perfil principal
function showMainPage() {
  mainPage.style.display = 'block';
  editProfile.style.display = 'none';
}

// Exibição da página de edição de perfil
function showEditProfile() {
  mainPage.style.display = 'none';
  editProfile.style.display = 'block';
}

// Manipulação do envio do formulário
editForm.addEventListener('submit', function(event) {
  event.preventDefault();

  // Obter os valores dos campos do formulário
  const nameValue = document.getElementById('edit-name').value;
  const birthdateValue = document.getElementById('edit-birthdate').value;
  const cepValue = document.getElementById('edit-cep').value;
  const emailValue = document.getElementById('edit-email').value;
  const passwordValue = document.getElementById('edit-password').value;
  const photoFile = document.getElementById('photo').files[0];

  // Exibir os valores atualizados na página principal
  nameDisplay.textContent = nameValue;
  birthdateDisplay.textContent = birthdateValue;
  cepDisplay.textContent = cepValue;
  emailDisplay.textContent = emailValue;
  passwordDisplay.textContent = passwordValue;

  // Exibir a foto do usuário
  if (photoFile) {
    const reader = new FileReader();
    reader.onload = function(event) {
      photoDisplay.src = event.target.result;
    };
    reader.readAsDataURL(photoFile);
  }

  // Voltar para a página principal
  showMainPage();
});

// Evento de clique no botão "Editar Perfil"
btnEdit.addEventListener('click', function(event) {
  event.preventDefault();
  showEditProfile();
});

 // Exibição da página de perfil principal
 function showMainPage() {
   mainPage.style.display = 'block';
   editProfile.style.display = 'none';
 }

 // Exibição da página de edição de perfil
 function showEditProfile() {
   mainPage.style.display = 'none';
   editProfile.style.display = 'block';
 }

 // Manipulação do envio do formulário
 editForm.addEventListener('submit', function(event) {
   event.preventDefault();

   // Obter os valores dos campos do formulário
   const nameValue = document.getElementById('edit-name').value;
   const birthdateValue = document.getElementById('edit-birthdate').value;
   const cepValue = document.getElementById('edit-cep').value;
   const emailValue = document.getElementById('edit-email').value;
   const passwordValue = document.getElementById('edit-password').value;
   const photoFile = document.getElementById('photo').files[0];

   // Exibir os valores atualizados na página principal
   nameDisplay.textContent = nameValue;
   birthdateDisplay.textContent = birthdateValue;
   cepDisplay.textContent = cepValue;
   emailDisplay.textContent = emailValue;
   passwordDisplay.textContent = passwordValue;

   // Exibir a foto do usuário
   if (photoFile) {
     const reader = new FileReader();
     reader.onload = function(event) {
       photoDisplay.src = event.target.result;
     };
     reader.readAsDataURL(photoFile);
   }

   // Voltar para a página principal
   showMainPage();
 });

 // Evento de clique no botão "Editar Perfil"
 btnEdit.addEventListener('click', function(event) {
   event.preventDefault();
   showEditProfile();
 });