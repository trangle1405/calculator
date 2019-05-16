<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <h2>Calculator</h2>
    <form method="POST">
        @csrf
        <input type="number" name="firstNumber" placeholder="nhap so thu nhat">
        <input type="number" name="secondNumber" placeholder="nhap so thu hai">
        <br><br>
        <input type="submit" name="operation" value="addition">
        <input type="submit" name="operation" value="subtraction">
        <input type="submit" name="operation" value="multiplication">
        <input type="submit" name="operation" value="division">
    </form>
    @if(!empty(request('operation')))
        Kết quả: {{$result}}
    @endif
</div>
</body>
</html>