<html>
    <head>
        <title>Activity 5</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1>Activity 5</h1>
        
        
        <hr/>
        <br/>
        <br/>
        <div class="container">

            <ul class="list-inline">
                <li><a href="#" data-toggle="popover" data-placement="top" title="Top popover" data-content="Some content here in popover">Top</a></li>
                <li><a href="#" data-toggle="popover" data-placement="bottom" title="Bottom popover" data-trigger="focus" data-content="Some content here in popover">Bottom</a></li>
                <li><a href="#" data-toggle="popover" data-placement="left" title="Left popover" data-trigger="hover" data-content="Some content here in popover">Left</a></li>
                <li><a href="#" data-toggle="popover" data-placement="right" title="Right popover">Right</a></li>
            </ul>
            
            <ul class="list-inline">
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Top Tool Tip">Top</a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Bottom Tool Tip">Bottom</a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="left" title="Left Tool Tip">Left</a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Right Tool Tip">Right</a></li>
            </ul>

        </div>
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
                $('[data-toggle="popover"]').popover();
            })
        </script>

        <hr/>
        <br/>
        <br/>
            <div class="container">
                <div id="mycarousel" class="carousel slide" data-ride="carousel" style="width:1000px;">
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="image/pic1.jpg" width="1000px"/>
                            <div class="carousel-caption">
                                <h3>my first pic</h3>
                                <p>Welcome to my First Pic...</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/pic2.jpg" width="1000px"/>
                            <div class="carousel-caption">
                                <h3>my second pic</h3>
                                <p>Welcome to my Second Pic...</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/pic3.jpg" width="1000px"/>
                            <div class="carousel-caption">
                                <h3>my third pic</h3>
                                <p>Welcome to my Third Pic...</p>
                            </div>
                        </div>

                        <a class="left carousel-control" href="#mycarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#mycarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>

                    </div>    
                </div>

            </div>
        <hr/>
        <br/>
        <br/>     
            <div class="container">
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Open modal box</button>
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog" >
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal">&times;</button>
                                <h4>This is my modal header</h4>
                            </div>
                            <div class="modal-body">
                                <p>This is modal content</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-info" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>