<div ui-jp="chart" ui-options=" {
  tooltip : {
	  trigger: 'item',
	  formatter: '{a} <br/>{b} : {c} ({d}%)'
  },
  legend: {
	  orient : 'vertical',
	  x : 'left',
	  data:[
  <?php
  $virgula="";
		for($i=0; $i<= count($string); $i++)
		{
			echo $virgula."'".getRow("sms_provincias", "provincia", "sms_pro_id", $result['cod_provincia_ender'])."'";
			$virgula=",";
		}
  ?>
	  ]
  },
  calculable : true,
  series : [
	  {
		  name:'Source',
		  type:'pie',
		  radius : '55%',
		  center: ['50%', '60%'],
		  data:[
			  {value:335, name:'Direct'},
			  {value:310, name:'Mail'},
			  {value:234, name:'Affiliate'},
			  {value:135, name:'AD'},
			  {value:1548, name:'Search'}
		  ]
	  }
  ]
}" style="height:300px" >