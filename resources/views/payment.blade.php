<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="payment.css">
    </head>
    <body>
        <form action="mpesatest.php" method="POST">
        <div class="form">
    
            <div class="title">Payment portal</div>
            <div class="input-container ic1">
              <input name="phone_number" class="input" type="number"  />
              <div class="cut"></div>
              <label for="phone_number" class="placeholder">Phone Number</label>
            </div>
            <div class="input-container ic2">
              <input name="amount" class="input" type="number"  />
              <div class="cut"></div>
              <label for="amount" class="placeholder">Amount($)</label>
            </div>
            <!-- <div class="input-container ic2">
              <input id="email" class="input" type="text" placeholder=" " />
              <div class="cut cut-short"></div>
              <label for="email" class="placeholder">Email</>
            </div> -->
            <button  class="button">Make Payment</button>
          </div>
          </form>

    </body>
</html>