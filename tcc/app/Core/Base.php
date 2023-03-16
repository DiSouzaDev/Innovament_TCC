<?php

namespace App\Core;

$ROOT_DIR =  $_SERVER["DOCUMENT_ROOT"] . "tcc/vendor/autoload.php";

require($ROOT_DIR);

class Base
{

	public static $base_url = "http://localhost/tcc/app/";
	public static $url_imagens = "http://localhost/tcc/public/uploads/";
	public static $url_scripts = "http://localhost/tcc/public/js/";
	public static $url_views = "http://localhost/tcc/app/Views/";
	public static $url_styles = "http://localhost/tcc/public/css/";

	public static $paises = [
		'+1' => 'Anguila',
		'+1' => 'Antígua e Barbuda',
		'+1' => 'Bahamas',
		'+1' => 'Barbados',
		'+1' => 'Bermudas',
		'+1' => 'Canadá',
		'+1' => 'Dominica',
		'+1' => 'Estados Unidos',
		'+1' => 'Granada',
		'+1' => 'Guam',
		'+1' => 'Ilhas Caimã',
		'+1' => 'Ilhas Marianas do Norte',
		'+1' => 'Ilhas Virgens Americanas',
		'+1' => 'Ilhas Virgens Britânicas',
		'+1' => 'Jamaica',
		'+1' => 'Monserrate',
		'+1' => 'Porto Rico',
		'+1' => 'República Dominicana',
		'+1' => 'Samoa Americana',
		'+1' => 'Santa Lúcia',
		'+1' => 'São Cristóvão e Neves',
		'+1' => 'São Martinho',
		'+1' => 'São Vicente e Granadinas',
		'+1' => 'Trindade e Tobago',
		'+1' => 'Turcas e Caicos',
		'+20' => 'Egipto',
		'+211' => 'Sudão do Sul',
		'+212' => 'Marrocos',
		'+212' => 'Saara Ocidental',
		'+213' => 'Argélia',
		'+216' => 'Tunísia',
		'+218' => 'Líbia',
		'+220' => 'Gâmbia',
		'+221' => 'Senegal',
		'+222' => 'Mauritânia',
		'+223' => 'Mali',
		'+224' => 'Guiné',
		'+225' => 'Costa do Marfim',
		'+226' => 'Burquina Fasso',
		'+227' => 'Níger',
		'+228' => 'Togo',
		'+229' => 'Benim',
		'+230' => 'Maurícia',
		'+231' => 'Libéria',
		'+232' => 'Serra Leoa',
		'+233' => 'Gana',
		'+234' => 'Nigéria',
		'+235' => 'Chade',
		'+236' => 'República Centro-Africana',
		'+237' => 'Camarões',
		'+238' => 'Cabo Verde',
		'+239' => 'São Tomé e Príncipe',
		'+240' => 'Guiné Equatorial',
		'+241' => 'Gabão',
		'+242' => 'Congo-Brazavile',
		'+243' => 'Congo-Quinxassa',
		'+244' => 'Angola',
		'+245' => 'Guiné-Bissau',
		'+246' => 'Território Britânico do Oceano Índico',
		'+247' => 'Ascensão',
		'+248' => 'Seicheles',
		'+249' => 'Sudão',
		'+250' => 'Ruanda',
		'+251' => 'Etiópia',
		'+252' => 'Somália',
		'+253' => 'Djibuti',
		'+254' => 'Quênia',
		'+255' => 'Tanzânia',
		'+256' => 'Uganda',
		'+257' => 'Burundi',
		'+258' => 'Moçambique',
		'+260' => 'Zâmbia',
		'+261' => 'Madagascar',
		'+262' => 'Maiote',
		'+262' => 'Reunião',
		'+263' => 'Zimbábue',
		'+264' => 'Namíbia',
		'+265' => 'Maláui',
		'+266' => 'Lesoto',
		'+267' => 'Botsuana',
		'+268' => 'Essuatíni',
		'+269' => 'Comores',
		'+27' => 'África do Sul',
		'+290' => 'Santa Helena',
		'+290' => 'Tristão da Cunha',
		'+291' => 'Eritreia',
		'+297' => 'Aruba',
		'+298' => 'Ilhas Féroe',
		'+299' => 'Groenlândia',
		'+30' => 'Grécia',
		'+31' => 'Países Baixos',
		'+32' => 'Bélgica',
		'+33' => 'França',
		'+34' => 'Espanha',
		'+350' => 'Gibraltar',
		'+351' => 'Portugal',
		'+352' => 'Luxemburgo',
		'+353' => 'Irlanda',
		'+354' => 'Islândia',
		'+355' => 'Albânia',
		'+356' => 'Malta',
		'+357' => 'Chipre',
		'+358' => 'Finlândia',
		'+359' => 'Bulgária',
		'+36' => 'Hungria',
		'+370' => 'Lituânia',
		'+371' => 'Letônia',
		'+372' => 'Estónia',
		'+373' => 'Moldávia',
		'+374' => 'Armênia',
		'+375' => 'Bielorrússia',
		'+376' => 'Andorra',
		'+377' => 'Mônaco',
		'+378' => 'São Marinho',
		'+379' => 'Vaticano',
		'+380' => 'Ucrânia',
		'+381' => 'Sérvia',
		'+382' => 'Montenegro',
		'+383' => 'Kosovo',
		'+385' => 'Croácia',
		'+386' => 'Eslovénia',
		'+387' => 'Bósnia e Herzegovina',
		'+389' => 'Macedônia do Norte',
		'+39' => 'Itália',
		'+40' => 'Romênia',
		'+41' => 'Suíça',
		'+420' => 'Tchéquia',
		'+421' => 'Eslováquia',
		'+423' => 'Liechtenstein',
		'+43' => 'Áustria',
		'+44' => 'Reino Unido',
		'+45' => 'Dinamarca',
		'+46' => 'Suécia',
		'+47' => 'Noruega',
		'+48' => 'Polônia',
		'+49' => 'Alemanha',
		'+500' => 'Ilhas Malvinas',
		'+500' => 'Ilhas Geórgia do Sul e Sandwich do Sul',
		'+501' => 'Belize',
		'+502' => 'Guatemala',
		'+503' => 'El Salvador',
		'+504' => 'Honduras',
		'+505' => 'Nicarágua',
		'+506' => 'Costa Rica',
		'+507' => 'Panamá',
		'+508' => 'São Pedro e Miquelão',
		'+509' => 'Haiti',
		'+51' => 'Peru',
		'+52' => 'México',
		'+53' => 'Cuba',
		'+54' => 'Argentina',
		'+55' => 'Brasil',
		'+56' => 'Chile',
		'+57' => 'Colômbia',
		'+58' => 'Venezuela',
		'+590' => 'Guadalupe',
		'+590' => 'São Bartolomeu',
		'+590' => 'São Martinho',
		'+591' => 'Bolívia',
		'+592' => 'Guiana',
		'+593' => 'Equador',
		'+594' => 'Guiana Francesa',
		'+595' => 'Paraguai',
		'+596' => 'Martinica',
		'+597' => 'Suriname',
		'+598' => 'Uruguai',
		'+599' => 'Bonaire',
		'+599' => 'Curaçao',
		'+599' => 'Saba',
		'+599' => 'Santo Eustáquio',
		'+60' => 'Malásia',
		'+61' => 'Austrália',
		'+61' => 'Ilha Christmas',
		'+61' => 'Ilhas Cocos',
		'+62' => 'Indonésia',
		'+63' => 'Filipinas',
		'+64' => 'Nova Zelândia',
		'+64' => 'Ilhas Pitcairn',
		'+65' => 'Singapura',
		'+66' => 'Tailândia',
		'+670' => 'Timor-Leste',
		'+672' => 'Ilha Norfolque',
		'+672' => 'Território Antártico Australiano',
		'+673' => 'Brunei',
		'+674' => 'Nauru',
		'+675' => 'Papua-Nova Guiné',
		'+676' => 'Tonga',
		'+677' => 'Ilhas Salomão',
		'+678' => 'Vanuatu',
		'+679' => 'Fiji',
		'+680' => 'Palau',
		'+681' => 'Wallis e Futuna',
		'+682' => 'Ilhas Cook',
		'+683' => 'Niue',
		'+685' => 'Samoa',
		'+686' => 'Quiribáti',
		'+687' => 'Nova Caledônia',
		'+688' => 'Tuvalu',
		'+689' => 'Polinésia Francesa',
		'+690' => 'Toquelau',
		'+691' => 'Estados Federados da Micronésia',
		'+692' => 'Ilhas Marshall',
		'+7' => 'Cazaquistão',
		'+7' => 'Rússia',
		'+81' => 'Japão',
		'+82' => 'Coreia do Sul',
		'+84' => 'Vietnã',
		'+850' => 'Coreia do Norte',
		'+852' => 'Hong Kong',
		'+853' => 'Macau',
		'+855' => 'Camboja',
		'+856' => 'Laos',
		'+86' => 'China',
		'+880' => 'Bangladexe',
		'+886' => 'Taiwan',
		'+90' => 'Turquia',
		'+91' => 'Índia',
		'+92' => 'Paquistão',
		'+93' => 'Afeganistão',
		'+94' => 'Seri Lanca',
		'+95' => 'Mianmar',
		'+960' => 'Maldivas',
		'+961' => 'Líbano',
		'+962' => 'Jordânia',
		'+963' => 'Síria',
		'+964' => 'Iraque',
		'+965' => 'Kuwait',
		'+966' => 'Arábia Saudita',
		'+967' => 'Iêmen',
		'+968' => 'Omã',
		'+970' => 'Palestina',
		'+971' => 'Emirados Árabes Unidos',
		'+972' => 'Israel',
		'+973' => 'Barém',
		'+974' => 'Catar',
		'+975' => 'Butão',
		'+976' => 'Mongólia',
		'+977' => 'Nepal',
		'+98' => 'Irã',
		'+992' => 'Tajiquistão',
		'+993' => 'Turcomenistão',
		'+994' => 'Azerbaijão',
		'+995' => 'Geórgia',
		'+996' => 'Quirguistão',
		'+998' => 'Uzbequistão',
	];

	public static function IsSeller()
	{
		if (!property_exists($_SESSION["sessao_usuario"], "cnpj")) {
			header("Location: http://localhost/tcc/app/Views/Produtos/index.php");
			exit;
		}
	}

	// * @param String status -> 0 = erro, 1 = sucesso
	public static function Response(string $message, array $body = null, string $status)
	{

		if (!empty($body)) {
			echo json_encode(
				[
					"data" => [
						"mensagem" => $message,
						"body" => $body
					],
					"status" => $status
				]
			);
		} else {
			echo json_encode(
				[
					"data" => [
						"mensagem" => $message,
					],
					"status" => $status
				]
			);
		}
		exit;
	}
}
