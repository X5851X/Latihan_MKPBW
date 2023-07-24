function addToCart(itemName) {
    let itemPrice = 0;
    switch(itemName) {
      case 'Bala-Bala':
        itemPrice = 50000;
        break;
      case 'Pisang Goreng':
        itemPrice = 40000;
        break;
      case 'Cireng':
        itemPrice = 60000;
        break;
    case 'Mendoan':
        itemPrice = 45000;
        break;
    case 'Tahu Isi':
        itemPrice = 30000;
        break;
    case 'Pisang Coklat':
        itemPrice = 55000;
        break;
      default:
        console.log('Item not found');
    }
    let cartItems = document.getElementById('cart-items');
    let cartTotal = document.getElementById('cart-total');
    let item = document.createElement('li');
    item.innerHTML = `${itemName} - Rp ${itemPrice}`;
    cartItems.appendChild(item);
    cartTotal.innerText = parseInt(cartTotal.innerText) + itemPrice;
  }
  
  function updateCart(){
    // Menghapus semua barang dari tampilan keranjang belanja
    let cartItems = document.getElementById('cart-items');
    let cartTotal = document.getElementById('cart-total');
    cartItems.innerHTML = ""; 
    cartTotal.innerText = "0"; 
  }

  function checkout() {
    let cartTotal = document.getElementById('cart-total').innerText;
    let cartItems = document.getElementById('cart-items').innerText;
    let name = prompt('Nama Anda:');
    let keterangan = prompt("Masukkan Keterangan (Optional):");

    // Menampilkan pesan terimakasih dengan informasi pemesanan
    alert(`Terima kasih telah membeli Gorengan di Gorengan.Com\n\nNama:  ${name} 
    \nAnda telah memesan pilihan Gorengan: \n${cartItems} 
    \nKeterangan: ${keterangan} \nTotal Pembayaran: ${cartTotal}`);

    // Mengosongkan keranjang belanja
    cart = [];
    updateCart();
  }
  
  