<?php
$fundData = []; 
$funds = file_get_contents("funds.csv");
$rows = explode("\n", $funds);
for($i=0; $i<count($rows)-1; $i++){ 
    $cols = explode(",", $rows[$i]);
    $fund = [];
    $fund[] = $cols[0]; 
    $rise = $cols[1]; 
    if(strpos($rise, '-') !== false){
        $rise = "<font color='green'>$rise</font>";
    }else{
        $rise = "<font color='red'>$rise</font>";   
    }
    $fund[] = $rise."%";    
    $rise30 = $cols[2];
    if(strpos($rise30, '-') !== false){
        $rise30 = "<font color='green'>$rise30</font>";
    }else{
        $rise30 = "<font color='red'>$rise30</font>";   
    } 
    $fund[] = $rise30."%"; 
    $rise60 = $cols[3];
    if(strpos($rise60, '-') !== false){
        $rise60 = "<font color='green'>$rise60</font>";
    }else{
        $rise60 = "<font color='red'>$rise60</font>";   
    }
    $fund[] = $rise60."%"; 
    $rise90 = $cols[4];
    if(strpos($rise90, '-') !== false){
        $rise90 = "<font color='green'>$rise90</font>";
    }else{
        $rise90 = "<font color='red'>$rise90</font>";
    }
    $fund[] = $rise90."%"; 
    $fundData[] = $fund;
}
?> 
<tr>
<th>基金名称</th>
<th>涨幅</th>
<th>30日涨幅</th>  
<th>60日涨幅</th> 
<th>90日涨幅</th>
</tr>
<?php foreach($fundData as $fund): ?>
<td><?php echo $fund[0]; ?></td> 
<td><?php echo $fund[1]; ?></td>
<td><?php echo $fund[2]; ?></td>
<td><?php echo $fund[3]; ?></td>
<td><?php echo $fund[4]; ?></td>
</tr>
<?php endforeach; ?>