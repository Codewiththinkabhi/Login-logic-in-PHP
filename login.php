<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
 body { 
  font-family: Arial, Helvetica, sans-serif;
}

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  overflow: hidden;
}
 input[type=text], input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin:8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing:border-box;
    padding: 14px 20px;
    border-radius: 8px;
    border: none;
    outline: none;
    font-size: 16px;
  font-weight: 300;
 }
 
 button {
  background-color:orangered;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  font-size: 16px;
  font-weight: 700;
  width: 50%;
  border-radius: 8px;
}

  button:hover {
  opacity: 0.8;
}
.container {
  padding: 16px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
  width: 100%;
  background: linear-gradient(black, purple);
}

.form-input{
  display: flex;
  flex-direction: column;
}

input{
  margin-bottom: 10px;
}
@media screen and (max-width: 300px) {

  
}

</style>

</head>
<body>

<div class="container">
<form action="logic.php" method="post" id="form-cont">
  <div class="form-input">
<input type="text" name="id" placeholder="Enter User Id">
<input type="text" name="password" placeholder="Enter password">
</div>
<button type="submit">Login</button>
</form>
</div>

</body>
</html>
