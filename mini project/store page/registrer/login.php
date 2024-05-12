<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lOGIN Page</title>
    <link rel="stylesheet" href="login.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600;700;800;900&display=swap");
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "poppins",sans-serif;
    
}
body{
    display:flex;
    justify-self: start;
    background-color: rgb(162, 88, 232);
    background-image: url('books.img/hero-amazon-editors-announce-best-books-of-the-year-v2.jpeg');
    align-items:center;
    justify-content:center;
    min-height: 100vh;
    background-attachment:fixed;
}
.wrapper{
    display: flex;
    align-self: center;
    justify-content: center;
    background:transparent;
    padding: 80px;
    margin: 80px;
    width: 420px ;
    color: rgb(0, 255, 8);
    border: 2px solid rgba(0, 255, 76, 0.2);
    backdrop-filter: blur(20px);
    border-radius: 10%;

}
.wrapper h1{
    font-size: 36px;
    text-align: center;
}
.wrapper .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px;

}

.input-box input{
    width: 80%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    box-shadow: 0 9 10px rgb(0, 0, 0,.2);
    padding: 20px ,45px 20px ,20px ;
    color: rgb(0, 0, 0);
    text-shadow: 29px 2px 100px rgba(0, 0, 0, 0.5);
    box-decoration-break: slice ;

}

.input-box input ::placeholder{
    color: rgb(255, 138, 28);
}

.input-box i{
    position:absolute;
    right:20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}

.wrapper .remember-forgot{
    display: flex;
    justify-content: space-between;

}

.spacer{
margin-bottom: 20px;
}

button{
    color: rgb(255, 255, 255);
    background-color: rgb(0, 0, 0);
    height: 45px;
    padding: 20px;
    outline: none;
    width: 100%;
    border: none;
    border-radius: 15px;
    box-shadow: 0 0 10px rgb(0, 0, 0,.1);
    font-weight: 600;
    cursor: pointer;
    
}

.remember-forgot label input{
    align-content:rgb(255, 0, 0);
    margin-right: 3px;
}

.remember-forgot a{
    color: aliceblue;
    text-decoration: none;
}
.remember-forgot a :hover{
    text-decoration: underline; 

}
</style>
<body>
    <div class="wrapper">
    <form action="clogin.php" method="post">
    <h1>Sign In</h1>

    <!-- Sign-in fields -->
    <div class="input-box">
        <input type="text" name="username" placeholder="Username" required>
        <i class='bx bx-user'></i>
    </div>
    <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
    </div> 
    <div class="button">
        <input type="submit" name="signin" value="Sign In">
    </div>

    </body>
</html>
