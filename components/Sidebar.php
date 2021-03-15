<div class="sideBar">
  <nav class="sideNav">
    <p class="logo">Inventory</p>
    <ul>
      <li class="main">
        <span class="mr-2"><i class="fa fa-tachometer-alt"></i></span>
        <a href="/dashboard">Dashboard</a>
      </li>
      <hr />
      <li class="stats">
        <span class="mr-2"><i class="fa fa-chart-pie"></i></span>
        <a href="/dashboard/stats.php">Statistics</a>
      </li>
      <hr />
      <li class="products">
        <span class="mr-2"><i class="fa fa-warehouse"></i></span>
        <a href="/dashboard/products.php">Inventory</a>
      </li>
      <hr />
      <li class="orders">
        <span class="mr-2"><i class="fa fa-money-bill"></i></span>
        <a href="/dashboard/orders.php">Orders</a>
      </li>
      <hr />

      <li class="users">
        <span class="mr-2"><i class="fa fa-users"></i></span>
        <a href="/dashboard/users.php">Users</a>
      </li>
      <hr />
      <li class="logout">
        <span class="mr-2"><i class="fa fa-door-open"></i></span>
        <a href="/logout">Logout</a>
      </li>
    </ul>
  </nav>
</div>

<script>
  let currentWindow = document.location.pathname.slice(7).split(".")[0];
  const active = document
    .querySelector(`.${currentWindow}`)
    .classList.add("active");
  
</script>
