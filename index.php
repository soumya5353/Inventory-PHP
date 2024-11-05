<html>
    <head> 
        <link rel="stylesheet" href="register.css">  
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="footer.css">
    </head>
    <body>
        <?php include 'header.php'; ?>

        <form action="register.php" method="post">
        
            <div>
            <label for="first_name"> First_name:  </label> 
            <input type="text" name="firstname" id="firstname" required><br><br> 

            <label> last_name:   </label>
            <input type="text" name="lastname" id="lastname" required><br><br>

            <label> phone:       </label>
            <input type="number" name="phone" id="phone" required><br><br>

            <label> email:       </label>
            <input type="email" name="email" id="email" required><br><br>

            <label> place:       </label>
           <textarea name="place" id="place">  </textarea>
         <input type="submit"  class="button" value="Register">
        </div>

         </form>
         <?php include 'footer.php'; ?>
            </body>
            </html>












          




