<?php
class Form {
    private $datas = [];
    public function __construct($datas = []){
        return $this-> datas = $datas;
    }
    private function getValue($name){
        if(isset($this->datas[$name])){
            return $this->datas[$name];
        }else{
            return '';
        }
    }
    private function input($type, $name, $label){
        $value = $this-> getValue($name);
        if($type == 'textarea'){
            $input = "<textarea name=\"$name\" class=\"form-control\" id=\"$name\">$value</textarea>";
        }else{
            $input = "<input type=\"$type\" class=\"form-control\" name=\"$name\" id=\"$name\" value=\"$value\">";
        }
        
        return "<div class=\"form-group\">
                    <label for=\"$name\">$label</label>
                    $input
                </div>";
    }
    public function nom($name, $label){
        return $this->input('text', $name, $label);
    }
    public function prenoms($name, $label){
        return $this->input('text', $name, $label);
    }

    public function email($name, $label){
        return $this -> input('email', $name, $label);
    }

    public function select($name, $label, $options){
        $options_html = "";
        $value = $this->getValue($name);
        $options = getServices();
        foreach($options as $v){
            $selected = '';
            if($value == $v){
                $selected = 'selected';
            }
            $options_html .= "<option value=\"$v->id\" $selected>$v->titre</option>";
        }
        return "<div class=\"form-group\">
                    <label for=\"$name\">$label</label>
                    <select class=\"form-control\" name=\"$name\" id=\"$name\">$options_html</select>
                </div>";
    }
    public function objet($name, $label){
        return $this -> input('text', $name, $label);
    }
    public function textarea($name, $label){
        return $this -> input('textarea', $name, $label);
    }
    public function submit($label){
        return '<button type="submit" name="submit" id="submit" class="btn btn-secondary btn-md">'.$label.'</button>';
    }
}