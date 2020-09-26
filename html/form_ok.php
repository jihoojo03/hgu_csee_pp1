<!DOCTYPE html>
<html>
    <head><meta charset="utf-8"></head>

<style>
div {
  border-radius: 5px;
  background-color:#BEDEC0;
  padding: 20px;
  font-size : 20px;
}
</style>

<body>

<div>
Welcome <?php echo $_POST["lastname"]; ?> <?php echo $_POST["firstname"]; ?> <br>
Your Country : <?php echo $_POST["country"]; ?><br>
Your Sex : <?php echo $_POST["gender"]; ?><br>
Your Birth : <?php echo $_POST["birthday"]; ?><br>
Your Homepage : <?php echo $_POST["homepage"]; ?><br>
Your Favorite Color : <?php echo $_POST["favcolor"]; ?><br>
</div>

</body>
</html>