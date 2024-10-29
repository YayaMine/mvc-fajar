<?php 

class App{
    //memastikan app nya kepanggil apa tidak
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {
        $url = $this->parseURL();
    
        // Pastikan bahwa $url bukan null dan ada elemen pertama ($url[0])
        if ($url && isset($url[0]) && file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
    
        // Require file controller
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
    
        // Cek method di controller
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }
    
        // Jika ada parameter, simpan dalam $this->params
        if (!empty($url)) {
            
            $this->params = array_values($url);
        }
            //membuat untuk menjalankan controller dan method serta kirimkan params jika ada.
            call_user_func_array([$this->controller, $this->method],$this->params);    
        }
    public function parseUrl()
    {
        if(isset($_GET['url'])){
            // $url =$_GET['url'];
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}