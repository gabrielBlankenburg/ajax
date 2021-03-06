$(document).ready(function(){
    $('#submit').click(function(){
       callAjax();
    });
    
    
})

function callAjax(){
     // Stores the inputs
    var current = $('#current').val();
    var income = $('#income').val();
    var expense = $('#expense').val();
    var weeks = $('#weeks').val();
    
    // Creates a form data
    var fn = new FormData();
    // Append the inputs
    fn.append('current', current);
    fn.append('income', income);
    fn.append('expense', expense);
    fn.append('weeks', weeks);
    // Request the budget.php POSTing the inputs
    $.ajax({
        url: 'https://ajax-blankenburg.c9users.io/budget/budget.php',
        method: 'POST',
        data: fn,
        processData: false,
        contentType: false,
        success: function(data){
            $('#result').html(data)
        }
    });
}