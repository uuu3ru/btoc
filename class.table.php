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
		krsort($array);		//	Сортирует массив по ключам в обратном порядке
		list($maxT, $val) =	//	Присваивает переменным из списка значения подобно массиву
		each($array);		//	Возвращает текущую пару ключ/значение из массива и смещает его указатель
	//	echo '<br/>maxT: '.$maxT;	//	максимальное значение ключа массива
	return $maxT;
 }
 
 function setMaxTDTR(){
 		//	определение максимального значения ключа массива (количество строк таблицы)
		$this->maxTR = $this->calculateTDTR($this->TDs);
//		echo '<br/>maxTR: '.$this->maxTR;	//	максимальное значение ключа массива		

		//	определение максимального значения ключа подмассивов (количество столбцов таблицы)
	foreach ($this->TDs as $key	=>	$value)	{ #перебор подмассивов
		$maxTd = $this->calculateTDTR($value);
		$maxTD = max($maxTD,$maxTd);
	}	$this->maxTD = $maxTD;
//		echo '<br/>maxTD: '.$this->maxTD;	//	максимальное значение ключа массива		
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
