<?
class setTABLE extends TABLE
{
 function __construct(){}
 function setTd($tr,$td,$value,$name)	{	
						$this->TDs[$tr][$td] = '<input ';
	 if ($name != null)	$this->TDs[$tr][$td] .= 'name="'.$name.'" ';
	 else				$this->TDs[$tr][$td] .= 'disabled="disabled" class="disabled" ';
						$this->TDs[$tr][$td] .= 'value="'.$value.'">';
 }
}

class TABLE
{
 function __construct(){
 }
 
 function setName($value){	$this->name = $value; 
 }
 
# function setTd($tr,$td,$value)	{	$this->TDs[$tr][$td] = $value;	}
 function addTd($tr,$td,$value)	{	$this->TDs[$tr][$td] = $value;	
 }
 
 //function showTd($tr,$td)	{	echo ' : $TDs['.$tr.']['.$td.']='.$this->TDs[$tr][$td];	}
 function setTd($tr,$td,$value,$title)	{	
	 if ($title != null)$this->TDs[$tr][$td]  = '<a title="'.$title.'">';
						$this->TDs[$tr][$td] .= $value;
 }
 
 function calculateTDTR($array){
		krsort($array);		//	��������� ������ �� ������ � �������� �������
		list($maxT, $val) =	//	����������� ���������� �� ������ �������� ������� �������
		each($array);		//	���������� ������� ���� ����/�������� �� ������� � ������� ��� ���������
	//	echo '<br/>maxT: '.$maxT;	//	������������ �������� ����� �������
	return $maxT;
 }
 
 function setMaxTDTR(){
 		//	����������� ������������� �������� ����� ������� (���������� ����� �������)
		$this->maxTR = $this->calculateTDTR($this->TDs);
//		echo '<br/>maxTR: '.$this->maxTR;	//	������������ �������� ����� �������		

		//	����������� ������������� �������� ����� ����������� (���������� �������� �������)
	foreach ($this->TDs as $key	=>	$value)	{ #������� �����������
		$maxTd = $this->calculateTDTR($value);
		$maxTD = max($maxTD,$maxTd);
	}	$this->maxTD = $maxTD;
//		echo '<br/>maxTD: '.$this->maxTD;	//	������������ �������� ����� �������		
 }

 function makeTable() {	
	$br='
';	$this->setMaxTDTR();
	$print.=$br.$br.'<table border=0><tr><td colspan="'.($this->maxTD+1).'"><h4>'.$this->name;
	for ($tr=0;$tr<=$this->maxTR;$tr++){
		$print.=$br.'<tr>';
			for ($td=0;$td<=$this->maxTD;$td++)
			$print.=$br.'<td>'.$this->TDs[$tr][$td];
	}
	$print.=$br.'</table>';
	return $print;
 }

 function showTable() {
	print $this->makeTable();
 }
 
}
