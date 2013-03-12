<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>
<HTML>
<HEAD>
<TITLE><?php echo $identificacao; ?></TITLE>
<META http-equiv=Content-Type content=text/html charset=ISO-8859-1>
<meta name="Generator" content="Projeto BoletoPHP - www.boletophp.com.br - Licença GPL" />
<style type=text/css>
<!--.cp {  font: bold 10px Arial; color: black}
<!--.ti {  font: 9px Arial, Helvetica, sans-serif}
<!--.ld { font: bold 15px Arial; color: #000000}
<!--.ct { FONT: 9px "Arial Narrow"; COLOR: #000033}
<!--.cn { FONT: 9px Arial; COLOR: black }
<!--.bc { font: bold 20px Arial; color: #000000 }
<!--.ld2 { font: bold 12px Arial; color: #000000 }
--></style> 
</head>

<BODY text=#000000 bgColor=#ffffff topMargin=0 rightMargin=0>
	<table width=666 cellspacing=0 cellpadding=0 border=0>
		<tr>
			<td valign=top class=cp><DIV ALIGN="CENTER">Instruções de Impressão</DIV></TD>
		</TR>
		
		<TR>
			<TD valign=top class=cp>
				<DIV ALIGN="left">
					<p>
					<li>Imprima em impressora jato de tinta (ink jet) ou laser em qualidade normal ou alta (Não use modo econômico).<br>
					<li>Utilize folha A4 (210 x 297 mm) ou Carta (216 x 279 mm) e margens mínimas à esquerda e à direita do formulário.<br>
					<li>Corte na linha indicada. Não rasure, risque, fure ou dobre a região onde se encontra o código de barras.<br>
					<li>Caso não apareça o código de barras no final, clique em F5 para atualizar esta tela.
					<li>Caso tenha problemas ao imprimir, copie a seqüencia numérica abaixo e pague no caixa eletrônico ou no internet banking:<br><br>
					<span class="ld2">
					&nbsp;&nbsp;&nbsp;&nbsp;Linha Digitável: &nbsp;<?php echo $linha_digitavel; ?><br>
					&nbsp;&nbsp;&nbsp;&nbsp;Valor: &nbsp;&nbsp;R$ <?php echo $valor_boleto; ?><br>
					</span>
				</DIV>
			</td>
		</tr>
	</table>
	
	<br>
	
	<table cellspacing=0 cellpadding=0 width=666 border=0>
		<TBODY>
			<TR>
				<TD class=ct width=666>
					<?php echo Asset::img('6.png', array('width' => 665, 'height' => 1)) ?>
				</TD>
			</TR>
			
			<TR>
				<TD class=ct width=666>
					<div align=right><b class=cp>Recibo do Sacado</b></div>
				</TD>
			</tr>
		</tbody>
	</table>
	
	<table width=666 cellspacing=5 cellpadding=0 border=0>
		<tr>
			<td width=41></TD>
		</tr>
	</table>

	<table width=666 cellspacing=5 cellpadding=0 border=0 align=Default>
		<tr>
			<td width=41><?php echo Asset::img('logo_empresa.png'); ?></td>
			<td class=ti width=455>
				<?php echo $identificacao; ?>
				<?php echo isset($dadosboleto["cpf_cnpj"]) ? "<br>".$dadosboleto["cpf_cnpj"] : '' ?><br>
				<?php echo $endereco; ?><br>
				<?php echo $cidade_uf; ?><br>
			</td>		
			<td align=RIGHT width=150 class=ti>&nbsp;</td>
		</tr>
	</table>
	
	<BR>
	
	<table cellspacing=0 cellpadding=0 width=666 border=0>
		<tr>
			<td class=cp width=150> 
				<span class="campo"><?php echo Asset::img('logobradesco.jpg', array('width' => 150, 'height' => 40)); ?></span>
			</td>
			
			<td width=3 valign=bottom>
				<?php echo Asset::img('3.png', array('width' => 2, 'height' => 22)) ?>
			</td>
			
			<td class=cpt width=58 valign=bottom>
				<div align=center>
					<font class=bc><?php echo $codigo_banco_com_dv; ?></font>
				</div>
			</td>
			<td width=3 valign=bottom>
				<?php echo Asset::img('3.png', array('width' => 2, 'height' => 22)) ?>
			</td>
			
			<td class=ld align=right width=453 valign=bottom>
				<span class=ld> 
					<span class="campotitulo"><?php echo $linha_digitavel; ?></span>
				</span>
			</td>
		</tr>
		
		<tbody>
			<tr>
				<td colspan=5>
					<?php echo Asset::img('2.png', array('width' => 666, 'height' => 2)) ?>
				</td>
			</tr>
		</tbody>
	</table>
	
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13>
					<?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?>
				</td>
				
				<td class=ct valign=top width=298 height=13>Cedente</td>
				
				<td class=ct valign=top width=7 height=13>
					<?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?>
				</td>
				
				<td class=ct valign=top width=126 height=13>Agência/Código do Cedente</td>
				
				<td class=ct valign=top width=7 height=13>
					<?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?>
				</td>
				
				<td class=ct valign=top width=34 height=13>Espécie</td>
				
				<td class=ct valign=top width=7 height=13>
					<?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?>
				</td>
				
				<td class=ct valign=top width=53 height=13>Quantidade</td>
				
				<td class=ct valign=top width=7 height=13>
					<?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?>
				</td>
				
				<td class=ct valign=top width=120 height=13>Nosso número</td>
			</tr>
			
			<tr>
				<td class=cp valign=top width=7 height=12>
					<?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?>
				</td>
				
				<td class=cp valign=top width=298 height=12> 
					<span class="campo"><?php echo $cedente; ?></span>
				</td>
				
				<td class=cp valign=top width=7 height=12>
					<?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?>
				</td>
				
				<td class=cp valign=top width=126 height=12>
					<span class="campo">
						<?php echo $agencia_codigo; ?>
					</span>
				</td>

				<td class=cp valign=top width=7 height=12>
					<?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?>
				</td>
				
				<td class=cp valign=top  width=34 height=12>
					<span class="campo">
						<?php echo $especie; ?>
					</span> 
				</td>
				
				<td class=cp valign=top width=7 height=12>
					<?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?>
				</td>
				
				<td class=cp valign=top  width=53 height=12>
					<span class="campo">
						<?php echo $quantidade; ?>
					</span> 
				</td>

				<td class=cp valign=top width=7 height=12>
					<?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?>
				</td>
				
				<td class=cp valign=top align=right width=120 height=12> 
					<span class="campo">
						<?php echo $nosso_numero; ?>
					</span>
				</td>
			</tr>
			
			<tr>
				<td valign=top width=7 height=1>
					<?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?>
				</td>
				
				<td valign=top width=298 height=1>
					<?php echo Asset::img('2.png', array('width' => 298, 'height' => 1)) ?>
				</td>
				
				<td valign=top width=7 height=1>
					<?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?>
				</td>
				
				<td valign=top width=126 height=1>
					<?php echo Asset::img('2.png', array('width' => 126, 'height' => 1)) ?>
				</td>
				
				<td valign=top width=7 height=1>
					<?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?>
				</td>
				
				<td valign=top width=34 height=1>
					<?php echo Asset::img('2.png', array('width' => 34, 'height' => 1)) ?>
				</td>
				
				<td valign=top width=7 height=1>
					<?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?>
				</td>
				
				<td valign=top width=53 height=1>
					<?php echo Asset::img('2.png', array('width' => 53, 'height' => 1)) ?>
				</td>
				
				<td valign=top width=7 height=1>
					<?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?>
				</td>
				
				<td valign=top width=120 height=1>
					<?php echo Asset::img('2.png', array('width' => 120, 'height' => 1)) ?>
				</td>
			</tr>
		</tbody>
	</table>
	
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top colspan=3 height=13>Número do documento</td>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=132 height=13>CPF/CNPJ</td>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=134 height=13>Vencimento</td>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=180 height=13>Valor documento</td>
			</tr>
			
			<tr>
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top colspan=3 height=12> 
					<span class="campo">
						<?php echo $numero_documento; ?>
					</span>
				</td>
				
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top width=132 height=12> 
					<span class="campo">
						<?php echo $cpf_cnpj; ?>
					</span>
				</td>

				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top width=134 height=12> 
					<span class="campo">
						<?php echo $data_vencimento; ?>
					</span>
				</td>
				
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top align=right width=180 height=12> 
					<span class="campo">
						<?php echo $valor_boleto; ?>
					</span>
				</td>
			</tr>
			
			<tr>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=113 height=1><?php echo Asset::img('2.png', array('width' => 113, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=72 height=1><?php echo Asset::img('2.png', array('width' => 72, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=132 height=1><?php echo Asset::img('2.png', array('width' => 132, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=134 height=1><?php echo Asset::img('2.png', array('width' => 134, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=180 height=1><?php echo Asset::img('2.png', array('width' => 180, 'height' => 1)) ?></td>
			</tr>
		</tbody>
	</table>
	
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=113 height=13>(-) Desconto / Abatimentos</td>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=112 height=13>(-) Outras deduções</td>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=113 height=13>(+) Mora / Multa</td>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=113 height=13>(+) Outros acréscimos</td>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=180 height=13>(=) Valor cobrado</td>
			</tr>

			<tr>
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top align=right width=113 height=12></td>
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top align=right width=112 height=12></td>
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top align=right width=113 height=12></td>
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top align=right width=113 height=12></td>
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top align=right width=180 height=12></td>
			</tr>
			
			<tr>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=113 height=1><?php echo Asset::img('2.png', array('width' => 113, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=112 height=1><?php echo Asset::img('2.png', array('width' => 112, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=113 height=1><?php echo Asset::img('2.png', array('width' => 113, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=113 height=1><?php echo Asset::img('2.png', array('width' => 113, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=180 height=1><?php echo Asset::img('2.png', array('width' => 180, 'height' => 1)) ?></td>
			</tr>
		</tbody>
	</table>
	
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=659 height=13>Sacado</td>
			</tr>
			
			<tr>
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top width=659 height=12> 
					<span class="campo">
						<?php echo $sacado; ?>
					</span>
				</td>
			</tr>
			
			<tr>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=659 height=1><?php echo Asset::img('2.png', array('width' => 659, 'height' => 1)) ?></td>
			</tr>
			
		</tbody>
	</table>
	
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct  width=7 height=12></td>
				<td class=ct  width=564 >Demonstrativo</td>
				<td class=ct  width=7 height=12></td>
				<td class=ct  width=88 >Autenticação mecânica</td>
			</tr>
			
			<tr>			
				<td  width=7 ></td>
				<td class=cp width=564 >
					<span class="campo">
						<?php echo $demonstrativo1; ?><br>
						<?php echo $demonstrativo2; ?><br>
						<?php echo $demonstrativo3; ?><br>
					</span>
				</td>
				
				<td  width=7 ></td>
				<td  width=88 ></td>
			</tr>
		</tbody>
	</table>
	
	<table cellspacing=0 cellpadding=0 width=666 border=0><tbody><tr><td width=7></td><td  width=500 class=cp> 
<br><br><br> 
</td><td width=159></td></tr></tbody>
	</table>
	
	<table cellspacing=0 cellpadding=0 width=666 border=0>
		<tr>
			<td class=ct width=666></td>
		</tr>
		
		<tbody>
			<tr>
				<td class=ct width=666><div align=right>Corte na linha pontilhada</div></td>
			</tr>
			
			<tr>
				<td class=ct width=666><?php echo Asset::img('6.png', array('width' => 665, 'height' => 1)) ?></td>
			</tr>
		</tbody>
	</table>
	
	<br>
	
	<table cellspacing=0 cellpadding=0 width=666 border=0>
		<tr>
			<td class=cp width=150> 
				<span class="campo"><?php echo Asset::img('logobradesco.jpg', array('width' => 150, 'height' => 40)); ?></span>
			</td>
		
			<td width=3 valign=bottom><?php echo Asset::img('3.png', array('width' => 2, 'height' => 22)) ?></td>
			<td class=cpt width=58 valign=bottom>
				<div align=center><font class=bc><?php echo $codigo_banco_com_dv; ?></font></div>
			</td>
			
			<td width=3 valign=bottom><?php echo Asset::img('3.png', array('width' => 2, 'height' => 22)) ?></td>
			<td class=ld align=right width=453 valign=bottom>
				<span class=ld> 
					<span class="campotitulo">
						<?php echo $linha_digitavel; ?>
					</span>
				</span>
			</td>
		</tr>
	
		<tbody>
			<tr>
				<td colspan=5><?php echo Asset::img('2.png', array('width' => 666, 'height' => 2)) ?></td>
			</tr>
		</tbody>
	</table>
	
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=472 height=13>Local de pagamento</td>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=180 height=13>Vencimento</td>
			</tr>
			
			<tr>
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top width=472 height=12>Pagável em qualquer Banco até o vencimento</td>
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top align=right width=180 height=12> 
					<span class="campo">
						<?php echo $data_vencimento; ?>
					</span>
				</td>
			</tr>
			
			<tr>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=472 height=1><?php echo Asset::img('2.png', array('width' => 472, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=180 height=1><?php echo Asset::img('2.png', array('width' => 180, 'height' => 1)) ?></td>
			</tr>
		</tbody>
	</table>
	
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=472 height=13>Cedente</td>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=180 height=13>Agência/Código cedente</td>
			</tr>
			
			<tr>
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top width=472 height=12> 
					<span class="campo">
						<?php echo $cedente; ?>
					</span>
				</td>
			
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top align=right width=180 height=12>
					<span class="campo">
						<?php echo $agencia_codigo; ?>
					</span>
				</td>			
			</tr>
			
			<tr>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=472 height=1><?php echo Asset::img('2.png', array('width' => 472, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=180 height=1><?php echo Asset::img('2.png', array('width' => 180, 'height' => 1)) ?></td>
			</tr>
		</tbody>
	</table>
	
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=113 height=13>Data do documento</td>
				<td class=ct valign=top width=7 height=13> <?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=153 height=13>N<u>o</u> documento</td>
				<td class=ct valign=top width=7 height=13> <?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=62 height=13>Espécie doc.</td>
				<td class=ct valign=top width=7 height=13> <?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=34 height=13>Aceite</td>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=82 height=13>Data processamento</td>
				<td class=ct valign=top width=7 height=13> <?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=180 height=13>Nosso número</td>
			</tr>
		
			<tr>
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top  width=113 height=12>
					<div align=left>
						<span class="campo">
							<?php echo $data_documento; ?>
						</span>
					</div>
				</td>
				
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top width=153 height=12> 
					<span class="campo">
					<?php echo $numero_documento; ?>
					</span>
				</td>
				
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top  width=62 height=12>
					<div align=left>
						<span class="campo">
							<?php echo $especie_doc; ?>
						</span>
					</div>
				</td>
				
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top  width=34 height=12>
					<div align=left>
						<span class="campo">
							<?php echo $aceite; ?>
						</span> 
					</div>
				</td>
				
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top  width=82 height=12>
					<div align=left> 
						<span class="campo">
							<?php echo $data_processamento; ?>
						</span>
					</div>
				</td>
				
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top align=right width=180 height=12> 
					<span class="campo">
						<?php echo $nosso_numero; ?>
					</span>
				</td>
			</tr>
			
			<tr>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=113 height=1><?php echo Asset::img('2.png', array('width' => 113, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1> <?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=153 height=1><?php echo Asset::img('2.png', array('width' => 153, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=62 height=1><?php echo Asset::img('2.png', array('width' => 62, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=34 height=1><?php echo Asset::img('2.png', array('width' => 34, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=82 height=1><?php echo Asset::img('2.png', array('width' => 82, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=180 height=1><?php echo Asset::img('2.png', array('width' => 180, 'height' => 1)) ?></td>
			</tr>
		</tbody>
	</table>
	
	<table cellspacing=0 cellpadding=0 border=0>
		<tbody>
			<tr> 
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top COLSPAN="3" height=13>Uso do banco</td>
				<td class=ct valign=top height=13 width=7><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=83 height=13>Carteira</td>
				<td class=ct valign=top height=13 width=7><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=53 height=13>Espécie</td>
				<td class=ct valign=top height=13 width=7><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=123 height=13>Quantidade</td>
				<td class=ct valign=top height=13 width=7><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=72 height=13>Valor Documento</td>
				<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
				<td class=ct valign=top width=180 height=13>(=) Valor documento</td>
			</tr>
			
			<tr> 
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td valign=top class=cp height=12 COLSPAN="3">
					<div align=left></div>
				</td>
				
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top  width=83> 
					<div align=left> 
						<span class="campo">
							<?php echo $carteira; ?>
						</span>
					</div>
				</td>
				
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top  width=53>
					<div align=left>
						<span class="campo">
							<?php echo $especie; ?>
						</span> 
					</div>
				</td>
				
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top  width=123>
					<span class="campo">
						<?php echo $quantidade; ?>
					</span> 
				</td>
				
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top  width=72> 
					<span class="campo">
						<?php echo $valor_unitario; ?>
					</span>
				</td>
				
				<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
				<td class=cp valign=top align=right width=180 height=12> 
					<span class="campo">
						<?php echo $valor_boleto; ?>
					</span>
				</td>
			</tr>
			
			<tr>
				<td valign=top width=7 height=1> <?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 75, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=31 height=1><?php echo Asset::img('2.png', array('width' => 31, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=83 height=1><?php echo Asset::img('2.png', array('width' => 83, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1> <?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=53 height=1><?php echo Asset::img('2.png', array('width' => 53, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1> <?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=123 height=1><?php echo Asset::img('2.png', array('width' => 123, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1> <?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=72 height=1><?php echo Asset::img('2.png', array('width' => 72, 'height' => 1)) ?></td>
				<td valign=top width=7 height=1> <?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
				<td valign=top width=180 height=1><?php echo Asset::img('2.png', array('width' => 180, 'height' => 1)) ?></td>
			</tr>
		</tbody> 
	</table>
	
	<table cellspacing=0 cellpadding=0 width=666 border=0>
		<tbody>
			<tr>
				<td align=right width=10><table cellspacing=0 cellpadding=0 border=0 align=left>
				
						<tbody> 
							<tr>
								<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
							</tr>
							
							<tr> 
								<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
							</tr>
							
							<tr> 
								<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 1, 'height' => 1)) ?></td>
							</tr>
						</tbody>
					</table>
				</td>
		
				<td valign=top width=468 rowspan=5>
					<font class=ct>Instruções (Texto de responsabilidade do cedente)</font>
					<br><br>
					<span class=cp> 
						<FONT class=campo>
							<?php echo $instrucoes1; ?><br>
							<?php echo $instrucoes2; ?><br>
							<?php echo $instrucoes3; ?><br>
							<?php echo $instrucoes4; ?>
						</FONT>
						
						<br><br> 

					</span>
				</td>
			
				<td align=right width=188>
					<table cellspacing=0 cellpadding=0 border=0>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
								<td class=ct valign=top width=180 height=13>(-) Desconto / Abatimentos</td>
							</tr>
							
							<tr>
								<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
								<td class=cp valign=top align=right width=180 height=12></td>
							</tr>
							
							<tr> 
								<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
								<td valign=top width=180 height=1><?php echo Asset::img('2.png', array('width' => 180, 'height' => 1)) ?></td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
	
			<tr>
				<td align=right width=10> 
					<table cellspacing=0 cellpadding=0 border=0 align=left>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
							</tr>
							
							<tr>
								<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
							</tr>
							
							<tr>
								<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 1, 'height' => 1)) ?></td>
							</tr>
						</tbody>	
					</table>
				</td>
				
				<td align=right width=188>
					<table cellspacing=0 cellpadding=0 border=0>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
								<td class=ct valign=top width=180 height=13>(-) Outras deduções</td>
							</tr>
							
							<tr>
								<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
								<td class=cp valign=top align=right width=180 height=12></td>
							</tr>
							
							<tr>
								<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
								<td valign=top width=180 height=1><?php echo Asset::img('2.png', array('width' => 180, 'height' => 1)) ?></td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
			
			<tr>
				<td align=right width=10> 
					<table cellspacing=0 cellpadding=0 border=0 align=left>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
							</tr>
							
							<tr>
								<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
							</tr>
							
							<tr>
								<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 1, 'height' => 1)) ?></td>
							</tr>
						</tbody>
					</table>
				</td>
				
				<td align=right width=188> 
					<table cellspacing=0 cellpadding=0 border=0>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
								<td class=ct valign=top width=180 height=13>(+) Mora / Multa</td>
							</tr>
							
							<tr>
								<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
								<td class=cp valign=top align=right width=180 height=12></td>
							</tr>
							
							<tr> 
								<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
								<td valign=top width=180 height=1><?php echo Asset::img('2.png', array('width' => 180, 'height' => 1)) ?></td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>

			<tr>
				<td align=right width=10>
					<table cellspacing=0 cellpadding=0 border=0 align=left>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
							</tr>
							
							<tr>
								<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
							</tr>
							
							<tr>
								<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 1, 'height' => 1)) ?></td>
							</tr>
						</tbody>
					</table>
				</td>
				
				<td align=right width=188> 
					<table cellspacing=0 cellpadding=0 border=0>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
								<td class=ct valign=top width=180 height=13>(+) Outros acréscimos</td>
							</tr>
							
							<tr>
								<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
								<td class=cp valign=top align=right width=180 height=12></td>
							</tr>
							
							<tr>
								<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
								<td valign=top width=180 height=1><?php echo Asset::img('2.png', array('width' => 180, 'height' => 1)) ?></td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
			
			<tr>
				<td align=right width=10>
					<table cellspacing=0 cellpadding=0 border=0 align=left>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
							</tr>
							
							<tr>
								<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
							</tr>
						</tbody>
					</table>
				</td>
				
				<td align=right width=188>
					<table cellspacing=0 cellpadding=0 border=0>
						<tbody>
							<tr>
								<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
								<td class=ct valign=top width=180 height=13>(=) Valor cobrado</td>
							</tr>
							
							<tr>
								<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
								<td class=cp valign=top align=right width=180 height=12></td>
							</tr>
						</tbody> 
					</table>
				</td>
			</tr>
		</tbody>
	</table>
	
	<table cellspacing=0 cellpadding=0 width=666 border=0>
		<tbody>
			<tr>
				<td valign=top width=666 height=1><?php echo Asset::img('2.png', array('width' => 666, 'height' => 1)) ?></td>
				</tr>
			</tbody>
		</table>
		
		<table cellspacing=0 cellpadding=0 border=0>
			<tbody>
				<tr>
					<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
					<td class=ct valign=top width=659 height=13>Sacado</td>
				</tr>
				
				<tr>
					<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
					<td class=cp valign=top width=659 height=12>
						<span class="campo">
							<?php echo $sacado; ?>
						</span> 
					</td>
				</tr>
			</tbody>
		</table>
	
		<table cellspacing=0 cellpadding=0 border=0>
			<tbody>
				<tr>
					<td class=cp valign=top width=7 height=12><?php echo Asset::img('1.png', array('width' => 1, 'height' => 12)) ?></td>
					<td class=cp valign=top width=659 height=12>
						<span class="campo">
							<?php echo $endereco1; ?>
						</span>
					</td>
				</tr>
			</tbody>
		</table>

		<table cellspacing=0 cellpadding=0 border=0>
			<tbody>
				<tr>
					<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
					<td class=cp valign=top width=472 height=13> 
						<span class="campo">
						<?php echo $endereco2; ?>
						</span>
					</td>
					
					<td class=ct valign=top width=7 height=13><?php echo Asset::img('1.png', array('width' => 1, 'height' => 13)) ?></td>
					<td class=ct valign=top width=180 height=13>Cód. baixa</td>
				</tr>
				
				<tr>
					<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
					<td valign=top width=472 height=1><?php echo Asset::img('2.png', array('width' => 472, 'height' => 1)) ?></td>
					<td valign=top width=7 height=1><?php echo Asset::img('2.png', array('width' => 7, 'height' => 1)) ?></td>
					<td valign=top width=180 height=1><?php echo Asset::img('2.png', array('width' => 180, 'height' => 1)) ?></td>
				</tr>
			</tbody>
		</table>
		
		<TABLE cellSpacing=0 cellPadding=0 border=0 width=666>
			<TBODY>
				<TR>
					<TD class=ct  width=7 height=12></TD>
					<TD class=ct  width=409 >Sacador/Avalista</TD>
					<TD class=ct  width=250 >
						<div align=right>Autenticação mecânica - <b class=cp>Ficha de Compensação</b></div>
					</TD>
				</TR>
				
				<TR>
					<TD class=ct  colspan=3 ></TD>
				</tr>
			</tbody>
		</table>
		
		<TABLE cellSpacing=0 cellPadding=0 width=666 border=0>
			<TBODY>
				<TR>
					<TD vAlign=bottom align=left height=50><?php echo html_entity_decode($codigo_barras); ?></TD>
				</tr>
			</tbody>
		</table>
		
		<TABLE cellSpacing=0 cellPadding=0 width=666 border=0>
			<TR>
				<TD class=ct width=666></TD>
			</TR>
			
			<TBODY>
				<TR>
					<TD class=ct width=666><div align=right>Corte na linha pontilhada</div></TD>
				</TR>
				
				<TR>
					<TD class=ct width=666><?php echo Asset::img('6.png', array('width' => 665, 'height' => 1)) ?></TD>
				</tr>
			</tbody>
		</table>
	</BODY>
</HTML>
