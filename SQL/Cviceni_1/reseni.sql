-- SELECT
--1
SELECT
employees.first_name,
employees.last_name,
employees.emp_no

FROM 
employees

WHERE
employees.emp_no BETWEEN 10300 AND 10500



--2
SELECT
employees.first_name,
employees.last_name,
employees.gender,
employees.birth_date

FROM 
employees

WHERE
(employees.gender = 'M' AND employees.birth_date < '1960-01-01') OR (employees.gender = 'F' AND employees.birth_date < '1970-01-01')  



--3



--4
SELECT 
employees.first_name,
employees.last_name,
employees.emp_no,
salaries.salary

FROM 
employees

LEFT JOIN salaries ON employees.emp_no = salaries.emp_no

WHERE 
employees.emp_no = '10001' OR '10021' OR '408596'  

ORDER BY `employees`.`emp_no`



--5
SELECT
employees.first_name,
employees.last_name,
employees.birth_date,
titles.title

FROM 
employees

LEFT JOIN titles ON employees.emp_no = titles.emp_no 
ORDER BY `employees`.`birth_date` 

LIMIT 500



--6
SELECT
employees.first_name,
employees.last_name,
titles.title,
salaries.salary

FROM employees

LEFT JOIN titles ON titles.emp_no = employees.emp_no
LEFT JOIN salaries ON salaries.emp_no = employees.emp_no 

ORDER BY `salaries`.`salary` ASC LIMIT 500

--7



-- AGREGACE
--1
SELECT 
employees.first_name,
employees.last_name,
salaries.emp_no,
MAX(salaries.salary)

FROM 
salaries

LEFT JOIN employees ON salaries.emp_no = employees.emp_no

--2
SELECT 
departments.dept_name,
COUNT(dept_emp.dept_no) AS dep_count

FROM
dept_emp

LEFT JOIN departments ON departments.dept_no = dept_emp.dept_no

GROUP BY
departments.dept_name;

--3
SELECT
departments.dept_name,
AVG(salaries.salary) as avg_salary

FROM 
departments

LEFT JOIN dept_emp ON dept_emp.dept_no = departments.dept_no
LEFT JOIN salaries ON salaries.emp_no = dept_emp.emp_no

GROUP BY
departments.dept_name;

--4
SELECT 
departments.dept_name,
MAX(salaries.salary) - MIN(salaries.salary) as dif_salary

FROM 
salaries

LEFT JOIN dept_emp ON dept_emp.emp_no = salaries.emp_no
LEFT JOIN departments ON dept_emp.dept_no = departments.dept_no

GROUP BY
departments.dept_name;

--5