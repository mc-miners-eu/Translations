<?php
	//Thanks to org.bukkit.Material
	$mats = array (
		0   => 'Vzduch',
		1   => 'Kámen',
		2   => 'Tráva',
		3   => 'Hlína',
		4   => 'Kamenná sut',
		5   => 'Prkna',
		6   => 'Sazenice',
		7   => 'Bedrock',
		8   => 'Voda',
		9   => 'Stojatá voda',
		10  => 'Láva',
		11  => 'Stojatá láva',
		12  => 'Písek',
		13  => 'Štěrk',
		14  => 'Zlatá ruda',
		15  => 'Železná ruda',
		16  => 'Uhelné ložisko',
		17  => 'Dřevo',
		18  => 'Listy',
		19  => 'Sponge',
		20  => 'Sklo',
		21  => 'Ruda lapisu',
		22  => 'Blok lapisu',
		23  => 'Dávkovač',
		24  => 'Pískovec',
		25  => 'Note Block',
		26  => 'Postel',
		27  => 'Poháněná kolej',
		28  => 'Kolej s čidlem',
		29  => 'Lepivý píst',
		30  => 'Pavučina',
		31  => 'Vysoká tráva',
		32  => 'Seschlý keř',
		33  => 'Píst',
		34  => 'Rameno pístu',
		35  => 'Vlna',
		36  => 'Blok posunutý pistonem',
		37  => 'Pampeliška',
		38  => 'Růže',
		39  => 'Hnědá houba',
		40  => 'Červená houba',
		41  => 'Blok zlata',
		42  => 'Blok železa',
		43  => 'Dvojschod',
		44  => 'Schod',
		45  => 'Cihla',
		46  => 'TNT',
		47  => 'Knihovna',
		48  => 'Zarostlá suť',
		49  => 'Obsidian',
		50  => 'Pochodeň',
		51  => 'Oheň',
		52  => 'Mob Spawner',
		53  => 'Dřevěné schody',
		54  => 'Truhla',
		55  => 'Redstone',
		56  => 'Diamantová ruda',
		57  => 'Blok diamantů',
		58  => 'Pracovní stul',
		59  => 'Obilí',
		60  => 'Záhonek',
		61  => 'Pec',
		62  => 'Hořící pec',
		63  => 'Cedule',
		64  => 'Dřevěné dveře',
		65  => 'Žebřík',
		66  => 'Kolej',
		67  => 'Suťové schodiště',
		68  => 'Nástěnná cedulka',
		69  => 'Páka',
		70  => 'Kamenná nášlapná deska',
		71  => 'Železné dveře',
		72  => 'Dřevěná nášlapná deska',
		73  => 'Redstone ruda',
		74  => 'Svítící redstone',
		75  => 'Vypnutá rs pochodeň',
		76  => 'Zapnutá rs pochodeň',
		77  => 'Tlačítko',
		78  => 'Sníh',
		79  => 'Led',
		80  => 'Blok sněhu',
		81  => 'Kaktus',
		82  => 'Jíl',
		83  => 'Cukrová třtina',
		84  => 'Hrací skříňka',
		85  => 'Plot',
		86  => 'Dýně',
		87  => 'Pekelný kámen',
		88  => 'Soulsand',
		89  => 'Glowstone',
		90  => 'Portál',
		91  => 'Svítící dýně',
		92  => 'Dort',
		93  => 'Vypnutý repeater',
		94  => 'Zapnutý repeater',
		95  => 'Zamčená truhla',
		96  => 'Poklop',
                97  => 'Blok s silverfish',
                98  => 'Kamenné cihly',
                99  => '	Velká hnědá houba',
                100 => 'Velká červená houba',
                101 => 'Železné mříže',
                102 => 'Tabulka skla',
                103 => 'Meloun',
                104 => 'Sazenice dýně',
                105 => 'Sazenice melounu',
                106 => 'Liány',
                107 => 'Branka',
                108 => 'Cihlové schody',
                109 => 'Schody z kamenných cihel',
                110 => 'Podhoubí',
                111 => 'Leknín',
                112 => 'Pekelná cihla',
                113 => 'Pekelný plot',
                114 => 'Pekelné schody',
                115 => 'Pekelný bradavičník',
                116 => 'Čarovný stůl',
                117 => 'Stojan na lektvary',
                118 => 'Kotlík',
                119 => 'Portál k Endu',
                120 => 'Rám portálu k Endu',
                121 => 'Kámen z Endu',
                122 => 'Dračí vejce',
                123 => 'Vypnutá rs lampa',
                124 => 'Zapnutá rs lampa',
		125 => 'Dřevěné dvojschody',
		126 => 'Půlblok',
		127 => 'Kakaová rostlina',
		128 => 'Pískové schody',
		129 => 'Ruda emeraldu',
		130 => 'Ender truhla',
		131 => 'Uchycení nástražného drátu',
		132 => 'Nástražný drát',
		133 => 'Blok emeraldu',
		134 => 'Smrkové schody',
		135 => 'Březové schody',
		136 => 'Sekvojové schody',
		137 => 'Příkazový blok',
		138 => 'Beacon',
		139 => 'Zídka',
		140 => 'Květináč',
		141 => 'Mrkev',
		142 => 'Brambory',
		143 => 'Dřevěné tlačítko',
		144 => 'Hlava',
		145 => 'Kovadlina',
                146 => 'Bedna s pastí',
                147 => 'Zatížitelná nášlapná deska (slabá)',
                148 => 'zatížitelná nášlapná deska (silná)',
                149 => 'Porovnávač redstone signálu (vypnutý)',
                150 => 'Porovnávač redstone signálu (zapnutý)',
                151 => 'Detektor denního svìtla',
                152 => 'Redstone blok',
                153 => 'Ruda Quartz',
                154 => 'Násypka',
                155 => 'Quartz Block',
                156 => 'Quartz schody',
                157 => 'Aktivační kolej',
                158 => 'Dropper',
 );
?>
