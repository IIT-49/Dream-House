<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registration</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
        <form action="contact.php" method="POST" enctype="multipart/form-data">
            <div class="title">
                Contact Us
            </div>
            <div class="form">
                
                <div class="input_feild">
                    <level>Name</level>
                    <input type="text" class="input" name="name" required>
                </div>
              
                

                <div class="input_feild">
                    <level>CODE of apartment </level>
                    <textarea name="paradd" required></textarea>
                </div>

                
                    
        


                <div class="input_feild">
                    <level>Phone Number</level>
                    <input type="text" class="input" name="phone" required>
                </div>
                <div class="input_feild">
                    <level>Email</level>
                    <input type="text" class="input" name="email" required>
                </div>
                <div class="input_feild terms">
                    <level class="check">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </level>
                    <p>All the information are valid</p>
                </div>
                <div class="input_feild">
                    <input type="submit" value="Send" class="btn" name="register">
                </div>
            </div>
        </form>
    </div>
</body>
</html>