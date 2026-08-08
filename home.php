<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CarDepot | Home</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<style>
  .home-wrap{
    width:100%;
    max-width:720px;
    margin:32px;
    background: var(--white);
    border-radius:20px;
    box-shadow: 0 30px 60px -20px rgba(20,20,20,0.25), 0 0 0 1px rgba(20,20,20,0.03);
    overflow:hidden;
  }
  .home-header{
    background: linear-gradient(160deg, var(--red-deep) 0%, var(--red-dark) 100%);
    color: var(--white);
    padding:32px 40px;
    display:flex;
    align-items:center;
    justify-content:space-between;
  }
  .home-brand{
    display:flex;
    align-items:center;
    gap:12px;
  }
  .home-brand svg{ width:38px; height:38px; }
  .home-brand span{
    font-family:'Oswald', sans-serif;
    font-size:20px;
    font-weight:700;
    text-transform:uppercase;
    letter-spacing:0.5px;
  }
  .logout-btn{
    background: rgba(255,255,255,0.12);
    border:1px solid rgba(255,255,255,0.4);
    color:var(--white);
    padding:8px 16px;
    border-radius:8px;
    font-family:'Work Sans', sans-serif;
    font-size:13px;
    font-weight:600;
    cursor:pointer;
    text-decoration:none;
  }
  .logout-btn:hover{ background: rgba(255,255,255,0.2); }
  .home-body{
    padding:44px 40px;
    text-align:center;
  }
  .home-body h1{
    font-family:'Oswald', sans-serif;
    font-size:28px;
    text-transform:uppercase;
    color: var(--charcoal);
    margin-bottom:12px;
  }
  .home-body p{
    color:#6b6b6d;
    font-size:14.5px;
    line-height:1.6;
  }

  /* Vehicle-type choice buttons */
  .choice-row{
    display:flex;
    justify-content:center;
    gap:24px;
    margin-top:36px;
    flex-wrap:wrap;
  }

  .choice-btn{
    width:220px;
    height:170px;
    border-radius:16px;
    border:2px solid #E4E4E6;
    background: var(--grey-soft);
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    gap:10px;
    text-decoration:none;
    color: var(--charcoal);
    transition: all 0.2s ease;
    cursor:pointer;
  }

  .choice-btn .choice-icon{
    font-size:44px;
    line-height:1;
  }

  .choice-btn .choice-label{
    font-family:'Oswald', sans-serif;
    font-size:19px;
    font-weight:600;
    text-transform:uppercase;
    letter-spacing:0.5px;
  }

  .choice-btn:hover{
    border-color: var(--red-deep);
    background: var(--white);
    transform: translateY(-4px);
    box-shadow: 0 16px 30px -12px rgba(200,16,46,0.35);
  }

  .choice-btn:hover .choice-label{
    color: var(--red-deep);
  }
</style>
</head>
<body>

<div class="home-wrap">
  <div class="home-header">
    <div class="home-brand">
      <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="24" cy="24" r="23" fill="#FFFFFF" fill-opacity="0.12" stroke="#FFFFFF" stroke-width="1.5"/>
        <path d="M11 27.5L13.4 20.6C13.9 19 15.4 18 17.1 18H30.9C32.6 18 34.1 19 34.6 20.6L37 27.5" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M9.5 27.5H38.5V32C38.5 32.83 37.83 33.5 37 33.5H35C34.17 33.5 33.5 32.83 33.5 32V30.5H14.5V32C14.5 32.83 13.83 33.5 13 33.5H11C10.17 33.5 9.5 32.83 9.5 32V27.5Z" stroke="#FFFFFF" stroke-width="2" stroke-linejoin="round"/>
        <circle cx="15.5" cy="30" r="1.6" fill="#FFFFFF"/>
        <circle cx="32.5" cy="30" r="1.6" fill="#FFFFFF"/>
        <path d="M14 23.5H34" stroke="#FFFFFF" stroke-width="1.4" stroke-linecap="round"/>
      </svg>
      <span>CarDepot</span>
    </div>
    <a href="logout.php" class="logout-btn">Log Out</a>
  </div>
  <div class="home-body">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> 👋</h1>
    <p>You've successfully logged in to your CarDepot dashboard.<br>Choose what you'd like to rent today.</p>

    <div class="choice-row">
      <a href="car.html" class="choice-btn">
        <span class="choice-icon">🚗</span>
        <span class="choice-label">Car</span>
      </a>
      <a href="bike.html" class="choice-btn">
        <span class="choice-icon">🏍️</span>
        <span class="choice-label">Bike</span>
      </a>
    </div>
  </div>
</div>


</body>
</html>