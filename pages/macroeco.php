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
    <h2>Prévisions macroéconomiques</h2>
    <div class="table-responsive">
  <table class="table table-bordered table-striped table-hover border-primary">
    <thead class="table-dark text-white">
        <tr>
            <th>AGREGASTS MACROECONOMIQUE</th>
            <th>2024</th>
            <th>2025</th>
            <th>2026</th>
        </tr>
        </thead>
        <?php
        $res1=get_tab("Previsions_macroeco");
        while($tab_prev_macroeco = mysqli_fetch_assoc($res1)){?>
            <tr> 
                <td> 
                    <?php echo $tab_prev_macroeco['AGREGASTS_MACROECONOMIQUE'] ; ?> 
                </td>
                <td> 
                    <?php echo $tab_prev_macroeco['annees_2024'] ; ?> 
                </td>
                <td> 
                    <?php echo $tab_prev_macroeco['annees_2025'] ; ?> 
                </td>
                <td> 
                    <?php echo $tab_prev_macroeco['annees_2026'] ; ?> 
                </td>
            </tr>
            <?php
        }
        ?>
        
    </table>

    </div>

    <br>

<h2>Répartition du budget par rattachement administratif</h2>
<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover border-primary">
    <thead class="table-dark text-white">
    <tr>
        <th>INSTITUTION/MINISTÈRES</th>
        <th>LFR_2024</th>
        <th>LFR_2025</th>
    </tr>
    </thead>
    <?php
    $res2=get_tab("Taux_croiss_sec");
    while($tab_budg_admin=mysqli_fetch_assoc($res2)){?>
        <tr> 
        <td> 
            <?php echo $tab_budg_admin['Variation'] ; ?> 
        </td>
        <td> 
            <?php echo $tab_budg_admin['Annees_2024'] ; ?> 
        </td>
        <td> 
            <?php echo $tab_budg_admin['Annees_2025'] ; ?> 
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
        <p>Email: support@datatablesco.com</p>
        <p>Phone: (123) 456-7890</p>
      </div>
    </div>
  </footer>


</body>
</html>