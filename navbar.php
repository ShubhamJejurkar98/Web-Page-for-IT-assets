<style>
    /* Navigation Bar CSS */
nav {
  background-color: #333;
  color: #fff;
  padding: 10px;
  display: flex;
  justify-content: space-between;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
  display: flex;
}

nav ul li {
  display: inline-block;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
  padding: 10px;
}

nav ul li a:hover {
  background-color: #555;
}

nav .search-bar {
  flex: 1;
  margin-left: 10px;
}

nav .search-bar form {
  display: flex;
}

nav .search-bar input[type="text"] {
  flex: 1;
  padding: 10px;
  border: none;
  background-color: #555;
  color: #fff;
}

nav .search-bar button[type="submit"] {
  background-color: #555;
  color: #fff;
  border: none;
  padding: 10px;
}

nav .user-profile, nav .settings, nav .notifications {
  text-align: center;
}

nav .user-profile img, nav .settings img, nav .notifications img {
  width: 32px;
  height: 32px;
}

nav .user-profile span, nav .notifications span {
  display: inline-block;
  margin-top: 5px;
  font-size: 14px;
}

nav .notifications .badge {
  background-color: #ff0000;
  color: #fff;
  padding: 3px 7px;
  border-radius: 50%;
  font

    </style>
<body><!-- Navigation Bar HTML -->
<nav>
  <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#contact">Contact</a></li>
    <li class="search-bar">
      <form>
        <input type="text" placeholder="Search...">
        <button type="submit">Search</button>
      </form>
    </li>
    <li class="user-profile">
      <a href="#profile">
        <img src="user.png" alt="User Profile">
        <span>John Doe</span>
      </a>
    </li>
    <li class="settings">
      <a href="#settings">
        <img src="settings.png" alt="Settings">
      </a>
    </li>
    <li class="notifications">
      <a href="#notifications">
        <img src="notifications.png" alt="Notifications">
        <span class="badge">3</span>
      </a>
    </li>
  </ul>
</nav>
</body>