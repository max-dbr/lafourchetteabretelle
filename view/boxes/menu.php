<?php session_start () ?>
<header class="header">
 
   
 
            <?php 
            if(empty($_SESSION['ROLE'])) 
            { 
              include('./view/boxes/menu1.php');
            
            }
            else if ($_SESSION['ROLE'] == 1)
            {
                
                include('./view/boxes/menu3.php');
            }
            else if (isset($_SESSION['ROLE']) && ($_SESSION['ROLE'] == 0))
            {
                include('./view/boxes/menu2.php');
            }
            ?>
            
        </ul>
    </nav>
</header>