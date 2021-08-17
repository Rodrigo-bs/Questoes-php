const buttons = document.querySelectorAll('.button-copy');

function copiarText(text) {
  let textarea = text.querySelector('textarea');
  textarea.focus();
  textarea.select();

  let command = document.execCommand('copy');

  if (command) return 1;
  else return 0;
}

function pegarValor({ currentTarget }) {
  let text = currentTarget.parentNode;
  let status = copiarText(text);
  console.log(status);
}

buttons.forEach(button => {
  button.addEventListener('click', pegarValor)
})