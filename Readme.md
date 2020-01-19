Desafio SecrelNet <br />
Nome: Claudio Yvens de Sousa Martins<br />
E-mail: claudioyvens10@gmail.com<br />
Telefone: (85) 98895-5908<br />

1. Na tela Visualizar Tarefa  
  <s> a. O campo descrição não está sendo apresentado corretamente </s>  
  <s> b. O campo nome está vazio</s>  
  <s> c. Corrigir o botão voltar</s>  
2. Na tela de Lista de Tarefas  
  <s>a. A tabela está mostrando apenas os 5 primeiros</s>  
  <s>b. A tabela deve ter "striped rows" https://getbootstrap.com/docs/3.3/css/#tables-striped</s>  
3. Na tela de Lista de Tarefas  
  <s>a.Adicione um botão remover tarefa</s>  
  <s>b.Crie um controlador Tarefa Delete.php</s>  
  <s>c.Em tarefaDao crie uma function delete($id) que remove a tarefa.</s>  
  <s>d.Redirecione para TarefaLista.php - verifique a função header do php:  
  http://php.net/manual/pt_BR/function.header.php</s>  

4. Crie um formulário para adicionar tarefas  
  <s>a. Utilize corretamente os tipos de cada input</s>  
  <s>b. O campo prioridade deve ser um dropdown:</s>   
    <s> i. Muito Alta : 1  </s>   
    <s> ii. Alta: 2   </s>   
    <s> iii. Média: 3   </s>   
     <s> iv. Baixa: 4  </s>   
  <s>c. Utilize os botões criar e limpar alinhados a direita</s>    
5. Seu formulário deverá enviar um POST para o controlador tarefaInserir.php. Se houver um $_POST :  
 <s> a. adicione os dados de $_POST na instância tarefa  </s>    
 <s> b. Valide os dados e utilize a classe TarefaDao para inserir os dados  </s>    
 <s> c. Adicione uma mensagem informando que os dados foram adicionados com sucessod. Em caso de erro, mostre os campos que não forma preenchidos   </s>  
  <s> e. Renderize o formulário novamente para permitir uma nova adição   </s>  
6. O controlador TarefaUpdate está incompleto. Crie uma solução para que seja possível editar uma tarefa.   </s>  
  <s> d. Na tela de lista de tarefas, quando o usuário clicar em editar tarefa leve o usuário ao formulário de
edição  </s>  
 <s>  e. adicione os dados de $_POST na instância tarefa  </s>  
 <s> f.Valide os dados  </s>  
 <s> g. Crie uma função update($tarefa) em TarefaDao para atualizar os dados  </s>  
 <s> h. Adicione uma mensagem informando que os dados foram salvos com sucesso  </s>  
 <s> i. Em caso de erro, mostre os campos que não forma preenchidos  </s>  
 <s> j. Volte para a tela Listar Tarefas. Verifique a função header do php  </s>  
7. Bônus  
 <s> a. Crie uma subview chamada _form.php que pode ser reutilizada nas telas de Inserir e atualizar Tarefas (3 pontos)  </s>    
 b. Formate a data de prazo na tabela de tarefas (3 pontos)  
 c. Na tela lista de tarefas, ao clicar em remover, mostrar um modal de confirmação (3 pontos)  
