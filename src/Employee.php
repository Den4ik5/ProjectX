<?php
/**
 * Created by PhpStorm.
 * User: Den
 * Date: 22.11.2018
 * Time: 18:32
 */

class Employee
{

    private $salary;
    private $amount=1;
    /**
     * Employee constructor.
     */
    function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if($i===0){
            throw new \http\Exception\InvalidArgumentException('not enough arguments');
        }
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }
    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }
    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
    /**
     * @param float $salaryPerHour
     * @param float $workingHours
     * @param float $salaryPerProject
     */
    public function construct1(float $salaryPerHour, float $workingHours, float $salaryPerProject):void
    {
        $this->salary=($salaryPerHour*$workingHours<=$salaryPerProject)?$salaryPerHour*$workingHours : $salaryPerProject;
    }
    /**
     * @param float $salaryPerHour
     * @param float $workingHours
     */
    public function __construct2(float $salaryPerHour,float $workingHours):void{
        $this->salary = ($salaryPerHour*$workingHours);
    }
    /**
     * @param float $salaryPerProject
     */
    public function __construct3(float $salaryPerProject):void{
        $this->salary = $salaryPerProject;
    }
    /**
     * @return float
     */
    public function getSalary():float
    {
        return ($this->salary)*($this->amount);
    }
}