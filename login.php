<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<style>
  body {
    width: 100%;
    height: 100%;
    background-image: url(https://i.pinimg.com/originals/94/f9/5f/94f95fb160d5fe2ed0efbb85e44c72fd.jpg);
    background-position: center;
    background-size: cover;
  }

  a:hover {
    opacity: 0.6;
    text-decoration: none;
  }
  .but:hover {
    opacity: 0.8;
  }
  label {
    font-weight: 500;
  }
  .link {
    font-weight: 500;
  }
  .wrapper {
	position: relative;
	width: 380px;
	height: 430px;
  background: rgba(180, 170, 200);
	border-radius: 8px;
	overflow: hidden;
}
.wrapper::before 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 380px;
	height: 430px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,whitesmoke,whitesmoke);
	animation: animate 6s linear infinite;
}
.wrapper::after 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 380px;
	height: 430px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,whitesmoke,whitesmoke);
	animation: animate 6s linear infinite;
	animation-delay: -3s;
}
@keyframes animate 
{
	0%
	{
		transform: rotate(0deg);
	}
	100%
	{
		transform: rotate(360deg);
	}
}
section {
	position: absolute;
	inset: 5px;
  background: rgba(180, 170, 200);
	padding: 50px 40px;
	border-radius: 8px;
	z-index: 2;
	display: flex;
	flex-direction: column;
}
</style>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div  class="field button">
          <input class="but" style="background: linear-gradient(
        to top,
        rgba(5, 58, 92, 0.8) 50%,
        rgba(5, 58, 92, 0.8) 50%
      ); transition: 0.2s; font-weight: 500; color: whitesmoke; border-radius: 10px;" type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div style=" margin-top: -0.7rem;" class="link">Not yet signed up? <a style="color: blueviolet; text-decoration: none; transition: 0.2s;" href="index.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
