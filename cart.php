
class Application_Models_Cart
{
function addToCard($id, $count=1)
{
$_SESSION[‘cart’][$id]=$_SESSION['cart'][$id]+$count;return true;
}
function delFromCart($id, $count=1){}

function clearCart(){}
}
1
2
3
4
5
6
7
8
9
10
class Application_Models_Cart
{
function addToCard($id, $count=1)
{
$_SESSION[‘cart’][$id]=$_SESSION['cart'][$id]+$count;return true;
}
function delFromCart($id, $count=1){}
 
function clearCart(){}
}
