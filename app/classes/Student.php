<?php

namespace App\classes;

class Student
{
    public $student=[];
    public function __construct(){
        $this->student=[
          0=>[
              'id'=>1,
              'name'=>'akib',
              'email'=>'akib@email.com',
              'phone'=>'0173590509'
          ],

            1=>[
                'id'=>2,
                'name'=>'akib2',
                'email'=>'akib@email.com',
                'phone'=>'017359004'
            ],
            2=>[
                'id'=>3,
                'name'=>'akib3',
                'email'=>'akib@email.com',
                'phone'=>'017352349'
            ],
        ];
    }
    public function allStudent(){
        return $this->student;
    }
}