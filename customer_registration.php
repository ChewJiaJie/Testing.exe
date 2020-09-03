<html>
    
    <style>

/* ===================================
2. layout
==================================== */

.container {
  padding: 0 20px 0 20px;
  position: relative;
}

#wrapper {
  width: 100%;
  margin: 0;
  padding: 0;
}

#wrapper.boxed {
  width: 1230px;
  overflow: hidden;
  margin: 0 auto;
  padding: 0;
  background: #fff;
}

.row, .row-fluid {
  margin-bottom: 30px;
}

.row .row, .row-fluid .row-fluid {
  margin-bottom: 30px;
}

.row.nomargin, .row-fluid.nomargin {
  margin-bottom: 0;
}





.container {
  padding: 0 20px 0 20px;
  position: relative;
}

/* ===================================
8. Section: Content
==================================== */

#content {
  position: relative;
  background: #fff;
  padding: 50px 0 0 0;
}

#content img {
  max-width: 100%;
  height: auto;
}

/* --- Call to action --- */

.cta-text {
  float: left;
  margin-top: 10px;
}

.big-cta .cta {
  margin-top: 10px;
}


</style>
<?php
include ('headerTest.html');
?>
<body>
    
    <section id="content">
    <div class="container">
        <div class="row">
            <div class="span6">
                <h3>
                    Customer Registration Form
                </h3>
                
                <form action="AddCustomer" method="post">
                    <h6>
                        Your name
                    </h6>
                    <input type="text" required style="width: 300px;" placeholder="First name and last name"
                           name="username">
                    <h6>
                        Identity card
                    </h6>
                    <input type="text" required style="width: 300px;" placeholder="Identity card number"
                           name="ic_number" maxlength="14">
                    <h6>
                        Phone number
                    </h6>
                    
                    <input type="text" required style="width: 300px;" placeholder="Phone number"
                           name="phone_number" maxlength="12">
                    <h6>
                        Delivery Address
                    </h6>
                    
                    <input type="text" required style="width: 300px;length:60px" placeholder="Delivery Address"
                           name="delivery_address" maxlength="60">
                    
                    <h6>
                        Email address
                    </h6>
                    <input type="email" required style="width: 300px;" placeholder="Email address" name="email">
                    
                    <h6>
                        Password
                    </h6>
                    <input type="password" required style="width: 300px;" placeholder="Secret password"
                           name="password">
                    <br><br>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </form>
            </div>
        </div>
        <!-- divider -->
        <div class="row">
            <div class="span12">
                <div class="solidline">
                </div>
            </div>
        </div>
        <!-- end divider -->
    </div>
</section>
</body>


	<?php
include ('footerTest.html');
?>
</html>
