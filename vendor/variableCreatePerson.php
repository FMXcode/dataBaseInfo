<?php

require_once '../config/connect.php';

require_once 'variableGeneralInformation.php';
//variable_general_information - Общие сведения;
//variable_general_result - Результаты Егэ;

require_once 'variableGeneralData.php';
//variable_general_data - Личные данные;
//family - семья;

require_once 'variableCreateSRW.php';
//variable_srw - Участие в НИР;
//variable_other_srw - Другие значимые достижения в области научно-методической деятельности

require_once 'variableCreateSport.php';
//variable_sport - Спортивная деятельность;

require_once 'variableCreateIncentives.php';
//variable_Incentives - Поощренияж;

require_once 'variableCreatePenalties.php';
//variable_penalties - Взыскания;

header('Location: /');
