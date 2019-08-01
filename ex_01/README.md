
# Pedro - Média! #
 
![Média Versão](https://img.shields.io/badge/M%C3%A9dia-v.1-green)
 
Buscando melhorar no aprendizado de Web com exercícios, este pequeno sistema de calculo de média inicia o processo.
 
O Média foi feito com Materialize Css, Php Estruturado (outras versões serão realizadas com CodeIgniter), Javascript e Jquery em estrutura simples de pasta e totalmente responsivo.
 
## Interação com o usuário
 
O sistema recebe dois valores numéricos de 0 á 10.
 
    <div class="row">
			<div class="input-field col s6">
				<i class="material-icons prefix">filter_1</i>
					<input type="text" id="nota01" name="nota01" class="money" required placeholder="Digite o Valor da Primeira Nota">
				<label>Nota</label>
			</div>
			<div class="input-field col s6">
				<i class="material-icons prefix">filter_2</i>
					<input type="text" name="nota02" id="nota02" class="money" required placeholder="Digite o Valor da Segunda Nota">
				<label>Nota</label>
			</div>
		</div>
   
 
## Validação do Número
 
Ao tentar enviar as notas é chamada o retorno da função "validar" que realiza uma validação sobre os valores digitados - se estão dentro do intervalo de 0 á 10 ou vazios. Mostrando uma mensagem "toast" do Materialize Css com o erro e não enviando as notas.
 
    function validar()
    	 {
    	 	var nota01 = media.nota01.value;
    	 	var nota02 = media.nota02.value;
    	 	if (nota01 < 0 || nota01 > 10) {
    	 		M.toast({html: 'Campo deve conter uma nota válida entre 0 e 10'});
    	 		media.nota01.focus();
    	 		return false;
    	 	}
    	 	if (nota02 < 0 || nota02 > 10) {
    	 		M.toast({html: 'Campo deve conter uma nota válida entre 0 e 10'});
    	 		media.nota02.focus();
    	 		return false;
    	 	}
    	 	if (nota02 == "" || nota01 == "") {
    	 		M.toast({html: 'Campo deve conter uma nota válida entre 0 e 10'});
    	 		media.nota02.focus();
    	 		return false;
    	 	}
    	 }

## Formatação numérica
É utilizado um plugin Jquery "[Jquery Mask Plugin](https://igorescobar.github.io/jQuery-Mask-Plugin/docs.html)" para formatação dos números com duas casas decimais e no máximo duas casas após a vírgula.

## Desempenho
A saída do sistema mostra um ícone do Google "Material-Icons" de acordo com o desempenho do usuário e uma breve mensagem. E apresenta um botão para calcular uma nova média retornando para a página principal.

