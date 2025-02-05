
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&display=swap">
<style>
    /* Reset some default browser styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Use Oswald as the primary font, set base size to 22px */
    body {
      font-family: 'Oswald', sans-serif;
      font-size: 22px;
    }
    
    /* Navbar container */
    nav  {
      background-color: #333; /* dark background */
      padding: 2.5rem 2rem;
    }

    .footer {
        background-color: #333; /* dark background */
      padding: 1.5rem 2rem;
    }
    
    /* Unordered list to hold nav links */
    nav ul {
      list-style: none; 
      display: flex;       /* use flex for horizontal layout */
      align-items: center; /* vertically center the items */
      justify-content: flex-end; /* push items to the right */
    }

    /* Logo list item goes on the left, margin-right: auto to push the rest right */
    li.logo {
      margin-right: auto; 
      color: #fff;        /* logo text color */
      font-weight: 700;
    }

    /* Nav links list items */
    nav li {
      margin-left: 1.5rem;
    }
    
    /* Link styles */
    nav a {
      text-decoration: none;
      color: #fff;
      font-weight: 400; /* adjust to your preference */
    }
    
    /* Hover effect */
    nav a:hover {
      text-decoration: underline;
    }
  </style>

  <nav class="header">
    <ul>

      <li class="logo"><a href="#home">Logo</a></li>

      <li><a href="#whatwedo">What we do</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>