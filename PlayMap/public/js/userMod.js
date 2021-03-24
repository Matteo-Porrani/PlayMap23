let cupModal = document.querySelector('#user-acc');
let btnModal = document.querySelector('#btnModal');
let btnModalAvat = document.querySelector('#btnModalAvat');

btnModal.addEventListener('click', function (e) {
  e.preventDefault();
  cupModal.classList.toggle('d-none');

  let timer = setInterval(() => {
    let op = parseFloat(cupModal.style.opacity);
    op = op + 0.025;
    cupModal.setAttribute('style', `opacity: ${op};`);
    console.log(op);
    if (op > 1) {
      clearInterval(timer);
    }
  }, 10);
});

btnModalAvat.addEventListener('click', function (e) {
  e.preventDefault();
  cupModal.classList.toggle('d-none');

  let timer = setInterval(() => {
    let op = parseFloat(cupModal.style.opacity);
    op = op + 0.025;
    cupModal.setAttribute('style', `opacity: ${op};`);
    console.log(op);
    if (op > 1) {
      clearInterval(timer);
    }
  }, 10);
});


cupModal.addEventListener('click', function () {
  cupModal.classList.toggle('d-none');
  cupModal.style.opacity = 0;
});