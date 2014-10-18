<?php 
	include('arrays.php');	
	require_once('class.table.php'); 		//�������� �� ������ ��������� ��������

	//��������� ������ ������� $_POST � �������� �������� ������
	// if (isset($_POST['set'])		&& 	is_array($_POST['set'])		&& count($_POST['set'])		> 0){
	// 	$data = $_POST['set']; //	print '<br/>set : ';print_r ($_POST['set']);
	// }

	//��������� ������ ������� $_GET � �������� �������� ������
	if (isset($_GET['set'])		&& 	is_array($_GET['set'])		&& count($_GET['set'])		> 0){
		$data = $_GET['set']; //	print '<br/>set : ';print_r ($_GET['set']);
	}



	// ����� ��������������
function showFeatures($array,$table,$h3,$inpit)
{
	$table->setTd(0,1,'����',null);

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

// �������������� �������
	$table = new setTABLE;	
	$table->setName('�������������� �������:');																				
	$table->setTd(0,2,'+% � ���',null);
$table_[] = showFeatures($data['TOBAPbI'],$table,'','set[TOBAPbI]');

// �������������� �����
	$table = new setTABLE;	
	$table->setName('�������������� �����:');																				
$table_[] = showFeatures($data['CbIPbE'],$table,'','set[CbIPbE]');

// �������������� ���������
	$table = new setTABLE;	
	$table->setName('�������������� ���������'.':');																				
	$table->setTd(0,1,'������� �����',null);
//	$table->setTd(0,0,'��������',null);
	foreach ($data['shop'] as $k=>$v){
	$table->setTd($k+1,0,$data['shop'][$k][0],'set[shop]['.$k.'][0]');
	$table->setTd($k+1,1,$data['shop'][$k][1],'set[shop]['.$k.'][1]');
	}
	$table_[]=$table->makeTable();

// ����� ��� ������������ 1 ��. ��������� ��������� �����: 
	$table = new setTABLE;	
	$table->setName('��� ������������ 1 ��. ��������� ���������:');																				
	// ������ ������
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

// ������� ��� ����� 1 ��. ��������� ��������� �� �����:
	$table = new TABLE;
	$table->	setName('������� ��� ����� 1 ��. ��������� ��������� <i>�� �����:');
	//������ ������������� 1 ��. ��������� ���������
	foreach ($data['TOBAPbI'] as $k1=>$v)
//	for ($k1=0;	$k1<count($data['TOBAPbI']);		$k1++)		
	{ 	
		$table->setTd($k1,0,$data['TOBAPbI'][$k1][0],null);
	//		foreach ($data['PACXODbI'] as $k2=>$v)
			for ($k2=0;	$k2<count($data['PACXODbI'][$k1]);	$k2++)		
			{	
				$table->setTd($k1,$k2+1,'- '.$data['PACXODbI'][$k1][$k2].' <sup><sub>x</sub></sup> '.$data['CbIPbE'][$k2][1],null);
				$data['DOXODbI'][$k1]['CTOiMOCTb_CbIPbjA']	-=					//<-	 [ = +
				(	$data['PACXODbI'][$k1][$k2]	*	$data['CbIPbE'][$k2][1]	);	//  - (	���-��	* ��������� ) �����] CTOiMOCTb 
			}
		$table->setTd($k1,5,' = '.$data['DOXODbI'][$k1]['CTOiMOCTb_CbIPbjA'].'',null);
		$table->setTd($k1,6,'; + '.$data['TOBAPbI'][$k1][1],null);
		$table->setTd($k1,7,' = '.($data['DOXODbI'][$k1]['CTOiMOCTb_CbIPbjA']+$data['TOBAPbI'][$k1][1]),null);
		$data['DOXODbI'][$k1]['cPbIHKA']	-=	$data['TOBAPbI'][$k1][1]; 		//['DOXODbI'][]['cPbIHKA'] - �������� ���� ������ (��� f. doxodnost)
	}

	$table_[]=$table->makeTable();
//	print $table->makeTable();

function doxodnost($data,$table,$ts)
{// $ts; (��� ���-��)	= 1 = ��������� ����������� �������� �� ������������ = 2 = ��������� ������� �� �����
	// ����� ������������� ���������
	foreach ($data['shop'] as $k=>$v){
		$table->setTd(0,$k+2,$data['shop'][$k][0],$data['shop'][$k][1]);	// �������� �������� // ����� ��������
	}
	// ����� ������������� �������
	foreach ($data['TOBAPbI'] as $k=>$v){
		$table->setTd($k+3,0,$data['TOBAPbI'][$k][0],null); // ������������ ������
//		$table->setTd($k+3,1,$data['TOBAPbI'][$k][2],null);	// +% � ������ ��������
	}
	// �������
	foreach ($data['TOBAPbI'] as $k1=>$v)	foreach ($data['shop'] as $k2=>$v){
		$title = '0.01*'.$data['TOBAPbI'][$k1][2].'*'.$data['shop'][$k2][1].'/24'.$data['DOXODbI'][$k1][$ts];
		$value =  0.01*  $data['TOBAPbI'][$k1][2]  *  $data['shop'][$k2][1]  /24+ $data['DOXODbI'][$k1][$ts];
		$table->setTd($k1+3,$k2+2,round($value,0),$title);
	}


//	print $table->makeTable();
	return $table->makeTable();
}#function doxodnost
// ������� ��� ����� 1 ��. ��������� ��������� � ��������:
	$table = new TABLE;	
	$table->	setName('������� ��� ����� 1 ��. <i>���������</i> ��������� <i>� ���������'.':');																				
//	$table->	setTd(2,0,'����� ',null);
//	$table->	setTd(0,0,'������� ',null);
//	$table->	setTd(2,1,'+% � ��� ',null);
//	$table->	setTd(1,0,'������� ��� ',null);

$table_[] = doxodnost($data,$table,'CTOiMOCTb_CbIPbjA');

	// ������� ��� ����� 1 ��. �������� ��������� � ��������: 
	$table = new TABLE;	
	$table->	setName('������� ��� ����� 1 ��. <i>��������</i> ��������� � ���������'.':');																				
$table_[] = doxodnost($data,$table,'cPbIHKA');