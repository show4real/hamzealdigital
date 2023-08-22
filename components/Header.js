const Header = () => {
  return (
    <nav id="navbar" className="navbar">
      <ul>
        <li>
          <a className="nav-link scrollto active" href="#hero">
            Home
          </a>
        </li>
        <li>
          <a className="nav-link scrollto" href="#about">
            About
          </a>
        </li>
        <li>
          <a className="nav-link scrollto" href="#services">
            Services
          </a>
        </li>
        <li>
          <a className="nav-link scrollto" href="#portfolio">
            Portfolio
          </a>
        </li>

        <li>
          <a href="blog.html">Blog</a>
        </li>

        <li>
          <a className="nav-link scrollto" href="#contact">
            Contact
          </a>
        </li>
        <li>
          <a className="getstarted scrollto" href="#about">
            Get Started
          </a>
        </li>
      </ul>
      <i className="bi bi-list mobile-nav-toggle"></i>
    </nav>
  );
};

ReactDOM.render(<Header />, document.getElementById("show-header"));
