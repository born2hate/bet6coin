# bet6coin
Script bet6coin

Em desenvolvimento no momento, porem ja com a funcionalidade 

basica funcionandofuncionando, criaçao bets automaticas e manuais,

de acordo com limite de aposta setada e rate escolhida. 

utiliza js para bets e php para checkar e atualizar banco na tabela bets.

Unicialmente tem as funções de aposta manual e por click e automatica

apostas sequenciais com opcao de pausa e restart.

---------------

script js -> utiliza função math gera o int aleatorio que é responsável 

por determinar o sucesso da posta, de acordo com a porcentagem escolhida ex:

> 10 == win tem mais chance de cair um numero de 0 ~100 > 10 

se o int sorteado for true pela condicao vai requisitar ao php 

fazer as atualizações de ganho e perda do banco de dados e retornar os valores em tempo geral.

--------------
