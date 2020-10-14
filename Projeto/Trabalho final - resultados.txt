CSI477-2020-03 - PLE - Trabalho Final - Resultados
Aluna(o): Rafaela Silva Miranda

Resumo
A aplicação desenvolvida envolve a área do cliente, para realização de pedidos de lanches fast food e também, a área do administrador, para que possa visualizar e controlar os seus pedidos. 
As funcionalidades principais envolvem a realização de pedidos, desde a escolha da quantidade desejada, a sua permanência na sacola do cliente até o momento da finalização. Na área restrita, dos administradores, estes podem visualizar e alterar o status dos pedidos dos seus clientes, que são apresentados na tela principal.

1. Funcionalidades implementadas
Realização de pedidos (escolha do produto e quantidade desejada, visualização da sacola e opção de finalizar ou cancelar o pedido). Caso o cliente opte em cancelar o pedido, a sua sacola ficará vazia, caso contrário, será direcionado para um formulário para que possa preencher os seus dados pessoais. Ao finalizar, um e-mail é enviado ao cliente (desde que o e-mail seja válido - não verificado pelo sistema) confirmando o seu pedido.

2. Funcionalidades previstas e não implementadas
Inicialmante, estava definido a escolha de adicionais e montagem do lanche no momento da realização do pedido, mas, esta funcionalidade não foi implementada. Além disso, estava determinado que o cliente deveria cadastrar-se no sistema para realizar o seu pedido. Nesta abordagem de projeto, o cadastro não tornou-se necessário, sendo alterado para a área restrita do administrador.

3. Outras funcionalidades implementadas
A área administrativa e o envio do e-mail não foram definidos anteriormente. Como funcionalidades da área administrativa, o administrador pode realizar o cadastro de produtos, visualização e atualização. Para que possa manter o histórico dos pedidos e os produtos relacionados, os administradores não possuem a opção para remover os pedidos ja realizados e os produtos cadastrados. Mas, para que possam alterar os produtos disponíveis ou não para a venda, é possível atualizar o seu status, controlando os produtos que serão exibidos no cardápio dos clientes. Além disso, os administradores podem visualizar os seus pedidos de acordo com a ordem de confirmação e atualizar o seu status a medida que são produzidos e enviados para entrega. O cadastro de administradores e a visualização de todos eles também é restrito.

4. Principais desafios e dificuldades
A maior dificuldade no desenvolvimento do trabalho envolve a monipulação da session para armazenar os produtos e a quantidade desejada, assim como, inserir e remover a quantidade do produto na session. A recuperação dos dados da session de forma organizada para que possa ser exibido na sacola e cadastrado no banco de dados, foi a segunda dificuldade enfrentada. As demais funcionalidades ja havia conhecimento prévio para desenvolvê-las.

5. Instruções para instalação e execução
Para executar o projeto, dentro da pasta "Projeto" contém o arquivo Laravel com o nome "projetoFinal". Caminhe até a pasta "projetoFinal" e execute "php artisan serve". Abra o navegador de sua preferência e digite "localhost:8000" para iniciar a aplicação. A área do cliente para realização dos pedidos não precisa ser acessada com login e senha, estando livre para utilização. A área administrativa, para acessar, é preciso realizar o login. Para acesso, um administrador padrão com e-mail "adm@adm.com" e senha "1234567890" esta cadastrado. Sem o acesso ao sistema, não é possível cadastrar novos administradores, tornando o uso da área restritira impossibilitada de ser acessada.

6. Referências
Laravel. Disponível em: <https://laravel.com/docs/8.x/installation>. Acesso em: 13.10.2020
