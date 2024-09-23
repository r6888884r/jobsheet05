<!DOCTYPE html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Simple Calculator Program in PHP - Tutorials Class</title>
    <link href="stylesheet" href="style.css">
</head>

<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "C":
            $result = $first_num - $second_num;
        case "+":
           $result = $first_num + $second_num;
            break;
        case "-":
           $result = $first_num - $second_num;
            break;
        case "*":
            $result = $first_num * $second_num;
            break;
        case "/":
            $result = $first_num / $second_num;
    }
}

?>

<body>

    <div id="page-wrap">
	<h1>PHP - Simple Calculator Program</h1>
	  <form action="" method="post" id="qui3-form">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="+" />
            <input type="submit" name="operator" value="-" />
            <input type="submit" name="operator" value="*" />
            <input type="submit" name="operator" value="/" />
            <!-- Tombol Clear -->
            <button type="reset">Clear</button>
            
            
	  </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>