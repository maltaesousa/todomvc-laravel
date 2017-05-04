<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="POST" action="{{ route('tasks.store') }}">
            {{ csrf_field() }} <!-- Token pour eviter les cross sites request -->
            <input type="text" name="name"/>
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>