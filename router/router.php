<?

use app\controllers\Admin;
use app\controllers\Info;
use app\utils\Router;

Router::myGet('/', 'home');
Router::myGet('/main', 'main');
Router::myGet('/book', 'book');
Router::myGet('/profile', 'profile');
Router::myGet('/personal-data', 'personal-data');
Router::myGet('/orders', 'orders');
Router::myGet('/bookmarks', 'bookmarks');
Router::myGet('/manage-admin', 'manage-admin');
Router::myGet('/reduct-user', 'reductUser');
Router::myGet('/delete-user', 'deleteUser');
Router::myGet('/errors-page', 'errors');
Router::myGet('/dashboard', 'dashboard');
Router::myGet('/categories', 'categories');
Router::myGet('/add-category', 'add-category');
Router::myGet('/reduct-category', 'reduct-category');
Router::myGet('/delete-category', 'delete-category');
Router::myGet('/products', 'products');
Router::myGet('/add-product', 'add-product');
Router::myGet('/reduct-product', 'reduct-product');
Router::myGet('/delete-product', 'delete-product');
Router::myPost('/reductuser', Info::class, 'reductUser', true, false);
Router::myPost('/deleteuser', Info::class, 'deleteUser', true, false);
Router::myPost('/registeruser', Info::class, 'registerUser', true, false);
Router::myPost('/authSession', Info::class, 'authInSession', true, true);
Router::myPost('/destroySession', Info::class, 'destroySession', true, true);
Router::myPost('/updateAvatar', Info::class, 'updateAvatar', true, true);
Router::myPost('/updateUser2', Info::class, 'updateUser2', true, false);
Router::myPost('/addcategory', Admin::class, 'addCategory', true, false);
Router::myPost('/reductcategory', Admin::class, 'reductCategory', true, false);
Router::myPost('/deletecategory', Admin::class, 'deleteCategory', true, false);
Router::myPost('/addproduct', Admin::class, 'addProduct', true, false);
Router::myPost('/reductproduct', Admin::class, 'updateProduct', true, false);
Router::myPost('/deleteproduct', Admin::class, 'deleteProduct', true, false);
Router::getContent();
?>