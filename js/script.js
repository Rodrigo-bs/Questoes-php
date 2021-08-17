const buttons = document.querySelectorAll('.button-copy');
console.log('ola');
function copiarText(text) {
  let textarea = text.querySelector('textarea');

  textarea.select();
  textarea.setSelectionRange(0, 99999);

  navigator.clipboard.writeText(textarea.value);
  window.alert('Copia Efetuada com Sucesso!!');
}

function pegarValor({ currentTarget }) {
  let text = currentTarget.parentNode;
  let status = copiarText(text);
  console.log(status);
}

buttons.forEach(button => {
  button.addEventListener('click', pegarValor)
})