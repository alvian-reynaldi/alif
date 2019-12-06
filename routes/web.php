<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
	//return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function () {
	Route::resource('branch', 'BranchController');
	Route::resource('user', 'UserController');
	//Route::resource('product', 'ProductController');		
});

Route::get('inventory', ['as'=>'ga.inventory', 'uses'=>'GAController@inventory'] );
Route::get('inventory/order/{val}/{val2}', ['as'=>'ga.inventory.order', 'uses'=>'GAController@inventoryOrder'] );
Route::post('inventory/order', ['as'=>'ga.inventory.order.store', 'uses'=>'GAController@inventoryOrderStore'] );
Route::get('inventory/order/view', ['as'=>'ga.inventory.order.view', 'uses'=>'GAController@inventoryOrderView'] );
Route::get('inventory/order-review/{val}', ['as'=>'ga.inventory.order.review', 'uses'=>'GAController@inventoryOrderReview'] );
Route::get('inventory/order-endorse/{val}', ['as'=>'ga.inventory.order.endorse', 'uses'=>'GAController@inventoryOrderEndorse'] );
Route::post('inventory/order-endorse', ['as'=>'ga.inventory.order.endorse.post', 'uses'=>'GAController@inventoryOrderPostEndorse'] );
Route::get('inventory/order-approval/{val}', ['as'=>'ga.inventory.order.approval', 'uses'=>'GAController@inventoryOrderApproval'] );
Route::get('inventory/order/export', ['as'=>'ga.inventory.order.export', 'uses'=>'GAController@inventoryOrderExport'] );

Route::get('inventory/kategori', ['as'=>'ga.inventory.kategori', 'uses'=>'GAController@inventoryKategoriIndex'] );
Route::get('inventory/kategori/create', ['as'=>'ga.inventory.kategori.create', 'uses'=>'GAController@inventoryKategoriCreate'] );
Route::post('inventory/kategori/store', ['as'=>'ga.inventory.kategori.store', 'uses'=>'GAController@inventoryKategoriStore'] );
Route::get('inventory/kategori/edit/{val}', ['as'=>'ga.inventory.kategori.edit', 'uses'=>'GAController@inventoryKategoriEdit'] );
Route::patch('inventory/kategori/edit/{val}', ['as'=>'ga.inventory.kategori.update', 'uses'=>'GAController@inventoryKategoriUpdate'] );

Route::get('inventory/barang', ['as'=>'ga.inventory.barang', 'uses'=>'GAController@inventoryBarangIndex'] );
Route::get('inventory/barang/create', ['as'=>'ga.inventory.barang.create', 'uses'=>'GAController@inventoryBarangCreate'] );
Route::post('inventory/barang/store', ['as'=>'ga.inventory.barang.store', 'uses'=>'GAController@inventoryBarangStore'] );
Route::get('inventory/barang/edit/{val}', ['as'=>'ga.inventory.barang.edit', 'uses'=>'GAController@inventoryBarangEdit'] );
Route::patch('inventory/barang/edit/{val}', ['as'=>'ga.inventory.barang.update', 'uses'=>'GAController@inventoryBarangUpdate'] );

Route::get('inventory/barang/cabang/{val}', ['as'=>'ga.inventory.barang.cabang', 'uses'=>'GAController@inventoryBarangCabang'] );
Route::get('inventory/barang/cabang/edit/{val1}/{val2}', ['as'=>'ga.inventory.barang.cabang.edit', 'uses'=>'GAController@inventoryBarangCabangEdit'] );
Route::post('inventory/barang/cabang/update', ['as'=>'ga.inventory.barang.cabang.update', 'uses'=>'GAController@inventoryBarangCabangUpdate'] );

Route::get('procurement', ['as'=>'ga.procurement', 'uses'=>'GAController@procurement'] );
Route::get('contract', ['as'=>'financing.contract', 'uses'=>'ContractController@index'] );

Route::get('jaminan', ['as'=>'financing.jaminan', 'uses'=>'ContractController@indexJaminan'] );
Route::get('jaminan/{val}', ['as'=>'financing.jaminan.rinci', 'uses'=>'ContractController@rinciJaminan'] );

Route::get('dms', ['as'=>'financing.dms', 'uses'=>'DMSController@index'] );
Route::get('dms/view/{val}', ['as'=>'financing.dms.view', 'uses'=>'DMSController@view'] );
Route::get('dms/edit/{val}', ['as'=>'financing.dms.edit', 'uses'=>'DMSController@edit'] );
Route::patch('dms/edit/{val}', ['as'=>'financing.dms.update', 'uses'=>'DMSController@update'] );
Route::post('dms/store', ['as'=>'financing.dms.store', 'uses'=>'DMSController@store'] );
Route::get('dms/nview/{val}', ['as'=>'financing.dms.nview', 'uses'=>'DMSController@nview'] );
// Route::get('dms/cari','DMSController@cari');
//Route::controller('api', 'ApiController');

Route::get('neraca', ['as'=>'lapkeu.neraca', 'uses'=>'ReportController@neraca'] );
Route::get('pnl', ['as'=>'lapkeu.pnl', 'uses'=>'ReportController@pnl'] );
Route::get('trialbalance', ['as'=>'lapkeu.trialbalance', 'uses'=>'ReportController@trialbalance'] );
Route::get('dashboard/dbsales', ['as'=>'dashboard.dbsales', 'uses'=>'ReportController@dbsales'] );
Route::get('dashboard/dbops', ['as'=>'dashboard.dbops', 'uses'=>'ReportController@dbops'] );
Route::get('dashboard/dbproject', ['as'=>'dashboard.dbproject', 'uses'=>'ReportController@dbproject'] );

Route::get('/form-recaptcha','ReCaptchaController@index');
Route::post('/form-recaptcha','ReCaptchaController@submit');


