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

  <h2>Ventilation des dépenses par rubrique</h2>
  <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover border-success">
        <thead class="table-info">
          <tr>
            <th>RUBRIQUES</th>
            <th>LFR2024</th>
            <th>LF2025</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $res1 = get_tab("Venti_dep_rub");
        while($Evo_dep_soldes = mysqli_fetch_assoc($res1)){ ?>
          <tr>
            <td><?php echo $Evo_dep_soldes['RUBRIQUES']; ?></td>
            <td><?php echo $Evo_dep_soldes['LFR2024']; ?></td>
            <td><?php echo $Evo_dep_soldes['LF2025']; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>

  <br>


    <h2>Ventilation des dépenses par rubrique</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover border-success">
        <thead class="table-info">
          <tr>
            <th>LIBELLES</th>
            <th>LFR2024</th>
            <th>LF2025</th>
            <th>ECART</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $res3 = get_tab("Evo_dep_soldes");
        while($Evo_dep_soldes = mysqli_fetch_assoc($res3)){ ?>
          <tr>
            <td><?php echo $Evo_dep_soldes['LIBELLES']; ?></td>
            <td><?php echo $Evo_dep_soldes['LFR2024']; ?></td>
            <td><?php echo $Evo_dep_soldes['LF2025']; ?></td>
            <td><?php echo $Evo_dep_soldes['ECART']; ?></td>
          </tr>
        <?php } ?>
        </tbody>
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