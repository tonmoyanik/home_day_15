<?php
namespace App\classes;
class PasswordGenerator
{
    protected $length;
    protected $data = [];
    protected $password;
    protected $i;
    protected $index;

    public function __construct($post = null)
    {
        $this->length = $post['password_length'];
        $this->data = ['#','@','1','A','a',')','6','!','g','9','*','5'];
    }

    public function newPassword(){

        for ($this->i = 0 ; $this->i < $this->length; $this->i++){

            $this->index = rand(0,11);
            $this->password .= $this->data[$this->index];
        }
        return $this->password;
    }
}