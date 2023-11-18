class ProductList {
    constructor(products) {
        this.products = products;
        this.ul = document.getElementById('products');
    }

    addToCart(product) {
        // Código para añadir el producto al carrito
        console.log('Producto añadido al carrito:', product);
    }

    renderProduct(product) {
        // Creamos el elemento li y sus atributos
        let listElement = document.createElement('li');
        listElement.className = 'list-group-item d-flex justify-content-between lh-sm';

        // Título del producto
        let titleElement = document.createElement('h6');
        titleElement.className = 'my-0';
        titleElement.innerHTML = product.title;
        listElement.appendChild(titleElement);

        // Descripción del producto
        let descriptionElement = document.createElement('small');
        descriptionElement.className = 'text-body-secondary';
        descriptionElement.innerHTML = product.description;
        listElement.appendChild(descriptionElement);

        // Precio del producto
        let priceElement = document.createElement('small');
        priceElement.className = 'text-body-secondary';
        priceElement.innerHTML = product.price;
        listElement.appendChild(priceElement);

        // Creamos el botón y su manejador de eventos
        let addButton = document.createElement('button');
        addButton.innerHTML = 'Añadir al Carrito';
        addButton.onclick = () => this.addToCart(product);
        listElement.appendChild(addButton);

        return listElement;
    }

    render() {
        for (let product of this.products) {
            this.ul.appendChild(this.renderProduct(product));
        }
    }
}
// Datos de productos
let products = [
    {
        id: 1,
        title: 'BMX Bike',
        description: 'Bicicleta de montaña',
        price: '100 EUR'
    },
    {
        id: 2,
        title: 'Wilson Tennis Racket',
        description: 'Raqueta de tenis Wilson',
        price: '70 EUR'
    },
    {
        id: 3,
        title: 'Nike Running Shoes',
        description: 'Tenis de running Nike',
        price: '120 EUR'
    },
    {
        id: 4,
        title: 'Adidas Football Ball',
        description: 'Balón de fútbol Adidas',
        price: '50 EUR'
    },
    {
        id: 5,
        title: 'Puma Backpack',
        description: 'Mochila Puma',
        price: '30 EUR'
    },
    {
        id: 6,
        title: 'Under Armour Cap',
        description: 'Gorra Under Armour',
        price: '20 EUR'
    },
    {
        id: 7,
        title: 'Nike Socks',
        description: 'Calcetines Nike',
        price: '10 EUR'
    },
    {
        id: 8,
        title: 'Wilson Tennis Balls',
        description: 'Pelotas de tenis Wilson',
        price: '5 EUR'
    },
    {
        id: 9,
        title: 'Adidas Football Socks',
        description: 'Calcetines de fútbol Adidas',
        price: '10 EUR'
    },
    {
        id: 10,
        title: 'Puma Shorts',
        description: 'Shorts Puma',
        price: '20 EUR'
    }
];

// Crear instancia de la lista de productos y renderizar
let productList = new ProductList(products);
productList.render();
console.log(productList);