<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - @yield('title')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            /* Include the padding and border in an element's total width and height */
            * {
              box-sizing: border-box;
              font-family: Nunito, san-serif;
            }

            /* Remove margins and padding from the list */
            ul {
              margin: 0;
              padding: 0;
            }

            /* Style the list items */
            ul li {
              position: relative;
              padding: 12px 8px 12px 40px;
              background: #eee;
              font-size: 18px;
              transition: 0.2s;
              display: flex;
              flex-flow: row nowrap;
              align-items: center;
              justify-content: flex-start;


              /* make the list items unselectable */
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }

            /* Set all odd list items to a different color (zebra-stripes) */
            ul li:nth-child(odd) {
              background: #f9f9f9;
            }

            /* Darker background-color on hover */
            ul li:hover {
              background: #ddd;
            }

            ul li .task {
                flex-grow: 1;
            }

            ul li .action {
                margin: 5px 15px;
                vertical-align: middle;
            }

            ul li a {
                color: grey;
            }
         
            /* Style the header */
            .header {
              background-color: #f44336;
              padding: 30px 40px;
              color: white;
              text-align: center;
            }

            /* Clear floats after the header */
            .header:after {
              content: "";
              display: table;
              clear: both;
            }

            /* Style the input */
            input {
              margin: 0;
              border: none;
              border-radius: 0;
              width: 75%;
              padding: 10px;
              float: left;
              font-size: 16px;
            }

            /* Style the "Add" button */
            .addBtn {
              padding: 10px;
              width: 25%;
              background: #d9d9d9;
              color: #555;
              float: left;
              text-align: center;
              font-size: 16px;
              cursor: pointer;
              transition: 0.3s;
              border-radius: 0;
              border: none;
            }

            .addBtn:hover {
              background-color: #bbb;
            }
        </style>
    </head>
    <body>

        <form action="">
            <div id="myDIV" class="header">
              <h2>My To Do List</h2>
              <input type="text" name="newTask" placeholder="Title...">
              <button type="submit" class="addBtn">Add</button>
            </div>
        </form>
        <ul id="myUL">
          <li>
            <div class="task">
                Hit the gym
            </div>
            <div class="action">
                <a href=""><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href=""><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
          <li>
            <div class="task">
               Make some food
            </div>
            <div class="action">
                <a href=""><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href=""><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
          <li>
            <div class="task">
               Finish quiz
            </div>
            <div class="action">
                <a href=""><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href=""><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
        </ul>



        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         

    </body>
</html>
