<h1>To do list</h1>
<form action="formsubmit" method = "post">
    {{@csrf_field()}}
    <input type="text" name="plan">
    <input type="submit" name="submit">
</form>