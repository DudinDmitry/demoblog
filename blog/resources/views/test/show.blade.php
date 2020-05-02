<!DOCTYPE html>
<html>
<head>
    <title>My view</title>
</head>
<body>
<p>Name: {{$employee['name']}}</p>
<p>Surname: {{$employee['surname']}}</p>
<p>Salary: {{$employee['salary']}}</p>
<p>Count: {{count($employee)}}</p>
<p>Country: {{$location['country'] or 'Russia'}}</p>
<p>Sity: {{$location['sity'] or 'Moscow'}}</p>
</body>
</html>