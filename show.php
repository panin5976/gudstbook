<!DOCTYPE html>
<html>
<body>  
    <?php
     $name = $_POST["name"];
     $age = $_POST["age"];
     $gender = $_POST["gender"];
     $married = $_POST["married"];
    if($gender == "ชาย"){
        $prefix = "นาย. ";
        if($age >=16){
            $prefix = "นาย. ";
        }
        elseif($age <16){
            $prefix = "ด.ช. ";
        }
    }elseif($gender == "หญิง"){
        if($married == "ใช่"){
            $prefix = "นาง. ";        
        }elseif ($married == "ไม่"){        
            $prefix = "นางสาว ";
        }
        if($age >=16){
            $prefix = "นางสาว. ";
        }
        elseif($age <16){
            $prefix = "ด.ญ. ";
        }
    }
    echo "Name:" .$name."<br>";
    echo "Age:".$age."<br>";
    echo "gender:" .$gender."<br>";
    echo "married:".$married."<br>";
    echo $prefix . $name . " อายุ " . $age . " ปีบริบูรณ์.";
?>
</body>
</html>