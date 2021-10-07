const getName = () => {
    valor = document.querySelector("#name")
    nome = valor.value
    localStorage.setItem('user', nome);
    sobrenome = document.querySelector("#sobrenome")
    sobrenomeValue = sobrenome.value
    localStorage.setItem('sobrenome', sobrenomeValue);
}
getName();

