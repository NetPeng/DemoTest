<?php
    header("Content-Type:text/html;charset=utf-8");
    echo "HelloWord";

    echo "你好 php";

    $name="小江";

    $Name="小刚";

    echo $name;
    echo $Name;

    echo "<br />";
    /**
    索引数组
    */
    $array=array("haha","test","不知道");
    echo $array[0];

    /*
    关联数组
    */
    echo "<br />";
    $arrayRel=array(
        "name"=>"小将军",
        "age"=>28,
        "time"=>2016
    );
    var_dump($arrayRel['name']);
    echo "<br />";
    echo $arrayRel['name'];
    echo "<br />";
    print_r($arrayRel);
    //echo $arrayRel=>name;

    echo "<br /> 对象<br />";
    class Person{
        public $name="江江";
        public $age="40";
    }

    $person=new Person;
    echo $person->name;
    var_dump($person);
?>