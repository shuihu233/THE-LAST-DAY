<?php 

// $r=array(0=>'zhangsan',1=>165,2=>'cahngsah');
// $r2=array(0=>'name',1=>'age',2=>'adress');
// $tmp=[];
// $m=20;

 // $url='http://www.sina.com.cn/abc/de/fg.php?id=1';
 //  function url($url)
 // {
 // 	$url=strrchr($url,'.');
 // 	$num=strrpos($url,'?');
 // 	$url=substr($url,1,$num-1);
 // 	return $url;
 // }
 // $url='http://www.sina.com.cn/abc/de/fg.php?id=1&a=c&t=12';
 // $arr=parse_url($url);
 //  $pathArr=pathinfo($url);

 //  $str = $pathArr['extension'];
 // $pat = explode('?',$str);
 //  print_r($pat);
// function get_arr($arr){ 
// unset($arr[0]); 
// } 
// $arr1 = array(1, 2); 
// $arr2 = array(1, 2); 
// get_arr(& $arr1); 
// get_arr($arr2); 
// echo count($arr1); 
// echo count($arr2); 
// function changeStr($str) 
// {	
// 	// 把字符串分割为数组
//     $arr1 = explode('_',$str);
//     *
//      * array(3) {
//      *  [0]=> string(4) "open" 
//      *  [1]=> string(4) "door" 
//      *  [2]=> string(2) "ok" }
     
//   	// 遍历数组元素
//     foreach($arr1 as $k=>$v) {
    	
//         $temp = ucfirst($v);
      
//         $arr2[] = $temp;
//     }
    
//     $str =  implode('',$arr2);
   
//     return $str;
// }



// $a = array('1001','1002');

// $b = array('1002','1003','1004');

// $c = array('1003','1004','1005');

// $d = array_keys(array_flip($a) + array_flip($b) + array_flip($c));

// print_r($d);


// class SingleInstance{    
//   
//         private function _construct(){
//             
//         }
//         
//        private static $instance;
//        
//        private function _clone(){
//            
//        }
//        public static function getInstance(){
//            
//            if(!self::$instance instanceof SingleInstance){
//                self::$instance=new SingleInstance();
//            }
//            return self ::$instance;
//            
//        }
//        
//     }



   $arr=[2,1,5,3,4];

     for ($i=0; $i <count($arr) ; $i++) { 

     	 for ($k=$i+1; $k <count($arr)-$i ; $k++) { 
     	 	  if ($arr[$k]>$arr[$i]) {
     	 	   	$arr[$k];
     	 	   } else{
                 $arr[$i];
     	 	   }
     	 }
     }

$arr=array(1,43,54,62,21,66,32,78,36,76,39);  
function getpao($arr)
{  
  $len=count($arr);
  //设置一个空数组 用来接收冒出来的泡
  //该层循环控制 需要冒泡的轮数
  for($i=1;$i<$len;$i++)
  { //该层循环用来控制每轮 冒出一个数 需要比较的次数
    for($k=0;$k<$len-$i;$k++)
    {
       if($arr[$k]>$arr[$k+1])
        {
            $tmp=$arr[$k+1];
            $arr[$k+1]=$arr[$k];
            $arr[$k]=$tmp;
        }
    }
  }
  return $arr;
}
 print_r(getpao($arr))
 ?>