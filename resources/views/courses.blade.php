<html>
    <head>
        <title>Lara</title>
            <style>
                body {
    background: #efefef;
}
h3{
    
    text-align: center;
    font-size: 80px;
    padding: 120px 0 0 0;
    color: #333;
    font-family: monospace;

}
ul{
    list-style: none;
    text-align: center;
}
ul li {
    display: inline-block;
    margin: 0 20px;
}
            </style>
    </head>
    <body>
        <h3> <a href="http://localhost/Lara/">Home</a> > Courses</h3>
          
        <ul>
        @foreach ($courses as $course)
            <li><a href="http://localhost/Lara/course/{{$course->id}}">{{$course->title}}</a></li>
        @endforeach
           
        </ul>
    </body>
</html>