<?php

namespace MyProject;

require_once 'vendor/autoload.php';

$newStrain1 = new Strain('white widow', 'hybrid', 22.3);
$newStrain2 = new Strain('Blueberry', 'indika', 24.5);
$newStrain3 = new Strain('AK-47', 'sativa', 20.2);
$newMedicalStrain1 = new MedicalStrain('Gods power', 'hybrid', 28.7, 42);

$newCustomer1 = new Customer('Ivan', 25, 'duben55@mail.ru');
$newCustomer2 = new Customer('Maxim', 25, 'm_tyrtov@gmail.com');
$newCustomer3 = new Customer('Nagaina', 25, 'lagunov_egor@examle.com');

$newDis = new Dispensary();

$newDis->addStrain($newStrain1);
$newDis->addStrain($newStrain2);
$newDis->addStrain($newStrain3);
$newDis->addStrain($newMedicalStrain1);

$newDis->addCustomer($newCustomer1);
$newDis->addCustomer($newCustomer2);
$newDis->addCustomer($newCustomer3);

//$newDis->recordSale($newCustomer1,$newStrain1,2);
//$newDis->findStrainsByType('hybrid');
//$newDis->removeCustomerByEmail('lagunov_egor@examle.com');
