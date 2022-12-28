<?php
/**
 * The home model simply exists as proof of concept
 * The model contains the data of an entity which is why
 * it extends the Database so it always has access to the DB connection
 */
class Home extends Database {
	
	public function x_string($string){
		return "x_" . $string;
	}
    
    public function upload() {  
        

        $title = filter_var ( $_POST['title'], FILTER_UNSAFE_RAW);
        $description = filter_var ( $_POST['description'], FILTER_UNSAFE_RAW);
        $image = $_FILES['image'];
        $imagename = $image["name"];
        $type = $image["type"];
        $blob = addslashes(file_get_contents($image["tmp_name"]));
        
        
        
        if($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/bmp" || $type == "image/gif"){
            
            
            
            $sql = "INSERT INTO image (title, description, imagename, image) VALUES (:title, :description, :imagename, :blob);";


            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':imagename', $imagename);
            $stmt->bindParam(':blob', $blob);
            
		    $stmt->execute();

		  return $image; 
            
        } else {
            //return some error
        }

	}
    
    public function get_images () {
		$sql = "SELECT id, title, description, image FROM image ORDER BY id DESC";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}
