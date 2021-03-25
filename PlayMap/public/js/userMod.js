let userModal = document.querySelector('#user-acc');
let btnModal = document.querySelector('#btnModal');
let btnModalAvat = document.querySelector('#btnModalAvat');

btnModal.addEventListener('click', function (e) {
  e.preventDefault();
  userModal.classList.toggle('d-none');

  let timer = setInterval(() => {
    let op = parseFloat(userModal.style.opacity);
    op = op + 0.025;
    userModal.setAttribute('style', `opacity: ${op};`);
    console.log(op);
    if (op > 1) {
      clearInterval(timer);
    }
  }, 10);
  
});

btnModalAvat.addEventListener('click', function (e) {
  e.preventDefault();
  userModal.classList.toggle('d-none');

  let timer = setInterval(() => {
    let op = parseFloat(userModal.style.opacity);
    op = op + 0.025;
    userModal.setAttribute('style', `opacity: ${op};`);
    console.log(op);
    if (op > 1) {
      clearInterval(timer);
    }
  }, 10);
});


userModal.addEventListener('click', function () {
  userModal.classList.toggle('d-none');
  userModal.style.opacity = 0;
});