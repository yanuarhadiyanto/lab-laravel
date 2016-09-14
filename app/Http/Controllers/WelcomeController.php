<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

/**
 * Description of WelcomeController
 *
 * @author INIXINDO
 */
class WelcomeController extends Controller{
    //put your code here
    function index(){
        //echo "hallo";
        return view('welcome.index');
    }
    
    function param($param1,$param2=null){
        //echo 'parameter 1 nya adalah '.$param1.' dan parameter 2 nya adalah '.$param2;
        //return view('welcome.param')->with('x',$param1)->with('y',$param2);
        $data['x']=$param1;
        $data['y']=$param2;
        return view('welcome.param',$data);
    }
    
    function tampilArray(){
        //$arr = array("senin","selasa","rabu","kamis","jumat","sabtu");
        //$arr = array();
        $arr = array("senin");
        return view('welcome.array')->with('hari',$arr);
    }
    
    function testemplate(){
        $arr = array("senin","selasa","rabu","kamis","jumat","sabtu");
        return view('welcome.template')->with('hari',$arr);
    }
}
