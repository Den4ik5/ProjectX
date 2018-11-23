<?php
/**
 * Created by PhpStorm.
 * User: Den
 * Date: 22.11.2018
 * Time: 18:45
 */
require_once("Employee.php");




class ProjectX
{
    /**
     * @param Employee $employee
     * @return float
     */
    private static function count(Employee $employee):float{
        static $sum=0;
        $sum+=$employee->getSalary();
        return $sum;
    }

    /**
     * @param array $staff
     */
    public static function projectCoast(array $staff):void{
        static $out;
        foreach ($staff as $person){
           $out=self::count($person);
        }
        echo $out;
    }
}

$staff=[
    $designer= new Employee(3000),
    $seniorDeveloper = new Employee(10, 60),
    $middleDeveloper = new Employee(1000, 3),
    $templateDesigner = new Employee(5, 120)
];
$middleDeveloper->setAmount(2);
ProjectX::projectCoast($staff);

?>