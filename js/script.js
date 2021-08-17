const buttons = document.querySelectorAll('.button-copy');

function copiarText(text) {
  let textarea = text.querySelector('textarea');
  
  textarea.select();
  textarea.setSelectionRange(0, 99999);
  
  navigator.clipboard.writeText(textarea.value);
}

function ativarButton(button) {
  const img = button.querySelector('img');
  const imgs = document.querySelectorAll('.button-copy img');

  imgs.forEach(img => {
    img.src = './img/Vector.svg';
  })

  img.src = './img/copiar-ativo.svg';
}

function pegarValor({ currentTarget }) {
  let text = currentTarget.parentNode;
  ativarButton(currentTarget);
  copiarText(text);
}

buttons.forEach(button => {
  button.addEventListener('click', pegarValor)
})

//Voltar

const voltarButton = document.querySelector('.voltar');

function voltarTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  })
}

voltarButton.addEventListener('click', voltarTop);