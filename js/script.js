const buttons = document.querySelectorAll('.button-copy');

function copiarText(text) {
  let textarea = document.createElement('textarea');
  textarea.value = text;
  document.body.appendChild(textarea);
  textarea.focus();
  textarea.select();

  let command = document.execCommand('copy');

  document.body.removeChild(textarea);
  if (command) return 1;
  else return 0;
}

function pegarValor(event) {
  let valor = event.target.getAttribute('label-copy');
  copiarText(valor);
}

buttons.forEach(button => {
  button.addEventListener('click', pegarValor)
})