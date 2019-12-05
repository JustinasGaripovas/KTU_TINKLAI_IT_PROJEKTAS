<?php


namespace App\Managers;


use App\Entity\Employee;
use App\Repository\EmployeeRepository;
use Doctrine\ORM\EntityManagerInterface;

class EmployeeManager
{
    const ROLE_DOCTOR = 'ROLE_DOCTOR';
    const ROLE_EMPLOYEE = 'ROLE_EMPLOYEE';
    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_LABORANT = 'ROLE_LABORANT';

    /** @var EntityManagerInterface $entityManager */
    private $entityManager;

    /** @var EmployeeRepository $employeeRepository */
    private $employeeRepository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        //TODO: Maybe add logger
        $this->entityManager = $entityManager;
        $this->employeeRepository = $entityManager->getRepository(Employee::class);
    }

    /**
     * @param null $employee
     * @return Employee
     */
    public function create($employee = null): Employee
    {
        $employee = new Employee();
        return $employee;
    }

    /**
     * @param Employee $employee
     * @return bool
     */
    public function save(Employee $employee): bool
    {
        $this->entityManager->persist($employee);
        $this->entityManager->flush();
        return true;
    }

    public function findByRole(string $role)
    {
        $filteredArray = [];

        foreach ($this->findAll() as $employee)
        {
            if (in_array($role, $employee->getRoles()))
            {
                $filteredArray[] = $employee;
            }
        }

        return $filteredArray;
    }

    public function findAll()
    {
        return $this->employeeRepository->findAll();
    }

    public function findById(int $id)
    {

    }


}