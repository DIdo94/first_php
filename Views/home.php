
<div id="mycarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
        <li data-target="#mycarousel" data-slide-to="2"></li>
        <li data-target="#mycarousel" data-slide-to="3"></li>
        <li data-target="#mycarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="http://www.sportsansar.com/wp-content/uploads/2016/02/basketball-wide.jpg" data-color="lightblue" alt="First Image">
            <div class="carousel-caption">
                <h2>Welcome <?php
                    if(isset($_SESSION['name']))
                        echo $_SESSION['name'];
                    else
                        echo "Stranger";
                    ?></h2>
            </div>
        </div>
        <div class="item">
            <img src="http://www.uintahrecreation.org/vertical/Sites/%7BB1F8F205-5D50-47D5-AB73-C20F9B643328%7D/uploads/%7B4112846A-D04C-43F8-AA5B-0E14706D5D90%7D.JPG" alt="Second Image">
            <div class="carousel-caption">
                <h2>Basketball is a game for everyone</h2>

            </div>
        </div>
        <div class="item">
            <img src="http://www.newyorker.com/wp-content/uploads/2015/11/Crouch-Understanding-Obama-Basketball-1200.jpg" data-color="firebrick" alt="Second Image">
            <div class="carousel-caption">
                <h2>Literally everyone</h2>

            </div>
        </div>
        <!-- more slides here -->
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<style>

   $('.carousel').carousel();</style>