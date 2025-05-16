<html lang="en">

<head>
    <title>Activity 3</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- jQuery  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
</head>
    
<body>

    <h1>Activity3</h1>
    <script src="js/jquery.js"></script>
    
        <!-- Pager and Pagination-->
    <div class="container-fluid">
        <ul class="pager">
            <li class="previous"><a href="#">Previous</a></li>
            <li class="next"><a href="#">Next</a></li>
        </ul>

        <ul class="pagination pagination-sm">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>

        <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li class="disabled"><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>

        <ul class="pagination pagination-lg">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>

    </div>

</br>
</br>
</hr>     
        <!-- Bootstrap Tab and Pill in Dynamic-->
    <div class="container-fluid">
        <ul class="nav nav-pills">
            <li class ="active"><a href="#p1" data-toggle="pill">Home</a></li>
            <li><a href="#p2" data-toggle="pill">About Us</a></li>
            <li><a href="#p3" data-toggle="pill">Contacts Us</a></li>
            <li><a href="#p4" data-toggle="pill">Product</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="p1">Welcome to Home</div>
            <div class="tab-pane fade" id="p2">Welcome to About Us</div>
            <div class="tab-pane fade" id="p3">Welcome to Contacts Us</div>
            <div class="tab-pane fade" id="p4">Welcome to Products</div>
        </div>

        <ul class="nav nav-tabs">
            <li class ="active"><a href="#t1" data-toggle="pill">Home</a></li>
            <li><a href="#t2" data-toggle="tab">About Us</a></li>
            <li><a href="#t3" data-toggle="tab">Contacts Us</a></li>
            <li><a href="#t4" data-toggle="tab">Product</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="t1">Welcome to Home</div>
            <div class="tab-pane fade" id="t2">Welcome to About Us</div>
            <div class="tab-pane fade" id="t3">Welcome to Contacts Us</div>
            <div class="tab-pane fade" id="t4">Welcome to Products</div>
        </div>


    </div>

</br>
</br>
</hr>   
        <!-- Bootstrap Pill-->
    <div class="container-fluid">
        <ul class="nav nav-pills">
            <li><a href="#">Home</a></li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">PHP</a></li>
            <li><a href="#">JAVASCRIPT</a></li>
        </ul>
        
        <ul class="nav nav-pills">
            <li><a href="#">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">PHP<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">PHP-Function</a></li>
                        <li><a href="#">PHP-MYSQL</a></li>
                        <li><a href="#">PHP-Loop</a></li>
                    </ul>
            </li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">JAVASCRIPT</a></li>
        </ul>

        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">PHP</a></li>
            <li><a href="#">JAVASCRIPT</a></li>
        </ul>
        
        <ul class="nav nav-pills nav-justified">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">HTML</a></li>
            <li><a href="#">PHP</a></li>
            <li><a href="#">JAVASCRIPT</a></li>
        </ul>

    </div>



</br>
</br>
</hr>    
        <!-- Bootstrap Tab-->
    <div class="container-fluid">
        <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">PHP</a></li>
            <li><a href="#">JAVASCRIPT</a></li>
        </ul>

        <ul class="nav nav-tabs">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">HTML</a></li>
            <li><a href="#">PHP</a></li>
            <li><a href="#">JAVASCRIPT</a></li>
        </ul>

        <ul class="nav nav-tabs">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">HTML</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">PHP<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">PHP-Function</a></li>
                    <li><a href="#">PHP-MYSQL</a></li>
                    <li><a href="#">PHP-Loop</a></li>
                </ul>
            </li>
            <li><a href="#">JAVASCRIPT</a></li>
        </ul>

        
    </div>

</br>
</br>
</hr> 
    <!-- Accordion-->
    <div class="container-fluid">
        <div class="panel-group" id="myaccordion">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4>
                        <a href="#colap1" data-toggle="collapse" data-parent="#myaccordion">Collapsible Accordion</a>
                    </h4>
                </div>
                <div class="collapse panel-collapse" id="colap1">
                        <div class="panel-body">CONTENT HERE</div> 
                </div>
            </div>

            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4>
                        <a href="#colap2" data-toggle="collapse" data-parent="#myaccordion">Collapsible Accordion</a>
                    </h4>
                </div>
                <div class="collapse panel-collapse" id="colap2">
                        <div class="panel-body"><img src="image/luffy.jpg" ></div> 
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4>
                        <a href="#colap3" data-toggle="collapse" data-parent="#myaccordion">Collapsible Accordion</a>
                    </h4>
                </div>
                <div class="collapse panel-collapse" id="colap3">
                        <div class="panel-body">CONTENT HERE</div> 
                </div>
            </div>
            
            
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4>
                        <a href="#colap4" data-toggle="collapse" data-parent="#myaccordion">Collapsible Accordion</a>
                    </h4>
                </div>
                <div class="collapse panel-collapse" id="colap4">
                        <div class="panel-body">CONTENT HERE</div> 
                </div>
            </div>

        </div>
     </div>



</br>
</br>
</hr> 
    <!-- List Group Collapse-->
     <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="#efg" data-toggle="collapse" >Offered Programs Of CICS</a>
                </h4>
            </div>

                <div class="collapse panel-collapse" id="efg">
                    <ul class="list-group">
                        <li class="list-group-item">CCS</li>
                        <li class="list-group-item">CET</li>
                        <li class="list-group-item">CBA</li>
                        <li class="list-group-item">CAS</li>
                    </ul>
                        <div class="panel-footer">This is the panel footer</div>
                </div>
            
        </div>

     </div>

</br>
</br>
</hr>      
    <!-- List Group -->
<div class="container-fluid">
    <div class="list-group">
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">This is the heading</h4>
            <div class="list-group-item-text">This is the paragraph</div>
        </a>
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">This is the heading</h4>
            <div class="list-group-item-text">This is the paragraph</div>
        </a>
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">This is the heading</h4>
            <div class="list-group-item-text">This is the paragraph</div>
        </a>
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">This is the heading</h4>
            <div class="list-group-item-text">This is the paragraph</div>
        </a>
    </div>


        <ul class="list-group">
            <li class="list-group-item">
                <h4 class="list-group-item-heading">This is the heading</h4>
                <div class="list-group-item-text">This is the paragraph</div>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">This is the heading</h4>
                <div class="list-group-item-text">This is the paragraph</div>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">This is the heading</h4>
                <div class="list-group-item-text">This is the paragraph</div>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">This is the heading</h4>
                <div class="list-group-item-text">This is the paragraph</div>
            </li>
        </ul>



    <ul class="list-group">
        <li class="list-group-item list-group-item-success">List Items</li>
        <li class="list-group-item">List Items</li>
        <li class="list-group-item">List Items</li>
        <li class="list-group-item">List Items</li>
    </ul>

    <div class="list-group">
        <a href="#" class="list-group-item">Div List Element</a>
        <a href="#" class="list-group-item list-group-item-info">Div List Element</a>
        <a href="#" class="list-group-item">Div List Element</a>
        <a href="#" class="list-group-item">Div List Element</a>
    </div>

</div>





</br>
</br>
</hr>       
    <!-- Collapse Panel -->
    <div class="container">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4><a href="#abc" data-toggle="collapse">This is a panel heading</a></h4>
            </div>
                <div id="abc" class="collapse panel-collapse">
                    <div class="panel-body">
                        <p>This is a panel heading</p>
                    </div>
                    <div class="panel-footer">This is a panel footer</div>
            </div>
        </div>
    </div>


</br>
</br>
</hr>    
    <!-- Collapse -->
    <div class="container">
    <button class="btn btn-primary" data-target="#dtx" data-toggle="collapse">Click to Collapse Pic</button>
    <button class="btn btn-info" data-target="#dty" data-toggle="collapse">Click to Collapse</button>
        <div id="dty" class="collapse">The data to be collapse is in here....</div>
        <div id="dtx" class="collapse in"><img src="image/luffy.jpg" ></div>
    </div>


</br>
</br>
</hr>
    <div class="container">

    <div class="panel panel-danger">
         <div class="panel-heading">
            <h4>This is a panel heading</h4>
        </div>
        <div class="panel-body">
            <p>This is a panel heading</p>
        </div>
        <div class="panel-footer">This is a panel footer</div>
    </div> 

    <div class="panel panel-warning">
         <div class="panel-heading">
            <h4>This is a panel heading</h4>
        </div>
        <div class="panel-body">
            <p>This is a panel heading</p>
        </div>
        <div class="panel-footer">This is a panel footer</div>
    </div> 

    <div class="panel panel-primary">
         <div class="panel-heading">
            <h4>This is a panel heading</h4>
        </div>
        <div class="panel-body">
            <p>This is a panel heading</p>
        </div>
        <div class="panel-footer">This is a panel footer</div>
    </div>     
    
    <div class="panel panel-info">
         <div class="panel-heading">
            <h4>This is a panel heading</h4>
        </div>
        <div class="panel-body">
            <p>This is a panel heading</p>
        </div>
        <div class="panel-footer">This is a panel footer</div>
    </div>       

    <div class="panel panel-success">
         <div class="panel-heading">
            <h4>This is a panel heading</h4>
        </div>
        <div class="panel-body">
            <p>This is a panel heading</p>
        </div>
        <div class="panel-footer">This is a panel footer</div>
    </div>   

    <div class="panel panel-default">
         <div class="panel-heading">
            <h4>This is a panel heading</h4>
        </div>
        <div class="panel-body">
            <p>This is a panel heading</p>
        </div>
        <div class="panel-footer">This is a panel footer</div>
    </div>

    </div>

</body>

</html> 