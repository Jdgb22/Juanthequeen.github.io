<!DOCTYPE html>
<html>
<head>
  <title>SDP - PRODUCTOS</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .navbar {
      background-color: orangered;
    }

    #details-section {
      margin-top: 20px;
    }

    #comments-section {
      margin-top: 20px;
    }
    .btn{
        background-color: orangered;
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="">SDP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{url('/inicio')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                    </svg> Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/ajustes')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                    </svg> Ajustes</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                    <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                    <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                    </svg> Volver</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  <div class="container mt-4">
    <h2>Productos</h2>
    
    <div class="row">
      <div class="col-md-6">
        <div class="btn-group" role="group" aria-label="Categorías">
          <button type="button" class="btn btn-secondary" onclick="filterCategory('todos')">Todos</button>
          <button type="button" class="btn btn-secondary" onclick="filterCategory('categoria1')">Panes</button>
          <button type="button" class="btn btn-secondary" onclick="filterCategory('categoria2')">Gaseosas</button>
        </div>
        <ul class="list-group mt-3" id="product-list">
          <li class="list-group-item" data-category="categoria1" onclick="addToCart('Producto 1', 'categoria1', 2.000)">Pan de yuca</li>
          <li class="list-group-item" data-category="categoria1" onclick="addToCart('Producto 1', 'categoria1', 3.000)">Pan con queso</li>
          <li class="list-group-item" data-category="categoria1" onclick="addToCart('Producto 3', 'categoria2', 2.500)">Coca-cola</li>
          <li class="list-group-item" data-category="categoria1" onclick="addToCart('Producto 4', 'categoria2', 1.500)">Botella de agua</li>
        </ul>
      </div>

      <div class="col-md-6">
        <h3>Detalles del Producto Seleccionado</h3>
        <div>
          <label for="selected-product">Producto: </label>
          <span id="selected-product"></span>
        </div>
        <div>
          <label for="selected-price">Precio: </label>
          <span id="selected-price"></span>
        </div>
      </div>
    </div>

    <div class="row" id="details-section">
      <div class="col-md-6">
        <div>
          <label for="selected-quantity">Cantidad: </label>
          <input type="number" id="selected-quantity" min="1" value="1">
        </div>
      </div>
      <div class="col-md-6">
        <div>
          <label for="selected-comments">Comentarios: </label>
          <textarea id="selected-comments" rows="3"></textarea>
        </div>
        <button class="btn btn-danger mt-3" onclick="addToCartWithDetails()">Agregar</button>
      </div>
    </div>
    <h3 class="mt-4">Productos Seleccionado</h3>
    <ul class="list-group" id="cart-list">
    </ul>

    <div class="mt-4">
      <h4>Valor Total: $<span id="total-amount">0.000</span></h4>
    </div>

    <button class="btn btn-danger mt-3" id="delete-selected" onclick="deleteSelected()" disabled>Borrar producto</button>
    <button class="btn btn-danger mt-3 ml-2" onclick="clearCart()">Limpiar venta</button>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    function filterCategory(category) {
      var productList = document.getElementById('product-list');
      var products = productList.getElementsByClassName('list-group-item');
      
      for (var i = 0; i < products.length; i++) {
        var productCategory = products[i].getAttribute('data-category');
        if (category === 'todos' || productCategory === category) {
          products[i].style.display = 'list-item';
        } else {
          products[i].style.display = 'none';
        }
      }
    }

    var selectedProductName = "";
    var selectedProductPrice = 0.000;

    function addToCart(productName, category, price) {
      selectedProductName = productName;
      selectedProductPrice = price;
      document.getElementById('selected-product').innerText = productName + ' (' + category + ')';
      document.getElementById('selected-price').innerText = '$' + price.toFixed(2);
    }

    function addToCartWithDetails() {
      var quantity = document.getElementById('selected-quantity').value;
      var comments = document.getElementById('selected-comments').value;
      var cartList = document.getElementById('cart-list');
      var listItem = document.createElement('li');
      listItem.className = 'list-group-item';
      listItem.appendChild(document.createTextNode(
        selectedProductName + ' - Cantidad: ' + quantity + ' - Precio: $' + (selectedProductPrice * quantity).toFixed(2) + ' - Comentarios: ' + comments
      ));
      cartList.appendChild(listItem);
      updateTotalAmount();
      document.getElementById('selected-product').innerText = "";
      document.getElementById('selected-price').innerText = "";
      document.getElementById('selected-quantity').value = 1;
      document.getElementById('selected-comments').value = "";
      document.getElementById('delete-selected').disabled = false;
    }

    function updateTotalAmount() {
      var cartList = document.getElementById('cart-list');
      var selectedItems = cartList.getElementsByClassName('list-group-item');
      var totalAmount = 0.000;

      for (var i = 0; i < selectedItems.length; i++) {
        var priceText = selectedItems[i].textContent.match(/(\d+\.\d{2})/);
        if (priceText && priceText.length > 0) {
          totalAmount += parseFloat(priceText[0]);
        }
      }
      document.getElementById('total-amount').innerText = totalAmount.toFixed(2);
    }

    function deleteSelected() {
      var cartList = document.getElementById('cart-list');
      var selectedItems = cartList.getElementsByClassName('list-group-item');

      if (selectedItems.length > 0) {
        cartList.removeChild(selectedItems[selectedItems.length - 1]);
      }
      updateTotalAmount();
      if (selectedItems.length === 0) {
        document.getElementById('delete-selected').disabled = true;
      }
    }

    function clearCart() {
      var cartList = document.getElementById('cart-list');
      cartList.innerHTML = "";
      document.getElementById('selected-product').innerText = "";
      document.getElementById('selected-price').innerText = "";
      document.getElementById('selected-quantity').value = 1;
      document.getElementById('selected-comments').value = "";
      updateTotalAmount();
      document.getElementById('delete-selected').disabled = true;
    }
  </script>
</body>
</html>
