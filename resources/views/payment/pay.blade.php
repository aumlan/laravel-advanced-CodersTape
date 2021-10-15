<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>pay</h1>

<form action="{{ route('pay') }}">
    <label for="fname">Payment Method</label><br>
    <select name="pay_method" >
        <option value="credit"> Credit Card</option>
        <option value="bank"> Bank </option>
    </select>
    <input type="submit" value="Submit">
</form>

</body>
</html>
