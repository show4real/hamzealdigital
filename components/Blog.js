const { useState, useEffect } = React;

const Blog = () => {
  const [blogs, setBlogs] = useState([]);
  const [loading, setLoading] = useState(false);

  useEffect(() => {
    fetchData();
  }, []);

  const header = () => {
    return {
      "Content-Type": "application/json",
      Accept: "application/json",
    };
  };

  const handleResponse = (response) => {
    return response.text().then((text) => {
      const data = text && JSON.parse(text);
      if (!response.ok) {
        if (response.status === 403) {
          window.location.href = "/";
        }

        const error = data || response.statusText;
        return Promise.reject(error);
      }

      return data;
    });
  };

  const getBlogs = (data) => {
    const requestOptions = {
      method: "POST",
      headers: header(),
      body: JSON.stringify(data),
    };
    return fetch(
      `https://www.hayzeeonlineapi.hayzeeonline.com/api/user/allblogs`,
      requestOptions
    ).then(handleResponse);
  };

  const fetchData = async () => {
    setLoading(true);
    getBlogs().then(
      (res) => {
        setBlogs(res.blogs.data);
        setLoading(false);
      },
      (error) => {
        setLoading(false);
      }
    );
  };

  return !loading && blogs.length > 0 ? (
    <section class="blog" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 entries">
            {blogs.map((blog) => (
              <article class="entry">
                {/* <div class="entry-img">
                  <img src={blog.image} alt="" />
                </div> */}

                <h2 class="entry-title">{blog.name}</h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center">
                      <i class="bi bi-person"></i>
                      <a href="#">Oladayo Showole</a>
                    </li>
                  </ul>
                </div>

                <div class="entry-content">
                  <p
                    dangerouslySetInnerHTML={{
                      __html: blog.description.substring(0, 200),
                    }}
                  ></p>
                  <div class="read-more">
                    <a href="#">Read More</a>
                  </div>
                </div>
              </article>
            ))}

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li>
                  <a href="#">1</a>
                </li>
                <li class="active">
                  <a href="#">2</a>
                </li>
                <li>
                  <a href="#">3</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="sidebar">
              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text" />
                  <button type="submit">
                    <i class="bi bi-search"></i>
                  </button>
                </form>
              </div>

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li>
                    <a href="#">
                      General <span>(25)</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Lifestyle <span>(12)</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Travel <span>(5)</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Design <span>(22)</span>
                    </a>
                  </li>
                </ul>
              </div>

              <h3 class="sidebar-title">Recent Posts</h3>

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li>
                    <a href="#">App</a>
                  </li>
                  <li>
                    <a href="#">IT</a>
                  </li>
                  <li>
                    <a href="#">Graphic Design</a>
                  </li>
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">Hosting</a>
                  </li>

                  <li>
                    <a href="#">Creative</a>
                  </li>

                  <li>
                    <a href="#">Digital Marketing</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  ) : (
    <div style={{ textAlign: "center" }}>loading....</div>
  );
};

// Render the Blog component into the 'root' div
ReactDOM.render(<Blog />, document.getElementById("show"));
