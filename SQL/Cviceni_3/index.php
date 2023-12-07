<?php
$conn = mysqli_connect('localhost', 'root', '0002163E9faa4', 'employees');

if(!$conn){
    die('Connection error: ' . mysqli_connect_error());
}else {
    // 1
    $sql = "SELECT employees.first_name, employees.last_name, employees.emp_no 
    FROM employees WHERE employees.emp_no BETWEEN 10300 AND 10500";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0){
        echo 'Nebyly nalezeny zádné výsledky.';
    }else {
        echo '<table>
                <thead>
                    <th>Jméno</th>
                    <th>Příjmení</th>
                </thead>
                <tbody>';

        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>
                    <td>' . $row['first_name'] . '</td>
                    <td>' . $row['last_name'] . '</td>
                 </tr>';
        };

        echo '</tbody>
              </table>';
    }

    // 2
    $sql = "SELECT
    employees.first_name,
    employees.last_name,
    employees.gender,
    employees.birth_date
    
    FROM 
    employees
    
    WHERE
    (employees.gender = 'M' AND employees.birth_date < '1960-01-01') OR (employees.gender = 'F' AND employees.birth_date < '1970-01-01')  
    ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0){
        echo 'Nebyly nalezeny zádné výsledky.';
    }else {
        echo '<table>
                <thead>
                    <th>Jméno</th>
                    <th>Příjmení</th>
                    <th>Pohlaví</th>
                    <th>Datum narození</th>
                </thead>
                <tbody>';

        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>
                    <td>' . $row['first_name'] . '</td>
                    <td>' . $row['last_name'] . '</td>
                    <td>' . $row['gender'] . '</td>
                    <td>' . $row['birth_date'] . '</td>
                 </tr>';
        };

        echo '</tbody>
              </table>';
    }

    // 3

    // 4
    $sql = "SELECT 
    employees.first_name,
    employees.last_name,
    employees.emp_no,
    salaries.salary
    
    FROM 
    employees
    
    LEFT JOIN salaries ON employees.emp_no = salaries.emp_no
    
    WHERE 
    employees.emp_no = '10001' OR '10021' OR '408596'  
    
    ORDER BY `employees`.`emp_no`";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0){
        echo 'Nebyly nalezeny zádné výsledky.';
    }else {
        echo '<table>
                <thead>
                    <th>Jméno</th>
                    <th>Příjmení</th>
                    <th>Číslo</th>
                    <th>Výplata</th>
                </thead>
                <tbody>';

        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>
                    <td>' . $row['first_name'] . '</td>
                    <td>' . $row['last_name'] . '</td>
                    <td>' . $row['emp_no'] . '</td>
                    <td>' . $row['salary'] . '</td>
                 </tr>';
        };

        echo '</tbody>
              </table>';
    }

    // 5
    $sql = "SELECT
    employees.first_name,
    employees.last_name,
    employees.birth_date,
    titles.title
    
    FROM 
    employees
    
    LEFT JOIN titles ON employees.emp_no = titles.emp_no 
    ORDER BY `employees`.`birth_date` 
    
    LIMIT 500";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0){
        echo 'Nebyly nalezeny zádné výsledky.';
    }else {
        echo '<table>
                <thead>
                    <th>Jméno</th>
                    <th>Příjmení</th>
                    <th>Datum narození</th>
                    <th>Title</th>
                </thead>
                <tbody>';

        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>
                    <td>' . $row['first_name'] . '</td>
                    <td>' . $row['last_name'] . '</td>
                    <td>' . $row['birth_date'] . '</td>
                    <td>' . $row['title'] . '</td>
                 </tr>';
        };

        echo '</tbody>
              </table>';
    }

    // 6
    $sql = "SELECT
    employees.first_name,
    employees.last_name,
    titles.title,
    salaries.salary
    
    FROM employees
    
    LEFT JOIN titles ON titles.emp_no = employees.emp_no
    LEFT JOIN salaries ON salaries.emp_no = employees.emp_no 
    
    ORDER BY `salaries`.`salary` ASC LIMIT 500";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0){
        echo 'Nebyly nalezeny zádné výsledky.';
    }else {
        echo '<table>
                <thead>
                    <th>Jméno</th>
                    <th>Příjmení</th>
                    <th>Title</th>
                    <th>Výplata</th>
                </thead>
                <tbody>';

        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>
                    <td>' . $row['first_name'] . '</td>
                    <td>' . $row['last_name'] . '</td>
                    <td>' . $row['title'] . '</td>
                    <td>' . $row['salary'] . '</td>
                 </tr>';
        };

        echo '</tbody>
              </table>';
    }
}

?>