<?php
	
	namespace boletoBradesco;
	
	use boletoBradesco\Model\Boleto;
	
	class Controller_Boleto extends \Controller {
		
		public function get_index(){
			
			\Asset::add_Path('assets_boleto', 'img');
			
			// DADOS DO BOLETO PARA O SEU CLIENTE
			$dias_de_prazo_para_pagamento = 5;
			$taxa_boleto = 2.95;
			$data_venc = date("d/m/Y", time() + ($dias_de_prazo_para_pagamento * 86400));  // Prazo de X dias OU informe data: "13/04/2006"; 
			$valor_cobrado = "2950,00"; // Valor - REGRA: Sem pontos na milhar e tanto faz com "." ou "," ou com 1 ou 2 ou sem casa decimal
			$valor_cobrado = str_replace(",", ".",$valor_cobrado);
			$valor_boleto=number_format($valor_cobrado+$taxa_boleto, 2, ',', '');

			$dadosboleto["nosso_numero"] = "75896452";  // Nosso numero sem o DV - REGRA: Máximo de 11 caracteres!
			$dadosboleto["numero_documento"] = $dadosboleto["nosso_numero"];	// Num do pedido ou do documento = Nosso numero
			$dadosboleto["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA
			$dadosboleto["data_documento"] = date("d/m/Y"); // Data de emissão do Boleto
			$dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)
			$dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com vírgula e sempre com duas casas depois da virgula

			// DADOS DO SEU CLIENTE
			$dadosboleto["sacado"] = "Nome do seu Cliente";
			$dadosboleto["endereco1"] = "Endereço do seu Cliente";
			$dadosboleto["endereco2"] = "Cidade - Estado -  CEP: 00000-000";

			// INFORMACOES PARA O CLIENTE
			$dadosboleto["demonstrativo1"] = "Pagamento de Compra na Loja Nonononono";
			$dadosboleto["demonstrativo2"] = "Mensalidade referente a nonon nonooon nononon<br>Taxa bancária - R$ ".number_format($taxa_boleto, 2, ',', '');
			$dadosboleto["demonstrativo3"] = "BoletoPhp - http://www.boletophp.com.br";
			$dadosboleto["instrucoes1"] = "- Sr. Caixa, cobrar multa de 2% após o vencimento";
			$dadosboleto["instrucoes2"] = "- Receber até 10 dias após o vencimento";
			$dadosboleto["instrucoes3"] = "- Em caso de dúvidas entre em contato conosco: xxxx@xxxx.com.br";
			$dadosboleto["instrucoes4"] = "&nbsp; Emitido pelo sistema Projeto BoletoPhp - www.boletophp.com.br";

			// DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE
			$dadosboleto["quantidade"] = "001";
			$dadosboleto["valor_unitario"] = $valor_boleto;
			$dadosboleto["aceite"] = "";		
			$dadosboleto["especie"] = "R$";
			$dadosboleto["especie_doc"] = "DS";


			// ---------------------- DADOS FIXOS DE CONFIGURAÇÃO DO SEU BOLETO --------------- //


			// DADOS DA SUA CONTA - Bradesco
			$dadosboleto["agencia"] = "1172"; // Num da agencia, sem digito
			$dadosboleto["agencia_dv"] = "0"; // Digito do Num da agencia
			$dadosboleto["conta"] = "0403005"; 	// Num da conta, sem digito
			$dadosboleto["conta_dv"] = "2"; 	// Digito do Num da conta

			// DADOS PERSONALIZADOS - Bradesco
			$dadosboleto["conta_cedente"] = "0403005"; // ContaCedente do Cliente, sem digito (Somente Números)
			$dadosboleto["conta_cedente_dv"] = "2"; // Digito da ContaCedente do Cliente
			$dadosboleto["carteira"] = "06";  // Código da Carteira: pode ser 06 ou 03

			// SEUS DADOS
			$dadosboleto["identificacao"] = "BoletoPhp - Código Aberto de Sistema de Boletos";
			$dadosboleto["cpf_cnpj"] = "";
			$dadosboleto["endereco"] = "Coloque o endereço da sua empresa aqui";
			$dadosboleto["cidade_uf"] = "Cidade / Estado";
			$dadosboleto["cedente"] = "Coloque a Razão Social da sua empresa aqui";
			
			$result = Boleto::geraBoleto($dadosboleto);
			$result['codigo_barras'] = Boleto::fbarcode($result['codigo_barras']);
			return \View::forge('boleto', $result);
			
			//return \ViewModel::forge('boleto', $result);
			
			//include("include/funcoes_bradesco.php"); 
			//include("include/layout_bradesco.php");
			
		}
	
	}
	
?>