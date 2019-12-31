function showElement(choice) {
    switch (choice) {
        case 1:
            document.getElementById('addBooks').style.display = 'none';
            document.getElementById('changePassword').style.display = 'none';
            document.getElementById('paymentmethod').style.display = 'none';
            document.getElementById('showBooks').style.display = 'none';
            document.getElementById('mycart').style.display = 'none';
            document.getElementById('wishlist').style.display = 'none';
            document.getElementById('myorder').style.display = 'block';
            break;
        case 2:
            document.getElementById('addBooks').style.display = 'none';
            document.getElementById('changePassword').style.display = 'none';
            document.getElementById('paymentmethod').style.display = 'block';
            document.getElementById('showBooks').style.display = 'none';
            document.getElementById('mycart').style.display = 'none';
            document.getElementById('wishlist').style.display = 'none';
            document.getElementById('myorder').style.display = 'none';
            break;
        case 3:
            document.getElementById('addBooks').style.display = 'none';
            document.getElementById('changePassword').style.display = 'none';
            document.getElementById('paymentmethod').style.display = 'none';
            document.getElementById('showBooks').style.display = 'none';
            document.getElementById('mycart').style.display = 'none';
            document.getElementById('wishlist').style.display = 'block';
            document.getElementById('myorder').style.display = 'none';
            break;
        case 4:
            document.getElementById('addBooks').style.display = 'block';
            document.getElementById('changePassword').style.display = 'none';
            document.getElementById('paymentmethod').style.display = 'none';
            document.getElementById('showBooks').style.display = 'none';
            document.getElementById('mycart').style.display = 'none';
            document.getElementById('wishlist').style.display = 'none';
            document.getElementById('myorder').style.display = 'none';
            break;
        case 5:
            document.getElementById('addBooks').style.display = 'none';
            document.getElementById('changePassword').style.display = 'none';
            document.getElementById('paymentmethod').style.display = 'none';
            document.getElementById('showBooks').style.display = 'block';
            document.getElementById('mycart').style.display = 'none';
            document.getElementById('wishlist').style.display = 'none';
            document.getElementById('myorder').style.display = 'none';
            break;
        case 6:
            document.getElementById('addBooks').style.display = 'none';
            document.getElementById('changePassword').style.display = 'block';
            document.getElementById('paymentmethod').style.display = 'none';
            document.getElementById('showBooks').style.display = 'none';
            document.getElementById('mycart').style.display = 'none';
            document.getElementById('wishlist').style.display = 'none';
            document.getElementById('myorder').style.display = 'none';
            break;
        case 7:
            document.getElementById('addBooks').style.display = 'none';
            document.getElementById('changePassword').style.display = 'none';
            document.getElementById('paymentmethod').style.display = 'none';
            document.getElementById('showBooks').style.display = 'none';
            document.getElementById('mycart').style.display = 'block';
            document.getElementById('wishlist').style.display = 'none';
            document.getElementById('myorder').style.display = 'none';
            break;
    }
}