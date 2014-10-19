<?php
	include('arrays.php');	
	require_once('class.table.php'); 		//вложение до начала обработки сценария

	//установка нового массива $_POST в качестве исходных данных
	// if (isset($_POST['set'])		&& 	is_array($_POST['set'])		&& count($_POST['set'])		> 0){
	// 	$data = $_POST['set']; //	print '<br/>set : ';print_r ($_POST['set']);
	// }

	//установка нового массива $_GET в качестве исходных данных
	if (isset($_GET['set'])		&& 	is_array($_GET['set'])		&& count($_GET['set'])		> 0){
		$data = $_GET['set']; //	print '<br/>set : ';print_r ($_GET['set']);
	}



	// Вывод Характеристики
function showFeatures($array,$table,$h3,$inpit)
{
	$table->setTd(0,1,'Цена',null);

	//	$i=-1;
		$ii=-1;
		foreach 	($array		as 	$k1)	{ 	$i++;
			foreach ($k1 		as 	$k2)	{ 	$ii++;	
				$table->setTd($i,$ii,$k2,$inpit.'['.($i-1).']['.$ii.']');
			}
		  $ii=-1;
		}

	return $table->makeTable();
//	print $table->makeTable();
	
}#function showFeatures

// Характеристики товаров
	$table = new setTABLE;	
	$table->setName('Характеристики товаров:');																				
	$table->setTd(0,2,'+% к маг',null);
$table_[] = showFeatures($data['TOBAPbI'],$table,'','set[TOBAPbI]');

// Характеристики сырья
	$table = new setTABLE;	
	$table->setName('Характеристики сырья:');																				
$table_[] = showFeatures($data['CbIPbE'],$table,'','set[CbIPbE]');

// Характеристики магазинов
	$table = new setTABLE;	
	$table->setName('Характеристики магазинов'.':');																				
	$table->setTd(0,1,'Базовый доход',null);
//	$table->setTd(0,0,'Название',null);
	foreach ($data['shop'] as $k=>$v){
	$table->setTd($k+1,0,$data['shop'][$k][0],'set[shop]['.$k.'][0]');
	$table->setTd($k+1,1,$data['shop'][$k][1],'set[shop]['.$k.'][1]');
	}
	$table_[]=$table->makeTable();

// Вывод Для производства 1 ед. продукции требуется сырья: 
	$table = new setTABLE;	
	$table->setName('Для производства 1 ед. продукции требуется:');																				
	// первая строка
	for	($k1=0;	$k1<count($data['CbIPbE']);			$k1++)	 	
		$table->setTd(0,$k1+1,$data['CbIPbE'][$k1][0],null);
	// 														
	for	($k1=0;	$k1<count($data['TOBAPbI']);		$k1++)	{ 	
		$table->setTd($k1+1,0,$data['TOBAPbI'][$k1][0],null);
		for	($k2=0;	$k2<count($data['CbIPbE']);	$k2++)	
			$table->setTd($k1+1,$k2+1,$data[PACXODbI][$k1][$k2],'set[PACXODbI]['.$k1.']['.$k2.']');
	}


	$table_[]=$table->makeTable();
//	print $table->makeTable();

// Выручка при сбыте 1 ед. фабричной продукции на рынке:
	$table = new TABLE;
	$table->	setName('Выручка при сбыте 1 ед. фабричной продукции <i>на рынке:');
	//расчет себестоимости 1 ед. фабричной продукции
	foreach ($data['TOBAPbI'] as $k1=>$v)
//	for ($k1=0;	$k1<count($data['TOBAPbI']);		$k1++)		
	{ 	
		$table->setTd($k1,0,$data['TOBAPbI'][$k1][0],null);
	//		foreach ($data['PACXODbI'] as $k2=>$v)
			for ($k2=0;	$k2<count($data['PACXODbI'][$k1]);	$k2++)		
			{	
				$table->setTd($k1,$k2+1,'- '.$data['PACXODbI'][$k1][$k2].' <sup><sub>x</sub></sup> '.$data['CbIPbE'][$k2][1],null);
				$data['DOXODbI'][$k1]['CTOiMOCTb_CbIPbjA']	-=					//<-	 [ = +
				(	$data['PACXODbI'][$k1][$k2]	*	$data['CbIPbE'][$k2][1]	);	//  - (	кол-во	* стоимость ) сырья] CTOiMOCTb 
			}
		$table->setTd($k1,5,' = '.$data['DOXODbI'][$k1]['CTOiMOCTb_CbIPbjA'].'',null);
		$table->setTd($k1,6,'; + '.$data['TOBAPbI'][$k1][1],null);
		$table->setTd($k1,7,' = '.($data['DOXODbI'][$k1]['CTOiMOCTb_CbIPbjA']+$data['TOBAPbI'][$k1][1]),null);
		$data['DOXODbI'][$k1]['cPbIHKA']	-=	$data['TOBAPbI'][$k1][1]; 		//['DOXODbI'][]['cPbIHKA'] - рыночная цена товара (для f. doxodnost)
	}

	$table_[]=$table->makeTable();
//	print $table->makeTable();

function doxodnost($data,$table,$ts)
{// $ts; (тип себ-ти)	= 1 = стоимость потраченных ресурсов на изготовление = 2 = стоимость покупки на рынке
	// вывод характеристик магазинов
	foreach ($data['shop'] as $k=>$v){
		$table->setTd(0,$k+2,$data['shop'][$k][0],$data['shop'][$k][1]);	// название магазина // доход магазина
	}
	// вывод характеристик товаров
	foreach ($data['TOBAPbI'] as $k=>$v){
		$table->setTd($k+3,0,$data['TOBAPbI'][$k][0],null); // наименование товара
//		$table->setTd($k+3,1,$data['TOBAPbI'][$k][2],null);	// +% к доходу магазина
	}
	// расчеты
	foreach ($data['TOBAPbI'] as $k1=>$v)	foreach ($data['shop'] as $k2=>$v){
		$title = '0.01*'.$data['TOBAPbI'][$k1][2].'*'.$data['shop'][$k2][1].'/24'.$data['DOXODbI'][$k1][$ts];
		$value =  0.01*  $data['TOBAPbI'][$k1][2]  *  $data['shop'][$k2][1]  /24+ $data['DOXODbI'][$k1][$ts];
		$table->setTd($k1+3,$k2+2,round($value,0),$title);
	}


//	print $table->makeTable();
	return $table->makeTable();
}#function doxodnost
// Выручка при сбыте 1 ед. фабричной продукции в магазине:
	$table = new TABLE;	
	$table->	setName('Выручка при сбыте 1 ед. <i>фабричной</i> продукции <i>в магазинах'.':');																				
//	$table->	setTd(2,0,'Товар ',null);
//	$table->	setTd(0,0,'Магазин ',null);
//	$table->	setTd(2,1,'+% к дох ',null);
//	$table->	setTd(1,0,'базовый дох ',null);

$table_[] = doxodnost($data,$table,'CTOiMOCTb_CbIPbjA');

	// Выручка при сбыте 1 ед. рыночной продукции в магазине: 
	$table = new TABLE;	
	$table->	setName('Выручка при сбыте 1 ед. <i>рыночной</i> продукции в магазинах'.':');																				
$table_[] = doxodnost($data,$table,'cPbIHKA');