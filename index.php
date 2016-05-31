<?php
	$jogadores = array(
		'titulares'	=> array(
			'j1' => 'Julio César',
			'j2' => 'Maicon',
			'j3' => 'David Luiz',
			'j4' => 'Dante',
			'j5' => 'Marcelo',
			'j6' => 'Luiz Gustavo',
			'j7' => 'Fernandinho',
			'j8' => 'Oscar',
			'j9' => 'Bernard',
			'j10' => 'Ramires',
			'j11' => 'Willian'
		),
		'reservas'	=> array(
			'j12' => '',
			'j13' => '',
			'j14' => '',
			'j15' => '',
			'j16' => '',
			'j17' => '',
			'j18' => ''
		)
	);
	
	$acoes = array(
		'FI' => 'Finalização',
		'CD' => 'Condução',
		'CB' => 'Cabeceio',
		'PC' => 'Passe Certo',
		'PE' => 'Passe Errado',
		'FC' => 'Falta Cometida',
		'FS' => 'Falta Sofrida',
		'RB' => 'Roubo de Bola',
		'DS' => 'Desarme',
		'JL' => 'Lateral',
		'TR' => 'Tiro de Meta',
		'CA' => 'Cartão Amarelo',
		'CV' => 'Cartão Vermelho',
		'DN' => 'Defesa Normal',
		'DD' => 'Defesa Dificil',
	);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="includes/bootstrap/css/bootstrap.min.css">
<style type="text/css">
.acao {
	width: 53px;
	text-align: center;
}
.selc {
	background-color: #ffa;
}
</style>
</head>

<body>
	<section class="container">
    	<h1>Scouts</h1>
        <article>
        	<table class="table table-bordered">
            	<tr>
                	<th>
                    </th>
                    <?php foreach($acoes as $key => $acao) { ?>
                    	<th class="acao"><?php echo $key; ?></th>
                    <?php } ?>
                </tr>
                <?php $lin = 1; foreach($jogadores['titulares'] as $key => $jogador) { ?>
                <tr>
                    <td><?php echo str_replace('j','',$key) . ' - ' . $jogador; ?></td>
                    <?php for($col = 1; $col <= count($acoes); $col++) {?>
                    <td class="maker lin<?php echo $lin; ?> col<?php echo $col; ?>"></td>
                    <?php } ?>
				</tr>
                <?php $lin++; } ?>
            </table>
        </article>
    </section>
</body>
<script type="text/javascript" src="includes/jquery/jquery.min.js"></script>
<script type="text/javascript" src="includes/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
	jQuery( function($){
		
		jQuery('.maker').click( function() {
			
			jQuery('.maker').removeClass('selc');
			
			var lin = this.classList[1].replace("lin", "");
			var col = this.classList[2].replace("col", "");
			
			for(linha = lin; linha >= 1; linha--) {
				
				for(coluna = col; coluna >= 1; coluna--) {
					
					if(linha == lin|| coluna == col)
						jQuery('.lin' + linha + '.col' + coluna).addClass('selc');
				
				}
			
			}
			
		} );
		
	});
	
</script>
</html>