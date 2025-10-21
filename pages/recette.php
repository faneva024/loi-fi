<?php
include('../inc/fonction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<header>
    <nav class="navbar">
      <div class="logo">📊 Budget Des Citoyens</div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php">About</a></li>
        <li><a href="index.php">Services</a></li>
        <li><a href="index.php">Contact</a></li>
      </ul>
    </nav>
  </header>

    <main>
    <h2>Recettes non fiscales</h2>
    <div class="table-responsive">
  <table class="table table-striped table-hover border-primary">
    <thead class="table-dark text-white">  
    <tr>
            <th>POSTES</th>
            <th>LFR_2024</th>
            <th>LFR_2025</th>
        </tr>
    </thead>
        <?php
        $res=get_tab("Recettes_non_fiscales");
        while($Recettes_non_fiscales=mysqli_fetch_assoc($res)){?>
            <tr> 
            <td> 
                <?php echo $Recettes_non_fiscales['POSTES'] ; ?> 
            </td>
            <td> 
                <?php echo $Recettes_non_fiscales['LFR_2024'] ; ?> 
            </td>
            <td> 
                <?php echo $Recettes_non_fiscales['LF_2025'] ; ?> 
            </td>
        </tr>
    <?php
    }
    ?>
    </table>
    </div>
    <br>
    
        <h2>Dons</h2>
        <div class="table-responsive">
  <table class="table table-bordered table-striped table-hover border-secondary">
    <thead class="table-secondary text-dark">
        <tr>
            <th>POSTES</th>
            <th>LF_2024</th>
            <th>LF_2025</th>
        </tr>
        </thead>
        <?php
        $res1=get_tab("Dons");
        while($Recettes_non_fiscales=mysqli_fetch_assoc($res1)){?>
            <tr> 
            <td> 
                <?php echo $Recettes_non_fiscales['POSTES'] ; ?> 
            </td>
            <td> 
                <?php echo $Recettes_non_fiscales['LF_2024'] ; ?> 
            </td>
            <td> 
                <?php echo $Recettes_non_fiscales['LF_2025'] ; ?> 
            </td>
        </tr>
    <?php
    }
    ?>
    </table>
    </div>
    <br>

    <h2>Droits et taxes</h2>   
    <div class="table-responsive">
  <table class="table table-bordered table-striped table-hover border-secondary">
    <thead class="table-secondary text-dark">
        <tr>
            <th>NATURE DES DROITS TAXES</th>
            <th>LFR_2024</th>
            <th>LFR_2025</th>
        </tr>
  </thead>
        <?php
        $res2=get_tab("Droits_taxes_import");
        while($Recettes_non_fiscales=mysqli_fetch_assoc($res2)){?>
            <tr> 
            <td> 
                <?php echo $Recettes_non_fiscales['NATURE_DES_DROITS_TAXES'] ; ?> 
            </td>
            <td> 
                <?php echo $Recettes_non_fiscales['LFR_2024'] ; ?> 
            </td>
            <td> 
                <?php echo $Recettes_non_fiscales['LF_2025'] ; ?> 
            </td>
        </tr>
    <?php
    }
    ?>
    </table>
    </div>
    </main>

  <footer>
    <div class="footer-container">
      <div class="footer-links">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Help Center</a></li>
        </ul>
      </div>
    
      <div class="footer-contact">
        <h4>Contact Us</h4>
        <p>Email: jimmyrandriambololona@gmail.com</p>
        <p>Email: fanevaratovoniaina@gmail.com</p>
        <p>Phone: (123) 456-7890</p>
      </div>
    </div>
  </footer>

</body>
</html>