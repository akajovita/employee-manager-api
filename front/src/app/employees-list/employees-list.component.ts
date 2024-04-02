import { Component } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { EmployeeService } from '../services/employee.service'

@Component({
  selector: 'app-employees-list',
  standalone: true,
  imports: [
    HttpClientModule,
  ],
  templateUrl: './employees-list.component.html',
  styleUrl: './employees-list.component.css'
})
export class EmployeesListComponent {
  employees: any[] = [];

  constructor(private employeeService: EmployeeService) {}

  ngOnInit(): void {
    this.employeeService.getEmployees().subscribe({
      next: (data) => {
        this.employees = data;
      },
      error: (error) => console.error(error),
      // No es necesario implementar 'complete' para este caso
    });
  }
}
