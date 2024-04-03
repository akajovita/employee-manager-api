<?php

namespace App\Services;

use App\Repositories\EmployeeRepositoryInterface;

class EmployeeService
{
    protected $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function getAll()
    {
        return $this->employeeRepository->getAll();
    }

    public function findById($id)
    {
        return User::findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->employeeRepository->create($data);
    }

    public function update($id, array $data)
    {
        return $this->employeeRepository->update($id, $data);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }
}
