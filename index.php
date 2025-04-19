<?php
function create_employees() {
    $employees = array(
        array(
            "name" => "amr",
            "salary" => 50000,
            "age" => 30,
            "insurance" => "Yes"
        ),
        array(
            "name" => "mohamed",
            "salary" => 60000,
            "age" => 28,
            "insurance" => "No"
        ),
        array(
            "name" => "ahmed",
            "salary" => 70000,
            "age" => 45,
            "insurance" => "Yes"
        )
    );
    return $employees;
}


function display_employees($employees) {
    $html = "<div class='container'>";
    foreach ($employees as $employee) {
        $html .= "<div class='employee-container'>";
        $html .= "<div class='label'>Name: </div><div class='value'>{$employee['name']}</div>";
        $html .= "<div class='label'>Salary: </div><div class='value'>\${$employee['salary']}</div>";
        $html .= "<div class='label'>Age: </div><div class='value'>{$employee['age']}</div>";
        $html .= "<div class='label'>Insurance: </div><div class='value'>{$employee['insurance']}</div>";
        $html .= "</div>";
    }
    $html .= "</div>";
    return $html;
}


$employees = create_employees();
$html_output = display_employees($employees);
echo $html_output;
?>