const { useState, useEffect } = React;
const slug = document.getElementById("dom-target").textContent;
console.log(slug);

const Detail = () => {
  const [loading, setLoading] = useState(false);

  const [product, setProduct] = useState(null);
  const [id, setId] = useState(slug.trim());

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

  const getProduct = (id) => {
    const requestOptions = {
      method: "GET",
      headers: header(),
    };
    return fetch(
      `https://www.hayzeeonlineapi.hayzeeonline.com/api/singleproduct/${id}`,
      requestOptions
    ).then(handleResponse);
  };

  const fetchData = async () => {
    setLoading(true);
    getProduct(id).then(
      (res) => {
        setProduct(res.product);
        setLoading(false);
      },
      (error) => {
        setLoading(false);
      }
    );
  };

  const ProductImages = ({ product }) => {
    const [images, setImages] = useState([]);
    const [selectedImage, setSelectedImage] = useState(0);

    const handleThumbnailClick = (index) => {
      setSelectedImage(index);
    };

    const handleArrowClick = (direction) => {
      if (direction === "prev") {
        setSelectedImage(
          selectedImage === 0 ? images.length - 1 : selectedImage - 1
        );
      } else if (direction === "next") {
        setSelectedImage(
          selectedImage === images.length - 1 ? 0 : selectedImage + 1
        );
      }
    };

    useEffect(() => {
      fetchImages();
    }, []);

    const getProductImages = (id) => {
      const requestOptions = {
        method: "POST",
        headers: header(),
      };
      return fetch(
        `https://www.hayzeeonlineapi.hayzeeonline.com/api/user/product/images/${id}`,
        requestOptions
      ).then(handleResponse);
    };

    const fetchImages = () => {
      getProductImages(product.id)
        .then((res) => {
          setImages(res.product_images);
        })
        .catch((error) => {
          console.error("Error fetching images:", error);
        })
        .finally(() => {
          setLoading(false);
        });
    };

    return (
      <>
        {console.log("dayo")}
        {!loading && images.length > 0 && (
          <div className="product-container">
            <div className="product-slider">
              <img
                src={images[selectedImage]}
                style={{ height: "100%", width: "100%" }}
                alt={`Product Image ${selectedImage + 1}`}
              />
              <div
                className="arrow-left"
                onClick={() => handleArrowClick("prev")}
              >
                <span>&lt;</span>
              </div>
              <div
                className="arrow-right"
                onClick={() => handleArrowClick("next")}
              >
                <span>&gt;</span>
              </div>
            </div>
            <div className="product-thumbnails">
              {images.map((image, index) => (
                <div
                  key={index}
                  className={`thumbnail ${
                    selectedImage === index ? "selected" : ""
                  }`}
                  onClick={() => handleThumbnailClick(index)}
                >
                  <img src={image} alt={`Thumbnail ${index + 1}`} />
                </div>
              ))}
            </div>
          </div>
        )}
      </>
    );
  };

  const tagStyle = {
    backgroundColor: "#dd1d84",
    color: "white",
    borderColor: "#dd1d84",
    padding: "5px 0px 5px 10px",
    borderRadius: "5px",
    marginBottom: 10,
    width: "50px",
  };

  const originalPriceStyle = {
    textDecoration: "line-through",
    color: "#0E1B4D",
    fontSize: 25,
    padding: 10,
    fontWeight: "bold",
    fontFamily: "Archivo, serif",
  };

  const StorageButton = () => {
    return (
      <>
        <h5 className="device-type"> Storage</h5>
        <button className="styled-button">
          <span>{!loading && product !== null && product.storage}</span>
        </button>
      </>
    );
  };

  const RAMButton = () => {
    return (
      <>
        <h5 className="device-type"> RAM</h5>
        <button className="styled-button">
          <span>{!loading && product !== null && product.ram} RAM</span>
        </button>
      </>
    );
  };

  const ProcessorButton = () => {
    return (
      <>
        <h5 className="device-type"> Processor</h5>
        <button className="styled-button">
          <span>{!loading && product !== null && product.processor}</span>
        </button>
      </>
    );
  };

  const BuyNow = () => {
    const handleCopyLink = () => {
      navigator.clipboard.writeText(window.location.href);
      alert("Link copied to clipboard"); // Use alert or any other UI for the message
    };

    return (
      <div className="dropdown">
        <button
          className="btn btn-default buy-now-button dropdown-toggle"
          type="button"
          data-bs-toggle="dropdown"
        >
          Buy Now
        </button>
        <ul className="dropdown-menu dropdown-menu-end">
          <li>
            <a className="dropdown-item" href="#" onClick={handleCopyLink}>
              <span className="me-2">
                <i className="bi bi-files"></i>
              </span>
              Click to Copy Link
              <br />
              Then click on the chat Icon to paste
            </a>
          </li>
        </ul>
      </div>
    );
  };

  const formatNumber = (price) => {
    let newprice = Number(price) + 10000;
    return newprice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  };

  const PickupLocation = () => {
    return (
      <div className="d-flex">
        <i
          className="bi bi-check"
          style={{ color: "#0E1B4D", marginRight: "8px" }}
        ></i>
        <span style={{ color: "#0E1B4D", fontWeight: "700" }}>
          Pickup available at Abeokuta RD, NNPC Junction, Nikem Plaza, Ibadan
          Oyo State Nigeria.
          <b style={{ display: "block" }}>contact: 07032618748 08174320240</b>
        </span>
      </div>
    );
  };

  const Feedback = () => {
    return (
      <div style={{ marginTop: 10 }}>
        <div className="d-flex pt-3 font-weight-bold">
          <i
            className="bi bi-check-square"
            style={{ color: "#0E1B4D", marginRight: "8px" }}
          ></i>
          <span style={{ color: "#0E1B4D" }}>99% Positive Feedbacks</span>
        </div>

        <div className="d-flex pt-3 font-weight-bold">
          <i
            className="bi bi-lock"
            style={{ color: "#0E1B4D", marginRight: "8px" }}
          ></i>
          <span style={{ color: "#0E1B4D" }}>100% Secure</span>
        </div>

        <div className="d-flex pt-3 font-weight-bold">
          <i
            className="bi bi-car"
            style={{ color: "#0E1B4D", marginRight: "8px" }}
          ></i>
          <span style={{ color: "#0E1B4D" }}>Pay on Delivery</span>
        </div>
      </div>
    );
  };

  return (
    <div className="row">
      {loading ? (
        <div style={{ textAlign: "center", marginTop: "20px" }}>
          <div className="spinner-border text-primary" role="status">
            <span className="visually-hidden">Load more</span>
          </div>
        </div>
      ) : (
        <>
          <div className="col-md-12">
            {product !== null && (
              <h2 class="entry-title">
                <a href="#">{product.name}</a>
              </h2>
            )}
          </div>
          <div className="col-md-6">
            {product !== null && <ProductImages product={product} />}
          </div>
          <div className="col-md-6" style={{ marginTop: 10 }}>
            {!loading && product !== null && (
              <div
                className="product-details-content"
                style={{ height: "700px", overflow: "scroll" }}
              >
                <span>
                  {" "}
                  <div style={tagStyle}>
                    {product.availability == 1 ? "New" : "Sold"}
                  </div>
                </span>
                <h1
                  style={{
                    color: "#0E1B4D",
                    fontWeight: 600,
                    fontFamily: "Archivo, serif",
                    fontSize: 30,
                  }}
                >
                  {product.name}
                </h1>
                <div style={{ marginTop: 20 }}>
                  <StorageButton />
                  <RAMButton />
                  <ProcessorButton />
                </div>

                <div style={{ marginTop: 15 }}>
                  <h4
                    className="device-type"
                    style={{
                      color: "#0E1B4D",

                      fontFamily: "Archivo, serif",
                    }}
                  >
                    {" "}
                    Price
                  </h4>
                  {/* <span style={originalPriceStyle}>
                      &#8358;{formatNumber(Number(product.price) + 10000)}
                    </span> */}
                  <span
                    style={{
                      fontSize: 30,
                      paddingLeft: 10,
                      color: "#0E1B4D",
                      fontWeight: 800,
                      fontFamily: "Archivo, serif",
                    }}
                  >
                    &#8358;{formatNumber(product.price)}
                  </span>{" "}
                </div>
                <div style={{ marginTop: 20 }}>
                  <BuyNow />
                </div>

                <div
                  style={{
                    marginTop: 20,
                    color: "#0E1B4D",
                    fontFamily: "Archivo, serif",
                  }}
                >
                  <div
                    className="description"
                    dangerouslySetInnerHTML={{ __html: product.description }}
                  />
                </div>

                <div style={{ marginTop: 20 }}>
                  <svg width="15" height="15" aria-hidden="true">
                    <circle
                      cx="7.5"
                      cy="7.5"
                      r="7.5"
                      fill="rgb(62,214,96, 0.3)"
                    ></circle>
                    <circle
                      cx="7.5"
                      cy="7.5"
                      r="5"
                      stroke="rgb(255, 255, 255)"
                      stroke-width="1"
                      fill="rgb(62,214,96)"
                    ></circle>
                  </svg>
                  <span style={{ paddingLeft: 10 }}>In Stock</span>
                </div>

                <div style={{ marginTop: 30 }}>
                  <PickupLocation />
                  <div
                    style={{
                      color: "#0E1B4D",
                      padding: "20px",
                      fontSize: 15,
                    }}
                  >
                    Usually ready in 24 hours{" "}
                  </div>
                  <div>
                    <a
                      style={{
                        color: "#0E1B4D",
                        padding: "20px",
                        fontSize: 15,
                        fontWeight: 300,
                        textDecoration: "underlined",
                      }}
                      href="#"
                    >
                      View store information
                    </a>
                  </div>
                </div>

                <div>
                  <Feedback />
                </div>
              </div>
            )}
          </div>
        </>
      )}
    </div>
  );
};
ReactDOM.render(<Detail />, document.getElementById("detail"));
