const getRepository = async (user) => {
    /* 
        Esta função vai faz um request na API aberta do github
        e retorna um array contendo as seguintes informações do usuário
        login, email, public_repos, followers, following
    */

    console.log(user)
    try {
        const url = `https://api.github.com/users`;
        const data = await fetch(`${url}/${user}`)
            .then((data) => data.json())
            .catch((err) => err.json());
        const { login, email, public_repos, followers, following } = data;
        return [login, email, public_repos, followers, following];
    } catch (e) {
        console.error(e)
    }
};

const showError = (show) => {

    document.getElementById('disable_text').hidden = false;
    document.getElementById("github_name").value = "";
    /*
        Criar uma função que mostre um erro ao usuário
        quando o usuário pesquisado não existir 
    */
}

const insertRow = async () => {
    //Recupere o input digitado
    var nameValue = document.getElementById("github_name");
    document.getElementById('disable_text').hidden = true;

    const userInfos = await getRepository(nameValue.value)


    /*  
        Se o elemento login retornado pela função getRepository 
        for undefined, significa que o usuário não existe, então será
        mostrado ao usuário uma mensagem de erro
    */
    if (!userInfos[0]) {
        showError(false)
        return true
    } else {

        //adicione o usuário digitado na tabela de id "myTable"

        console.log(userInfos[0])
        let linha = document.createElement('tr');
        linha.insertCell(0).innerHTML = userInfos[0];
        linha.insertCell(1).innerHTML = userInfos[1];
        linha.insertCell(2).innerHTML = userInfos[2];
        linha.insertCell(3).innerHTML = userInfos[3];
        linha.insertCell(3).innerHTML = userInfos[4];
        document.getElementById('myTable').appendChild(linha);
        document.getElementById("github_name").value = "";

    }
}