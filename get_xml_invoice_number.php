<?php
set_time_limit(0);

$dir_name = '20150903110521-4d';

$d = dir($dir_name);

//先拿掉. 跟..
$d->read();
$d->read();

while(false !== ($entry = $d->read())) 
{
   	$arr_file_name[] = $entry;    
}

$d->close();
?>
<table border="1">
	<?php
	foreach($arr_file_name as $row)
	{		
		$xml = simplexml_load_string(file_get_contents($dir_name.'/'.$row));				
		?>
        <tr>
            <td><?php echo $xml->Main->InvoiceNumber;?></td>
            <td><?php echo $xml->Main->RandomNumber;?></td>  
        </tr>		
        <?php
		unset($arr_xml);		
	}	
	?>	
</table>



