<?php
class student{
    public $name;
    public $student_id;
    public $age;
    public function introduce(){
        echo  "大家好，我是{$this->name},今年{$this->age}岁。<br/>我的学号是{$this->student_id}";
    }
    public function study(){
        $time = date("Y年m月d日  H:i:s");
        echo "当前时间为{$time},学习中";
    }
}
?>