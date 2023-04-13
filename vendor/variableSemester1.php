<?php
//semester1 - оценки за первый семестр;
$Physical_training1=$_POST['$Physical_training1'];
$Foreign_language1=$_POST['Foreign_language1'];
$Computer_science1=$_POST['Computer_science1'];
$Mathematics1=$_POST['Mathematics1'];
$Drill1=$_POST['Drill1'];

mysqli_query($connect, "INSERT INTO `semester1` (`id`, `semester_id`, `Physical_training`, `Foreign_language`, `Computer_science`, `Mathematics`, `Drill`) 
VALUES (NULL, '$user_id', '$Physical_training1', '$Foreign_language1', '$Computer_science1', '$Mathematics1', '$Drill1')");


//semester2 - оценки за второй семестр;
$Philosophy2=$_POST['Philosophy2'];
$Sociology2=$_POST['Sociology2'];
$Physics2=$_POST['Physics2'];
$Foreign_language2=$_POST['Foreign_language2'];
$Story2=$_POST['Story2'];
$Engineering2=$_POST['Engineering2'];

mysqli_query($connect, "INSERT INTO `semester2` (`id`, `semester_id`, `Philosophy`, `Sociology`, `Physics`, `Foreign_language`, `Story`, `Engineering`) 
VALUES (NULL, '$user_id', '$Philosophy2', '$Sociology2', '$Physics2', '$Foreign_language2', '$Story2', '$Engineering2')");


//semester3 - оценки за третий семестр;
$Drill3=$_POST['Drill3'];
$Philosophy3=$_POST['Philosophy3'];
$Sociology3=$_POST['Sociology3'];
$Physics3=$_POST['Physics3'];
$Foreign_language3=$_POST['Foreign_language3'];
$Story3=$_POST['Story3'];
$Engineering3=$_POST['Engineering3'];
$Physical_training3=$_POST['Physical_training3'];
$Mathematics3=$_POST['Mathematics3'];

mysqli_query($connect, "INSERT INTO `semester3` (`id`, `semester_id`, `Drill`, `Philosophy`, `Sociology`, `Physics`, `Foreign_language`, `Story`, `Engineering`, `Physical_training`, `Mathematics`) 
VALUES (NULL, '$user_id', '$Drill3', '$Philosophy3', '$Sociology3', '$Physics3', '$Foreign_language3', '$Story3', '$Engineering3', '$Physical_training3', '$Mathematics3')");


//semester4 - оценки за четвертый семестр;
$Foreign_language4=$_POST['Foreign_language4'];
$Mathematics4=$_POST['Mathematics4'];
$Military_topography4=$_POST['Military_topography4'];
$Drill4=$_POST['Drill4'];
$Physical_training4=$_POST['Physical_training4'];
$automotive_training4=$_POST['automotive_training4'];
$Computers4=$_POST['Computers4'];
$Electrical4=$_POST['Electrical4'];

mysqli_query($connect, "INSERT INTO `semester4` (`id`, `semester_id`, `Foreign_language`, `Mathematics`, `Military_topography`, `Drill`, `Physical_training`, `automotive_training`, `Computers`, `Electrical`) 
VALUES (NULL, '$user_id', '$Foreign_language4', '$Mathematics4', '$Military_topography4', '$Drill4', '$Physical_training4', '$automotive_training4', '$Computers4', '$Electrical4')");


//semester5 - оценки за пятый семестр;
$Automata_theory5=$_POST['Automata_theory5'];
$Physical_training5=$_POST['Physical_training5'];
$Power_supply5=$_POST['Power_supply5'];
$OS5=$_POST['OS5'];
$Life_safety5=$_POST['Life_safety5'];
$Modeling_and_systems5=$_POST['Modeling_and_systems5'];
$Networks5=$_POST['Networks5'];
$Psychology_andpedagogy5=$_POST['Psychology_andpedagogy5'];
$Foreign_language5=$_POST['Foreign_language5'];
$Theory_of_computational5=$_POST['Theory_of_computational5'];

mysqli_query($connect, "INSERT INTO `semester5` (`id`, `semester_id`, `Automata_theory`, `Physical_training`, `Power_supply`, `OS`, `Life_safety`, `Modeling_and_systems`, `Networks`, `Psychology_andpedagogy`, `Foreign_language`, `Theory_of_computational`) 
VALUES (NULL, '$user_id', '$Automata_theory5', '$Physical_training5', '$Power_supply5', '$OS5', '$Life_safety5', '$Modeling_and_systems5', '$Networks5', '$Psychology_andpedagogy5', '$Foreign_language5', '$Theory_of_computational5')");


//semester6 - оценки за шестой семестр;
$Drill6=$_POST['Drill6'];
$General_tactics6=$_POST['General_tactics6'];
$Organization_of_communication6=$_POST['Organization_of_communication6'];
$Military_communications6=$_POST['Military_communications6'];
$Methods6=$_POST['Methods6'];
$database66=$_POST['database66'];
$Modeling6=$_POST['Modeling6'];
$Networks6=$_POST['Networks6'];
$Physical_training6=$_POST['Physical_training6'];
$military_history6=$_POST['military_history6'];

mysqli_query($connect, "INSERT INTO `semester6` (`id`, `semester_id`, `Drill`, `General_tactics`, `Organization_of_communication`, `Military_communications`, `Methods`, `database6`, `Modeling`, `Networks`, `Physical_training`, `military_history`) 
VALUES (NULL, '$user_id', '$Drill6', '$General_tactics6', '$Organization_of_communication6', '$Military_communications6', '$Methods6', '$database66', '$Modeling6', '$Networks6', '$Physical_training6', '$military_history6')");


//semester7 - оценки за седьмой семестр;
$Physical_training7=$_POST['Physical_training7'];
$RCB7=$_POST['RCB7'];
$Military_engineering7=$_POST['Military_engineering7'];
$General_tactics7=$_POST['General_tactics7'];
$BPPAUASUUSPUOSV7=$_POST['BPPAUASUUSPUOSV7'];
$Medical_support7=$_POST['Medical_support7'];
$Jurisprudence7=$_POST['Jurisprudence7'];
$automated7=$_POST['automated7'];

mysqli_query($connect, "INSERT INTO `semester7` (`id`, `semester_id`, `Physical_training`, `RCB`, `Military_engineering`, `General_tactics`, `BPPAUASUUSPUOSV`, `Medical_support`, `Jurisprudence`, `automated`) 
VALUES (NULL, '$user_id', '$Physical_training7', '$RCB7', '$Military_engineering7', '$General_tactics7', '$BPPAUASUUSPUOSV7', '$Medical_support7', '$Jurisprudence7', '$automated7')");


//semester8 - оценки за восьмой семестр;
$Metrology8=$_POST['Metrology8'];
$Data_protection8=$_POST['Data_protection8'];
$BPPAUASUUSPUOSV8=$_POST['BPPAUASUUSPUOSV8'];
$Automated_systems8=$_POST['Automated_systems8'];
$Automated_computing8=$_POST['Automated_computing8'];
$Organization8=$_POST['Organization8'];
$Technical_support8=$_POST['Technical_support8'];
$Physical_training8=$_POST['Physical_training8'];

mysqli_query($connect, "INSERT INTO `semester8` (`id`, `semester_id`, `Metrology`, `Data_protection`, `BPPAUASUUSPUOSV`, `Automated_systems`, `Automated_computing`, `Organization`, `Technical_support`, `Physical_training`) 
VALUES (NULL, '$user_id', '$Metrology8', '$Data_protection8', '$BPPAUASUUSPUOSV8', '$Automated_systems8', '$Automated_computing8', '$Organization8', '$Technical_support8', '$Physical_training8')");