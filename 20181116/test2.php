<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
  <script type="text/javascript" src="http://www.pureexample.com/js/lib/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://www.pureexample.com/js/flot/jquery.flot.min.js"></script>
<style type="text/css">
        #flotid {width:50%;height:300px;}        
 </style>

 </head>
 <body>
     <div id="flotid">
<?
$s1=$_POST[s1];
$s2=$_POST[s2];
$s3=$_POST[s3];
$s4=$_POST[s4];
$s5=$_POST[s5];
$s6=$_POST[s6];
$s7=$_POST[s7];
$s8=$_POST[s8];
$s9=$_POST[s9];
$s10=$_POST[s10];
$s11=$_POST[s11];
$s12=$_POST[s12];

$k1=$_POST[k1];
$k2=$_POST[k2];
$k3=$_POST[k3];
$k4=$_POST[k4];
$k5=$_POST[k5];
$k6=$_POST[k6];
$k7=$_POST[k7];
$k8=$_POST[k8];
$k9=$_POST[k9];
$k10=$_POST[k10];
$k11=$_POST[k11];
$k12=$_POST[k12];

?>
  <script type="text/javascript" src="http://www.pureexample.com/js/lib/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://www.pureexample.com/js/flot/jquery.flot.min.js"></script>
<script type="text/javascript">

<?


        echo "var data1 = [[1, $s1], [2, $s2], [3, $s3], [4, $s4], [5, $s5], [6, $s6], [7, $s7], [8, $s8], [9, $s9], [10, $s10], [11, $s11], [12, $s12]];";
        echo "var data2 = [[1, $k1], [2, $k2], [3, $k3], [4, $k4], [5, $k5], [6, $k6], [7, $k7], [8, $k8], [9, $k9], [10, $k10], [11, $k11], [12, $k12]];";

       echo "var dataset = [{label: ' 風險股',data: data1},{label: '績優股',data: data2}];";
 
       echo " var options = {series: {lines: { show: true },points: {radius: 4,show: true}}};";
 
	
	
	?>
	$(document).ready(function () {$.plot($('#flotid'), dataset, options);});
    </script>
</div>
 </body>
</html>


