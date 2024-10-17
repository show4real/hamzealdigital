const { useState, useEffect } = React;

const ProductCard = ({ imageSrc, name, price, altImage, slug }) => {
  const [isHovered, setIsHovered] = useState(false);

  const formatNumber = (price) => {
    let newprice = Number(price) + 10000;
    return newprice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  };

  const cardStyles = {
    position: "relative",
    border: "1px solid #ccc",
    borderRadius: "8px",
    overflow: "hidden",
    margin: "10px",
    border: "none",
  };

  const imageStyles = {
    width: "100%",
    height: "auto",
    transition: "opacity 0.3s",
    opacity: isHovered ? 0.7 : 1,
  };

  const buttonStyles = {
    position: "absolute",
    left: "50%",
    top: "100px",
    transform: "translateX(-50%)",
    padding: "8px 16px",
    backgroundColor: "#0E1B4D",
    color: "white",
    borderRadius: "4px",
    border: "none",
    cursor: "pointer",
    opacity: isHovered ? 1 : 0,
    transition: "opacity 0.3s",
  };

  return (
    <div
      style={cardStyles}
      onMouseEnter={() => setIsHovered(true)}
      onMouseLeave={() => setIsHovered(false)}
    >
      <img
        src={isHovered ? altImage : imageSrc}
        alt={name}
        style={imageStyles}
      />
      <h3 style={{ margin: "10px", fontSize: "15px" }}>
        <a
          href={`../detail/?page=${slug}`}
          style={{ textDecoration: "none", color: "#0E1B4D" }}
        >
          {name}
        </a>
      </h3>
      <div
        style={{
          fontSize: 15,
          color: "#0E1B4D",
          fontWeight: 500,
          fontFamily: '"Montserrat", Arial, Helvetica, sans-serif',
          margin: "10px 0px 10px 0px",
          paddingLeft: 15,
        }}
      >
        &#8358;{formatNumber(price)}
      </div>

      <a href={`../detail/?page=${slug}`}>
        <button style={buttonStyles}>See Details</button>
      </a>
    </div>
  );
};

const TrendingProduct = () => {
  const [products, setProducts] = useState([]);
  const [loading, setLoading] = useState(false);
  const [newLoading, setNewLoading] = useState(false);
  const [brands, setBrands] = useState([]);

  const [rows, setRows] = useState(12);
  const [page, setPage] = useState(1);
  const [total, setTotal] = useState(1);
  const [search, setSearch] = useState(null);
  const [brand, setBrand] = useState(null);
  const [category, setCategory] = useState(null);
  const [storages, setStorages] = useState([]);
  const [processors, setProcessors] = useState([]);
  const [rams, setRams] = useState([]);
  const [sort, setSorting] = useState(null);
  const [price, setPrice] = useState([4000, 1000000]);

  useEffect(() => {
    if (search) {
      fetchData();
    } else {
      products.length > 0 ? fetchMoreData() : fetchData();
    }
  }, [rows, page, search]);

  const header = () => {
    return {
      "Content-Type": "application/json",
      Accept: "application/json",
    };
  };

  const handleLoadMore = () => {
    setPage(page + 1); // Increment the page value to load the next page of products
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

  const debounce = (callback, delay) => {
    let timer;
    return function (...args) {
      clearTimeout(timer);
      timer = setTimeout(() => {
        callback(...args);
      }, delay);
    };
  };

  const delayedHandleSearch = debounce((value) => {
    setSearch(value);
  }, 100);

  const handleSearch = (event) => {
    const value = event.target.value;
    delayedHandleSearch(value);
  };

  const searchSelect = () => {
    return (
      <input
        placeholder=" Search products by name, model storage, processor.."
        id="show"
        value={search}
        style={{
          color: "black",
          marginBottom: 10,
          fontWeight: "bold",
          height: 34, // Set the height to reduce the input height
          borderRadius: 5,
          border: "1px solid #0E1B4D",
          width: "100%",
        }}
        onChange={handleSearch}
      />
    );
  };

  const getProducts = (data) => {
    const requestOptions = {
      method: "POST",
      headers: header(),
      body: JSON.stringify(data),
    };
    return fetch(
      `https://apiv2.hayzeeonline.com/api/user/products`,
      requestOptions
    ).then(handleResponse);
  };

  const fetchData = async () => {
    setLoading(true);
    getProducts({
      page,
      rows,
      price,
      brand,
      rams,
      sort,
      storages,
      processors,
      search,
      category,
    }).then(
      (res) => {
        setProducts(res.products.data);
        setTotal(res.products.total);
        setLoading(false);
      },
      (error) => {
        setLoading(false);
      }
    );
  };

  const fetchMoreData = async () => {
    setNewLoading(true);
    getProducts({
      page,
      rows,
      price,
      brand,
      rams,
      sort,
      storages,
      processors,
      search,
      category,
    }).then(
      (res) => {
        setProducts((prevProducts) => [...prevProducts, ...res.products.data]);
        setTotal(res.products.total);
        setNewLoading(false);
      },
      (error) => {
        setNewLoading(false);
      }
    );
  };

  return (
    <div className="row">
      <div className={`col-md-12`}>{searchSelect()}</div>
      {loading ? (
        <div style={{ textAlign: "center", marginTop: "20px" }}>
          <div className="spinner-border text-primary" role="status">
            <span className="visually-hidden">Load more</span>
          </div>
        </div>
      ) : (
        products.map((product, key) => (
          <div className="col-lg-4 col-md-4" key={key}>
            <ProductCard
              imageSrc={product.image}
              name={product.name}
              price={product.price}
              altImage={product.image_hover}
              slug={product.slug}
            />
          </div>
        ))
      )}
      <div className="col-md-12">
        {newLoading && (
          <div style={{ textAlign: "center", marginTop: "20px" }}>
            <div className="spinner-border text-primary" role="status">
              <span className="visually-hidden">Load more</span>
            </div>
          </div>
        )}
        {!loading && products.length < total && (
          <div
            style={{
              textAlign: "center",
              marginTop: "20px",
              alignItems: "center",
            }}
          >
            <button onClick={handleLoadMore} className="load-more-button">
              Load More
            </button>
          </div>
        )}
      </div>
    </div>
  );
};
ReactDOM.render(<TrendingProduct />, document.getElementById("trending"));
