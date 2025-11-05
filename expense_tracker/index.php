<?php 
session_start();

	include("connection.php");
	include("functions.php");

  $user_data = check_login($con);
  if($_SERVER['REQUEST_METHOD'] == "POST"){
  $balance = $_POST['balance'];

  $query2 = "UPDATE users SET balance='$balance' WHERE user_name='$user_data[user_name]'";
  mysqli_query($con, $query2);
  }


    

?>

<!DOCTYPE html>
<html>
<head>
	<title>Expense Tracker</title>
    <link rel="stylesheet" href="style.css" />
    <script src="./index.js" defer></script>
</head>
<body>
	
    <div class="container">
      <div class="box">
        <ma>
          <br><br><br>

          <marquee><h1>
            WELCOME  <?php echo $user_data['user_name']; ?><br></h1></marquee>
          <h1>Expense Tracker<br></h1><br><br><br>
          <h3>
            YOUR ACCOUNT BALANCE: <?php echo $user_data['balance']; ?><br></h3>
          

          <div class="balance">
            <h2 id="netAmount">₹0</h2>
            <h3>Your Balance</h3>
          </div>
        </section>

        <div class="transaction_container">
          <h3>Transactions</h3>
          <hr />

          <div class="transactions">
        
          </div>
        </div>
        <section class="transaction_form">
          <h3>Add Transactions</h3>
          <form id="transactionForm">
            <div class="inputs">
              <div class="form_control">
                <label for="text">Text</label>
                <input
                  placeholder="Enter Description"
                  type="text"
                  name="text"
                  id="text"
                />
              </div>
              <div class="form_control">
                <label for="amount">Amount</label>
                <input
                  placeholder="Enter Amount"
                  type="number"
                  name="amount"
                  id="amount"
                />
              </div>
            </div>

            <div class="buttons_container">
              <button type="submit" id="earnBtn">
                <p id="earning">₹0</p>
                <p>Earnings</p>
              </button>
              <button type="submit" id="expBtn">
                <p id="expense">₹0</p>
                <p>Expense</p>
              </button>
            </div>
            <br>
          </form>
          <a href="balance.php">Click Here</a><br>
          <a href="logout.php">Logout</a>
        </section>
      </div>
    </div>
</body>
</html>


