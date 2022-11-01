<?php 
    session_start();
    function uploadFile($input_name, $target_dir, $allowtypes, $max_size, $override){
        $upload_status = true;
        $target_file = $target_dir."/". basename($_FILES[$input_name]["name"]);
        $errors = array();

        $types = "";
        if(is_array($allowtypes)){
            foreach($allowtypes as $key => $types){
                $types .= $type.",";
            }
        }
        $types = trim($types,',');

        if(!isset($_FILES[$input_name])){
            $errors[] = "Không có dữ liệu";
            $upload_status = false;
        }

        if($_FILES[$input_name]['error'] != 0){
            $errors[] = "Dữ liệu file bị lỗi";
            $upload_status = false;
        }

        $imangeFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));
        if(!in_array($imangeFileType, $allowtypes)){
            $errors[] = "Chỉ được upload các định dạng". $types;
            $upload_status = false;
        }

        if($_FILES[$input_name]['size'] > $max_size*1024*1024){
            $errors[] = "Không được upload file lớn hơn $max_size (MB)";
            $upload_status = false;
        }

        if(file_exists($target_file) && $override == false){
            $errors[] = "Tên file đã tồn tại trên hệ thống";
            $upload_status = false;
        }

        if($upload_status){
            if(move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)){
                return array(true, $target_file);
            }else{
                $errors[] = "Uploadfile lỗi";
                return array(false, $errors);
            }
        }else{
            return array(false, $errors);
        }
    }

    $upload = uploadFile('images','files',array('jpg','bmp','png','gif'), 5, true);
    $_SESSION['upload_status'] = $upload;
    header('location: upload.php');
?>