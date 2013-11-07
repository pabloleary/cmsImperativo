<?php
/*
 * Quick Calendar Using PHP and AJAX
 * Copyright (C) 2005-2007
 * Version 1.1;
 * Last modified: 23 Jan 2007
 * Author: Bernard Peh
 * Email: bpeh@sitecritic.net
 * Website://web-developer.sitecritic.net/
 * File Name: quick_calendar.php
 *
 * LICENSE: 
 * This is my contribution back to the open source community. You may modify the codes according 
 * to your needs but please keep this section intact.
 * 
 * DESCRIPTION:
 * Generate a simple calendar that can integrate seamlessly into any system with minimal 
 * installation. You must be running be running PHP 4 at the minimal. 
 * 
 * SPECIAL THANKS TO FRIENDS FROM EVOLT.ORG
 * Adam Taylor, kirk837
 *
 * INSTALLATION:
 * 1. Save the code in a file call quick_calendar.php. Then Insert this file into anywhere where 
 * you want the calendar to appear. Use:
 *
 *      require_once('quick_calendar.php');
 *
 *		or if you save the file elsewhere, require_once('dir_path/quick_calendar.php')
 *
 * 2. Create a table in your database. If you are using your own table, you need to map the fields
 * appropriately.
 *
 * CREATE TABLE `calendar` ( 
 * `id` INT NOT NULL AUTO_INCREMENT ,
`* day` VARCHAR( 2 ) NOT NULL ,
 * `month` VARCHAR( 2 ) NOT NULL ,
 * `year` VARCHAR( 4 ) NOT NULL ,
 * `link` VARCHAR( 255 ) NOT NULL ,
 * `desc` TEXT NOT NULL ,
 * PRIMARY KEY ( `id` ) 
 * );
 *
 * 3. Configure the db and path access below. Use any db of your choice. You can also configure 
 * the CSS to change the look and feel of the calendar.
 */

// This year
$y = date('Y');
// This month
$m = date('n');
// This Day
$d = date('j');
$today = array('day'=>$d, 'month'=>$m, 'year'=>$y);
// If user specify Day, Month and Year, reset the var
if (isset($_GET['m'])) {
	$y = $_GET['y'];
	$m = $_GET['m'];
}



/*
// CONFIGURE THE DB ACCESS
$dbhost = 'localhost';
$dbuser = 'your_name';
$dbpass = 'your_pass';
$database = "your_db";
$dbConnect = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$dbConnect) {
   die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db($database, $dbConnect);
if (!$db_selected) {
   die ('db selection error : ' . mysql_error());
}
*/
// name of table
$tableName = 'calendar';

// name of css
$css = 'calendar';

// Location of the calendar script file from the root
$ajaxPath = 'calendarAjax.php';

// END OF CONFIGURATION. YOU CAN CHANGE THE CSS. THE OTHER CODES CAN BE KEPT AS DEFAULT IF YOU WANT.
/*
$sql = "SELECT * FROM $tableName WHERE (month='$m' AND year='$y') || (month='*' AND year='$y') || (month='$m' AND year='*') || (month='*' AND year='*')";

$rs = mysql_query($sql);
$links = array(); 
while ($rw = mysql_fetch_array($rs)) {
	extract($rw);
	$links[] = array('day'=>$day, 'month'=>$month, 'year'=>$year, 'link'=>$link, 'desc'=>$desc);
}
*/

/*
// This year
$y = date('Y');
// This month
$m = date('n');
// This Day
$d = date('j');
$link = "http://www.google.com.br";
$link1 = "http://www.yahoo.com.br";
$desc = "site google";
$links[0] = array('day'=>$d, 'month'=>$m, 'year'=>$y,'link'=>$link, 'desc'=>$desc);
$links[1] = array('day'=>$d+1, 'month'=>$m, 'year'=>$y,'link'=>$link1, 'desc'=>$desc);
*/


//include("../cms/model/Conecta.php");
include("../cms/model/dao/DaoCalendar.php");

//$conexao   =   new Conecta();
$daoCalendar = new DaoCalendar($conexao);
$links = $daoCalendar->buildingEvento();

//$links[0] = array('day'=>$d, 'month'=>$m, 'year'=>$y,'link'=>$link, 'desc'=>$desc);
//$links[1] = array('day'=>$d+1, 'month'=>$m, 'year'=>$y,'link'=>$link1, 'desc'=>$desc);

// If user specify Day, Month and Year, reset the var
if (isset($_GET['m'])) {
	$y = $_GET['y'];
	$m = $_GET['m'];
}

// name of table
$tableName = 'calendar';

// name of css
$css = 'calendar';

?>

<style type="text/css">
.calendar {
	/** configure the width **/
	width:100px;
	background-color: #feefe1;
	border: 1px solid #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	margin:0px;
	padding:0px;
	text-align:center;
}
.calendar th {
	background-color: #fee4cb;
	font-weight: bold;
	height: 20px;
}
.calendar .header {
	background-color: orange;
	font-weight: bold;
	height: 24px;
	color: #FFFFFF;
}
.calendar .footer {
	background-color: orange;
	font-weight: bold;
	font-size:0.8em;
	color: #FFFFFF;
	width:100%;
}
.calendar td {
	width: 22px;
	height: 20px;
	text-align: center;
	font-size:0.9em;
	padding: 2px;
}
.calendar th{
    text-align: center;
}

.calendar .today {
	width: 14px;
	height: 12px;
	background-color: orange;
	padding: 2px;
	border: 1px solid #000000;
}

.calendar .link {
	width: 14px;
	height: 12px;
	background-color:orange;
	padding: 2px;
	border: 1px solid #000000;
}

.calendar a, .calendar a:link, .calendar a:hover {
	font-weight: bold;
	text-decoration: underline;
	color: #000000;

}
.calendar a.headerNav, .calendar a:link.headerNav, .calendar a:hover.headerNav {
	background-color: #5670B3;
	color: #ffffff;
}

.calendar a.footerNav, .calendar a:link.footerNav, .calendar a:hover.footerNav {
	width: 100%;
	background-color: #5670B3;
	color: #ffffff;
}
</style>
<?php
class CreateQCalendarArray {

	var $daysInMonth;
	var $weeksInMonth;
	var $firstDay;
	var $week;
	var $month;
	var $year;

	function CreateQCalendarArray($month, $year) {
		$this->month = $month;
		$this->year = $year;
		$this->week = array();
		$this->daysInMonth = date("t",mktime(0,0,0,$month,1,$year));
		// get first day of the month
		$this->firstDay = date("w", mktime(0,0,0,$month,1,$year));
		$tempDays = $this->firstDay + $this->daysInMonth;
		$this->weeksInMonth = ceil($tempDays/7);
		$this->fillArray();
	}
	
	function fillArray() {
		// create a 2-d array
		$counter=0;
		for($j=0;$j<$this->weeksInMonth;$j++) {
			for($i=0;$i<7;$i++) {
				$counter++;
				$this->week[$j][$i] = $counter; 
				// offset the days
				$this->week[$j][$i] -= $this->firstDay;
				if (($this->week[$j][$i] < 1) || ($this->week[$j][$i] > $this->daysInMonth)) {	
					$this->week[$j][$i] = "";
				}
			}
		}
	}
}

class QCalendar {
	
	var $html;
	var $weeksInMonth;
	var $week;
	var $month;
	var $year;
	var $today;
	var $links;
	var $css;

	function QCalendar($cArray, $today, &$links, $css='') {
		$this->month = $cArray->month;
		$this->year = $cArray->year;
		$this->weeksInMonth = $cArray->weeksInMonth;
		$this->week = $cArray->week;
		$this->today = $today;
		$this->links = $links;
		$this->css = $css;
		$this->createHeader();
		$this->createBody();
		$this->createFooter();
	}
	
	function createHeader() {

		$meses = array(1 => "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", 
				"Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
		$mes = date('n', mktime(0,0,0,$this->month,1,$this->year));	
		$header = $meses[$mes].' '.$this->year;
  		$nextMonth = $this->month+1;
  		$prevMonth = $this->month-1;
  		
		
		switch($this->month) {
			case 1:
	   			$lYear = $this->year;
   				$pYear = $this->year-1;
   				$nextMonth=2;
   				$prevMonth=12;
   				break;
  			case 12:
   				$lYear = $this->year+1;
   				$pYear = $this->year;
   				$nextMonth=1;
   				$prevMonth=11;
      			break;
  			default:
      			$lYear = $this->year;
	   			$pYear = $this->year;
    	  		break;
  		}
		
		$this->html = "<table cellspacing='0' cellpadding='0' class='$this->css'>
		<tr>
		<th class='header'>&nbsp;</th>
		<th colspan='5' class='header'>$header</th>
		<th class='header'>&nbsp;</th>
		
		
		</tr>";
	}
	
	function createBody(){
		// start rendering table
		$this->html.= "<tr><th>D</th><th>S</th><th>T</th><th>Q</th><th>Q</th><th>S</th><th>S</th></tr>";
		for($j=0;$j<$this->weeksInMonth;$j++) {
			$this->html.= "<tr>";
			for ($i=0;$i<7;$i++) {
				$cellValue = $this->week[$j][$i];
				// if today
				if (($this->today['day'] == $cellValue) && ($this->today['month'] == $this->month) && ($this->today['year'] == $this->year)) {
					$cell = "<div class='today'>$cellValue</div>";
				}
				// else normal day
				else {
					$cell = "$cellValue";
				}
				// if days with link
				if($this->links){
				foreach ($this->links as $val) {
					if (($val['day'] == $cellValue) && (($val['month'] == $this->month) || ($val['month'] == '*')) && (($val['year'] == $this->year) || ($val['year'] == '*'))) {
						$cell = "<div class='link'><a href=\"{$val['link']}\" title='{$val['desc']}'>$cellValue</a></div>";
						break;
					}
					}
				}	
				$this->html.= "<td>$cell</td>";
			}
			$this->html.= "</tr>";
		}	
	}
	
	function createFooter() {
	$meses = array(1 => "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", 
				"Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
		$mes = date('n', mktime(0,0,0,$this->today['month'],1,$this->today['year']));	
		$header = $meses[$mes];
		$this->html .= "<tr><td colspan='7' class='footer'>Hoje é {$this->today['day']} ".$header." de {$this->today['year']}</td></tr></table>";
	}
	
	function render() {
		echo $this->html;
	}
}
?>

<?php
// render calendar now
$cArray = &new CreateQCalendarArray($m, $y);
$cal = &new QCalendar($cArray, $today, $links, $css);
//if (!isset($_GET['ran'])) {
	echo "<div id='quickCalender'>";
//}
$cal->render();
//if (!isset($_GET['ran'])) {
	echo "</div>";
//}
?>

