









 <h2>Branch</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <?php 
                        require_once 'dbconnection.php';
                        $query = "SELECT * FROM cat";
                    $result = mysqli_query($connect, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">

                                    <a href="manifest_by_branch.php?id=<?php echo $row['id']; ?>">
                                        
                                        <?php echo $row['type']; ?>
                                    </a>
                                </h4>
                            </div>
                         
                        </div>
                    <?php } } ?>
                    </div>
