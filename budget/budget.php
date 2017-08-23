<?php

class Budget{
    public $income, $expense, $weeks, $currentMoney;
    
    // The constructor
    public function __construct($currentMoney, $income, $expense, $weeks){
        $this->currentMoney = $currentMoney;
        $this->income = $income;
        $this->expense = $expense;
        $this->weeks = $weeks;
        
    }
    
    // Just calculates the income - expense
    public function calculate(){
        $total = $this->currentMoney;
        echo '<table><thead><tr><th>Week</th><th>Remaining money</th></tr></thead><tbody>';
        for($i = 1; $i <= $this->weeks; $i++){
            $total = $total + $this->income - $this->expense;
            echo "<tr><td>$i</td><td>$ $total</td></tr>";
        }
        echo '</tbody></table>';
        echo '<br>';
        echo "<script>
            $('tbody tr').each(function(i){
                if(i % 2 != 0){
                    $(this).css('background-color', '#e2e2e2')
                }
            });
        </script>";
    }
}

// Creates an instance of budget using POST as paramters
$budget = new Budget($_POST['current'], $_POST['income'], $_POST['expense'], $_POST['weeks']);
// $budget = new Budget(10,4,4);

// Call the method that calculates the budget
$budget->calculate();

